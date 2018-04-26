<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiTestController extends Controller
{
    public function apitest($id){

    	$clients = Client::where('clientId', $id)->get();

    	$result[] = ;

    	foreach($clients as $client){

    		if($client->verb == GET){
    			
    			$result[] =	$this->testGet($client->url);

    		}else if($client->verb == POST){

    			$result[] =	$this->testPost($client->url);
    		}


    	}

    
    	return results;

    }


    public function testGet($url){

    	$ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "$url");

        curl_setopt($ch, CURLOPT_RETURNTRANSFER);

        $output = curl_exec($ch);

        curl_close($ch)


    }

    public function testPost($url){



    }
}
