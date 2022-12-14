<?php

// session_start();

class Url
{
    public $url;
    public $user;

  
    public function addToJsonFile ($url, $arr){
        $arr[] = $url;
        file_put_contents(dirname(__DIR__) . '/files/' . $_SESSION['user'] . '.json'  , json_encode($arr));
    }

    public function setURL($url)
    {

        $dt = new DateTime();
        $date = $dt->format('H:i:s');

        if (file_exists(dirname(__DIR__) . '/files/' . $_SESSION['user'] . '.json')) {

            $str = file_get_contents(dirname(__DIR__) . '/files/' . $_SESSION['user'] . '.json', true);
            $arr = json_decode($str, true);

            if (count($arr) >= 10) {
                $lastTen = count($arr) - 10;
                $timeCompare = (strtotime(date("H:i:s", strtotime($date))) - strtotime(date("H:i:s", strtotime($arr[$lastTen]['time'])))) / 60;

                if ($timeCompare <= 1) {
                    return json_encode([
                        'message' => 'Please wait for ' . 60 - ($timeCompare * 60) . 's',
                    ]);
                }
            }
            $this -> addToJsonFile($url, $arr);
            return json_encode([
                'message' => $url['shortCode'],
                'response' => 'success',
            ]);
        }else{
            $arr = [];
            $this -> addToJsonFile($url, $arr);

            return json_encode([
                'message' => $url['shortCode'],
                'response' => 'success',
            ]);
        }

       
    }
}
