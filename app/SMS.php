<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SMS extends Model
{
    public static function sendSMS($message,$mobile)
    {

        $curl = curl_init();

        // CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2?authorization=YOUR_API_KEY&message=".urlencode($message)."&language=english&route=q&numbers=".urlencode($mobile),

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2?authorization=rYx6vCFSeHoIt8zGq5jD9A1TyguLXPE7lhRMdb0OV2WKkcsin3TUSZdJqeI7c94zblf2HOFwoKvsrGxm&message=".urlencode($message)."&language=english&route=q&numbers=".urlencode($mobile),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_SSL_VERIFYHOST => 0,      
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "cache-control: no-cache"
        ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
        echo "cURL Error #:" . $err;
        } else {
        echo $response;
        }
    }
}
