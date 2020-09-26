<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use App\Repositories\ServerRepository;
use App\Repositories\SecretQuestionRepository;
use App\Repositories\SendEmailRepository;
use Illuminate\Support\Facades\Validator;
class ClientController extends Controller
{
    protected $userRepository;
    protected $serverRepository;
    protected $secretQuestionRepository;
    protected $sendEmailRepository;
    public function __construct(UserRepository $userRepository,ServerRepository $serverRepository,SecretQuestionRepository $secretQuestionRepository,SendEmailRepository $sendEmailRepository)
    {
        $this->userRepository = $userRepository;
        $this->serverRepository = $serverRepository;
        $this->secretQuestionRepository = $secretQuestionRepository;
        $this->sendEmailRepository = $sendEmailRepository;
    }
    public function index(){
        if(Auth::check()){
            return redirect()->route('recharge.manager');
        }
        $server =  $this->serverRepository->getAll();
        return view('client.external.login',compact('server'));
    }
    public function registration(){
        $server =  $this->serverRepository->getAll();
        $secret_question = $this->secretQuestionRepository->getAll();
        return view('client.external.registration',compact('server','secret_question'));
    }
    public function forgotpassword(){
        return view('client.external.forgotpassword');
    }
    public function getInfo(){
        return view('client.external.getinfo');
    }
    public function lostPassByInfo(Request $request){
        if($request->all()){
            $user = $this->userRepository->where('id',1)->get();
            dd($user);
            if($user){
                        
            }
        }
        $server =  $this->serverRepository->getAll();
        $secret_question = $this->secretQuestionRepository->getAll();
        return view('client.external.lostpassbyinfo',compact('server','secret_question'));
    }
    public function lostPassByMail(){
        return view('client.external.lostpassbymail');
    }
    public function postLogin(Request $request){
        if (Auth::attempt(['name' => $request->name, 'password' => $request->password,'server_id'=>$request->server_id], $request->remember)) {
            return redirect()->route('recharge.manager');
        }
        return redirect()->route('login')->with('errMsg', "Thông tin tài khoản hoặc mật khẩu không đúng!");
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
    public function postRegistration(Request $request){
         $messages = [
            'name.min' =>'Tên đăng nhập phải lớn hơn 6 kí tự',
            'name.max' =>'Tên đăng nhập phải nhỏ hơn 12 kí tự',
            'password.min' =>'Mật khẩu phải lớn hơn 6 kí tự',
            'password.max' =>'Mật khẩu nhập phải nhỏ hơn 12 kí tự',
            'password2.min' =>'Mật khẩu cấp 2 nhập phải lớn hơn 6 kí tự',
            'password2.max' =>'Mật khẩu cấo 2 phải nhỏ hơn 12 kí tự',
            'password.different' => 'Mật khẩu và mật khẩu cấp 2 phải khác nhau',
            'answer.min' =>'Câu trả lời phải lớn hơn 6 kí tự',
            'answer.max' =>'Câu trả lời phải nhỏ hơn 12 kí tự',
            'name.unique' => 'Tên đăng nhập đã được sử dung',
            'email.unique'    => 'Email đã được sử dụng',
            'cmnd.unique'    => 'Số cmnd đã được sử dụng',
           ];
            $validatedData = Validator::make($request->all(), [
                'name' =>'min:6|max:12|unique:users,name,'.$request->id,
                'email' => 'unique:users,email,'.$request->id,
                'cmnd' =>'unique:users,cmnd,'.$request->id,
                'password' => 'min:6,max:12,required_with:password2|different:password2',
                'password2' => 'min:6,max:12',
                'answer' => 'min:6,max:12',
            ],$messages);
    
          if ($validatedData->fails()) {
             return redirect()
                            ->back()
                            ->withErrors($validatedData)
                            ->withInput();
           }
        $otp = $this->sendEmailRepository->generateNumericOTP(6);
        $input = [
            'name' => $request->name,
            'server_id' => $request->server_id,
            'password' => bcrypt($request->password),
            'password2' => bcrypt($request->password2),
            'email' => $request->email,
            'secret_question_id' => $request->secret_question_id,
            'answer' => $request->answer,
            'phone' => $request->phone,
            'otp' =>$otp,
        ];
        $this->userRepository->create($input); 
        $this->sendEmailRepository->sendEmail($request->name,$otp,$request->email );
        return redirect()->back()->with('check','Đăng kí tài khoản thành công!');  
    }
    
}
