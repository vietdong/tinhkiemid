<?php
namespace App\Repositories;
use App\Repositories\ModelRepository;
use Illuminate\Support\Facades\Mail;
class SendEmailRepository extends ModelRepository
{

    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\User::class;
    }
    function sendEmail($name ,$otp, $email){
        $data = array('name'=> $name, 'otp' => $otp);
        Mail::send('admin.emails.mail', $data, function($message) {
            $message->to($email, 'ssss')
            ->subject('Laravel Test Mail');
            $message->from($email,'Test Mail');
         });
    }
    function generateNumericOTP($n) { 
        $generator = "1357902468";  
        $result = ""; 
      
        for ($i = 1; $i <= $n; $i++) { 
            $result .= substr($generator, (rand()%(strlen($generator))), 1); 
        } 
        return $result; 
    } 

}