<?php

namespace App\Controllers;

class AirMA extends BaseController
{
    public function getIndex()
    {
        if($this->session->get('user')!="")
        {
            return view('AirMA');
        }
        else
        {
            return redirect()->to(base_url("Login"));
        }
    }

    public function postFetchAQI()
    {
        $url = 'http://airdb_aqi:8000/aqi/get';
        $addr=$this->request->GetPost('addr');
        $date=$this->request->GetPost('date');
        $period=$this->request->GetPost('period');
        $url = $url . '?addr=' . urlencode($addr) . '&date=' . urlencode($date) . '&period=' . urlencode($period);
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $output = curl_exec($ch);
        curl_close($ch);
        
        echo $output;
    }
}
