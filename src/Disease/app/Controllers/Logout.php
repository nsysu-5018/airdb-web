<?php

namespace App\Controllers;

class Logout extends BaseController
{
    public function getIndex()
    {
        if($this->session->get('user')!="")
        {
            $this->session->remove('user');
        }
        return redirect()->to(base_url("Login"));
    }
}
