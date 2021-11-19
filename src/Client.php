<?php
namespace Data2Insights;

use Data2Insights\Config;
use Data2Insights\Text;
use Data2Insights\Vision;
use Data2Insights\Batch;


class Client {

    function __construct($accountId,$apikey,$emailId,$base_endpoint=Config::TEXT_URL, $base_endpoint1=Config::VISION_URL, $base_endpoint2=Config::BATCH_URL) {
        $this->accountId = $accountId;
        $this->apikey = $apikey;
        $this->emailId = $emailId;
        $this->accountId = $accountId;
        $this->text = new Text($accountId,$apikey,$emailId,$base_endpoint);
        $this->vision = new Vision($accountId,$apikey,$emailId,$base_endpoint1);
        $this->batch = new Batch($accountId,$apikey,$emailId,$base_endpoint2);
    }

}
?>
