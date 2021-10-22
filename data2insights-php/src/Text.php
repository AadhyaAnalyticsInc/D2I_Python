<?php
namespace Data2Insights;

use Data2Insights\Config;

class Text {
   function __construct($accountId,$apikey,$emailId,$base_endpoint) {
    $this->accountId = $accountId;
    $this->apikey = $apikey;
    $this->emailId = $emailId;
    $this->base_endpoint = $base_endpoint;
       
    }
   
    function sentiment($data) {
     // print_r(Config::TEXT_URL);
       $url = $this->base_endpoint."/"."sentiment"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?userinputdata=".$data;
           //print_r($url);
          


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "postman-token: 0604b782-19df-3b92-d11d-8444fe83afff"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "Error :" . $err;
} else {
  echo $response;
}

        }
    function emotion($data) {
       $url = $this->base_endpoint."/"."emotion"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?userinputdata=".$data;
           //print_r($rq->Data());
           
            $curl = curl_init("$url");
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);
            if ($err) {
            echo "Error :" . $err;
            } else {
            echo $response;
            }

        }
    function topic($data) {
       $url = $this->base_endpoint."/"."topic"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?userinputdata=".$data;
          
            $curl = curl_init("$url");
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($curl);
             $err = curl_error($curl);
            curl_close($curl);
            if ($err) {
            echo "Error :" . $err;
            } else {
            echo $response;
            }


        }
    function spam($data) {
       $url = $this->base_endpoint."/"."spam"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?userinputdata=".$data;
     
            $curl = curl_init("$url");
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($curl);
             $err = curl_error($curl);
            curl_close($curl);
            if ($err) {
            echo "Error :" . $err;
            } else {
            echo $response;
            }

        }
    function gender($data) {
       $url = $this->base_endpoint."/"."gender"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?userinputdata=".$data;
           
            $curl = curl_init("$url");
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($curl);
             $err = curl_error($curl);
            curl_close($curl);
            if ($err) {
            echo "Error :" . $err;
            } else {
            echo $response;
            }

        }
    function age($data) {
       $url = $this->base_endpoint."/"."age"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?userinputdata=".$data;
          
            $curl = curl_init("$url");
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($curl);
             $err = curl_error($curl);
            curl_close($curl);
            if ($err) {
            echo "Error :" . $err;
            } else {
            echo $response;
            }

        }
    function tweetsentiment($data) {
       $url = $this->base_endpoint."/"."tweetsentiment"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?userinputdata=".$data;
        
            $curl = curl_init("$url");
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($curl);
             $err = curl_error($curl);
            curl_close($curl);
            if ($err) {
            echo "Error :" . $err;
            } else {
            echo $response;
            }

        }
    function personalitytraits($data) {
       $url = $this->base_endpoint."/"."personalitytraits"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?userinputdata=".$data;
        
            $curl = curl_init("$url");
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($curl);
             $err = curl_error($curl);
            curl_close($curl);
            if ($err) {
            echo "Error :" . $err;
            } else {
            echo $response;
            }

        }
    function entity($data) {
       $url = $this->base_endpoint."/"."entity"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?userinputdata=".$data;

            $curl = curl_init("$url");
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($curl);
             $err = curl_error($curl);
            curl_close($curl);
            if ($err) {
            echo "Error :" . $err;
            } else {
            echo $response;
            }

        }
    function keyword($data) {
       $url = $this->base_endpoint."/"."keyword"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?userinputdata=".$data;

            $curl = curl_init("$url");
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);
            if ($err) {
            echo "Error :" . $err;
            } else {
            echo $response;
            }

        }
    function tweetentity($data) {
       $url = $this->base_endpoint."/"."tweetentity"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?userinputdata=".$data;
            $curl = curl_init("$url");
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);
            if ($err) {
            echo "Error :" . $err;
            } else {
            echo $response;
            }

        }
    function urlextraction($data) {
       $url = $this->base_endpoint."/"."urlextraction"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?userinputdata=".$data;
           
            $curl = curl_init("$url");
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);
            if ($err) {
            echo "Error :" . $err;
            } else {
            echo $response;
            }

        }
    function readability($data) {
       $url = $this->base_endpoint."/"."readability"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?userinputdata=".$data;
           
            $curl = curl_init("$url");
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);
            if ($err) {
            echo "Error :" . $err;
            } else {
            echo $response;
            }

        }
    function similarity($data,$data1) {
       $url = $this->base_endpoint."/"."similarity"."/".$this->accountId."/".$this->apikey."/".$this->emailId."/".$data."/".$data1;

            $curl = curl_init("$url");
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);
            if ($err) {
            echo "Error :" . $err;
            } else {
            echo $response;
            }

        }
    function bertentity($data) {
       $url = $this->base_endpoint."/"."bertentity"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?userinputdata=".$data;
           
            $curl = curl_init("$url");
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);
            if ($err) {
            echo "Error :" . $err;
            } else {
            echo $response;
            }

        }
    function hemptopic($data) {
       $url = $this->base_endpoint."/"."hemptopic"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?userinputdata=".$data;

            $curl = curl_init("$url");
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);
            if ($err) {
            echo "Error :" . $err;
            } else {
            echo $response;
            }

        }
    function summarization($data) {
       $url = $this->base_endpoint."/"."summarization"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?userinputdata=".$data;

            $curl = curl_init("$url");
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);
            if ($err) {
            echo "Error :" . $err;
            } else {
            echo $response;
            }

        }
    function QA($question,$paragraph) {
       $url = $this->base_endpoint."/"."Q&A"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?question=".$question."&paragraph=".$paragraph;
           //print_r($url);
           
            $curl = curl_init("$url");
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);
            if ($err) {
            echo "Error :" . $err;
            } else {
            echo $response;
            }

        }

    }

   //}


   

?>
