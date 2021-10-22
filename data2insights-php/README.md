# Data2Insights-php
Official PHP client for the Data2Insights API. Build and consume machine learning models for language processing from your PHP apps.

Autoload
--------

The first step to use `Data2Insights-php` is to download composer:

```bash
$ curl -s http://getcomposer.org/installer | php
```

Then we have to install our dependencies using:
```bash
$ php composer.phar install
```
Now we can use autoloader from Composer by:

```json
{
    "require": {
        "Data2Insights/Data2insights-php": "~0.1"
    }
}
```

Or, if you don't want to use composer, clone the code and include this line of code:

    require 'autoload.php';


Usage examples
--------------

Here are some examples of how to use Text Models:
```php
require 'autoload.php';

// Use the Account Id,API key,Email Id from your account
$ml = new Data2Insights\Client('<YOUR ACCOUNT ID HERE>','<YOUR API KEY HERE>','<YOUR EMAIL ID HERE>');

// Call Sentiment Model
$d2i->text->sentiment('<ENTER TEXT HERE>');
// Call Emotion Model
$d2i->text->emotion('<ENTER TEXT HERE>');
// Call Topic Model
$d2i->text->topic('<ENTER TEXT HERE>');
// Call Spam Model
$d2i->text->spam('<ENTER TEXT HERE>');
// Call Gender Model
$d2i->text->gender('<ENTER TEXT HERE>');
// Call Age Model
$d2i->text->age('<ENTER TEXT HERE>');
// Call TweetSentiment Model
$d2i->text->tweetsentiment('<ENTER TEXT HERE>');
// Call Personalitytraits Model
$d2i->text->personalitytraits('<ENTER TEXT HERE>');
// Call Entity Model
$d2i->text->entity('<ENTER TEXT HERE>');
// Call Keyword Model
$d2i->text->keyword('<ENTER TEXT HERE>');
// Call TweetEntity Model
$d2i->text->tweetentity('<ENTER TEXT HERE>');
// Call URLEtraction Model
$d2i->text->urlextraction('<ENTER ANY URL');
// Call Readability Model
$d2i->text->readability('<ENTER TEXT HERE>');
// Call Similarity Model
$d2i->text->similarity('<ENTER TEXT HERE>','<ENTER TEXT HERE>');
// Call BertEntity Model
$d2i->text->bertentity('<ENTER TEXT HERE>');
// Call HempTopic Model
$d2i->text->hemptopic('<ENTER TEXT HERE>');
// Call Summarization Model
$d2i->text->summarization('<ENTER TEXT HERE>');
// Call QA Model
$d2i->text->QA('<ENTER YOUR QUESTION>','<ENTER YOUR ANSWER>');

```

