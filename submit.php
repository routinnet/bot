<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
