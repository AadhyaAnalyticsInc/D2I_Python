<?php
namespace Data2Insights;

class Config {
	const DEFAULT_BATCH_SIZE = 200;
	const TEXT_URL = 'https://api-text.test.data2insights.ai/api.data2insights.ai/v1';
	const VISION_URL = 'https://api-vision.test.data2insights.ai/api.data2insights.ai/v1';
	CONST BATCH_URL = 'https://batch.test.data2insights.ai/Batch';
	function Text() {
		return 'https://api-text.test.data2insights.ai/api.data2insights.ai/v1';
	}
	function Vision() {
		return 'https://api-vision.test.data2insights.ai/api.data2insights.ai/v1';
	}
	function Batch() {
		return 'https://batch.test.data2insights.ai/Batch';
	}
}
//return array('text_url'=>'https://api-text.test.data2insights.ai/api.data2insights.ai/v1');
/*$text_url='https://api-text.test.data2insights.ai/api.data2insights.ai/v1';
$vision_url='https://api-vision.test.data2insights.ai/api.data2insights.ai/v1';
$batch_url='https://batch.test.data2insights.ai/Batch';*/
 /*const DEFAULT_BATCH_SIZE = 200;
    const MAX_BATCH_SIZE = 500;
    const MIN_BATCH_SIZE = 100;
    const DEFAULT_BASE_ENDPOINT = 'https://api.monkeylearn.com/v3/';*/
   /* $text_url='https://api-text.test.data2insights.ai/api.data2insights.ai/v1';
$vision_url='https://api-vision.test.data2insights.ai/api.data2insights.ai/v1';
$batch_url='https://batch.test.data2insights.ai/Batch';*/
?>
