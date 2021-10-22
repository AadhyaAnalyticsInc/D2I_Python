<?php
namespace Data2Insights;
require 'vendor/autoload.php';
use Data2Insights\Config;
class Vision {
	 function __construct($accountId,$apikey,$emailId,$base_endpoint1) {
    $this->accountId = $accountId;
    $this->apikey = $apikey;
    $this->emailId = $emailId;
    $this->base_endpoint = $base_endpoint1;
       
    }
	function logo($data) {
     
       $url = $this->base_endpoint."/"."logo"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?img=".$data;
      // print_r($url);
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
    function bird($data) {
     // print_r(Config::TEXT_URL);
       $url = $this->base_endpoint."/"."bird"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?img=".$data;
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
    function transport($data) {
     // print_r(Config::TEXT_URL);
       $url = $this->base_endpoint."/"."transport"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?img=".$data;
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
    function plant($data) {
     // print_r(Config::TEXT_URL);
       $url = $this->base_endpoint."/"."plant"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?img=".$data;
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
     // print_r(Config::TEXT_URL);
       $url = $this->base_endpoint."/"."gender"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?img=".$data;
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
     function emotion($data) {
     // print_r(Config::TEXT_URL);
       $url = $this->base_endpoint."/"."emotion"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?img=".$data;
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
     function color($data) {
     // print_r(Config::TEXT_URL);
       $url = $this->base_endpoint."/"."color"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?img=".$data;
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
     // print_r(Config::TEXT_URL);
       $url = $this->base_endpoint."/"."age"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?img=".$data;
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
     function scene($data) {
     // print_r(Config::TEXT_URL);
       $url = $this->base_endpoint."/"."scene"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?img=".$data;
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
function weather($data) {
     // print_r(Config::TEXT_URL);
       $url = $this->base_endpoint."/"."weather"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?img=".$data;
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
      function tlo($data) {
     // print_r(Config::TEXT_URL);
       $url = $this->base_endpoint."/"."tlo"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?img=".$data;
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
      function violence($data) {
     // print_r(Config::TEXT_URL);
       $url = $this->base_endpoint."/"."violence"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?img=".$data;
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
      function generalobject($data) {
     // print_r(Config::TEXT_URL);
       $url = $this->base_endpoint."/"."object"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?img=".$data;
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
     function pet($data) {
     // print_r(Config::TEXT_URL);
       $url = $this->base_endpoint."/"."pet"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?img=".$data;
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

 function style($data) {
     // print_r(Config::TEXT_URL);
       $url = $this->base_endpoint."/"."style"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?img=".$data;
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

 function picturequality($data) {
     // print_r(Config::TEXT_URL);
       $url = $this->base_endpoint."/"."picturequality"."/".$this->accountId."/".$this->apikey."/".$this->emailId."?img=".$data;
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
  function logoupload($data) {
  
 $url = $this->base_endpoint."/"."logo"."/".$this->accountId."/".$this->apikey."/".$this->emailId;

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
 function birdupload($data) {
 	
$url = $this->base_endpoint."/"."bird"."/".$this->accountId."/".$this->apikey."/".$this->emailId;
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
 function transportupload($data) {
   
$url = $this->base_endpoint."/"."transport"."/".$this->accountId."/".$this->apikey."/".$this->emailId;
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
    function plantupload($data) {
   
 $url = $this->base_endpoint."/"."plant"."/".$this->accountId."/".$this->apikey."/".$this->emailId;
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
    function sceneupload($data) {
   
$url = $this->base_endpoint."/"."scene"."/".$this->accountId."/".$this->apikey."/".$this->emailId;
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
    function tloupload($data) {
     // print_r(Config::TEXT_URL);
       $url = $this->base_endpoint."/"."tlo"."/".$this->accountId."/".$this->apikey."/".$this->emailId;
   
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
    function violenceupload($data) {
     // print_r(Config::TEXT_URL);
       $url = $this->base_endpoint."/"."violence"."/".$this->accountId."/".$this->apikey."/".$this->emailId;
    
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
  
    function weatherupload($data) {
     // print_r(Config::TEXT_URL);
       $url = $this->base_endpoint."/"."weather"."/".$this->accountId."/".$this->apikey."/".$this->emailId;
    
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
    function genderupload($data) {
    	$url = $this->base_endpoint."/"."gender"."/".$this->accountId."/".$this->apikey."/".$this->emailId;
   
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
    function emotionupload($data) {
     // print_r(Config::TEXT_URL);
       $url = $this->base_endpoint."/"."emotion"."/".$this->accountId."/".$this->apikey."/".$this->emailId;

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



function ageupload($data) {
     // print_r(Config::TEXT_URL);
       $url = $this->base_endpoint."/"."age"."/".$this->accountId."/".$this->apikey."/".$this->emailId;
 
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

function colorupload($data) {
     // print_r(Config::TEXT_URL);
       $url = $this->base_endpoint."/"."color"."/".$this->accountId."/".$this->apikey."/".$this->emailId;
  
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
    function generalobjectupload($data) {
     // print_r(Config::TEXT_URL);
       $url = $this->base_endpoint."/"."object"."/".$this->accountId."/".$this->apikey."/".$this->emailId;

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
    function petupload($data) {
     // print_r(Config::TEXT_URL);
       $url = $this->base_endpoint."/"."pet"."/".$this->accountId."/".$this->apikey."/".$this->emailId;
   
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
    function styleupload($data) {
     // print_r(Config::TEXT_URL);
       $url = $this->base_endpoint."/"."style"."/".$this->accountId."/".$this->apikey."/".$this->emailId;

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

function picturequalityupload($data) {
     // print_r(Config::TEXT_URL);
       $url = $this->base_endpoint."/"."picturequality"."/".$this->accountId."/".$this->apikey."/".$this->emailId;
    
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