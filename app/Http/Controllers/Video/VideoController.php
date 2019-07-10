<?php

namespace App\Http\Controllers\Video;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\VideoModel;
use OSS\OssClient;
class VideoController extends Controller
{
    //

        protected $acesskeyId='LTAIhXhY4DewJdU2';
        protected $accesskeySecret='uKnnKDd97nzZuQny1NHAnhGdrcC1JO';
        protected $bucket='1809avideo';
        //上传图片
        public function oss1(){

            $client=new OssClient($this->acesskeyId,$this->accesskeySecret,env('ALI_ENDPOINT'));
//            var_dump($client);
            $obj=md5(time().mt_rand(1,99999)).'.jpg';
            $local_file='test01.jpg';
            $rs=$client->uploadFile($this->bucket,$obj,$local_file);

        }

}
