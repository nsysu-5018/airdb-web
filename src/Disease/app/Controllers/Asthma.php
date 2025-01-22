<?php

namespace App\Controllers;

class Asthma extends BaseController
{
    public function getIndex()
    {
        if($this->session->get('user')!="")
        {
            return view('Asthma');
        }
        else
        {
            return redirect()->to(base_url("Login"));
        }
    }

    public function postGetResult()
    {
        $url = 'http://airdb_model_Asthma:8000/predict';
        $ml_data=$this->request->GetPost('ml_data');
        
        $headerArray=array("Content-type:application/json;","Accept:application/json");
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $ml_data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch,CURLOPT_HTTPHEADER,$headerArray);
        $result = curl_exec($ch);
        if (!$result)
        {
            die("failure connect");
        }
        curl_close($ch);
        echo $result;
    }
}
