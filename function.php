<?php 
function getTiktokUser($username,$type = true){
    function setFormat($stripTags){  
        preg_match_all('/'.preg_quote('{"user":','/').'(.*?)'. preg_quote(',"stats":', '/').'/i', $stripTags, $result);  
        return $result[1];
    }
    $useragent = "Googlebot/2.1";
    $url = 'https://www.tiktok.com/@'.$username;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($ch);
    $stripTags = strip_tags($result);
    $data = setFormat($stripTags)[0];
    curl_close($ch);
    return json_decode($data,$type);
}
/*Example Usage*/
$user = getTiktokUser("tiktok");
print_r($user);
?>
