<?php

namespace App\Controllers;

class Index extends BaseController
{
    public function getIndex()
    {
        if($this->session->get('user')!="")
        {
            //return view('Index');
            return redirect()->to(base_url("TB"));
        }
        else
        {
            return redirect()->to(base_url("Login"));
        }
    }
/*
    function do_upload()
    {
        
        $camera = $this->input->post('Camera');
        $count = count($_FILES['ActivityFile']['name']);
        for($i=0;$i<$count;$i++){
            if(isset($_FILES['ActivityFile']['name'])){
                $_FILES['file']['name']     = $_FILES['ActivityFile']['name'][$i]; 
                $_FILES['file']['type']     = $_FILES['ActivityFile']['type'][$i]; 
                $_FILES['file']['tmp_name'] = $_FILES['ActivityFile']['tmp_name'][$i]; 
                $_FILES['file']['error']     = $_FILES['ActivityFile']['error'][$i]; 
                $_FILES['file']['size']     = $_FILES['ActivityFile']['size'][$i]; 

            // 把需要的配置放入config陣列
            $config['upload_path'] = '/var/www/html/CCTV/VideoToImage/Video/'.strval($camera).'/';
            $config['allowed_types'] = '*';
            $config['max_size'] = '100000000000000000000000000000000';
            $this -> load -> library('upload', $config); //呼叫CI的upload類
            if($this -> upload -> do_upload('file')){
                $im_name = $this->upload->data();
                echo json_encode($im_name);
            }else{
                echo json_encode($this->upload->display_errors());
            }
            // $this -> upload -> do_upload('ActivityFile'); //使用do_upload('上傳框的name')方法進行上傳
            
            }
        }
    }

    function do_upload2()
    {
        
        $camera = $this->input->post('Camera1');
        $count = count($_FILES['ActivityFile']['name']);
        for($i=0;$i<$count;$i++){
            if(isset($_FILES['ActivityFile']['name'])){
                $_FILES['file']['name']     = $_FILES['ActivityFile']['name'][$i]; 
                $_FILES['file']['type']     = $_FILES['ActivityFile']['type'][$i]; 
                $_FILES['file']['tmp_name'] = $_FILES['ActivityFile']['tmp_name'][$i]; 
                $_FILES['file']['error']     = $_FILES['ActivityFile']['error'][$i]; 
                $_FILES['file']['size']     = $_FILES['ActivityFile']['size'][$i]; 

            // 把需要的配置放入config陣列
            $config['upload_path'] = '/var/www/html/CCTV/VideoToImage/Video/'.strval($camera).'/';
            $config['allowed_types'] = 'mp4|avi|mov|wmv|flv|3gp|dar';
            $config['max_size'] = '100000000000000000000000000000000';
            $this -> load -> library('upload', $config); //呼叫CI的upload類
            if($this -> upload -> do_upload('file')){
                $im_name = $this->upload->data();
                echo json_encode($im_name);
            }else{
                echo json_encode($this->upload->display_errors());
            }
            // $this -> upload -> do_upload('ActivityFile'); //使用do_upload('上傳框的name')方法進行上傳
            
            }
        }
    }

    function VideoURL(){
        $URLText_Value = $this->input->post('URLText');
        $camera = $this->input->post('Camera2');
        $command = '/usr/bin/python3 ./VideoToImage/URL.py'." ".$URLText_Value." ".$camera;
        exec($command,$result_array);
        echo json_encode($result_array);
    }


    function VideoToImage(){
        $Camera_value = $this->input->post('Camera_value');
        $Update_fileName = $this->input->post('Update_fileName');
        $command = '/usr/bin/python3 ./VideoToImage/VideoToImage.py'." ".$Camera_value." ".$Update_fileName;
        exec($command,$result_array);
        echo json_encode($result_array);
    }
    
    function Detection(){
        $Camera_value = $this->input->post('Camera_value');
        $Update_fileName = $this->input->post('Update_fileName');
        $SEC = 1;
        // $command = 'sudo /usr/bin/python ./Yolov4_Deer/YoxloV4_Deer.py';
        $command = '/usr/bin/python3 ./VideoToImage/detection_1.py'." ".$Camera_value." ".$Update_fileName." ".$SEC;
        exec($command,$result_array);
        // print_r($command);
        // print_r($result_array);
        // $command = escapeshellcmd('sudo /usr/bin/python ./VideoToImage/detection_custom.py');
        // $output = shell_exec($command);
        
        echo json_encode($result_array);
    }

    function Video_List(){
        // $command = 'sudo /usr/bin/python ./Yolov4_Deer/YoxloV4_Deer.py';
        $command = '/usr/bin/python3 ./VideoToImage/getDir.py';
        exec($command,$result_array);
        // print_r($command);
        // print_r($result_array);
        // $command = escapeshellcmd('sudo /usr/bin/python ./VideoToImage/detection_custom.py');
        // $output = shell_exec($command);
        
        echo json_encode($result_array);
    }

    function Video_Delete(){
        $account = $this->input->post('Filename');

        // $command = 'sudo /usr/bin/python ./Yolov4_Deer/YoxloV4_Deer.py';
        $command = '/usr/bin/python3 ./VideoToImage/Delete.py'." ".$account;
        exec($command,$result_array);
        // print_r($command);
        // print_r($result_array);
        // $command = escapeshellcmd('sudo /usr/bin/python ./VideoToImage/detection_custom.py');
        // $output = shell_exec($command);
        
        echo json_encode($result_array);
    }

    function Complete(){
        // $command = 'sudo /usr/bin/python ./Yolov4_Deer/YoxloV4_Deer.py';

        
        $command = '/usr/bin/python3 ./VideoToImage/Complete.py';
        exec($command,$result_array);
        // print_r($command);
        // print_r($result_array);
        // $command = escapeshellcmd('sudo /usr/bin/python ./VideoToImage/detection_custom.py');
        // $output = shell_exec($command);
        
        echo json_encode($result_array);
    }

    function SetSelect(){
        // $command = 'sudo /usr/bin/python ./Yolov4_Deer/YoxloV4_Deer.py';
        
        $command = '/usr/bin/python3 ./VideoToImage/getSelect.py';
        exec($command,$result_array);
        echo json_encode($result_array);
    }
*/
}
