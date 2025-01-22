<?php

namespace App\Controllers;

class AirBox extends BaseController
{
    public function getIndex()
    {
        if($this->session->get('user')!="")
        {
            return view('AirBox');
        }
        else
        {
            return redirect()->to(base_url("Login"));
        }
    }

    public function postGetResult()
    {
        $url = 'http://airdb_model_airBox:8000/run';
        $address=$this->request->GetPost('address');
        
        $headerArray=array("Content-type:application/json;","Accept:application/json");
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(array("address" => $address)));
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

    public function getGetFigOne()
    {
        $url = 'http://airdb_model_airBox:8000/fig_one';
        
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        if (!$result)
        {
            die("failure connect");
        }
        curl_close($ch);
        echo $result;
    }

    public function getGetFigTwo()
    {
        $url = 'http://airdb_model_airBox:8000/fig_two';
        
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        if (!$result)
        {
            die("failure connect");
        }
        curl_close($ch);
        echo $result;
    }
}
