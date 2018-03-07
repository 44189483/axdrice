<?php
/**
* 方法
* @authors Sunguoliang
* @date    2016-11-09 09:10:00
 * @version 1.0
*/

/*
* 创建文件夹
* 方法:create_folders
* 参数:
* 	$dir - 字符串 必填	
* 返回值:
*	布尔值
*/
function create_folders($dir){
	return is_dir($dir) or (create_folders(dirname($dir)) and mkdir($dir, 0777));
}

/*
* 检查数组是否为空
* 方法:checkArray
* 参数:
* 	$array - 数组 必填	
* 返回值:
*	布尔值
*/
function checkArray($array){

	foreach ($array as $value){
		if(is_array($value)){
			if(count($value)){
				if(!checkArray($value)){
					return false;
				}
			}
		}else{
			$value=trim($value);
			if(!empty($value)){
				return false;
			}
		}
		$i++;
	}
	return true;

}

/*
* smart模版专用 清除HTML标签及其中的图片
* 方法 clearHtml
* 参数:无
* 返回值:
*	无 - 字符串
* 用法:
* $smarty->registerPlugin('function','自定义名称','clearHtml');
*/
function clearHtml($params){

	extract($params);//smart模版专用

	$str = preg_replace('/[&nbsp;]/', '', $str);

	$str = preg_replace('/<img[^>]+>/i','',$str);

	return $str;

} 

/*
* 获取客户端IP
* 方法 getIP
* 参数:无
* 返回值:
*	字符串(IP)
*/
function getIP(){ 
	if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown")) 
	$ip = getenv("HTTP_CLIENT_IP"); 
	else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown")) 
	$ip = getenv("HTTP_X_FORWARDED_FOR"); 
	else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown")) 
	$ip = getenv("REMOTE_ADDR"); 
	else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown")) 
	$ip = $_SERVER['REMOTE_ADDR']; 
	else 
	$ip = "unknown"; 
	return($ip); 
}

/*
* 邮件发送(需要配合邮件发送类 class.phpmailer.php)
* 方法 sendEmail
* 参数:
* 	$spend_from      - 发件邮箱
* 	$spend_name      - 发件人
* 	$receive_email   - 收件邮箱
* 	$receive_name    - 收件人
* 	$receive_subject - 标题
* 	$receive_content - 详情
* 返回值:
*	布尔值(成功/失败)
*/
function sendEmail($spend_from,$spend_name,$receive_email,$receive_name,$spend_subject,$spend_content){

	$mail             = new PHPMailer();

	$mail->IsHTML(true);

	$mail->CharSet    = "utf-8";

	$mail->From       = $spend_from;

	$mail->FromName   = $spend_name;

	$mail->Subject    = $spend_subject;

	$mail->MsgHTML($spend_content);

	$mail->AddAddress($receive_email, $receive_name);

	return $mail->Send();

}

function msubstr($str, $start=0, $length, $charset="utf-8", $suffix=true){
    if(function_exists("mb_substr"))
        $slice = mb_substr($str, $start, $length, $charset);
    elseif(function_exists('iconv_substr')) {
        $slice = iconv_substr($str,$start,$length,$charset);
        if(false === $slice) {
            $slice = '';
        }
    }else{
        $re['utf-8']   = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|[\xe0-\xef][\x80-\xbf]{2}|[\xf0-\xff][\x80-\xbf]{3}/";
        $re['gb2312'] = "/[\x01-\x7f]|[\xb0-\xf7][\xa0-\xfe]/";
        $re['gbk']    = "/[\x01-\x7f]|[\x81-\xfe][\x40-\xfe]/";
        $re['big5']   = "/[\x01-\x7f]|[\x81-\xfe]([\x40-\x7e]|\xa1-\xfe])/";
        preg_match_all($re[$charset], $str, $match);
        $slice = join("",array_slice($match[0], $start, $length));
    }
    $fix='';
    if(strlen($slice) < strlen($str)){
        $fix='...';
    }
    return $suffix ? $slice.$fix : $slice;
}
?>