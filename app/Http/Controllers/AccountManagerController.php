<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use App\Repositories\SecretQuestionRepository;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Repositories\ConfigRepository;
class AccountManagerController extends Controller
{
    protected $userRepository;
    protected $secretQuestionRepository;
    protected $pathForder;
    protected $configRepository;
    public function __construct(UserRepository $userRepository,SecretQuestionRepository $secretQuestionRepository,ConfigRepository $configRepository)
    {
        $this->userRepository = $userRepository;
        $this->secretQuestionRepository = $secretQuestionRepository;
        $this->configRepository = $configRepository;
        $this->pathForder = 'client.inside.AccountManager';
    }
    public function checkOtp($otp){
        if(isset($opt)){
            $check_otp = $this->userRepository->getModel()::where('opt',$request->otp)->get();
            if($check_otp){
                return true;
            }
        }
        return false;
    }
    public function index(){
        
         if($this->configRepository->getConfig()['account']['value'] == 0){
            return view('client.inside.maintenance');
         }
         return view($this->pathForder.'.accountmanager');
    }
    public function changeTotalInfo(Request $request){
        
        if($request->all()){
            if(!$this->checkOtp($request->otp)){
                return redirect()->route('change.total.info')->with('check',"Mã OTP không đúng!");
            }
            $list_value = [];
            if($request->email){
                array_push($list_value,'email');
            }
            if($request->password){
                array_push($list_value,'password');
            }
            if($request->phone){
                array_push($list_value,'phone');
            }
            if($request->cnnd){
                array_push($list_value,'cnnd');
            }
            $input = $request->only($list_value);
            $messages = [
                'password.min' =>'Mật khẩu phải lớn hơn 6 kí tự',
                'password.max' =>'Mật khẩu nhập phải nhỏ hơn 12 kí tự',
                'password.same' => 'Mật khẩu và mật khẩu nhập lại phải giống nhau',
                'email.unique'    => 'Email đã được sử dụng',
                'cmnd.unique'    => 'Số CMND đã được sử dụng',
            ];
                $validatedData = Validator::make($input, [
                    'email' => 'unique:users,email,'.$request->id,
                    'cmnd' =>'unique:users,cmnd,'.$request->id,
                    'password' => 'min:6,max:12,required_with:password_confirm|same:password_confirm',
                    'password_confirm' => 'min:6,max:12',
                ],$messages);
        
              if ($validatedData->fails()) {
                 return redirect()
                                ->back()
                                ->withErrors($validatedData)
                                ->withInput();
               }

            $this->userRepository->update($request->id, $input);
        }
        
        return view($this->pathForder.'.changetotalinfo');
   }
   public function changePass(Request $request){
    if($request->all()){
        if(!$this->checkOtp($request->otp)){
            return redirect()->route('change.pass')->with('check',"Mã OTP không đúng!");
        }
        if (Hash::check($request->password2, Auth::user()->password2)) {
           
        
        $messages = [
            'password.min' =>'Mật khẩu phải lớn hơn 6 kí tự',
            'password.max' =>'Mật khẩu nhập phải nhỏ hơn 12 kí tự',
            'password_confirmation.min' =>'Mật khẩu phải lớn hơn 6 kí tự',
            'password_confirmation.max' =>'Mật khẩu nhập phải nhỏ hơn 12 kí tự',
            'password.confirmed' => 'Mật khẩu và mật khẩu nhập lại phải giống nhau',
        ];
            $validatedData = Validator::make($request->all(), [
                'password' => 'min:6,max:12,confirmed',
                'password_confirmation' => 'min:6,max:12,confirmed',
            ],$messages);
    
          if ($validatedData->fails()) {
             return redirect()
                            ->back()
                            ->withErrors($validatedData)
                            ->withInput();
           }
           $input = [
               'password' =>bcrypt($request->password),
           ];
           $this->userRepository->update(Auth::user()->id,$input );
           return redirect()->route('change.pass')->with('check',"Thay đổi thành công!");
        }else{
            return redirect()->route('change.pass')->withInput($request->all())->with('check', "Mật khẩu cấp 2 không đúng!");;
        }
    }
        
        return view($this->pathForder.'.changepass');
   }
   public function changePass2(Request $request){
      if($request->all()){
        if(!$this->checkOtp($request->otp)){
            return redirect()->route('change.pass2')->with('check',"Mã OTP không đúng!");
        }
        $user = $this->userRepository->getModel()::where('secret_question_id',$request->question)->where('answer',$request->answer)->get();
        if($user){

            $input = [
                'password2' =>bcrypt($request->password2),
            ];
            $this->userRepository->update(Auth::user()->id,$input );
            return redirect()->route('change.pass2')->with('check',"Thay đổi thành công!");
        }else{
            return redirect()->route('change.pass2')->with('check',"Câu hỏi bí mật chưa đúng!");  
        }
       }
        $question = $this->secretQuestionRepository->getAll();
        return view($this->pathForder.'.changepass2',compact('question'));
   }
   public function changePhone(Request $request){
        if($request->all()){
            if(!$this->checkOtp($request->otp)){
                return redirect()->route('change.phone')->with('check',"Mã OTP không đúng!");
            }
            $input = [
                'phone' =>$request->phone,
            ];
            $this->userRepository->update(Auth::user()->id,$input );
            return redirect()->route('change.phone')->with('check',"Thay đổi thành công!");
        }
        return view($this->pathForder.'.changephonenumber');
   }
   public function lostPhone(){
    return view($this->pathForder.'.lostphone');
   }
   public function registerGoogleAuth(){
    return view($this->pathForder.'.RegisterGoogleAuth');
   }
   public function changeEmail(Request $request){
    if($request->all()){
        if(!$this->checkOtp($request->otp)){
            return redirect()->route('change.email')->with('check',"Mã OTP không đúng!");
        }
        $input = [
            'email' =>$request->email,
        ];
        $this->userRepository->update(Auth::user()->id,$input );
        return redirect()->route('change.email')->with('check',"Thay đổi thành công!");
    }
    return view($this->pathForder.'.ChangeEmail');
   }
   public function changeQuestion(Request $request){
    if($request->all()){
        if(!$this->checkOtp($request->otp)){
            return redirect()->route('change.question')->with('check',"Mã OTP không đúng!");
        }
        $input = [
            'secret_question_id' => $request->question,
            'answer' => $request->answer,
        ];
        $this->userRepository->update(Auth::user()->id,$input );
        return redirect()->route('change.email')->with('check',"Thay đổi thành công!");  
    }
    $question = $this->secretQuestionRepository->getAll();
    return view($this->pathForder.'.ChangeQuestion',compact('question'));
   }
   public function changeCMT(Request $request){
    if($request->all()){
        if(!$this->checkOtp($request->otp)){
            return redirect()->route('change.question')->with('check',"Mã OTP không đúng!");
        }
        $user = $this->userRepository->where('secret_question_id',$request->question)->where('answer',$request->answer)->get();
        if($user){
            $input = [
                'cmnd' => $request->cmnd,
            ];
            $this->userRepository->update(Auth::user()->id,$input );
            return redirect()->route('change.email')->with('check',"Thay đổi thành công!");  
        }else{
            return redirect()->route('change.email')->with('check',"Câu hỏi bí mật chưa đúng!");  
        }
        $question = $this->secretQuestionRepository->getAll();

        
    }
    $question = $this->secretQuestionRepository->getAll();
    return view($this->pathForder.'.ChangeCMT',compact('question'));
   }
   public function showInfo(){
    return view($this->pathForder.'.ShowInfo');
   }

}
