<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function getIndex(): string
    {
        return view('Login');
    }

    public function postIndex()
    {
        $view = service('renderer');
        $u_account = $this->request->GetPost('account');
        $u_password = $this->request->GetPost('password');
        if(!is_null($u_account) && !is_null($u_password))
        {
            $row = $this->db->table('user')->where('account', $u_account)->get()->getRow();
            if (isset($row))
            {
                if ($row->password == $u_password)
                {
                    if ($row->state == 'Y')
                    {
                        // account / password / state match
                        $this->session->set('user',$u_account);
                        return redirect()->to(base_url("TB"));
                    }
                    else
                    {
                        // account and password match, but state not match
                        return $view->setVar('result', 'NON_ACTIVATED')->render('Login');
                    }
                }
                else
                {
                    // account match, but password not match
                    return $view->setVar('result', 'INCORRECT_PASSWORD')->render('Login');
                }
            }
             // account not match
             return $view->setVar('result', 'NO_ACCOUNT')->render('Login');
        }
        return view('Login');
    }
}
