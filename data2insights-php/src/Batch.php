<?php
namespace Data2Insights;
require 'vendor/autoload.php';

use Data2Insights\Config;
class Batch {
	 function __construct($accountId,$apikey,$emailId,$base_endpoint2) {
    $this->accountId = $accountId;
    $this->apikey = $apikey;
    $this->emailId = $emailId;
    $this->base_endpoint = $base_endpoint2;
 
    }
	function sentiment($data,$data1) {
     
       $url = $this->base_endpoint."/"."sentiment"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?select=".$data;
    

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "$url",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  //CURLOPT_SAFE_UPLOAD => false,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('file'=> new \CURLFILE($data1)),
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
    function emotion($data,$data1) {
       $url = $this->base_endpoint."/"."emotion"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?select=".$data;
         

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "$url",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  //CURLOPT_SAFE_UPLOAD => false,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('file'=> new \CURLFILE($data1)),
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
    function topic($data,$data1) {
       $url = $this->base_endpoint."/"."topic"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?select=".$data;
           

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "$url",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  //CURLOPT_SAFE_UPLOAD => false,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('file'=> new \CURLFILE($data1)),
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
    function spam($data,$data1) {
       $url = $this->base_endpoint."/"."spam"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?select=".$data;
   

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "$url",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  //CURLOPT_SAFE_UPLOAD => false,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('file'=> new \CURLFILE($data1)),
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
    function gender($data,$data1) {
       $url = $this->base_endpoint."/"."gender"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?select=".$data;
           
      

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "$url",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  //CURLOPT_SAFE_UPLOAD => false,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('file'=> new \CURLFILE($data1)),
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
    function age($data,$data1) {
       $url = $this->base_endpoint."/"."age"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?select=".$data;
           
       

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "$url",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  //CURLOPT_SAFE_UPLOAD => false,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('file'=> new \CURLFILE($data1)),
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
    function tweetsentiment($data,$data1) {
       $url = $this->base_endpoint."/"."tweetsentiment"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?select=".$data;
      
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "$url",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  //CURLOPT_SAFE_UPLOAD => false,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('file'=> new \CURLFILE($data1)),
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
    function personalitytraits($data,$data1) {
       $url = $this->base_endpoint."/"."personalitytraits"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?select=".$data;
       

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "$url",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  //CURLOPT_SAFE_UPLOAD => false,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('file'=> new \CURLFILE($data1)),
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
    function entity($data,$data1) {
       $url = $this->base_endpoint."/"."entity"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?select=".$data;
       

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "$url",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  //CURLOPT_SAFE_UPLOAD => false,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('file'=> new \CURLFILE($data1)),
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
    function keyword($data,$data1) {
       $url = $this->base_endpoint."/"."keyword"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?select=".$data;
         

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "$url",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  //CURLOPT_SAFE_UPLOAD => false,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('file'=> new \CURLFILE($data1)),
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
    function tweetentity($data,$data1) {
       $url = $this->base_endpoint."/"."tweetentity"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?select=".$data;
   

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "$url",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  //CURLOPT_SAFE_UPLOAD => false,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('file'=> new \CURLFILE($data1)),
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

  
    function readability($data,$data1) {
       $url = $this->base_endpoint."/"."readability"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?select=".$data;
           
       

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "$url",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  //CURLOPT_SAFE_UPLOAD => false,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('file'=> new \CURLFILE($data1)),
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
  
    function bertentity($data,$data1) {
       $url = $this->base_endpoint."/"."bertentity"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?select=".$data;
      
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "$url",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  //CURLOPT_SAFE_UPLOAD => false,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('file'=> new \CURLFILE($data1)),
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
    function hemptopic($data,$data1) {
       $url = $this->base_endpoint."/"."hemptopic"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?select=".$data;
     

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "$url",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  //CURLOPT_SAFE_UPLOAD => false,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('file'=> new \CURLFILE($data1)),
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
    
    function QA($question,$paragraph,$data) {
       $url = $this->base_endpoint."/"."Q&A"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?select=".$question."&select1=".$paragraph;
      
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "$url",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  //CURLOPT_SAFE_UPLOAD => false,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('file'=> new \CURLFILE($data)),
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
?>