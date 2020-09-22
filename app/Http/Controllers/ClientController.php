<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use App\Repositories\ServerRepository;
use App\Repositories\SecretQuestionRepository;
class ClientController extends Controller
{
    protected $userRepository;
    protected $serverRepository;
    protected $secretQuestionRepository;
    public function __construct(UserRepository $userRepository,ServerRepository $serverRepository,SecretQuestionRepository $secretQuestionRepository)
    {
        $this->userRepository = $userRepository;
        $this->serverRepository = $serverRepository;
        $this->secretQuestionRepository = $secretQuestionRepository;
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
    public function lostPassByInfo(){
        return view('client.external.lostpassbyinfo');
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
        $input = [
            'name' => $request->name,
            'server_id' => $request->server_id,
            'password' => bcrypt($request->password),
            'password2' => bcrypt($request->password2),
            'email' => $request->email,
            'secret_question_id' => $request->secret_question_id,
            'answer' => $request->answer,
            'phone' => $request->phone,


        ];
        $this->userRepository->create($input);   
    }
}
