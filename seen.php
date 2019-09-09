<?php
/*
کانال سورس خونه ! پر از سورس هاي ربات هاي تلگرامي !
لطفا در کانال ما عضو شويد 
@source_home
https://t.me/source_home
*/
ob_start();
error_reporting(0);
header('Content-Type: application/json');

if(!isset($_GET['channel'])){
    print(json_encode('"channel" not set ! Channel : @Source_Home'));
    exit();
}
if(!isset($_GET['message_id'])){
    print(json_encode('"message_id" not set ! Channel : @Source_Home'));
    exit();
}
$url = file_get_contents("https://t.me/{$_GET['channel']}/{$_GET['message_id']}?embed=1");
preg_match_all('#<span class="tgme_widget_message_views">(.+)</span><span class="copyonly"> views</span>#',$url,$match);
print(json_encode(["ok"=>true,"result"=>["view_count"=>$match[1][0]." 👁 Channel : @Source_Home"]]));
/*
کانال سورس خونه ! پر از سورس هاي ربات هاي تلگرامي !
لطفا در کانال ما عضو شويد 
@source_home
https://t.me/source_home
*/