You can also use the Vision Models:
```php
require 'autoload.php';

// Use the Account Id,API key,Email Id from your account
$ml = new Data2Insights\Client('<YOUR ACCOUNT ID HERE>','<YOUR API KEY HERE>','<YOUR EMAIL ID HERE>');

// Call Logo Model
$d2i->vision->logo('<ENTER IMAGE URL HERE>');
// Call Bird Model
$d2i->vision->bird('<ENTER IMAGE URL HERE>');
// Call Transport Model
$d2i->vision->transport('<ENTER IMAGE URL HERE>');
// Call Plant Model
$d2i->vision->plant('<ENTER IMAGE URL HERE>');
// Call Gender Model
$d2i->vision->gender('<ENTER IMAGE URL HERE>');
// Call Emotion Model
$d2i->vision->emotion('<ENTER IMAGE URL HERE>');
// Call Color Model
$d2i->vision->color('<ENTER IMAGE URL HERE>');
// Call age Model
$d2i->vision->age('<ENTER IMAGE URL HERE>');
// Call Scene Model
$d2i->vision->scene('<ENTER IMAGE URL HERE>');
// Call Weather Model
$d2i->vision->weather('<ENTER IMAGE URL HERE>');
// Call tlo Model
$d2i->vision->tlo('<ENTER IMAGE URL HERE>');
// Call violence Model
$d2i->vision->violence('<ENTER IMAGE URL HERE');
// Call generalobject Model
$d2i->vision->generalobject('<ENTER IMAGE URL HERE>');
// Call pet Model
$d2i->vision->pet('<ENTER IMAGE URL HERE>');
// Call style Model
$d2i->vision->style('<ENTER IMAGE URL HERE>');
// Call picturequality Model
$d2i->vision->picturequality('<ENTER IMAGE URL HERE>');
// Call logoupload Model
$d2i->vision->logoupload('<ENTER FULL PATH IMAGE HERE>');
// Call birdupload Model
$d2i->vision->birdupload('<ENTER FULL PATH IMAGE HERE');
// Call transportupload Model
$d2i->vision->transportupload('<ENTER FULL PATH IMAGE HERE>');
// Call plantupload Model
$d2i->vision->plantupload('<ENTER FULL PATH IMAGE HERE');
// Call sceneupload Model
$d2i->vision->sceneupload('<ENTER FULL PATH IMAGE HERE>');
// Call tloupload Model
$d2i->vision->tloupload('<ENTER FULL PATH IMAGE HERE');
// Call violenceupload Model
$d2i->vision->violenceupload('<ENTER FULL PATH IMAGE HERE>');
// Call weatherupload Model
$d2i->vision->weatherupload('<ENTER FULL PATH IMAGE HERE>');
// Call genderupload Model
$d2i->vision->genderupload('<ENTER FULL PATH IMAGE HERE>');
// Call emotionupload Model
$d2i->vision->emotionupload('<ENTER FULL PATH IMAGE HERE>');
// Call ageupload Model
$d2i->vision->ageupload('<ENTER FULL PATH IMAGE HERE>');
// Call colorupload Model
$d2i->vision->colorupload('<ENTER FULL PATH IMAGE HERE>');
// Call generalobjectupload Model
$d2i->vision->generalobjectupload('<ENTER FULL PATH IMAGE HERE>');
// Call petupload Model
$d2i->vision->petupload('<ENTER FULL PATH IMAGE HERE>');
// Call styleupload Model
$d2i->vision->styleupload('<ENTER FULL PATH IMAGE HERE>');
// Call picturequalityupload Model
$d2i->vision->picturequalityupload('<ENTER FULL PATH IMAGE HERE>');
```

You can also use Text-Batch Models
```php
require 'autoload.php';

// Use the Account Id,API key,Email Id from your account
$ml = new Data2Insights\Client('<YOUR ACCOUNT ID HERE>','<YOUR API KEY HERE>','<YOUR EMAIL ID HERE>');

// Call sentiment Model
$d2i->batch->sentiment('<SELECT COLUMN FROM FILE>','<ENTER FULL PATH OF FILE>');
// Call emotion Model
$d2i->batch->emotion('<SELECT COLUMN FROM FILE>','<ENTER FULL PATH OF FILE>');
// Call topic Model
$d2i->batch->topic('<SELECT COLUMN FROM FILE>','<ENTER FULL PATH OF FILE>');
// Call spam Model
$d2i->batch->spam('<SELECT COLUMN FROM FILE>','<ENTER FULL PATH OF FILE>');
// Call gender Model
$d2i->batch->gender('<SELECT COLUMN FROM FILE>','<ENTER FULL PATH OF FILE>');
// Call age Model
$d2i->batch->age('<SELECT COLUMN FROM FILE>','<ENTER FULL PATH OF FILE>');
// Call tweetsentiment Model
$d2i->batch->tweetsentiment('<SELECT COLUMN FROM FILE>','<ENTER FULL PATH OF FILE>');
// Call personalitytraits Model
$d2i->batch->personalitytraits('<SELECT COLUMN FROM FILE>','<ENTER FULL PATH OF FILE>');
// Call entity Model
$d2i->batch->entity('<SELECT COLUMN FROM FILE>','<ENTER FULL PATH OF FILE>');
// Call keyword Model
$d2i->batch->keyword('<SELECT COLUMN FROM FILE>','<ENTER FULL PATH OF FILE>');
// Call tweetentity Model
$d2i->batch->tweetentity('<SELECT COLUMN FROM FILE>','<ENTER FULL PATH OF FILE>');
// Call readability Model
$d2i->batch->readability('<SELECT COLUMN FROM FILE>','<ENTER FULL PATH OF FILE>');
// Call bertentity Model
$d2i->batch->bertentity('<SELECT COLUMN FROM FILE>','<ENTER FULL PATH OF FILE>');
// Call hemptopic Model
$d2i->batch->hemptopic('<SELECT COLUMN FROM FILE>','<ENTER FULL PATH OF FILE>');
// Call QA Model
$d2i->batch->QA('<SELECT COLUMN FROM FILE>','<SELECT COLUMN FROM FILE>','<ENTER FULL PATH OF FILE>');
```