<?php 
/*
	This File Create by VahabOnline
    http://vahabonline.ir
    https://my.vahabonline.ir
    info@vahabonline.ir
    0937 465 5385
    011 5433 2064
*/
function smarty_function_vogravatar($params, &$smarty) { 
    if(!isset($params['email']) && !isset($params['default'])) { 
        $smarty->trigger_error("ایمیل وارد شده اشتباه است و ایمیل پیشفرضی هم قرار داده نشده است"); 
        return; 
    } 
      
    $email = (isset($params['email']) ? trim(strtolower($params['email'])) : ''); 
    $rating = (isset($params['rating']) ? $params['rating'] : 'R'); 
    $url = "https://www.gravatar.com/avatar/".md5($email) . "?r=".$rating; 
      
    if(isset($params['default'])) 
        $url .= "&d=".urlencode($params['default']); 
    if(isset($params['size'])) 
        $url .= "&s=".$params['size']; 
          
    if(isset($params['assign'])) { 
        $smarty->assign($params['assign'], $url); 
        return; 
    } 
      
    return $url; 
} 
  
?>
