<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Client;

class ApiTestController extends Controller
{




    public function apitest($project_id){

        //return $id;

    	$clients = Client::where('project_id', $project_id)->get();

    	 //$result[] = ;

    	 foreach($clients as $client){

    	 	if($client->verb == "GET"){
    			$result[] =	json_decode(self::testGet($client->url,$project_id));
    		} else if($client->verb == "POST"){
    	 		$result[] =	json_decode(self::testPost($client->url,$client->input,$project_id));
    	 	}

            //$array[] = array('verb'=>$client->verb);

    	}

        //return $array;
    
    	return $result;

    }


    public static function testGet($url,$project_id){

    	$header = array('Accept-Language: en');
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
        //$httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $output = curl_exec($curl);

        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);


        if ($err) {

        //start logging url,project_id,error

        //end logging

          return "cURL Error #:" . $err;
        } else {
        //start logging url,project_id,response

        //end logging
          return $response;
        }
        //end logging

        return $output;


    }

    public static function testPost($url,$postdata,$project_id){
      //$post = ['batch_id'=> "2"];

    //return json_encode($postdata);

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_PORT => "8080",
          CURLOPT_URL => $url,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => json_encode($postdata),
          CURLOPT_HTTPHEADER => array(
            "Cache-Control: no-cache",
            "Postman-Token: 6cc49925-de7d-4b35-b9eb-7bb4667c36de"
          ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {

        //start logging url,project_id,input,error

        //end logging

          return "cURL Error #:" . $err;
        } else {
        //start logging url,project_id,input,response

        //end logging
          return $response;
        }

             }
}
