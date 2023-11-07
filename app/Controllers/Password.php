<?php

namespace App\Controllers;

class Password extends BaseController
{
    public function forgot()
    {
        return view('Password/forgot');
    }
    
    public function processForgot()
    {
        $model = new \App\Models\UserModel;
        
        $user = $model->findByEmail($this->request->getPost('email'));
        
        if ($user && $user->is_activo) {
            
            $user->startPasswordReset();
            
            $model->save($user);
            
            $this->sendResetEmail($user);
            
            return redirect()->to("/password/resetsent");
            
        } else {
            
            return redirect()->back()
                             ->with('warning', 'No se ha registrado ningun usuario con el correo ingresado')
                             ->withInput();
        }
    }
    
    public function resetSent()
	{
		return view('Password/reset_sent');
    }
    
    public function reset($token)
    {
        $model = new \App\Models\UserModel;
        
        $user = $model->getUserForPasswordReset($token);
        
        if ($user) {
            
            return view('Password/reset', [
                'token' => $token
            ]);
            
        } else {
            
            return redirect()->to('/password/forgot')
                             ->with('warning', 'Enlace invalido o a caducado. vuelve a intentarlo!!');
                             
        }
    }
    
    private function sendResetEmail($user)
    {
        $email = service('email');

        $email->setTo($user->email);

        $email->setSubject('Password reset');

        $message = view('Password/reset_email', [
            'token' => $user->reset_token
        ]);

        $email->setMessage($message);

        $email->send();
    }
}