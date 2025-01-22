<?php

namespace App\Controllers;

class Register extends BaseController
{
    public function getIndex(): string
    {
        return view('Register');
    }

    public function postIndex(): string
    {
        $view = service('renderer');
        $u_department = $this->request->GetPost('department');
        $u_account = $this->request->GetPost('account');
        $u_password = $this->request->GetPost('password');
        $u_password_again = $this->request->GetPost('password_again');
        if(!is_null($u_department) && !is_null($u_account) && !is_null($u_password) && !is_null($u_password_again))
        {
            if ($u_password != $u_password_again)
            {
                // password and password_again no match
                return $view->setVar('result', 'PASSWORD_NOMATCH')->render('Register');
            }
            $row = $this->db->table('user')->where('account', $u_account)->get()->getRow();
            if (isset($row))
            {
                // Account has been registered
                return $view->setVar('result', 'ACCOUNT_EXISTED')->render('Register');
            }
            $new_user = [
                'account' => $u_account,
                'password' => $u_password,
                'department' => $u_department,
                'state' => 'N',
            ];
            $this->db->table('user')->insert($new_user);
            // Account added
            return $view->setVar('result', 'SUCCESS')->render('Register');
        }
        return view('Register');
    }
}
