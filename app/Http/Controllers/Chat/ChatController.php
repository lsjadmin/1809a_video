<?php

namespace App\Http\Controllers\Chat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\VideoModel;
use OSS\OssClient;
use Illuminate\Support\Str;
use OSS\Core\OssException;
class ChatController extends Controller
{
    //
    protected $acesskeyId='LTAIhXhY4DewJdU2';
    protected $accesskeySecret='uKnnKDd97nzZuQny1NHAnhGdrcC1JO';
    protected $bucket='1809avideo';

    //上传图片
    public function upload(){
        $client=new OssClient($this->acesskeyId,$this->accesskeySecret,env('ALI_ENDPOINT'));
        $path=public_path('/storage/files'); //获得文件位置
       // echo $path;
        $file_list=scandir($path);
        //echo "<pre>";print_r($file_list);echo'</pre>';die;
        foreach($file_list as $k=>$v){
                if($v=='.' || $v=='..' ){
                     continue;
                }
                $file_name='file/'.$v;
                $local_file=$path.'/'.$v;

            try{
                $rs=$client->uploadFile($this->bucket,$file_name,$local_file);
            } catch(OssException $e) {
                printf(__FUNCTION__ . ": FAILED\n");
                printf($e->getMessage() . "\n");
                return;
            }
            unlink($local_file);
        }

    }

}
