<?php
namespace App\External;

class GetPostsExt
{
    public static function request()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://prncloud.com/xml/rss_generico.php?clienteNews=277&paisNews=8",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS => "",
            CURLOPT_HTTPHEADER => array(
                "Postman-Token: 4cbd99e9-0a32-4a83-a857-cd284d68c91a",
                "cache-control: no-cache"
            ),
        ));

        
        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        $xml = new \SimpleXMLElement($response);

        if ($err) {
            throw new Exception(curl_error(), curl_errno());
        } else {
            return $xml;
        }
    }
}