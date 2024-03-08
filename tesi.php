<?php $r0='{"lang":"en","error_reporting":false,"show_hidden":false,"hide_Cols":false,"theme":"light"}'; define('VERSION','2.5.3');define('APP_TITLE','Tiny File Manager');$s1=true;$y2=array('admin'=>'$2y$10$/K.hjNr84lLNDt8fTXjoI.DBp6PpeyoJ.mGwrrLuCZfAwfSAGqhOW','user'=>'$2y$10$Fg6Dz8oH9fPoZ2jJan5tZuv6Z4Kp7avtQ9bDfrdRntXtPeiMAZyGO' );$f3=array('user');$n4=false;$m5=array();$m6=true;$b7='vs';$e8=true;$w9='Etc/UTC';$t10=$_SERVER['DOCUMENT_ROOT'];$e11='';$u12=$_SERVER['HTTP_HOST'];$u13='UTF-8';$j14='m/d/Y g:i A';$z15='full';$n16='';$x17='';$n18='';$g19=array();$w20='google';$r21=true;$k22=5000000000;$f23=2000000;$j24='OFF';$t25=true;$f26=array('127.0.0.1','::1' );$b27=array('0.0.0.0','::' );$t28=__DIR__.'/config.php';if(is_readable($t28)){@include($t28);}$a29=array('css-bootstrap'=>'<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">','css-dropzone'=>'<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.css" rel="stylesheet">','css-font-awesome'=>'<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">','css-highlightjs'=>'<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.6.0/styles/'.$b7.'.min.css">','js-ace'=>'<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.13.1/ace.js"></script>','js-bootstrap'=>'<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>','js-dropzone'=>'<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>','js-jquery'=>'<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>','js-jquery-datatables'=>'<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js" crossorigin="anonymous" defer></script>','js-highlightjs'=>'<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.6.0/highlight.min.js"></script>','pre-jsdelivr'=>'<link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin/><link rel="dns-prefetch" href="https://cdn.jsdelivr.net"/>','pre-cloudflare'=>'<link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin/><link rel="dns-prefetch" href="https://cdnjs.cloudflare.com"/>');define('MAX_UPLOAD_SIZE',$k22);define('UPLOAD_CHUNK_SIZE',$f23);if(!defined('FM_SESSION_ID')){define('FM_SESSION_ID','filemanager');}$g30=new FM_Config();$n31=isset($g30->$w32['lang'])?$g30->$w32['lang']:'en';$l33=isset($g30->$w32['show_hidden'])?$g30->$w32['show_hidden']:true;$h34=isset($g30->$w32['error_reporting'])?$g30->$w32['error_reporting']:true;$y35=isset($g30->$w32['hide_Cols'])?$g30->$w32['hide_Cols']:true;$q36=isset($g30->$w32['theme'])?$g30->$w32['theme']:'light';define('FM_THEME',$q36);$p37=array('en'=>'English');if($h34==true){@ini_set('error_reporting',E_ALL);@ini_set('display_errors',1);}else{@ini_set('error_reporting',E_ALL);@ini_set('display_errors',0);}if(defined('FM_EMBED')){$s1=false;$r21=false;}else{@set_time_limit(600);date_default_timezone_set($w9);ini_set('default_charset','UTF-8');if(version_compare(PHP_VERSION,'5.6.0','<')&&function_exists('mb_internal_encoding')){mb_internal_encoding('UTF-8');}if(function_exists('mb_regex_encoding')){mb_regex_encoding('UTF-8');}session_cache_limiter('nocache');session_name(FM_SESSION_ID);function session_error_handling_function($b38,$w39,$v40,$k41){if($b38==2){session_abort();session_id(session_create_id());@session_start();}}set_error_handler('session_error_handling_function');session_start();restore_error_handler();}if(empty($_SESSION['token'])){if(function_exists('random_bytes')){$_SESSION['token']=bin2hex(random_bytes(32));}else{$_SESSION['token']=bin2hex(openssl_random_pseudo_bytes(32));}}if(empty($y2)){$s1=false;}$y42=isset($_SERVER['HTTPS'])&&($_SERVER['HTTPS']=='on'||$_SERVER['HTTPS']==1)||isset($_SERVER['HTTP_X_FORWARDED_PROTO'])&&$_SERVER['HTTP_X_FORWARDED_PROTO']=='https';if(isset($_SESSION[FM_SESSION_ID]['logged'])&&!empty($m5[$_SESSION[FM_SESSION_ID]['logged']])){$g43=fm_clean_path(dirname($_SERVER['PHP_SELF']));$e11=$e11.$g43.DIRECTORY_SEPARATOR.$m5[$_SESSION[FM_SESSION_ID]['logged']];}$e11=fm_clean_path($e11);defined('FM_ROOT_URL')||define('FM_ROOT_URL',($y42?'https':'http').'://'.$u12.(!empty($e11)?'/'.$e11:''));defined('FM_SELF_URL')||define('FM_SELF_URL',($y42?'https':'http').'://'.$u12.$_SERVER['PHP_SELF']);if(isset($_GET['logout'])){unset($_SESSION[FM_SESSION_ID]['logged']);unset($_SESSION['token']);fm_redirect(FM_SELF_URL);}if($j24!='OFF'){function getClientIP(){if(array_key_exists('HTTP_CF_CONNECTING_IP',$_SERVER)){return $_SERVER["HTTP_CF_CONNECTING_IP"];}else if(array_key_exists('HTTP_X_FORWARDED_FOR',$_SERVER)){return $_SERVER["HTTP_X_FORWARDED_FOR"];}else if(array_key_exists('REMOTE_ADDR',$_SERVER)){return $_SERVER['REMOTE_ADDR'];}else if(array_key_exists('HTTP_CLIENT_IP',$_SERVER)){return $_SERVER['HTTP_CLIENT_IP'];}return '';}$e44=getClientIP();$s45=false;$j46=in_array($e44,$f26);$o47=in_array($e44,$b27);if($j24=='AND'){if($j46==true&&$o47==false){$s45=true;}}else if($j24=='OR'){if($j46==true||$o47==false){$s45=true;}}if($s45==false){trigger_error('User connection denied from: '.$e44,E_USER_WARNING);if($t25==false){fm_set_msg(lng('Access denied. IP restriction applicable'),'error');fm_show_header_login();fm_show_message();}exit();}}if($s1){if(isset($_SESSION[FM_SESSION_ID]['logged'],$y2[$_SESSION[FM_SESSION_ID]['logged']])){}elseif(isset($_POST['fm_usr'],$_POST['fm_pwd'],$_POST['token'])){sleep(1);if(function_exists('password_verify')){if(isset($y2[$_POST['fm_usr']])&&isset($_POST['fm_pwd'])&&password_verify($_POST['fm_pwd'],$y2[$_POST['fm_usr']])&&verifyToken($_POST['token'])){$_SESSION[FM_SESSION_ID]['logged']=$_POST['fm_usr'];fm_set_msg(lng('You are logged in'));fm_redirect(FM_SELF_URL);}else{unset($_SESSION[FM_SESSION_ID]['logged']);fm_set_msg(lng('Login failed. Invalid username or password'),'error');fm_redirect(FM_SELF_URL);}}else{fm_set_msg(lng('password_hash not supported, Upgrade PHP version'),'error');;}}else{unset($_SESSION[FM_SESSION_ID]['logged']);fm_show_header_login();?>
        <section class="h-100">
            <div class="container h-100">
                <div class="row justify-content-md-center h-100">
                    <div class="card-wrapper">
                        <div class="card fat <?php echo fm_get_theme();?>">
                            <div class="card-body">
                                <form class="form-signin" action="" method="post" autocomplete="off">
                                    <div class="mb-3">
                                       <div class="brand">
                                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" M1008 width="100%" height="80px" viewBox="0 0 238.000000 140.000000" aria-label="H3K Tiny File Manager">
                                                <g transform="translate(0.000000,140.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                                                    <path d="M160 700 l0 -600 110 0 110 0 0 260 0 260 70 0 70 0 0 -260 0 -260 110 0 110 0 0 600 0 600 -110 0 -110 0 0 -260 0 -260 -70 0 -70 0 0 260 0 260 -110 0 -110 0 0 -600z"/>
                                                    <path fill="#003500" d="M1008 1227 l-108 -72 0 -117 0 -118 110 0 110 0 0 110 0 110 70 0 70 0 0 -180 0 -180 -125 0 c-69 0 -125 -3 -125 -6 0 -3 23 -39 52 -80 l52 -74 73 0 73 0 0 -185 0 -185 -70 0 -70 0 0 115 0 115 -110 0 -110 0 0 -190 0 -190 181 0 181 0 109 73 108 72 1 181 0 181 -69 48 -68 49 68 50 69 49 0 249 0 248 -182 -1 -183 0 -107 -72z"/>
                                                    <path d="M1640 700 l0 -600 110 0 110 0 0 208 0 208 35 34 35 34 35 -34 35 -34 0 -208 0 -208 110 0 110 0 0 212 0 213 -87 87 -88 88 88 88 87 87 0 213 0 212 -110 0 -110 0 0 -208 0 -208 -70 -69 -70 -69 0 277 0 277 -110 0 -110 0 0 -600z"/></g>
                                            </svg>
                                        </div>
                                        <div class="text-center">
                                            <h1 class="card-title"><?php echo APP_TITLE;?></h1>
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="mb-3">
                                        <label for="fm_usr" class="pb-2"><?php echo lng('Username');?></label>
                                        <input type="text" class="form-control" id="fm_usr" name="fm_usr" required autofocus>
                                    </div>

                                    <div class="mb-3">
                                        <label for="fm_pwd" class="pb-2"><?php echo lng('Password');?></label>
                                        <input type="password" class="form-control" id="fm_pwd" name="fm_pwd" required>
                                    </div>

                                    <div class="mb-3">
                                        <?php fm_show_message();?>
                                    </div>
                                    <input type="hidden" name="token" value="<?php echo htmlentities($_SESSION['token']);?>" />
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-success btn-block w-100 mt-4" role="button">
                                            <?php echo lng('Login');?>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="footer text-center">
                            &mdash;&mdash; &copy;
                            <a href="https://tinyfilemanager.github.io/" target="_blank" class="text-decoration-none text-muted" data-version="<?php echo VERSION;?>">CCP Programmers</a> &mdash;&mdash;
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php fm_show_footer_login();exit;}}if($s1&&isset($_SESSION[FM_SESSION_ID]['logged'])){$t10=isset($m5[$_SESSION[FM_SESSION_ID]['logged']])?$m5[$_SESSION[FM_SESSION_ID]['logged']]:$t10;}$t10=rtrim($t10,'\\/');$t10=str_replace('\\','/',$t10);if(!@is_dir($t10)){echo "<h1>".lng('Root path')." \"{$t10}\" ".lng('not found!')." </h1>";exit;}defined('FM_SHOW_HIDDEN')||define('FM_SHOW_HIDDEN',$l33);defined('FM_ROOT_PATH')||define('FM_ROOT_PATH',$t10);defined('FM_LANG')||define('FM_LANG',$n31);defined('FM_FILE_EXTENSION')||define('FM_FILE_EXTENSION',$n16);defined('FM_UPLOAD_EXTENSION')||define('FM_UPLOAD_EXTENSION',$x17);defined('FM_EXCLUDE_ITEMS')||define('FM_EXCLUDE_ITEMS',(version_compare(PHP_VERSION,'7.0.0','<')?serialize($g19):$g19));defined('FM_DOC_VIEWER')||define('FM_DOC_VIEWER',$w20);define('FM_READONLY',$n4||($s1&&!empty($f3)&&isset($_SESSION[FM_SESSION_ID]['logged'])&&in_array($_SESSION[FM_SESSION_ID]['logged'],$f3)));define('FM_IS_WIN',DIRECTORY_SEPARATOR=='\\');if(!isset($_GET['p'])&&empty($_FILES)){fm_redirect(FM_SELF_URL.'?p=');}$c48=isset($_GET['p'])?$_GET['p']:(isset($_POST['p'])?$_POST['p']:'');$c48=fm_clean_path($c48);$s49=file_get_contents('php://input');$_POST=(strpos($s49,'ajax')!=FALSE&&strpos($s49,'save')!=FALSE)?json_decode($s49,true):$_POST;define('FM_PATH',$c48);define('FM_USE_AUTH',$s1);define('FM_EDIT_FILE',$e8);defined('FM_ICONV_INPUT_ENC')||define('FM_ICONV_INPUT_ENC',$u13);defined('FM_USE_HIGHLIGHTJS')||define('FM_USE_HIGHLIGHTJS',$m6);defined('FM_HIGHLIGHTJS_STYLE')||define('FM_HIGHLIGHTJS_STYLE',$b7);defined('FM_DATETIME_FORMAT')||define('FM_DATETIME_FORMAT',$j14);unset($c48,$s1,$u13,$m6,$b7);if((isset($_SESSION[FM_SESSION_ID]['logged'],$y2[$_SESSION[FM_SESSION_ID]['logged']])||!FM_USE_AUTH)&&isset($_POST['ajax'],$_POST['token'])&&!FM_READONLY){if(!verifyToken($_POST['token'])){header('HTTP/1.0 401 Unauthorized');die("Invalid Token.");}if(isset($_POST['type'])&&$_POST['type']=="search"){$e50=$_POST['path']=="."?'':$_POST['path'];$w51=scan(fm_clean_path($e50),$_POST['content']);echo json_encode($w51);exit();}if(isset($_POST['type'])&&$_POST['type']=="save"){$g52=FM_ROOT_PATH;if(FM_PATH!=''){$g52.='/'.FM_PATH;}if(!is_dir($g52)){fm_redirect(FM_SELF_URL.'?p=');}$v40=$_GET['edit'];$v40=fm_clean_path($v40);$v40=str_replace('/','',$v40);if($v40==''||!is_file($g52.'/'.$v40)){fm_set_msg(lng('File not found'),'error');$p53=FM_PATH;fm_redirect(FM_SELF_URL.'?p='.urlencode($p53));}header('X-XSS-Protection:0');$e54=$g52.'/'.$v40;$p55=$_POST['content'];$p56=fopen($e54,"w");$h57=@fwrite($p56,$p55);fclose($p56);if($h57===false){header("HTTP/1.1 500 Internal Server Error");die("Could Not Write File! - Check Permissions / Ownership");}die(true);}if(isset($_POST['type'])&&$_POST['type']=="backup"&&!empty($_POST['file'])){$s58=fm_clean_path($_POST['file']);$v59=FM_ROOT_PATH.'/';if(!empty($_POST['path'])){$j60=fm_clean_path($_POST['path']);$v59.="{$j60}/";}$h61=date("dMy-His");$l62="{$s58}-{$h61}.bak";$n63=$v59.$s58;try{if(!file_exists($n63)){throw new Exception("File {$s58} not found");}if(copy($n63,$v59.$l62)){echo"Backup {$l62} created";}else{throw new Exception("Could not copy file {$s58}");}}catch(Exception $i64){echo $i64->getMessage();}}if(isset($_POST['type'])&&$_POST['type']=="settings"){global $g30,$n31,$h34,$l33,$p37,$y35,$q36;$n65=$_POST['js-language'];fm_get_translations([]);if(!array_key_exists($n65,$p37)){$n65='en';}$x66=isset($_POST['js-error-report'])&&$_POST['js-error-report']=="true"?true:false;$b67=isset($_POST['js-show-hidden'])&&$_POST['js-show-hidden']=="true"?true:false;$t68=isset($_POST['js-hide-cols'])&&$_POST['js-hide-cols']=="true"?true:false;$n69=$_POST['js-theme-3'];if($g30->$w32['lang']!=$n65){$g30->$w32['lang']=$n65;$n31=$n65;}if($g30->$w32['error_reporting']!=$x66){$g30->$w32['error_reporting']=$x66;$h34=$x66;}if($g30->$w32['show_hidden']!=$b67){$g30->$w32['show_hidden']=$b67;$l33=$b67;}if($g30->$w32['show_hidden']!=$b67){$g30->$w32['show_hidden']=$b67;$l33=$b67;}if($g30->$w32['hide_Cols']!=$t68){$g30->$w32['hide_Cols']=$t68;$y35=$t68;}if($g30->$w32['theme']!=$n69){$g30->$w32['theme']=$n69;$q36=$n69;}$g30->save();echo true;}if(isset($_POST['type'])&&$_POST['type']=="pwdhash"){$z70=isset($_POST['inputPassword2'])&&!empty($_POST['inputPassword2'])?password_hash($_POST['inputPassword2'],PASSWORD_DEFAULT):'';echo $z70;}if(isset($_POST['type'])&&$_POST['type']=="upload"&&!empty($_REQUEST["uploadurl"])){$g52=FM_ROOT_PATH;if(FM_PATH!=''){$g52.='/'.FM_PATH;}function event_callback($d71){global $z72;echo json_encode($d71);}function get_file_path(){global $g52,$y73,$g74;return $g52."/".basename($y73->$r75);}$l76=!empty($_REQUEST["uploadurl"])&&preg_match("|^http(s)?://.+$|",stripslashes($_REQUEST["uploadurl"]))?stripslashes($_REQUEST["uploadurl"]):null;$q77=parse_url($l76,PHP_URL_HOST);$p78=parse_url($l76,PHP_URL_PORT);$w79=[22,23,25,3306];if(preg_match("/^localhost$|^127(?:\.[0-9]+){0,2}\.[0-9]+$|^(?:0*\:)*?:?0*1$/i",$q77)||in_array($p78,$w79)){$v80=array("message"=>"URL is not allowed");event_callback(array("fail"=>$v80));exit();}$y81=false;$g74=tempnam(sys_get_temp_dir(),"upload-");$y73=new stdClass();$y73->$r75=trim(basename($l76),".\x00..\x20");$k82=(FM_UPLOAD_EXTENSION)?explode(',',FM_UPLOAD_EXTENSION):false;$b83=strtolower(pathinfo($y73->$r75,PATHINFO_EXTENSION));$z84=($k82)?in_array($b83,$k82):true;$v80=false;if(!$z84){$v80=array("message"=>"File extension is not allowed");event_callback(array("fail"=>$v80));exit();}if(!$l76){$m85=false;}else if($y81){@$p86=fopen($g74,"w");@$d87=curl_init($l76);curl_setopt($d87,CURLOPT_NOPROGRESS,false);curl_setopt($d87,CURLOPT_FOLLOWLOCATION,true);curl_setopt($d87,CURLOPT_FILE,$p86);@$m85=curl_exec($d87);$q88=curl_getinfo($d87);if(!$m85){$v80=array("message"=>curl_error($d87));}@curl_close($d87);fclose($p86);$y73->$e89=$q88["size_download"];$y73->$b90=$q88["content_type"];}else{$k91=stream_context_create();@$m85=copy($l76,$g74,$k91);if(!$m85){$v80=error_get_last();}}if($m85){$m85=rename($g74,strtok(get_file_path(),'?'));}if($m85){event_callback(array("done"=>$y73));}else{unlink($g74);if(!$v80){$v80=array("message"=>"Invalid url parameter");}event_callback(array("fail"=>$v80));}}exit();}if(isset($_GET['del'],$_POST['token'])&&!FM_READONLY){$x92=str_replace('/','',fm_clean_path($_GET['del']));if($x92!=''&&$x92!='..'&&$x92!='.'&&verifyToken($_POST['token'])){$g52=FM_ROOT_PATH;if(FM_PATH!=''){$g52.='/'.FM_PATH;}$e93=is_dir($g52.'/'.$x92);if(fm_rdelete($g52.'/'.$x92)){$w39=$e93?lng('Folder').' <b>%s</b> '.lng('Deleted'):lng('File').' <b>%s</b> '.lng('Deleted');fm_set_msg(sprintf($w39,fm_enc($x92)));}else{$w39=$e93?lng('Folder').' <b>%s</b> '.lng('not deleted'):lng('File').' <b>%s</b> '.lng('not deleted');fm_set_msg(sprintf($w39,fm_enc($x92)),'error');}}else{fm_set_msg(lng('Invalid file or folder name'),'error');}$p53=FM_PATH;fm_redirect(FM_SELF_URL.'?p='.urlencode($p53));}if(isset($_POST['newfilename'],$_POST['newfile'],$_POST['token'])&&!FM_READONLY){$q94=urldecode($_POST['newfile']);$j95=str_replace('/','',fm_clean_path(strip_tags($_POST['newfilename'])));if(fm_isvalid_filename($j95)&&$j95!=''&&$j95!='..'&&$j95!='.'&&verifyToken($_POST['token'])){$g52=FM_ROOT_PATH;if(FM_PATH!=''){$g52.='/'.FM_PATH;}if($q94=="file"){if(!file_exists($g52.'/'.$j95)){if(fm_is_valid_ext($j95)){@fopen($g52.'/'.$j95,'w')or die('Cannot open file:  '.$j95);fm_set_msg(sprintf(lng('File').' <b>%s</b> '.lng('Created'),fm_enc($j95)));}else{fm_set_msg(lng('File extension is not allowed'),'error');}}else{fm_set_msg(sprintf(lng('File').' <b>%s</b> '.lng('already exists'),fm_enc($j95)),'alert');}}else{if(fm_mkdir($g52.'/'.$j95,false)===true){fm_set_msg(sprintf(lng('Folder').' <b>%s</b> '.lng('Created'),$j95));}elseif(fm_mkdir($g52.'/'.$j95,false)===$g52.'/'.$j95){fm_set_msg(sprintf(lng('Folder').' <b>%s</b> '.lng('already exists'),fm_enc($j95)),'alert');}else{fm_set_msg(sprintf(lng('Folder').' <b>%s</b> '.lng('not created'),fm_enc($j95)),'error');}}}else{fm_set_msg(lng('Invalid characters in file or folder name'),'error');}$p53=FM_PATH;fm_redirect(FM_SELF_URL.'?p='.urlencode($p53));}if(isset($_GET['copy'],$_GET['finish'])&&!FM_READONLY){$l96=urldecode($_GET['copy']);$l96=fm_clean_path($l96);if($l96==''){fm_set_msg(lng('Source path not defined'),'error');$p53=FM_PATH;fm_redirect(FM_SELF_URL.'?p='.urlencode($p53));}$f97=FM_ROOT_PATH.'/'.$l96;$y98=FM_ROOT_PATH;if(FM_PATH!=''){$y98.='/'.FM_PATH;}$y98.='/'.basename($f97);$s99=isset($_GET['move']);$s99=fm_clean_path(urldecode($s99));if($f97!=$y98){$h100=trim(FM_PATH.'/'.basename($f97),'/');if($s99){$c101=fm_rename($f97,$y98);if($c101){fm_set_msg(sprintf(lng('Moved from').' <b>%s</b> '.lng('to').' <b>%s</b>',fm_enc($l96),fm_enc($h100)));}elseif($c101===null){fm_set_msg(lng('File or folder with this path already exists'),'alert');}else{fm_set_msg(sprintf(lng('Error while moving from').' <b>%s</b> '.lng('to').' <b>%s</b>',fm_enc($l96),fm_enc($h100)),'error');}}else{if(fm_rcopy($f97,$y98)){fm_set_msg(sprintf(lng('Copied from').' <b>%s</b> '.lng('to').' <b>%s</b>',fm_enc($l96),fm_enc($h100)));}else{fm_set_msg(sprintf(lng('Error while copying from').' <b>%s</b> '.lng('to').' <b>%s</b>',fm_enc($l96),fm_enc($h100)),'error');}}}else{if(!$s99){$h100=trim(FM_PATH.'/'.basename($f97),'/');$t102=pathinfo($f97);$e103='';if(!is_dir($f97)){$e103='.'.$t102['extension'];}$g104=$t102['dirname'].'/'.$t102['filename'].'-'.date('YmdHis').$e103;$q105=0;$k106=1000;while(file_exists($g104)&$q105<$k106){$t102=pathinfo($g104);$g104=$t102['dirname'].'/'.$t102['filename'].'-copy'.$e103;$q105++;}if(fm_rcopy($f97,$g104,False)){fm_set_msg(sprintf('Copied from <b>%s</b> to <b>%s</b>',fm_enc($l96),fm_enc($g104)));}else{fm_set_msg(sprintf('Error while copying from <b>%s</b> to <b>%s</b>',fm_enc($l96),fm_enc($g104)),'error');}}else{fm_set_msg(lng('Paths must be not equal'),'alert');}}$p53=FM_PATH;fm_redirect(FM_SELF_URL.'?p='.urlencode($p53));}if(isset($_POST['file'],$_POST['copy_to'],$_POST['finish'],$_POST['token'])&&!FM_READONLY){if(!verifyToken($_POST['token'])){fm_set_msg(lng('Invalid Token.'),'error');}$g52=FM_ROOT_PATH;if(FM_PATH!=''){$g52.='/'.FM_PATH;}$m107=FM_ROOT_PATH;$h108=fm_clean_path($_POST['copy_to']);if($h108!=''){$m107.='/'.$h108;}if($g52==$m107){fm_set_msg(lng('Paths must be not equal'),'alert');$p53=FM_PATH;fm_redirect(FM_SELF_URL.'?p='.urlencode($p53));}if(!is_dir($m107)){if(!fm_mkdir($m107,true)){fm_set_msg('Unable to create destination folder','error');$p53=FM_PATH;fm_redirect(FM_SELF_URL.'?p='.urlencode($p53));}}$s99=isset($_POST['move']);$m109=0;$x110=$_POST['file'];if(is_array($x110)&&count($x110)){foreach($x110 as $h111){if($h111!=''){$h111=fm_clean_path($h111);$f97=$g52.'/'.$h111;$y98=$m107.'/'.$h111;if($s99){$c101=fm_rename($f97,$y98);if($c101===false){$m109++;}}else{if(!fm_rcopy($f97,$y98)){$m109++;}}}}if($m109==0){$w39=$s99?'Selected files and folders moved':'Selected files and folders copied';fm_set_msg($w39);}else{$w39=$s99?'Error while moving items':'Error while copying items';fm_set_msg($w39,'error');}}else{fm_set_msg(lng('Nothing selected'),'alert');}$p53=FM_PATH;fm_redirect(FM_SELF_URL.'?p='.urlencode($p53));}if(isset($_POST['rename_from'],$_POST['rename_to'],$_POST['token'])&&!FM_READONLY){if(!verifyToken($_POST['token'])){fm_set_msg("Invalid Token.",'error');}$h112=urldecode($_POST['rename_from']);$h112=fm_clean_path($h112);$h112=str_replace('/','',$h112);$j95=urldecode($_POST['rename_to']);$j95=fm_clean_path(strip_tags($j95));$j95=str_replace('/','',$j95);$g52=FM_ROOT_PATH;if(FM_PATH!=''){$g52.='/'.FM_PATH;}if(fm_isvalid_filename($j95)&&$h112!=''&&$j95!=''){if(fm_rename($g52.'/'.$h112,$g52.'/'.$j95)){fm_set_msg(sprintf(lng('Renamed from').' <b>%s</b> '.lng('to').' <b>%s</b>',fm_enc($h112),fm_enc($j95)));}else{fm_set_msg(sprintf(lng('Error while renaming from').' <b>%s</b> '.lng('to').' <b>%s</b>',fm_enc($h112),fm_enc($j95)),'error');}}else{fm_set_msg(lng('Invalid characters in file name'),'error');}$p53=FM_PATH;fm_redirect(FM_SELF_URL.'?p='.urlencode($p53));}if(isset($_GET['dl'],$_POST['token'])){if(!verifyToken($_POST['token'])){fm_set_msg("Invalid Token.",'error');}$s113=urldecode($_GET['dl']);$s113=fm_clean_path($s113);$s113=str_replace('/','',$s113);$g52=FM_ROOT_PATH;if(FM_PATH!=''){$g52.='/'.FM_PATH;}if($s113!=''&&is_file($g52.'/'.$s113)){fm_download_file($g52.'/'.$s113,$s113,1024);exit;}else{fm_set_msg(lng('File not found'),'error');$p53=FM_PATH;fm_redirect(FM_SELF_URL.'?p='.urlencode($p53));}}if(!empty($_FILES)&&!FM_READONLY){if(isset($_POST['token'])){if(!verifyToken($_POST['token'])){$w51=array('status'=>'error','info'=>"Invalid Token.");echo json_encode($w51);exit();}}else{$w51=array('status'=>'error','info'=>"Token Missing.");echo json_encode($w51);exit();}$q114=$_POST['dzchunkindex'];$s115=$_POST['dztotalchunkcount'];$t116=fm_clean_path($_REQUEST['fullpath']);$h111=$_FILES;$g52=FM_ROOT_PATH;$y117=DIRECTORY_SEPARATOR;if(FM_PATH!=''){$g52.='/'.FM_PATH;}$m109=0;$w118=0;$k82=(FM_UPLOAD_EXTENSION)?explode(',',FM_UPLOAD_EXTENSION):false;$w51=array('status'=>'error','info'=>'Oops! Try again');$r119=$h111['file']['name'];$z120=$h111['file']['tmp_name'];$b83=pathinfo($r119,PATHINFO_FILENAME)!=''?strtolower(pathinfo($r119,PATHINFO_EXTENSION)):'';$z84=($k82)?in_array($b83,$k82):true;if(!fm_isvalid_filename($r119)&&!fm_isvalid_filename($t116)){$w51=array('status'=>'error','info'=>"Invalid File name!",);echo json_encode($w51);exit();}$l121=$g52.$y117;if(is_writable($l121)){$v59=$g52.'/'.basename($t116);$k122=substr($v59,0,strrpos($v59,"/"));if(!is_dir($k122)){$h112=umask(0);mkdir($k122,0777,true);umask($h112);}if(empty($h111['file']['error'])&&!empty($z120)&&$z120!='none'&&$z84){if($s115){$e123=@fopen("{$v59}.part",$q114==0?"wb":"ab");if($e123){$c124=@fopen($z120,"rb");if($c124){if(PHP_VERSION_ID<80009){do{for(;;){$r125=fread($c124,4096);if($r125===false||$r125===''){break;}fwrite($e123,$r125);}}while(!feof($c124));}else{stream_copy_to_stream($c124,$e123);}$w51=array('status'=>'success','info'=>"file upload successful");}else{$w51=array('status'=>'error','info'=>"failed to open output stream",'errorDetails'=>error_get_last());}@fclose($c124);@fclose($e123);@unlink($z120);$w51=array('status'=>'success','info'=>"file upload successful");}else{$w51=array('status'=>'error','info'=>"failed to open output stream");}if($q114==$s115-1){if(file_exists($v59)){$i126=$b83?'.'.$b83:'';$q127=$g52.'/'.basename($t116,$i126).'_'.date('ymdHis').$i126;}else{$q127=$v59;}rename("{$v59}.part",$q127);}}else if(move_uploaded_file($z120,$v59)){if(file_exists($v59)){$w51=array('status'=>'success','info'=>"file upload successful");}else{$w51=array('status'=>'error','info'=>'Couldn\'t upload the requested file.');}}else{$w51=array('status'=>'error','info'=>"Error while uploading files. Uploaded files $w118",);}}}else{$w51=array('status'=>'error','info'=>'The specified folder for upload isn\'t writeable.');}echo json_encode($w51);exit();}if(isset($_POST['group'],$_POST['delete'],$_POST['token'])&&!FM_READONLY){if(!verifyToken($_POST['token'])){fm_set_msg(lng("Invalid Token."),'error');}$g52=FM_ROOT_PATH;if(FM_PATH!=''){$g52.='/'.FM_PATH;}$m109=0;$x110=$_POST['file'];if(is_array($x110)&&count($x110)){foreach($x110 as $h111){if($h111!=''){$m128=$g52.'/'.$h111;if(!fm_rdelete($m128)){$m109++;}}}if($m109==0){fm_set_msg(lng('Selected files and folder deleted'));}else{fm_set_msg(lng('Error while deleting items'),'error');}}else{fm_set_msg(lng('Nothing selected'),'alert');}$p53=FM_PATH;fm_redirect(FM_SELF_URL.'?p='.urlencode($p53));}if(isset($_POST['group'],$_POST['token'])&&(isset($_POST['zip'])||isset($_POST['tar']))&&!FM_READONLY){if(!verifyToken($_POST['token'])){fm_set_msg(lng("Invalid Token."),'error');}$g52=FM_ROOT_PATH;$b83='zip';if(FM_PATH!=''){$g52.='/'.FM_PATH;}$b83=isset($_POST['tar'])?'tar':'zip';if(($b83=="zip"&&!class_exists('ZipArchive'))||($b83=="tar"&&!class_exists('PharData'))){fm_set_msg(lng('Operations with archives are not available'),'error');$p53=FM_PATH;fm_redirect(FM_SELF_URL.'?p='.urlencode($p53));}$x110=$_POST['file'];$x129=array();foreach($x110 as $v40){array_push($x129,fm_clean_path($v40));}$x110=$x129;if(!empty($x110)){chdir($g52);if(count($x110)==1){$k130=reset($x110);$k130=basename($k130);$t131=$k130.'_'.date('ymd_His').'.'.$b83;}else{$t131='archive_'.date('ymd_His').'.'.$b83;}if($b83=='zip'){$z132=new FM_Zipper();$z70=$z132->create($t131,$x110);}elseif($b83=='tar'){$d133=new FM_Zipper_Tar();$z70=$d133->create($t131,$x110);}if($z70){fm_set_msg(sprintf(lng('Archive').' <b>%s</b> '.lng('Created'),fm_enc($t131)));}else{fm_set_msg(lng('Archive not created'),'error');}}else{fm_set_msg(lng('Nothing selected'),'alert');}$p53=FM_PATH;fm_redirect(FM_SELF_URL.'?p='.urlencode($p53));}if(isset($_POST['unzip'],$_POST['token'])&&!FM_READONLY){if(!verifyToken($_POST['token'])){fm_set_msg(lng("Invalid Token."),'error');}$h134=urldecode($_POST['unzip']);$h134=fm_clean_path($h134);$h134=str_replace('/','',$h134);$d135=false;$g52=FM_ROOT_PATH;if(FM_PATH!=''){$g52.='/'.FM_PATH;}if($h134!=''&&is_file($g52.'/'.$h134)){$x136=$g52.'/'.$h134;$b83=pathinfo($x136,PATHINFO_EXTENSION);$d135=true;}else{fm_set_msg(lng('File not found'),'error');}if(($b83=="zip"&&!class_exists('ZipArchive'))||($b83=="tar"&&!class_exists('PharData'))){fm_set_msg(lng('Operations with archives are not available'),'error');$p53=FM_PATH;fm_redirect(FM_SELF_URL.'?p='.urlencode($p53));}if($d135){$k137='';if(isset($_POST['tofolder'])){$k137=pathinfo($x136,PATHINFO_FILENAME);if(fm_mkdir($g52.'/'.$k137,true)){$g52.='/'.$k137;}}if($b83=="zip"){$z132=new FM_Zipper();$z70=$z132->unzip($x136,$g52);}elseif($b83=="tar"){try{$m138=new PharData($x136);if(@$m138->extractTo($g52,null,true)){$z70=true;}else{$z70=false;}}catch(Exception $i64){$z70=true;}}if($z70){fm_set_msg(lng('Archive unpacked'));}else{fm_set_msg(lng('Archive not unpacked'),'error');}}else{fm_set_msg(lng('File not found'),'error');}$p53=FM_PATH;fm_redirect(FM_SELF_URL.'?p='.urlencode($p53));}if(isset($_POST['chmod'],$_POST['token'])&&!FM_READONLY&&!FM_IS_WIN){if(!verifyToken($_POST['token'])){fm_set_msg(lng("Invalid Token."),'error');}$g52=FM_ROOT_PATH;if(FM_PATH!=''){$g52.='/'.FM_PATH;}$v40=$_POST['chmod'];$v40=fm_clean_path($v40);$v40=str_replace('/','',$v40);if($v40==''||(!is_file($g52.'/'.$v40)&&!is_dir($g52.'/'.$v40))){fm_set_msg(lng('File not found'),'error');$p53=FM_PATH;fm_redirect(FM_SELF_URL.'?p='.urlencode($p53));}$o139=0;if(!empty($_POST['ur'])){$o139|=0400;}if(!empty($_POST['uw'])){$o139|=0200;}if(!empty($_POST['ux'])){$o139|=0100;}if(!empty($_POST['gr'])){$o139|=0040;}if(!empty($_POST['gw'])){$o139|=0020;}if(!empty($_POST['gx'])){$o139|=0010;}if(!empty($_POST['or'])){$o139|=0004;}if(!empty($_POST['ow'])){$o139|=0002;}if(!empty($_POST['ox'])){$o139|=0001;}if(@chmod($g52.'/'.$v40,$o139)){fm_set_msg(lng('Permissions changed'));}else{fm_set_msg(lng('Permissions not changed'),'error');}$p53=FM_PATH;fm_redirect(FM_SELF_URL.'?p='.urlencode($p53));}$g52=FM_ROOT_PATH;if(FM_PATH!=''){$g52.='/'.FM_PATH;}if(!is_dir($g52)){fm_redirect(FM_SELF_URL.'?p=');}$y140=fm_get_parent_path(FM_PATH);$g141=is_readable($g52)?scandir($g52):array();$u142=array();$x110=array();$v143=array_slice(explode("/",$g52),-1)[0];if(is_array($g141)&&fm_is_exclude_items($v143)){foreach($g141 as $v40){if($v40=='.'||$v40=='..'){continue;}if(!FM_SHOW_HIDDEN&&substr($v40,0,1)==='.'){continue;}$m128=$g52.'/'.$v40;if(@is_file($m128)&&fm_is_exclude_items($v40)){$x110[]=$v40;}elseif(@is_dir($m128)&&$v40!='.'&&$v40!='..'&&fm_is_exclude_items($v40)){$u142[]=$v40;}}}if(!empty($x110)){natcasesort($x110);}if(!empty($u142)){natcasesort($u142);}if(isset($_GET['upload'])&&!FM_READONLY){fm_show_header();fm_show_nav_path(FM_PATH);function getUploadExt(){$w144=explode(',',FM_UPLOAD_EXTENSION);if(FM_UPLOAD_EXTENSION&&$w144){array_walk($w144,function(&$h145){$h145=".$h145";});return implode(',',$w144);}return '';}?>
    <?php print_external('css-dropzone');?>
    <div class="path">

        <div class="card mb-2 fm-upload-wrapper <?php echo fm_get_theme();?>">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#fileUploader" data-target="#fileUploader"><i class="fa fa-arrow-circle-o-up"></i> <?php echo lng('UploadingFiles')?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#urlUploader" class="js-url-upload" data-target="#urlUploader"><i class="fa fa-link"></i> <?php echo lng('Upload from URL')?></a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <p class="card-text">
                    <a href="?p=<?php echo FM_PATH ?>" class="float-right"><i class="fa fa-chevron-circle-left go-back"></i> <?php echo lng('Back')?></a>
                    <strong><?php echo lng('DestinationFolder')?></strong>: <?php echo fm_enc(fm_convert_win(FM_PATH))?>
                </p>

                <form action="<?php echo htmlspecialchars(FM_SELF_URL).'?p='.fm_enc(FM_PATH)?>" class="dropzone card-tabs-container" id="fileUploader" enctype="multipart/form-data">
                    <input type="hidden" name="p" value="<?php echo fm_enc(FM_PATH)?>">
                    <input type="hidden" name="fullpath" id="fullpath" value="<?php echo fm_enc(FM_PATH)?>">
                    <input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>">
                    <div class="fallback">
                        <input name="file" type="file" multiple/>
                    </div>
                </form>

                <div class="upload-url-wrapper card-tabs-container hidden" id="urlUploader">
                    <form id="js-form-url-upload" class="row row-cols-lg-auto g-3 align-items-center" onsubmit="return upload_from_url(this);" method="POST" action="">
                        <input type="hidden" name="type" value="upload" aria-label="hidden" aria-hidden="true">
                        <input type="url" placeholder="URL" name="uploadurl" required class="form-control" style="width: 80%">
                        <input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>">
                        <button type="submit" class="btn btn-primary ms-3"><?php echo lng('Upload')?></button>
                        <div class="lds-facebook"><div></div><div></div><div></div></div>
                    </form>
                    <div id="js-url-upload__list" class="col-9 mt-3"></div>
                </div>
            </div>
        </div>
    </div>
    <?php print_external('js-dropzone');?>
    <script>
        Dropzone.options.fileUploader = {
            chunking: true,
            chunkSize: <?php echo UPLOAD_CHUNK_SIZE;?>,
            forceChunking: true,
            retryChunks: true,
            retryChunksLimit: 3,
            parallelUploads: 1,
            parallelChunkUploads: false,
            timeout: 120000,
            maxFilesize: "<?php echo MAX_UPLOAD_SIZE;?>",
            acceptedFiles : "<?php echo getUploadExt()?>",
            init: function () {
                this.on("sending", function (file, xhr, formData) {
                    let _path = (file.fullPath) ? file.fullPath : file.name;
                    document.getElementById("fullpath").value = _path;
                    xhr.ontimeout = (function() {
                        toast('Error: Server Timeout');
                    });
                }).on("success", function (res) {
                    let _response = JSON.parse(res.xhr.response);

                    if(_response.status == "error") {
                        toast(_response.info);
                    }
                }).on("error", function(file, response) {
                    toast(response);
                });
            }
        }
    </script>
    <?php fm_show_footer();exit;}if(isset($_POST['copy'])&&!FM_READONLY){$w146=isset($_POST['file'])?$_POST['file']:null;if(!is_array($w146)||empty($w146)){fm_set_msg(lng('Nothing selected'),'alert');$p53=FM_PATH;fm_redirect(FM_SELF_URL.'?p='.urlencode($p53));}fm_show_header();fm_show_nav_path(FM_PATH);?>
    <div class="path">
        <div class="card <?php echo fm_get_theme();?>">
            <div class="card-header">
                <h6><?php echo lng('Copying')?></h6>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <input type="hidden" name="p" value="<?php echo fm_enc(FM_PATH)?>">
                    <input type="hidden" name="finish" value="1">
                    <?php foreach($w146 as $e147){echo '<input type="hidden" name="file[]" value="'.fm_enc($e147).'">'.PHP_EOL;}?>
                    <p class="break-word"><strong><?php echo lng('Files')?></strong>: <b><?php echo implode('</b>, <b>',$w146)?></b></p>
                    <p class="break-word"><strong><?php echo lng('SourceFolder')?></strong>: <?php echo fm_enc(fm_convert_win(FM_ROOT_PATH.'/'.FM_PATH))?><br>
                        <label for="inp_copy_to"><strong><?php echo lng('DestinationFolder')?></strong>:</label>
                        <?php echo FM_ROOT_PATH ?>/<input type="text" name="copy_to" id="inp_copy_to" value="<?php echo fm_enc(FM_PATH)?>">
                    </p>
                    <p class="custom-checkbox custom-control"><input type="checkbox" name="move" value="1" id="js-move-files" class="custom-control-input"><label for="js-move-files" class="custom-control-label ms-2"> <?php echo lng('Move')?></label></p>
                    <p>
                        <b><a href="?p=<?php echo urlencode(FM_PATH)?>" class="btn btn-outline-danger"><i class="fa fa-times-circle"></i> <?php echo lng('Cancel')?></a></b>&nbsp;
                        <input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>">
                        <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> <?php echo lng('Copy')?></button> 
                    </p>
                </form>
            </div>
        </div>
    </div>
    <?php fm_show_footer();exit;}if(isset($_GET['copy'])&&!isset($_GET['finish'])&&!FM_READONLY){$l96=$_GET['copy'];$l96=fm_clean_path($l96);if($l96==''||!file_exists(FM_ROOT_PATH.'/'.$l96)){fm_set_msg(lng('File not found'),'error');$p53=FM_PATH;fm_redirect(FM_SELF_URL.'?p='.urlencode($p53));}fm_show_header();fm_show_nav_path(FM_PATH);?>
    <div class="path">
        <p><b>Copying</b></p>
        <p class="break-word">
            <strong>Source path:</strong> <?php echo fm_enc(fm_convert_win(FM_ROOT_PATH.'/'.$l96))?><br>
            <strong>Destination folder:</strong> <?php echo fm_enc(fm_convert_win(FM_ROOT_PATH.'/'.FM_PATH))?>
        </p>
        <p>
            <b><a href="?p=<?php echo urlencode(FM_PATH)?>&amp;copy=<?php echo urlencode($l96)?>&amp;finish=1"><i class="fa fa-check-circle"></i> Copy</a></b> &nbsp;
            <b><a href="?p=<?php echo urlencode(FM_PATH)?>&amp;copy=<?php echo urlencode($l96)?>&amp;finish=1&amp;move=1"><i class="fa fa-check-circle"></i> Move</a></b> &nbsp;
            <b><a href="?p=<?php echo urlencode(FM_PATH)?>" class="text-danger"><i class="fa fa-times-circle"></i> Cancel</a></b>
        </p>
        <p><i><?php echo lng('Select folder')?></i></p>
        <ul class="folders break-word">
            <?php if($y140!==false){?>
                <li><a href="?p=<?php echo urlencode($y140)?>&amp;copy=<?php echo urlencode($l96)?>"><i class="fa fa-chevron-circle-left"></i> ..</a></li>
                <?php }foreach($u142 as $h111){?>
                <li>
                    <a href="?p=<?php echo urlencode(trim(FM_PATH.'/'.$h111,'/'))?>&amp;copy=<?php echo urlencode($l96)?>"><i class="fa fa-folder-o"></i> <?php echo fm_convert_win($h111)?></a></li>
                <?php }?>
        </ul>
    </div>
    <?php fm_show_footer();exit;}if(isset($_GET['settings'])&&!FM_READONLY){fm_show_header();fm_show_nav_path(FM_PATH);global $g30,$n31,$p37;?>

    <div class="col-md-8 offset-md-2 pt-3">
        <div class="card mb-2 <?php echo fm_get_theme();?>">
            <h6 class="card-header d-flex justify-content-between">
                <span><i class="fa fa-cog"></i>  <?php echo lng('Settings')?></span>
                <a href="?p=<?php echo FM_PATH ?>" class="text-danger"><i class="fa fa-times-circle-o"></i> <?php echo lng('Cancel')?></a>
            </h6>
            <div class="card-body">
                <form id="js-settings-form" action="" method="post" data-type="ajax" onsubmit="return save_settings(this)">
                    <input type="hidden" name="type" value="settings" aria-label="hidden" aria-hidden="true">
                    <div class="form-group row">
                        <label for="js-language" class="col-sm-3 col-form-label"><?php echo lng('Language')?></label>
                        <div class="col-sm-5">
                            <select class="form-select" id="js-language" name="js-language">
                                <?php function getSelected($r148){global $n31;return($n31==$r148)?'selected':'';}foreach($p37 as $q149=>$l150){echo"<option value='$q149' ".getSelected($q149).">$l150</option>";}?>
                            </select>
                        </div>
                    </div>
                    <div class="mt-3 mb-3 row ">
                        <label for="js-error-report" class="col-sm-3 col-form-label"><?php echo lng('ErrorReporting')?></label>
                        <div class="col-sm-9">
                            <div class="form-check form-switch">
                              <input class="form-check-input" type="checkbox" role="switch" id="js-error-report" name="js-error-report" value="true" <?php echo $h34?'checked':'';?> />
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="js-show-hidden" class="col-sm-3 col-form-label"><?php echo lng('ShowHiddenFiles')?></label>
                        <div class="col-sm-9">
                            <div class="form-check form-switch">
                              <input class="form-check-input" type="checkbox" role="switch" id="js-show-hidden" name="js-show-hidden" value="true" <?php echo $l33?'checked':'';?> />
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="js-hide-cols" class="col-sm-3 col-form-label"><?php echo lng('HideColumns')?></label>
                        <div class="col-sm-9">
                            <div class="form-check form-switch">
                              <input class="form-check-input" type="checkbox" role="switch" id="js-hide-cols" name="js-hide-cols" value="true" <?php echo $y35?'checked':'';?> />
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="js-3-1" class="col-sm-3 col-form-label"><?php echo lng('Theme')?></label>
                        <div class="col-sm-5">
                            <select class="form-select w-100" id="js-3-0" name="js-theme-3">
                                <option value='light' <?php if($q36=="light"){echo "selected";}?>><?php echo lng('light')?></option>
                                <option value='dark' <?php if($q36=="dark"){echo "selected";}?>><?php echo lng('dark')?></option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check-circle"></i> <?php echo lng('Save');?></button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <?php fm_show_footer();exit;}if(isset($_GET['help'])){fm_show_header();fm_show_nav_path(FM_PATH);global $g30,$n31;?>

    <div class="col-md-8 offset-md-2 pt-3">
        <div class="card mb-2 <?php echo fm_get_theme();?>">
            <h6 class="card-header d-flex justify-content-between">
                <span><i class="fa fa-exclamation-circle"></i> <?php echo lng('Help')?></span>
                <a href="?p=<?php echo FM_PATH ?>" class="text-danger"><i class="fa fa-times-circle-o"></i> <?php echo lng('Cancel')?></a>
            </h6>
            <div class="card-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <p><h3><a href="https://github.com/prasathmani/tinyfilemanager" target="_blank" class="app-v-title"> Tiny File Manager <?php echo VERSION;?></a></h3></p>
                        <p>Author: Prasath Mani</p>
                        <p>Mail Us: <a href="mailto:ccpprogrammers@gmail.com">ccpprogrammers[at]gmail.com</a> </p>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="card">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><a href="https://github.com/prasathmani/tinyfilemanager/wiki" target="_blank"><i class="fa fa-question-circle"></i> <?php echo lng('Help Documents')?> </a> </li>
                                <li class="list-group-item"><a href="https://github.com/prasathmani/tinyfilemanager/issues" target="_blank"><i class="fa fa-bug"></i> <?php echo lng('Report Issue')?></a></li>
                                <?php if(!FM_READONLY){?>
                                <li class="list-group-item"><a href="javascript:show_new_pwd();"><i class="fa fa-lock"></i> <?php echo lng('Generate new password hash')?></a></li>
                                <?php }?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row js-new-pwd hidden mt-2">
                    <div class="col-12">
                        <form class="form-inline" onsubmit="return new_password_hash(this)" method="POST" action="">
                            <input type="hidden" name="type" value="pwdhash" aria-label="hidden" aria-hidden="true">
                            <div class="form-group mb-2">
                                <label for="staticEmail2"><?php echo lng('Generate new password hash')?></label>
                            </div>
                            <div class="form-group mx-sm-3 mb-2">
                                <label for="inputPassword2" class="sr-only"><?php echo lng('Password')?></label>
                                <input type="text" class="form-control btn-sm" id="inputPassword2" name="inputPassword2" placeholder="<?php echo lng('Password')?>" required>
                            </div>
                            <button type="submit" class="btn btn-success btn-sm mb-2"><?php echo lng('Generate')?></button>
                        </form>
                        <textarea class="form-control" rows="2" readonly id="js-pwd-result"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php fm_show_footer();exit;}if(isset($_GET['view'])){$v40=$_GET['view'];$v40=fm_clean_path($v40,false);$v40=str_replace('/','',$v40);if($v40==''||!is_file($g52.'/'.$v40)||in_array($v40,$GLOBALS['exclude_items'])){fm_set_msg(lng('File not found'),'error');$p53=FM_PATH;fm_redirect(FM_SELF_URL.'?p='.urlencode($p53));}fm_show_header();fm_show_nav_path(FM_PATH);$p151=FM_ROOT_URL.fm_convert_win((FM_PATH!=''?'/'.FM_PATH:'').'/'.$v40);$e54=$g52.'/'.$v40;$b83=strtolower(pathinfo($e54,PATHINFO_EXTENSION));$n152=fm_get_mime_type($e54);$o153=fm_get_size($e54);$g154=fm_get_filesize($o153);$g155=false;$h156=false;$j157=false;$f158=false;$x159=false;$r160=false;$i161=false;$x162='File';$k163=false;$f164='';$w20=strtolower(FM_DOC_VIEWER);if($w20&&$w20!=='false'&&in_array($b83,fm_get_onlineViewer_exts())){$i161=true;}elseif($b83=='zip'||$b83=='tar'){$g155=true;$x162='Archive';$k163=fm_get_zif_info($e54,$b83);}elseif(in_array($b83,fm_get_image_exts())){$j157=true;$x162='Image';}elseif(in_array($b83,fm_get_audio_exts())){$f158=true;$x162='Audio';}elseif(in_array($b83,fm_get_video_exts())){$x159=true;$x162='Video';}elseif(in_array($b83,fm_get_text_exts())||substr($n152,0,4)=='text'||in_array($n152,fm_get_text_mimes())){$r160=true;$f164=file_get_contents($e54);}?>
    <div class="row">
        <div class="col-12">
            <p class="break-word"><b><?php echo lng($x162)?> "<?php echo fm_enc(fm_convert_win($v40))?>"</b></p>
            <p class="break-word">
                <?php $k165=fm_get_display_path($e54);?>
                <strong><?php echo $k165['label'];?>:</strong> <?php echo $k165['path'];?><br>
                <strong>File size:</strong> <?php echo($o153<=1000)?"$o153 bytes":$g154;?><br>
                <strong>MIME-type:</strong> <?php echo $n152 ?><br>
                <?php if(($g155||$h156)&&$k163!==false){$j166=0;$b167=0;$f168=0;foreach($k163 as $r169){if(!$r169['folder']){$j166++;}$b167+=$r169['compressed_size'];$f168+=$r169['filesize'];}?>
                    <?php echo lng('Files in archive')?>: <?php echo $j166 ?><br>
                    <?php echo lng('Total size')?>: <?php echo fm_get_filesize($f168)?><br>
                    <?php echo lng('Size in archive')?>: <?php echo fm_get_filesize($b167)?><br>
                    <?php echo lng('Compression')?>: <?php echo round(($b167/max($f168,1))*100)?>%<br>
                    <?php }if($j157){$a170=getimagesize($e54);echo '<strong>'.lng('Image size').':</strong> '.(isset($a170[0])?$a170[0]:'0').' x '.(isset($a170[1])?$a170[1]:'0').'<br>';}if($r160){$f171=fm_is_utf8($f164);if(function_exists('iconv')){if(!$f171){$f164=iconv(FM_ICONV_INPUT_ENC,'UTF-8//IGNORE',$f164);}}echo '<strong>'.lng('Charset').':</strong> '.($f171?'utf-8':'8 bit').'<br>';}?>
            </p>
            <div class="d-flex align-items-center mb-3">
                <form method="post" class="d-inline ms-2" action="?p=<?php echo urlencode(FM_PATH)?>&amp;dl=<?php echo urlencode($v40)?>">
                    <input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>">
                    <button type="submit" class="btn btn-link text-decoration-none fw-bold p-0"><i class="fa fa-cloud-download"></i> <?php echo lng('Download')?></button> &nbsp;
                </form>
                <b class="ms-2"><a href="<?php echo fm_enc($p151)?>" target="_blank"><i class="fa fa-external-link-square"></i> <?php echo lng('Open')?></a></b>
                <?php if(!FM_READONLY&&($g155||$h156)&&$k163!==false){$r172=pathinfo($e54,PATHINFO_FILENAME);?>
                    <form method="post" class="d-inline ms-2">
                        <input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>">
                        <input type="hidden" name="unzip" value="<?php echo urlencode($v40);?>">
                        <button type="submit" class="btn btn-link text-decoration-none fw-bold p-0" style="font-size: 14px;"><i class="fa fa-check-circle"></i> <?php echo lng('UnZip')?></button>
                    </form>&nbsp;
                    <form method="post" class="d-inline ms-2">
                        <input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>">
                        <input type="hidden" name="unzip" value="<?php echo urlencode($v40);?>">
                        <input type="hidden" name="tofolder" value="1">
                        <button type="submit" class="btn btn-link text-decoration-none fw-bold p-0" style="font-size: 14px;" title="UnZip to <?php echo fm_enc($r172)?>"><i class="fa fa-check-circle"></i> <?php echo lng('UnZipToFolder')?></button>
                    </form>&nbsp;
                    <?php }if($r160&&!FM_READONLY){?>
                    <b class="ms-2"><a href="?p=<?php echo urlencode(trim(FM_PATH))?>&amp;edit=<?php echo urlencode($v40)?>" class="edit-file"><i class="fa fa-pencil-square"></i> <?php echo lng('Edit')?>
                        </a></b> &nbsp;
                    <b class="ms-2"><a href="?p=<?php echo urlencode(trim(FM_PATH))?>&amp;edit=<?php echo urlencode($v40)?>&env=ace"
                            class="edit-file"><i class="fa fa-pencil-square-o"></i> <?php echo lng('AdvancedEditor')?>
                        </a></b> &nbsp;
                <?php }?>
                <b class="ms-2"><a href="?p=<?php echo urlencode(FM_PATH)?>"><i class="fa fa-chevron-circle-left go-back"></i> <?php echo lng('Back')?></a></b>
            </div>
            <?php if($i161){if($w20=='google'){echo '<iframe src="https://docs.google.com/viewer?embedded=true&hl=en&url='.fm_enc($p151).'" frameborder="no" style="width:100%;min-height:460px"></iframe>';}else if($w20=='microsoft'){echo '<iframe src="https://view.officeapps.live.com/op/embed.aspx?src='.fm_enc($p151).'" frameborder="no" style="width:100%;min-height:460px"></iframe>';}}elseif($g155){if($k163!==false){echo '<code class="maxheight">';foreach($k163 as $r169){if($r169['folder']){echo '<b>'.fm_enc($r169['name']).'</b><br>';}else{echo $r169['name'].' ('.fm_get_filesize($r169['filesize']).')<br>';}}echo '</code>';}else{echo '<p>'.lng('Error while fetching archive info').'</p>';}}elseif($j157){if(in_array($b83,array('gif','jpg','jpeg','png','bmp','ico','svg','webp','avif'))){echo '<p><input type="checkbox" id="preview-img-zoomCheck"><label for="preview-img-zoomCheck"><img src="'.fm_enc($p151).'" alt="image" class="preview-img"></label></p>';}}elseif($f158){echo '<p><audio src="'.fm_enc($p151).'" controls preload="metadata"></audio></p>';}elseif($x159){echo '<div class="preview-video"><video src="'.fm_enc($p151).'" width="640" height="360" controls preload="metadata"></video></div>';}elseif($r160){if(FM_USE_HIGHLIGHTJS){$y173=array('shtml'=>'xml','htaccess'=>'apache','phtml'=>'php','lock'=>'json','svg'=>'xml',);$h174=isset($y173[$b83])?'lang-'.$y173[$b83]:'lang-'.$b83;if(empty($b83)||in_array(strtolower($v40),fm_get_text_names())||preg_match('#\.min\.(css|js)$#i',$v40)){$h174='nohighlight';}$f164='<pre class="with-hljs"><code class="'.$h174.'">'.fm_enc($f164).'</code></pre>';}elseif(in_array($b83,array('php','php4','php5','phtml','phps'))){$f164=highlight_string($f164,true);}else{$f164='<pre>'.fm_enc($f164).'</pre>';}echo $f164;}?>
        </div>
    </div>
    <?php fm_show_footer();exit;}if(isset($_GET['edit'])&&!FM_READONLY){$v40=$_GET['edit'];$v40=fm_clean_path($v40,false);$v40=str_replace('/','',$v40);if($v40==''||!is_file($g52.'/'.$v40)||in_array($v40,$GLOBALS['exclude_items'])){fm_set_msg(lng('File not found'),'error');$p53=FM_PATH;fm_redirect(FM_SELF_URL.'?p='.urlencode($p53));}$o175=' : <i><b>'.$v40.'</b></i>';header('X-XSS-Protection:0');fm_show_header();fm_show_nav_path(FM_PATH);$p151=FM_ROOT_URL.fm_convert_win((FM_PATH!=''?'/'.FM_PATH:'').'/'.$v40);$e54=$g52.'/'.$v40;$l176=true;if(isset($_GET['env'])){if($_GET['env']=="ace"){$l176=false;}}if(isset($_POST['savedata'])){$p55=$_POST['savedata'];$p56=fopen($e54,"w");@fwrite($p56,$p55);fclose($p56);fm_set_msg(lng('File Saved Successfully'));}$b83=strtolower(pathinfo($e54,PATHINFO_EXTENSION));$n152=fm_get_mime_type($e54);$g154=filesize($e54);$r160=false;$f164='';if(in_array($b83,fm_get_text_exts())||substr($n152,0,4)=='text'||in_array($n152,fm_get_text_mimes())){$r160=true;$f164=file_get_contents($e54);}?>
    <div class="path">
        <div class="row">
            <div class="col-xs-12 col-sm-5 col-lg-6 pt-1">
                <div class="btn-toolbar" role="toolbar">
                    <?php if(!$l176){?>
                        <div class="btn-group js-ace-toolbar">
                            <button data-cmd="none" data-option="fullscreen" class="btn btn-sm btn-outline-secondary" id="js-ace-fullscreen" title="<?php echo lng('Fullscreen')?>"><i class="fa fa-expand" title="<?php echo lng('Fullscreen')?>"></i></button>
                            <button data-cmd="find" class="btn btn-sm btn-outline-secondary" id="js-ace-search" title="<?php echo lng('Search')?>"><i class="fa fa-search" title="<?php echo lng('Search')?>"></i></button>
                            <button data-cmd="undo" class="btn btn-sm btn-outline-secondary" id="js-ace-undo" title="<?php echo lng('Undo')?>"><i class="fa fa-undo" title="<?php echo lng('Undo')?>"></i></button>
                            <button data-cmd="redo" class="btn btn-sm btn-outline-secondary" id="js-ace-redo" title="<?php echo lng('Redo')?>"><i class="fa fa-repeat" title="<?php echo lng('Redo')?>"></i></button>
                            <button data-cmd="none" data-option="wrap" class="btn btn-sm btn-outline-secondary" id="js-ace-wordWrap" title="<?php echo lng('Word Wrap')?>"><i class="fa fa-text-width" title="<?php echo lng('Word Wrap')?>"></i></button>
                            <select id="js-ace-mode" data-type="mode" title="<?php echo lng('Select Document Type')?>" class="btn-outline-secondary border-start-0 d-none d-md-block"><option>-- <?php echo lng('Select Mode')?> --</option></select>
                            <select id="js-ace-theme" data-type="theme" title="<?php echo lng('Select Theme')?>" class="btn-outline-secondary border-start-0 d-none d-lg-block"><option>-- <?php echo lng('Select Theme')?> --</option></select>
                            <select id="js-ace-fontSize" data-type="fontSize" title="<?php echo lng('Select Font Size')?>" class="btn-outline-secondary border-start-0 d-none d-lg-block"><option>-- <?php echo lng('Select Font Size')?> --</option></select>
                        </div>
                    <?php }?>
                </div>
            </div>
            <div class="edit-file-actions col-xs-12 col-sm-7 col-lg-6 text-end pt-1">
                <a title="<?php echo lng('Back')?>" class="btn btn-sm btn-outline-primary" href="?p=<?php echo urlencode(trim(FM_PATH))?>&amp;view=<?php echo urlencode($v40)?>"><i class="fa fa-reply-all"></i> <?php echo lng('Back')?></a>
                <a title="<?php echo lng('BackUp')?>" class="btn btn-sm btn-outline-primary" href="javascript:void(0);" onclick="backup('<?php echo urlencode(trim(FM_PATH))?>','<?php echo urlencode($v40)?>')"><i class="fa fa-database"></i> <?php echo lng('BackUp')?></a>
                <?php if($r160){?>
                    <?php if($l176){?>
                        <a title="Advanced" class="btn btn-sm btn-outline-primary" href="?p=<?php echo urlencode(trim(FM_PATH))?>&amp;edit=<?php echo urlencode($v40)?>&amp;env=ace"><i class="fa fa-pencil-square-o"></i> <?php echo lng('AdvancedEditor')?></a>
                        <button type="button" class="btn btn-sm btn-success" name="Save" data-url="<?php echo fm_enc($p151)?>" onclick="edit_save(this,'nrl')"><i class="fa fa-floppy-o"></i> Save
                        </button>
                    <?php }else{?>
                        <a title="Plain Editor" class="btn btn-sm btn-outline-primary" href="?p=<?php echo urlencode(trim(FM_PATH))?>&amp;edit=<?php echo urlencode($v40)?>"><i class="fa fa-text-height"></i> <?php echo lng('NormalEditor')?></a>
                        <button type="button" class="btn btn-sm btn-success" name="Save" data-url="<?php echo fm_enc($p151)?>" onclick="edit_save(this,'ace')"><i class="fa fa-floppy-o"></i> <?php echo lng('Save')?>
                        </button>
                    <?php }?>
                <?php }?>
            </div>
        </div>
        <?php if($r160&&$l176){echo '<textarea class="mt-2" id="normal-editor" rows="33" cols="120" style="width: 99.5%;">'.htmlspecialchars($f164).'</textarea>';echo '<script>document.addEventListener("keydown", function(e) {if ((window.navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)  && e.keyCode == 83) { e.preventDefault();edit_save(this,"nrl");}}, false);</script>';}elseif($r160){echo '<div id="editor" contenteditable="true">'.htmlspecialchars($f164).'</div>';}else{fm_set_msg(lng('FILE EXTENSION HAS NOT SUPPORTED'),'error');}?>
    </div>
    <?php fm_show_footer();exit;}if(isset($_GET['chmod'])&&!FM_READONLY&&!FM_IS_WIN){$v40=$_GET['chmod'];$v40=fm_clean_path($v40);$v40=str_replace('/','',$v40);if($v40==''||(!is_file($g52.'/'.$v40)&&!is_dir($g52.'/'.$v40))){fm_set_msg(lng('File not found'),'error');$p53=FM_PATH;fm_redirect(FM_SELF_URL.'?p='.urlencode($p53));}fm_show_header();fm_show_nav_path(FM_PATH);$p151=FM_ROOT_URL.(FM_PATH!=''?'/'.FM_PATH:'').'/'.$v40;$e54=$g52.'/'.$v40;$o139=fileperms($g52.'/'.$v40);?>
    <div class="path">
        <div class="card mb-2 <?php echo fm_get_theme();?>">
            <h6 class="card-header">
                <?php echo lng('ChangePermissions')?>
            </h6>
            <div class="card-body">
                <p class="card-text">
                    <?php $k165=fm_get_display_path($e54);?>
                    <?php echo $k165['label'];?>: <?php echo $k165['path'];?><br>
                </p>
                <form action="" method="post">
                    <input type="hidden" name="p" value="<?php echo fm_enc(FM_PATH)?>">
                    <input type="hidden" name="chmod" value="<?php echo fm_enc($v40)?>">

                    <table class="table compact-table <?php echo fm_get_theme();?>">
                        <tr>
                            <td></td>
                            <td><b><?php echo lng('Owner')?></b></td>
                            <td><b><?php echo lng('Group')?></b></td>
                            <td><b><?php echo lng('Other')?></b></td>
                        </tr>
                        <tr>
                            <td style="text-align: right"><b><?php echo lng('Read')?></b></td>
                            <td><label><input type="checkbox" name="ur" value="1"<?php echo($o139&00400)?' checked':'' ?>></label></td>
                            <td><label><input type="checkbox" name="gr" value="1"<?php echo($o139&00040)?' checked':'' ?>></label></td>
                            <td><label><input type="checkbox" name="or" value="1"<?php echo($o139&00004)?' checked':'' ?>></label></td>
                        </tr>
                        <tr>
                            <td style="text-align: right"><b><?php echo lng('Write')?></b></td>
                            <td><label><input type="checkbox" name="uw" value="1"<?php echo($o139&00200)?' checked':'' ?>></label></td>
                            <td><label><input type="checkbox" name="gw" value="1"<?php echo($o139&00020)?' checked':'' ?>></label></td>
                            <td><label><input type="checkbox" name="ow" value="1"<?php echo($o139&00002)?' checked':'' ?>></label></td>
                        </tr>
                        <tr>
                            <td style="text-align: right"><b><?php echo lng('Execute')?></b></td>
                            <td><label><input type="checkbox" name="ux" value="1"<?php echo($o139&00100)?' checked':'' ?>></label></td>
                            <td><label><input type="checkbox" name="gx" value="1"<?php echo($o139&00010)?' checked':'' ?>></label></td>
                            <td><label><input type="checkbox" name="ox" value="1"<?php echo($o139&00001)?' checked':'' ?>></label></td>
                        </tr>
                    </table>

                    <p>
                       <input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>"> 
                        <b><a href="?p=<?php echo urlencode(FM_PATH)?>" class="btn btn-outline-primary"><i class="fa fa-times-circle"></i> <?php echo lng('Cancel')?></a></b>&nbsp;
                        <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> <?php echo lng('Change')?></button>
                    </p>
                </form>
            </div>
        </div>
    </div>
    <?php fm_show_footer();exit;}fm_show_header();fm_show_nav_path(FM_PATH);fm_show_message();$c177=count($x110);$w178=count($u142);$j179=0;$o180=(FM_THEME=="dark")?"text-white bg-dark table-dark":"bg-white";?>
<form action="" method="post" class="pt-3">
    <input type="hidden" name="p" value="<?php echo fm_enc(FM_PATH)?>">
    <input type="hidden" name="group" value="1">
    <input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>">
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-sm <?php echo $o180;?>" id="main-table">
            <thead class="thead-white">
            <tr>
                <?php if(!FM_READONLY):?>
                    <th style="width:3%" class="custom-checkbox-header">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="js-select-all-items" onclick="checkbox_toggle()">
                            <label class="custom-control-label" for="js-select-all-items"></label>
                        </div>
                    </th><?php endif;?>
                <th><?php echo lng('Name')?></th>
                <th><?php echo lng('Size')?></th>
                <th><?php echo lng('Modified')?></th>
                <?php if(!FM_IS_WIN&&!$y35):?>
                    <th><?php echo lng('Perms')?></th>
                    <th><?php echo lng('Owner')?></th><?php endif;?>
                <th><?php echo lng('Actions')?></th>
            </tr>
            </thead>
            <?php if($y140!==false){?>
                <tr><?php if(!FM_READONLY):?>
                    <td class="nosort"></td><?php endif;?>
                    <td class="border-0" data-sort><a href="?p=<?php echo urlencode($y140)?>"><i class="fa fa-chevron-circle-left go-back"></i> ..</a></td>
                    <td class="border-0" data-order></td>
                    <td class="border-0" data-order></td>
                    <td class="border-0"></td>
                    <?php if(!FM_IS_WIN&&!$y35){?>
                        <td class="border-0"></td>
                        <td class="border-0"></td>
                    <?php }?>
                </tr>
                <?php }$d181=3399;foreach($u142 as $h111){$f182=is_link($g52.'/'.$h111);$e183=$f182?'icon-link_folder':'fa fa-folder-o';$e184=filemtime($g52.'/'.$h111);$n185=date(FM_DATETIME_FORMAT,$e184);$k186=strtotime(date("F d Y H:i:s.",$e184));$o153="";$g154=lng('Folder');$l187=substr(decoct(fileperms($g52.'/'.$h111)),-4);if(function_exists('posix_getpwuid')&&function_exists('posix_getgrgid')){$g188=posix_getpwuid(fileowner($g52.'/'.$h111));$l189=posix_getgrgid(filegroup($g52.'/'.$h111));if($g188===false){$g188=array('name'=>'?');}if($l189===false){$l189=array('name'=>'?');}}else{$g188=array('name'=>'?');$l189=array('name'=>'?');}?>
                <tr>
                    <?php if(!FM_READONLY):?>
                        <td class="custom-checkbox-td">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="<?php echo $d181 ?>" name="file[]" value="<?php echo fm_enc($h111)?>">
                            <label class="custom-control-label" for="<?php echo $d181 ?>"></label>
                        </div>
                        </td><?php endif;?>
                    <td data-sort=<?php echo fm_convert_win(fm_enc($h111))?>>
                        <div class="filename"><a href="?p=<?php echo urlencode(trim(FM_PATH.'/'.$h111,'/'))?>"><i class="<?php echo $e183 ?>"></i> <?php echo fm_convert_win(fm_enc($h111))?>
                            </a><?php echo($f182?' &rarr; <i>'.readlink($g52.'/'.$h111).'</i>':'')?></div>
                    </td>
                    <td data-order="a-<?php echo str_pad($o153,18,"0",STR_PAD_LEFT);?>">
                        <?php echo $g154;?>
                    </td>
                    <td data-order="a-<?php echo $k186;?>"><?php echo $n185 ?></td>
                    <?php if(!FM_IS_WIN&&!$y35):?>
                        <td><?php if(!FM_READONLY):?><a title="Change Permissions" href="?p=<?php echo urlencode(FM_PATH)?>&amp;chmod=<?php echo urlencode($h111)?>"><?php echo $l187 ?></a><?php else:?><?php echo $l187 ?><?php endif;?>
                        </td>
                        <td><?php echo $g188['name'].':'.$l189['name']?></td>
                    <?php endif;?>
                    <td class="inline-actions"><?php if(!FM_READONLY):?>
                            <a title="<?php echo lng('Delete')?>" href="?p=<?php echo urlencode(FM_PATH)?>&amp;del=<?php echo urlencode($h111)?>" onclick="confirmDailog(event, '1028','<?php echo lng('Delete').' '.lng('Folder');?>','<?php echo urlencode($h111)?>', this.href);"> <i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            <a title="<?php echo lng('Rename')?>" href="#" onclick="rename('<?php echo fm_enc(addslashes(FM_PATH))?>', '<?php echo fm_enc(addslashes($h111))?>');return false;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            <a title="<?php echo lng('CopyTo')?>..." href="?p=&amp;copy=<?php echo urlencode(trim(FM_PATH.'/'.$h111,'/'))?>"><i class="fa fa-files-o" aria-hidden="true"></i></a>
                        <?php endif;?>
                        <a title="<?php echo lng('DirectLink')?>" href="<?php echo fm_enc(FM_ROOT_URL.(FM_PATH!=''?'/'.FM_PATH:'').'/'.$h111.'/')?>" target="_blank"><i class="fa fa-link" aria-hidden="true"></i></a>
                    </td>
                </tr>
                <?php flush();$d181++;}$g190=6070;foreach($x110 as $h111){$f182=is_link($g52.'/'.$h111);$e183=$f182?'fa fa-file-text-o':fm_get_file_icon_class($g52.'/'.$h111);$e184=filemtime($g52.'/'.$h111);$n185=date(FM_DATETIME_FORMAT,$e184);$k186=strtotime(date("F d Y H:i:s.",$e184));$o153=fm_get_size($g52.'/'.$h111);$g154=fm_get_filesize($o153);$x191='?p='.urlencode(FM_PATH).'&amp;view='.urlencode($h111);$j179+=$o153;$l187=substr(decoct(fileperms($g52.'/'.$h111)),-4);if(function_exists('posix_getpwuid')&&function_exists('posix_getgrgid')){$g188=posix_getpwuid(fileowner($g52.'/'.$h111));$l189=posix_getgrgid(filegroup($g52.'/'.$h111));if($g188===false){$g188=array('name'=>'?');}if($l189===false){$l189=array('name'=>'?');}}else{$g188=array('name'=>'?');$l189=array('name'=>'?');}?>
                <tr>
                    <?php if(!FM_READONLY):?>
                        <td class="custom-checkbox-td">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="<?php echo $g190 ?>" name="file[]" value="<?php echo fm_enc($h111)?>">
                            <label class="custom-control-label" for="<?php echo $g190 ?>"></label>
                        </div>
                        </td><?php endif;?>
                    <td data-sort=<?php echo fm_enc($h111)?>>
                        <div class="filename">
                        <?php if(in_array(strtolower(pathinfo($h111,PATHINFO_EXTENSION)),array('gif','jpg','jpeg','png','bmp','ico','svg','webp','avif'))):?>
                                <?php $w192=fm_enc(FM_ROOT_URL.(FM_PATH!=''?'/'.FM_PATH:'').'/'.$h111);?>
                                <a href="<?php echo $x191 ?>" data-preview-image="<?php echo $w192 ?>" title="<?php echo fm_enc($h111)?>">
                           <?php else:?>
                                <a href="<?php echo $x191 ?>" title="<?php echo $h111 ?>">
                            <?php endif;?>
                                    <i class="<?php echo $e183 ?>"></i> <?php echo fm_convert_win(fm_enc($h111))?>
                                </a>
                                <?php echo($f182?' &rarr; <i>'.readlink($g52.'/'.$h111).'</i>':'')?>
                        </div>
                    </td>
                    <td data-order="b-<?php echo str_pad($o153,18,"0",STR_PAD_LEFT);?>"><span title="<?php printf('%s bytes',$o153)?>">
                        <?php echo $g154;?>
                        </span></td>
                    <td data-order="b-<?php echo $k186;?>"><?php echo $n185 ?></td>
                    <?php if(!FM_IS_WIN&&!$y35):?>
                        <td><?php if(!FM_READONLY):?><a title="<?php echo 'Change Permissions' ?>" href="?p=<?php echo urlencode(FM_PATH)?>&amp;chmod=<?php echo urlencode($h111)?>"><?php echo $l187 ?></a><?php else:?><?php echo $l187 ?><?php endif;?>
                        </td>
                        <td><?php echo fm_enc($g188['name'].':'.$l189['name'])?></td>
                    <?php endif;?>
                    <td class="inline-actions">
                        <?php if(!FM_READONLY):?>
                            <a title="<?php echo lng('Delete')?>" href="?p=<?php echo urlencode(FM_PATH)?>&amp;del=<?php echo urlencode($h111)?>" onclick="confirmDailog(event, 1209, '<?php echo lng('Delete').' '.lng('File');?>','<?php echo urlencode($h111);?>', this.href);"> <i class="fa fa-trash-o"></i></a>
                            <a title="<?php echo lng('Rename')?>" href="#" onclick="rename('<?php echo fm_enc(addslashes(FM_PATH))?>', '<?php echo fm_enc(addslashes($h111))?>');return false;"><i class="fa fa-pencil-square-o"></i></a>
                            <a title="<?php echo lng('CopyTo')?>..."
                               href="?p=<?php echo urlencode(FM_PATH)?>&amp;copy=<?php echo urlencode(trim(FM_PATH.'/'.$h111,'/'))?>"><i class="fa fa-files-o"></i></a>
                        <?php endif;?>
                        <a title="<?php echo lng('DirectLink')?>" href="<?php echo fm_enc(FM_ROOT_URL.(FM_PATH!=''?'/'.FM_PATH:'').'/'.$h111)?>" target="_blank"><i class="fa fa-link"></i></a>
                        <a title="<?php echo lng('Download')?>" href="?p=<?php echo urlencode(FM_PATH)?>&amp;dl=<?php echo urlencode($h111)?>" onclick="confirmDailog(event, 1211, '<?php echo lng('Download');?>','<?php echo urlencode($h111);?>', this.href);"><i class="fa fa-download"></i></a>
                    </td>
                </tr>
                <?php flush();$g190++;}if(empty($u142)&&empty($x110)){?>
                <tfoot>
                    <tr><?php if(!FM_READONLY):?>
                            <td></td><?php endif;?>
                        <td colspan="<?php echo(!FM_IS_WIN&&!$y35)?'6':'4' ?>"><em><?php echo lng('Folder is empty')?></em></td>
                    </tr>
                </tfoot>
                <?php }else{?>
                <tfoot>
                    <tr>
                        <td class="gray" colspan="<?php echo(!FM_IS_WIN&&!$y35)?(FM_READONLY?'6':'7'):(FM_READONLY?'4':'5')?>">
                            <?php echo lng('FullSize').': <span class="badge text-bg-light border-radius-0">'.fm_get_filesize($j179).'</span>' ?>
                            <?php echo lng('File').': <span class="badge text-bg-light border-radius-0">'.$c177.'</span>' ?>
                            <?php echo lng('Folder').': <span class="badge text-bg-light border-radius-0">'.$w178.'</span>' ?>
                        </td>
                    </tr>
                </tfoot>
                <?php }?>
        </table>
    </div>

    <div class="row">
        <?php if(!FM_READONLY):?>
        <div class="col-xs-12 col-sm-9">
            <ul class="list-inline footer-action">
                <li class="list-inline-item"> <a href="#/select-all" class="btn btn-small btn-outline-primary btn-2" onclick="select_all();return false;"><i class="fa fa-check-square"></i> <?php echo lng('SelectAll')?> </a></li>
                <li class="list-inline-item"><a href="#/unselect-all" class="btn btn-small btn-outline-primary btn-2" onclick="unselect_all();return false;"><i class="fa fa-window-close"></i> <?php echo lng('UnSelectAll')?> </a></li>
                <li class="list-inline-item"><a href="#/invert-all" class="btn btn-small btn-outline-primary btn-2" onclick="invert_all();return false;"><i class="fa fa-th-list"></i> <?php echo lng('InvertSelection')?> </a></li>
                <li class="list-inline-item"><input type="submit" class="hidden" name="delete" id="a-delete" value="Delete" onclick="return confirm('<?php echo lng('Delete selected files and folders?');?>')">
                    <a href="javascript:document.getElementById('a-delete').click();" class="btn btn-small btn-outline-primary btn-2"><i class="fa fa-trash"></i> <?php echo lng('Delete')?> </a></li>
                <li class="list-inline-item"><input type="submit" class="hidden" name="zip" id="a-zip" value="zip" onclick="return confirm('<?php echo lng('Create archive?');?>')">
                    <a href="javascript:document.getElementById('a-zip').click();" class="btn btn-small btn-outline-primary btn-2"><i class="fa fa-file-archive-o"></i> <?php echo lng('Zip')?> </a></li>
                <li class="list-inline-item"><input type="submit" class="hidden" name="tar" id="a-tar" value="tar" onclick="return confirm('<?php echo lng('Create archive?');?>')">
                    <a href="javascript:document.getElementById('a-tar').click();" class="btn btn-small btn-outline-primary btn-2"><i class="fa fa-file-archive-o"></i> <?php echo lng('Tar')?> </a></li>
                <li class="list-inline-item"><input type="submit" class="hidden" name="copy" id="a-copy" value="Copy">
                    <a href="javascript:document.getElementById('a-copy').click();" class="btn btn-small btn-outline-primary btn-2"><i class="fa fa-files-o"></i> <?php echo lng('Copy')?> </a></li>
            </ul>
        </div>
        <div class="col-3 d-none d-sm-block"><a href="https://tinyfilemanager.github.io" target="_blank" class="float-right text-muted">Tiny File Manager <?php echo VERSION;?></a></div>
        <?php else:?>
            <div class="col-12"><a href="https://tinyfilemanager.github.io" target="_blank" class="float-right text-muted">Tiny File Manager <?php echo VERSION;?></a></div>
        <?php endif;?>
    </div>
</form>

<?php fm_show_footer();/**
 * It prints the css/js files into html
 * @param key The key of the external file to print.
 */ function print_external($j193){global $a29;if(!array_key_exists($j193,$a29)){echo"<!-- EXTERNAL: MISSING KEY $j193 -->";return;}echo"$a29[$j193]";}/**
 * Verify CSRF TOKEN and remove after cerify
 * @param string $token
 * @return bool
 */ function verifyToken($d194){if(hash_equals($_SESSION['token'],$d194)){return true;}return false;}/**
 * Delete  file or folder (recursively)
 * @param string $path
 * @return bool
 */ function fm_rdelete($g52){if(is_link($g52)){return unlink($g52);}elseif(is_dir($g52)){$g141=scandir($g52);$l195=true;if(is_array($g141)){foreach($g141 as $v40){if($v40!='.'&&$v40!='..'){if(!fm_rdelete($g52.'/'.$v40)){$l195=false;}}}}return($l195)?rmdir($g52):false;}elseif(is_file($g52)){return unlink($g52);}return false;}/**
 * Recursive chmod
 * @param string $path
 * @param int $filemode
 * @param int $dirmode
 * @return bool
 * @todo Will use in mass chmod
 */ function fm_rchmod($g52,$k196,$c197){if(is_dir($g52)){if(!chmod($g52,$c197)){return false;}$g141=scandir($g52);if(is_array($g141)){foreach($g141 as $v40){if($v40!='.'&&$v40!='..'){if(!fm_rchmod($g52.'/'.$v40,$k196,$c197)){return false;}}}}return true;}elseif(is_link($g52)){return true;}elseif(is_file($g52)){return chmod($g52,$k196);}return false;}/**
 * Check the file extension which is allowed or not
 * @param string $filename
 * @return bool
 */ function fm_is_valid_ext($r119){$k82=(FM_FILE_EXTENSION)?explode(',',FM_FILE_EXTENSION):false;$b83=pathinfo($r119,PATHINFO_EXTENSION);$z84=($k82)?in_array($b83,$k82):true;return($z84)?true:false;}/**
 * Safely rename
 * @param string $old
 * @param string $new
 * @return bool|null
 */ function fm_rename($h112,$j95){$z84=fm_is_valid_ext($j95);if(!is_dir($h112)){if(!$z84)return false;}return(!file_exists($j95)&&file_exists($h112))?rename($h112,$j95):null;}/**
 * Copy file or folder (recursively).
 * @param string $path
 * @param string $dest
 * @param bool $upd Update files
 * @param bool $force Create folder with same names instead file
 * @return bool
 */ function fm_rcopy($g52,$y98,$x198=true,$y199=true){if(is_dir($g52)){if(!fm_mkdir($y98,$y199)){return false;}$g141=scandir($g52);$l195=true;if(is_array($g141)){foreach($g141 as $v40){if($v40!='.'&&$v40!='..'){if(!fm_rcopy($g52.'/'.$v40,$y98.'/'.$v40)){$l195=false;}}}}return $l195;}elseif(is_file($g52)){return fm_copy($g52,$y98,$x198);}return false;}/**
 * Safely create folder
 * @param string $dir
 * @param bool $force
 * @return bool
 */ function fm_mkdir($e50,$y199){if(file_exists($e50)){if(is_dir($e50)){return $e50;}elseif(!$y199){return false;}unlink($e50);}return mkdir($e50,0777,true);}/**
 * Safely copy file
 * @param string $f1
 * @param string $f2
 * @param bool $upd Indicates if file should be updated with new content
 * @return bool
 */ function fm_copy($m200,$l201,$x198){$c202=filemtime($m200);if(file_exists($l201)){$x203=filemtime($l201);if($x203>=$c202&&$x198){return false;}}$l195=copy($m200,$l201);if($l195){touch($l201,$c202);}return $l195;}/**
 * Get mime type
 * @param string $file_path
 * @return mixed|string
 */ function fm_get_mime_type($e54){if(function_exists('finfo_open')){$s204=finfo_open(FILEINFO_MIME_TYPE);$t205=finfo_file($s204,$e54);finfo_close($s204);return $t205;}elseif(function_exists('mime_content_type')){return mime_content_type($e54);}elseif(!stristr(ini_get('disable_functions'),'shell_exec')){$v40=escapeshellarg($e54);$t205=shell_exec('file -bi '.$v40);return $t205;}else{return '--';}}/**
 * HTTP Redirect
 * @param string $url
 * @param int $code
 */ function fm_redirect($l76,$b38=302){header('Location: '.$l76,true,$b38);exit;}/**
 * Path traversal prevention and clean the url
 * It replaces (consecutive) occurrences of / and \\ with whatever is in DIRECTORY_SEPARATOR, and processes /. and /.. fine.
 * @param $path
 * @return string
 */ function get_absolute_path($g52){$g52=str_replace(array('/','\\'),DIRECTORY_SEPARATOR,$g52);$i206=array_filter(explode(DIRECTORY_SEPARATOR,$g52),'strlen');$b207=array();foreach($i206 as $h208){if('.'==$h208)continue;if('..'==$h208){array_pop($b207);}else{$b207[]=$h208;}}return implode(DIRECTORY_SEPARATOR,$b207);}/**
 * Clean path
 * @param string $path
 * @return string
 */ function fm_clean_path($g52,$t209=true){$g52=$t209?trim($g52):$g52;$g52=trim($g52,'\\/');$g52=str_replace(array('../','..\\'),'',$g52);$g52=get_absolute_path($g52);if($g52=='..'){$g52='';}return str_replace('\\','/',$g52);}/**
 * Get parent path
 * @param string $path
 * @return bool|string
 */ function fm_get_parent_path($g52){$g52=fm_clean_path($g52);if($g52!=''){$s210=explode('/',$g52);if(count($s210)>1){$s210=array_slice($s210,0,-1);return implode('/',$s210);}return '';}return false;}function fm_get_display_path($e54){global $z15,$t10,$e11;switch($z15){case 'relative':returnarray('label'=>'Path','path'=>fm_enc(fm_convert_win(str_replace($t10,'',$e54))));case 'host':$f211=str_replace($t10,'',$e54);returnarray('label'=>'Host Path','path'=>fm_enc(fm_convert_win('/'.$e11.'/'.ltrim(str_replace('\\','/',$f211),'/'))));case 'full':default:returnarray('label'=>'Full Path','path'=>fm_enc(fm_convert_win($e54)));}}/**
 * Check file is in exclude list
 * @param string $file
 * @return bool
 */ function fm_is_exclude_items($v40){$b83=strtolower(pathinfo($v40,PATHINFO_EXTENSION));if(isset($g19)and sizeof($g19)){unset($g19);}$g19=FM_EXCLUDE_ITEMS;if(version_compare(PHP_VERSION,'7.0.0','<')){$g19=unserialize($g19);}if(!in_array($v40,$g19)&&!in_array("*.$b83",$g19)){return true;}return false;}/**
 * get language translations from json file
 * @param int $tr
 * @return array
 */ function fm_get_translations($t212){try{$f164=@file_get_contents('translation.json');if($f164!==FALSE){$s213=json_decode($f164,TRUE);global $p37;foreach($s213["language"]as $j193=>$p214){$b38=$p214["code"];$p37[$b38]=$p214["name"];if($t212)$t212[$b38]=$p214["translation"];}return $t212;}}catch(Exception $i64){echo $i64;}}/**
 * @param string $file
 * Recover all file sizes larger than > 2GB.
 * Works on php 32bits and 64bits and supports linux
 * @return int|string
 */ function fm_get_size($v40){static $x215;static $m216;if(!isset($x215)){$x215=(strtoupper(substr(PHP_OS,0,3))=='WIN');}if(!isset($m216)){$m216=(strtoupper(substr(PHP_OS,0))=="DARWIN");}static $t217;if(!isset($t217)){$t217=(function_exists('exec')&&!ini_get('safe_mode')&&@exec('echo EXEC')=='EXEC');}if($t217){$m218=escapeshellarg($v40);$g219=($x215)?"for %F in (\"$v40\") do @echo %~zF":($m216?"stat -f%z $m218":"stat -c%s $m218");@exec($g219,$h220);if(is_array($h220)&&ctype_digit($w221=trim(implode("\n",$h220)))){return $w221;}}if($x215&&class_exists("COM")){try{$b222=new COM('Scripting.FileSystemObject');$h111=$b222->GetFile(realpath($v40));$w221=$h111->$e89;}catch(Exception $i64){$w221=null;}if(ctype_digit($w221)){return $w221;}}return filesize($v40);}/**
 * Get nice filesize
 * @param int $size
 * @return string
 */ function fm_get_filesize($w221){$w221=(float)$w221;$u223=array('B','KB','MB','GB','TB','PB','EB','ZB','YB');$k224=($w221>0)?floor(log($w221,1024)):0;$k224=($k224>(count($u223)-1))?(count($u223)-1):$k224;return sprintf('%s %s',round($w221/pow(1024,$k224),2),$u223[$k224]);}/**
 * Get total size of directory tree.
 *
 * @param  string $directory Relative or absolute directory name.
 * @return int Total number of bytes.
 */ function fm_get_directorysize($r225){$i226=0;$r225=realpath($r225);if($r225!==false&&$r225!=''&&file_exists($r225)){foreach(new RecursiveIteratorIterator(new RecursiveDirectoryIterator($r225,FilesystemIterator::SKIP_DOTS))as $v40){$i226+=$v40->getSize();}}return $i226;}/**
 * Get info about zip archive
 * @param string $path
 * @return array|bool
 */ function fm_get_zif_info($g52,$b83){if($b83=='zip'&&function_exists('zip_open')){$a227=@zip_open($g52);if($a227){$k163=array();while($r228=@zip_read($a227)){$r172=@zip_entry_name($r228);$a229=substr($r172,-1)=='/';$k163[]=array('name'=>$r172,'filesize'=>@zip_entry_filesize($r228),'compressed_size'=>@zip_entry_compressedsize($r228),'folder'=>$a229 );}@zip_close($a227);return $k163;}}elseif($b83=='tar'&&class_exists('PharData')){$i230=new PharData($g52);$k163=array();foreach(new RecursiveIteratorIterator($i230)as $v40){$m231=$v40->getPathInfo();$r172=str_replace("phar://".$g52,'',$v40->getPathName());$r172=substr($r172,($g232=strpos($r172,'/'))!==false?$g232+1:0);$a229=$m231->getFileName();$j233=new SplFileInfo($v40);$k163[]=array('name'=>$r172,'filesize'=>$j233->getSize(),'compressed_size'=>$v40->getCompressedSize(),'folder'=>$a229);}return $k163;}return false;}/**
 * Encode html entities
 * @param string $text
 * @return string
 */ function fm_enc($v234){return htmlspecialchars($v234,ENT_QUOTES,'UTF-8');}/**
 * Prevent XSS attacks
 * @param string $text
 * @return string
 */ function fm_isvalid_filename($v234){return(strpbrk($v234,'/?%*:|"<>')===FALSE)?true:false;}/**
 * Save message in session
 * @param string $msg
 * @param string $status
 */ function fm_set_msg($w39,$a235='ok'){$_SESSION[FM_SESSION_ID]['message']=$w39;$_SESSION[FM_SESSION_ID]['status']=$a235;}/**
 * Check if string is in UTF-8
 * @param string $string
 * @return int
 */ function fm_is_utf8($u236){return preg_match('//u',$u236);}/**
 * Convert file name to UTF-8 in Windows
 * @param string $filename
 * @return string
 */ function fm_convert_win($r119){if(FM_IS_WIN&&function_exists('iconv')){$r119=iconv(FM_ICONV_INPUT_ENC,'UTF-8//IGNORE',$r119);}return $r119;}/**
 * @param $obj
 * @return array
 */ function fm_object_to_array($p237){if(!is_object($p237)&&!is_array($p237)){return $p237;}if(is_object($p237)){$p237=get_object_vars($p237);}return array_map('fm_object_to_array',$p237);}/**
 * Get CSS classname for file
 * @param string $path
 * @return string
 */ function fm_get_file_icon_class($g52){$b83=strtolower(pathinfo($g52,PATHINFO_EXTENSION));switch($b83){case 'ico':case 'gif':case 'jpg':case 'jpeg':case 'jpc':case 'jp2':case 'jpx':case 'xbm':case 'wbmp':case 'png':case 'bmp':case 'tif':case 'tiff':case 'webp':case 'avif':case 'svg':$e183='fa fa-picture-o';break;case 'passwd':case 'ftpquota':case 'sql':case 'js':case 'ts':case 'jsx':case 'tsx':case 'hbs':case 'json':case 'sh':case 'config':case 'twig':case 'tpl':case 'md':case 'gitignore':case 'c':case 'cpp':case 'cs':case 'py':case 'rs':case 'map':case 'lock':case 'dtd':$e183='fa fa-file-code-o';break;case 'txt':case 'ini':case 'conf':case 'log':case 'htaccess':case 'yaml':case 'yml':case 'toml':case 'tmp':case 'top':case 'bot':case 'dat':case 'bak':case 'htpasswd':case 'pl':$e183='fa fa-file-text-o';break;case 'css':case 'less':case 'sass':case 'scss':$e183='fa fa-css3';break;case 'bz2':case 'zip':case 'rar':case 'gz':case 'tar':case '7z':case 'xz':$e183='fa fa-file-archive-o';break;case 'php':case 'php4':case 'php5':case 'phps':case 'phtml':$e183='fa fa-code';break;case 'htm':case 'html':case 'shtml':case 'xhtml':$e183='fa fa-html5';break;case 'xml':case 'xsl':$e183='fa fa-file-excel-o';break;case 'wav':case 'mp3':case 'mp2':case 'm4a':case 'aac':case 'ogg':case 'oga':case 'wma':case 'mka':case 'flac':case 'ac3':case 'tds':$e183='fa fa-music';break;case 'm3u':case 'm3u8':case 'pls':case 'cue':case 'xspf':$e183='fa fa-headphones';break;case 'avi':case 'mpg':case 'mpeg':case 'mp4':case 'm4v':case 'flv':case 'f4v':case 'ogm':case 'ogv':case 'mov':case 'mkv':case '3gp':case 'asf':case 'wmv':case 'webm':$e183='fa fa-file-video-o';break;case 'eml':case 'msg':$e183='fa fa-envelope-o';break;case 'xls':case 'xlsx':case 'ods':$e183='fa fa-file-excel-o';break;case 'csv':$e183='fa fa-file-text-o';break;case 'bak':case 'swp':$e183='fa fa-clipboard';break;case 'doc':case 'docx':case 'odt':$e183='fa fa-file-word-o';break;case 'ppt':case 'pptx':$e183='fa fa-file-powerpoint-o';break;case 'ttf':case 'ttc':case 'otf':case 'woff':case 'woff2':case 'eot':case 'fon':$e183='fa fa-font';break;case 'pdf':$e183='fa fa-file-pdf-o';break;case 'psd':case 'ai':case 'eps':case 'fla':case 'swf':$e183='fa fa-file-image-o';break;case 'exe':case 'msi':$e183='fa fa-file-o';break;case 'bat':$e183='fa fa-terminal';break;default:$e183='fa fa-info-circle';}return $e183;}/**
 * Get image files extensions
 * @return array
 */ function fm_get_image_exts(){returnarray('ico','gif','jpg','jpeg','jpc','jp2','jpx','xbm','wbmp','png','bmp','tif','tiff','psd','svg','webp','avif');}/**
 * Get video files extensions
 * @return array
 */ function fm_get_video_exts(){returnarray('avi','webm','wmv','mp4','m4v','ogm','ogv','mov','mkv');}/**
 * Get audio files extensions
 * @return array
 */ function fm_get_audio_exts(){returnarray('wav','mp3','ogg','m4a');}/**
 * Get text file extensions
 * @return array
 */ function fm_get_text_exts(){returnarray('txt','css','ini','conf','log','htaccess','passwd','ftpquota','sql','js','ts','jsx','tsx','mjs','json','sh','config','php','php4','php5','phps','phtml','htm','html','shtml','xhtml','xml','xsl','m3u','m3u8','pls','cue','bash','vue','eml','msg','csv','bat','twig','tpl','md','gitignore','less','sass','scss','c','cpp','cs','py','go','zsh','swift','map','lock','dtd','svg','asp','aspx','asx','asmx','ashx','jsp','jspx','cgi','dockerfile','ruby','yml','yaml','toml','vhost','scpt','applescript','csx','cshtml','c++','coffee','cfm','rb','graphql','mustache','jinja','http','handlebars','java','es','es6','markdown','wiki','tmp','top','bot','dat','bak','htpasswd','pl');}/**
 * Get mime types of text files
 * @return array
 */ function fm_get_text_mimes(){returnarray('application/xml','application/javascript','application/x-javascript','image/svg+xml','message/rfc822','application/json',);}/**
 * Get file names of text files w/o extensions
 * @return array
 */ function fm_get_text_names(){returnarray('license','readme','authors','contributors','changelog',);}/**
 * Get online docs viewer supported files extensions
 * @return array
 */ function fm_get_onlineViewer_exts(){returnarray('doc','docx','xls','xlsx','pdf','ppt','pptx','ai','psd','dxf','xps','rar','odt','ods');}/**
 * It returns the mime type of a file based on its extension.
 * @param extension The file extension of the file you want to get the mime type for.
 * @return string|string[] The mime type of the file.
 */ function fm_get_file_mimes($q238){$r239['swf']='application/x-shockwave-flash';$r239['pdf']='application/pdf';$r239['exe']='application/octet-stream';$r239['zip']='application/zip';$r239['doc']='application/msword';$r239['xls']='application/vnd.ms-excel';$r239['ppt']='application/vnd.ms-powerpoint';$r239['gif']='image/gif';$r239['png']='image/png';$r239['jpeg']='image/jpg';$r239['jpg']='image/jpg';$r239['webp']='image/webp';$r239['avif']='image/avif';$r239['rar']='application/rar';$r239['ra']='audio/x-pn-realaudio';$r239['ram']='audio/x-pn-realaudio';$r239['ogg']='audio/x-pn-realaudio';$r239['wav']='video/x-msvideo';$r239['wmv']='video/x-msvideo';$r239['avi']='video/x-msvideo';$r239['asf']='video/x-msvideo';$r239['divx']='video/x-msvideo';$r239['mp3']='audio/mpeg';$r239['mp4']='audio/mpeg';$r239['mpeg']='video/mpeg';$r239['mpg']='video/mpeg';$r239['mpe']='video/mpeg';$r239['mov']='video/quicktime';$r239['swf']='video/quicktime';$r239['3gp']='video/quicktime';$r239['m4a']='video/quicktime';$r239['aac']='video/quicktime';$r239['m3u']='video/quicktime';$r239['php']=['application/x-php'];$r239['html']=['text/html'];$r239['txt']=['text/plain'];if(empty($r239[$q238])){$r239[$q238]=['application/octet-stream'];}return $r239[$q238];}/**
 * This function scans the files and folder recursively, and return matching files
 * @param string $dir
 * @param string $filter
 * @return array|null
 */ function scan($e50='',$p240=''){$g52=FM_ROOT_PATH.'/'.$e50;if($g52){$e241=new RecursiveIteratorIterator(new RecursiveDirectoryIterator($g52));$n242=new RegexIterator($e241,"/(".$p240.")/i");$x110=array();foreach($n242 as $v40){if(!$v40->isDir()){$s58=$v40->getFilename();$c243=str_replace(FM_ROOT_PATH,'',$v40->getPath());$x110[]=array("name"=>$s58,"type"=>"file","path"=>$c243,);}}return $x110;}}/**
* Parameters: downloadFile(File Location, File Name,
* max speed, is streaming
* If streaming - videos will show as videos, images as images
* instead of download prompt
* https://stackoverflow.com/a/13821992/1164642
*/ function fm_download_file($u244,$s58,$j245=1024){if(connection_status()!=0)return(false);$q238=pathinfo($s58,PATHINFO_EXTENSION);$b246=fm_get_file_mimes($q238);if(is_array($b246)){$b246=implode(' ',$b246);}$w221=filesize($u244);if($w221==0){fm_set_msg(lng('Zero byte file! Aborting download'),'error');$p53=FM_PATH;fm_redirect(FM_SELF_URL.'?p='.urlencode($p53));return(false);}@ini_set('magic_quotes_runtime',0);$p86=fopen("$u244","rb");if($p86===false){fm_set_msg(lng('Cannot open file! Aborting download'),'error');$p53=FM_PATH;fm_redirect(FM_SELF_URL.'?p='.urlencode($p53));return(false);}header('Content-Description: File Transfer');header('Expires: 0');header('Cache-Control: must-revalidate, post-check=0, pre-check=0');header('Pragma: public');header("Content-Transfer-Encoding: binary");header("Content-Type: $b246");$w247='attachment';if(strstr($_SERVER['HTTP_USER_AGENT'],"MSIE")){$s58=preg_replace('/\./','%2e',$s58,substr_count($s58,'.')-1);header("Content-Disposition: $w247;filename=\"$s58\"");}else{header("Content-Disposition: $w247;filename=\"$s58\"");}header("Accept-Ranges: bytes");$u248=0;if(isset($_SERVER['HTTP_RANGE'])){list($t249,$u248)=explode("=",$_SERVER['HTTP_RANGE']);str_replace($u248,"-",$u248);$l250=$w221-1;$p251=$w221-$u248;header("HTTP/1.1 206 Partial Content");header("Content-Length: $p251");header("Content-Range: bytes $u248$l250/$w221");}else{$l250=$w221-1;header("Content-Range: bytes 0-$l250/$w221");header("Content-Length: ".$w221);}$u244=realpath($u244);while(ob_get_level())ob_end_clean();readfile($u244);fclose($p86);return((connection_status()==0)and!connection_aborted());}/**
 * If the theme is dark, return the text-white and bg-dark classes.
 * @return string the value of the  variable.
 */ function fm_get_theme(){$g252='';if(FM_THEME=="dark"){$g252="text-white bg-dark";}return $g252;}/**
 * Class to work with zip files (using ZipArchive)
 */ class FM_Zipper{private $t253;public function __construct(){$this->$u254=new ZipArchive();}/**
     * Create archive with name $filename and files $files (RELATIVE PATHS!)
     * @param string $filename
     * @param array|string $files
     * @return bool
     */ public function create($r119,$x110){$z70=$this->$u254->open($r119,ZipArchive::CREATE);if($z70!==true){return false;}if(is_array($x110)){foreach($x110 as $h111){$h111=fm_clean_path($h111);if(!$this->addFileOrDir($h111)){$this->$u254->close();return false;}}$this->$u254->close();return true;}else{if($this->addFileOrDir($x110)){$this->$u254->close();return true;}return false;}}/**
     * Extract archive $filename to folder $path (RELATIVE OR ABSOLUTE PATHS)
     * @param string $filename
     * @param string $path
     * @return bool
     */ public function unzip($r119,$g52){$z70=$this->$u254->open($r119);if($z70!==true){return false;}if($this->$u254->extractTo($g52)){$this->$u254->close();return true;}return false;}/**
     * Add file/folder to archive
     * @param string $filename
     * @return bool
     */ private function addFileOrDir($r119){if(is_file($r119)){return $this->$u254->addFile($r119);}elseif(is_dir($r119)){return $this->addDir($r119);}return false;}/**
     * Add folder recursively
     * @param string $path
     * @return bool
     */ private function addDir($g52){if(!$this->$u254->addEmptyDir($g52)){return false;}$g141=scandir($g52);if(is_array($g141)){foreach($g141 as $v40){if($v40!='.'&&$v40!='..'){if(is_dir($g52.'/'.$v40)){if(!$this->addDir($g52.'/'.$v40)){return false;}}elseif(is_file($g52.'/'.$v40)){if(!$this->$u254->addFile($g52.'/'.$v40)){return false;}}}}return true;}return false;}}/**
 * Class to work with Tar files (using PharData)
 */ class FM_Zipper_Tar{private $d133;public function __construct(){$this->$o255=null;}/**
     * Create archive with name $filename and files $files (RELATIVE PATHS!)
     * @param string $filename
     * @param array|string $files
     * @return bool
     */ public function create($r119,$x110){$this->$o255=new PharData($r119);if(is_array($x110)){foreach($x110 as $h111){$h111=fm_clean_path($h111);if(!$this->addFileOrDir($h111)){return false;}}return true;}else{if($this->addFileOrDir($x110)){return true;}return false;}}/**
     * Extract archive $filename to folder $path (RELATIVE OR ABSOLUTE PATHS)
     * @param string $filename
     * @param string $path
     * @return bool
     */ public function unzip($r119,$g52){$z70=$this->$o255->open($r119);if($z70!==true){return false;}if($this->$o255->extractTo($g52)){return true;}return false;}/**
     * Add file/folder to archive
     * @param string $filename
     * @return bool
     */ private function addFileOrDir($r119){if(is_file($r119)){try{$this->$o255->addFile($r119);return true;}catch(Exception $i64){return false;}}elseif(is_dir($r119)){return $this->addDir($r119);}return false;}/**
     * Add folder recursively
     * @param string $path
     * @return bool
     */ private function addDir($g52){$g141=scandir($g52);if(is_array($g141)){foreach($g141 as $v40){if($v40!='.'&&$v40!='..'){if(is_dir($g52.'/'.$v40)){if(!$this->addDir($g52.'/'.$v40)){return false;}}elseif(is_file($g52.'/'.$v40)){try{$this->$o255->addFile($g52.'/'.$v40);}catch(Exception $i64){return false;}}}}return true;}return false;}}/**
 * Save Configuration
 */ class FM_Config{var $e256;function __construct(){global $t10,$e11,$r0;$d257=$e11.$_SERVER["PHP_SELF"];$this->$w32=array('lang'=>'en','error_reporting'=>true,'show_hidden'=>true);$e256=false;if(strlen($r0)){$e256=fm_object_to_array(json_decode($r0));}else{$w39='Tiny File Manager<br>Error: Cannot load configuration';if(substr($d257,-1)=='/'){$d257=rtrim($d257,'/');$w39.='<br>';$w39.='<br>Seems like you have a trailing slash on the URL.';$w39.='<br>Try this link: <a href="'.$d257.'">'.$d257.'</a>';}die($w39);}if(is_array($e256)&&count($e256))$this->$w32=$e256;else $this->save();}function save(){$w258=__FILE__;$x259='$CONFIG';$f260=var_export(json_encode($this->$w32),true);$t261="<?php".chr(13).chr(10)."//Default Configuration".chr(13).chr(10)."$x259 = $f260;".chr(13).chr(10);if(is_writable($w258)){$v262=file($w258);if($b263=@fopen($w258,"w")){@fputs($b263,$t261,strlen($t261));for($h145=3;$h145<count($v262);$h145++){@fputs($b263,$v262[$h145],strlen($v262[$h145]));}@fclose($b263);}}}}/**
 * Show nav block
 * @param string $path
 */ function fm_show_nav_path($g52){global $n31,$r21,$o175;$x264=$r21?'fixed-top':'';$p265=fm_get_theme();$p265.=" navbar-light";if(FM_THEME=="dark"){$p265.=" navbar-dark";}else{$p265.=" bg-white";}?>
    <nav class="navbar navbar-expand-lg <?php echo $p265;?> mb-4 main-nav <?php echo $x264 ?>">
        <a class="navbar-brand"> <?php echo lng('AppTitle')?> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <?php $g52=fm_clean_path($g52);$e11="<a href='?p='><i class='fa fa-home' aria-hidden='true' title='".FM_ROOT_PATH."'></i></a>";$i266='<i class="bread-crumb"> / </i>';if($g52!=''){$k267=explode('/',$g52);$s268=count($k267);$s210=array();$y140='';for($d269=0;$d269<$s268;$d269++){$y140=trim($y140.'/'.$k267[$d269],'/');$k270=urlencode($y140);$s210[]="<a href='?p={$k270}'>".fm_enc(fm_convert_win($k267[$d269]))."</a>";}$e11.=$i266.implode($i266,$s210);}echo '<div class="col-xs-6 col-sm-5">'.$e11.$o175.'</div>';?>

            <div class="col-xs-6 col-sm-7">
                <ul class="navbar-nav justify-content-end <?php echo fm_get_theme();?>">
                    <li class="nav-item mr-2">
                        <div class="input-group input-group-sm mr-1" style="margin-top:4px;">
                            <input type="text" class="form-control" placeholder="<?php echo lng('Search')?>" aria-label="<?php echo lng('Search')?>" aria-describedby="search-addon2" id="search-addon">
                            <div class="input-group-append">
                                <span class="input-group-text brl-0 brr-0" id="search-addon2"><i class="fa fa-search"></i></span>
                            </div>
                            <div class="input-group-append btn-group">
                                <span class="input-group-text dropdown-toggle brl-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span>
                                  <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="<?php echo $b271=$g52?$g52:'.';?>" id="js-search-modal" data-bs-toggle="modal" data-bs-target="#searchModal"><?php echo lng('Advanced Search')?></a>
                                  </div>
                            </div>
                        </div>
                    </li>
                    <?php if(!FM_READONLY):?>
                    <li class="nav-item">
                        <a title="<?php echo lng('Upload')?>" class="nav-link" href="?p=<?php echo urlencode(FM_PATH)?>&amp;upload"><i class="fa fa-cloud-upload" aria-hidden="true"></i> <?php echo lng('Upload')?></a>
                    </li>
                    <li class="nav-item">
                        <a title="<?php echo lng('NewItem')?>" class="nav-link" href="#createNewItem" data-bs-toggle="modal" data-bs-target="#createNewItem"><i class="fa fa-plus-square"></i> <?php echo lng('NewItem')?></a>
                    </li>
                    <?php endif;?>
                    <?php if(FM_USE_AUTH):?>
                    <li class="nav-item avatar dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-5" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-user-circle"></i> <?php if(isset($_SESSION[FM_SESSION_ID]['logged'])){echo $_SESSION[FM_SESSION_ID]['logged'];}?></a>
                        <div class="dropdown-menu text-small shadow <?php echo fm_get_theme();?>" aria-labelledby="navbarDropdownMenuLink-5">
                            <?php if(!FM_READONLY):?>
                            <a title="<?php echo lng('Settings')?>" class="dropdown-item nav-link" href="?p=<?php echo urlencode(FM_PATH)?>&amp;settings=1"><i class="fa fa-cog" aria-hidden="true"></i> <?php echo lng('Settings')?></a>
                            <?php endif ?>
                            <a title="<?php echo lng('Help')?>" class="dropdown-item nav-link" href="?p=<?php echo urlencode(FM_PATH)?>&amp;help=2"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> <?php echo lng('Help')?></a>
                            <a title="<?php echo lng('Logout')?>" class="dropdown-item nav-link" href="?logout=1"><i class="fa fa-sign-out" aria-hidden="true"></i> <?php echo lng('Logout')?></a>
                        </div>
                    </li>
                    <?php else:?>
                        <?php if(!FM_READONLY):?>
                            <li class="nav-item">
                                <a title="<?php echo lng('Settings')?>" class="dropdown-item nav-link" href="?p=<?php echo urlencode(FM_PATH)?>&amp;settings=1"><i class="fa fa-cog" aria-hidden="true"></i> <?php echo lng('Settings')?></a>
                            </li>
                        <?php endif;?>
                    <?php endif;?>
                </ul>
            </div>
        </div>
    </nav>
    <?php }/**
 * Show alert message from session
 */ function fm_show_message(){if(isset($_SESSION[FM_SESSION_ID]['message'])){$o272=isset($_SESSION[FM_SESSION_ID]['status'])?$_SESSION[FM_SESSION_ID]['status']:'ok';echo '<p class="message '.$o272.'">'.$_SESSION[FM_SESSION_ID]['message'].'</p>';unset($_SESSION[FM_SESSION_ID]['message']);unset($_SESSION[FM_SESSION_ID]['status']);}}/**
 * Show page header in Login Form
 */ function fm_show_header_login(){$i273='20160315';header("Content-Type: text/html; charset=utf-8");header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");header("Pragma: no-cache");global $n31,$e11,$n18;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Web based File Manager in PHP, Manage your files efficiently and easily with Tiny File Manager">
    <meta name="author" content="CCP Programmers">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex">
    <?php if($n18){echo '<link rel="icon" href="'.fm_enc($n18).'" type="image/png">';}?>
    <title><?php echo fm_enc(APP_TITLE)?></title>
    <?php print_external('pre-jsdelivr');?>
    <?php print_external('css-bootstrap');?>
    <style>
        body.fm-login-page{ background-color:#f7f9fb;font-size:14px;background-color:#f7f9fb;background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 304 304' width='304' height='304'%3E%3Cpath fill='%23e2e9f1' fill-opacity='0.4' d='M44.1 224a5 5 0 1 1 0 2H0v-2h44.1zm160 48a5 5 0 1 1 0 2H82v-2h122.1zm57.8-46a5 5 0 1 1 0-2H304v2h-42.1zm0 16a5 5 0 1 1 0-2H304v2h-42.1zm6.2-114a5 5 0 1 1 0 2h-86.2a5 5 0 1 1 0-2h86.2zm-256-48a5 5 0 1 1 0 2H0v-2h12.1zm185.8 34a5 5 0 1 1 0-2h86.2a5 5 0 1 1 0 2h-86.2zM258 12.1a5 5 0 1 1-2 0V0h2v12.1zm-64 208a5 5 0 1 1-2 0v-54.2a5 5 0 1 1 2 0v54.2zm48-198.2V80h62v2h-64V21.9a5 5 0 1 1 2 0zm16 16V64h46v2h-48V37.9a5 5 0 1 1 2 0zm-128 96V208h16v12.1a5 5 0 1 1-2 0V210h-16v-76.1a5 5 0 1 1 2 0zm-5.9-21.9a5 5 0 1 1 0 2H114v48H85.9a5 5 0 1 1 0-2H112v-48h12.1zm-6.2 130a5 5 0 1 1 0-2H176v-74.1a5 5 0 1 1 2 0V242h-60.1zm-16-64a5 5 0 1 1 0-2H114v48h10.1a5 5 0 1 1 0 2H112v-48h-10.1zM66 284.1a5 5 0 1 1-2 0V274H50v30h-2v-32h18v12.1zM236.1 176a5 5 0 1 1 0 2H226v94h48v32h-2v-30h-48v-98h12.1zm25.8-30a5 5 0 1 1 0-2H274v44.1a5 5 0 1 1-2 0V146h-10.1zm-64 96a5 5 0 1 1 0-2H208v-80h16v-14h-42.1a5 5 0 1 1 0-2H226v18h-16v80h-12.1zm86.2-210a5 5 0 1 1 0 2H272V0h2v32h10.1zM98 101.9V146H53.9a5 5 0 1 1 0-2H96v-42.1a5 5 0 1 1 2 0zM53.9 34a5 5 0 1 1 0-2H80V0h2v34H53.9zm60.1 3.9V66H82v64H69.9a5 5 0 1 1 0-2H80V64h32V37.9a5 5 0 1 1 2 0zM101.9 82a5 5 0 1 1 0-2H128V37.9a5 5 0 1 1 2 0V82h-28.1zm16-64a5 5 0 1 1 0-2H146v44.1a5 5 0 1 1-2 0V18h-26.1zm102.2 270a5 5 0 1 1 0 2H98v14h-2v-16h124.1zM242 149.9V160h16v34h-16v62h48v48h-2v-46h-48v-66h16v-30h-16v-12.1a5 5 0 1 1 2 0zM53.9 18a5 5 0 1 1 0-2H64V2H48V0h18v18H53.9zm112 32a5 5 0 1 1 0-2H192V0h50v2h-48v48h-28.1zm-48-48a5 5 0 0 1-9.8-2h2.07a3 3 0 1 0 5.66 0H178v34h-18V21.9a5 5 0 1 1 2 0V32h14V2h-58.1zm0 96a5 5 0 1 1 0-2H137l32-32h39V21.9a5 5 0 1 1 2 0V66h-40.17l-32 32H117.9zm28.1 90.1a5 5 0 1 1-2 0v-76.51L175.59 80H224V21.9a5 5 0 1 1 2 0V82h-49.59L146 112.41v75.69zm16 32a5 5 0 1 1-2 0v-99.51L184.59 96H300.1a5 5 0 0 1 3.9-3.9v2.07a3 3 0 0 0 0 5.66v2.07a5 5 0 0 1-3.9-3.9H185.41L162 121.41v98.69zm-144-64a5 5 0 1 1-2 0v-3.51l48-48V48h32V0h2v50H66v55.41l-48 48v2.69zM50 53.9v43.51l-48 48V208h26.1a5 5 0 1 1 0 2H0v-65.41l48-48V53.9a5 5 0 1 1 2 0zm-16 16V89.41l-34 34v-2.82l32-32V69.9a5 5 0 1 1 2 0zM12.1 32a5 5 0 1 1 0 2H9.41L0 43.41V40.6L8.59 32h3.51zm265.8 18a5 5 0 1 1 0-2h18.69l7.41-7.41v2.82L297.41 50H277.9zm-16 160a5 5 0 1 1 0-2H288v-71.41l16-16v2.82l-14 14V210h-28.1zm-208 32a5 5 0 1 1 0-2H64v-22.59L40.59 194H21.9a5 5 0 1 1 0-2H41.41L66 216.59V242H53.9zm150.2 14a5 5 0 1 1 0 2H96v-56.6L56.6 162H37.9a5 5 0 1 1 0-2h19.5L98 200.6V256h106.1zm-150.2 2a5 5 0 1 1 0-2H80v-46.59L48.59 178H21.9a5 5 0 1 1 0-2H49.41L82 208.59V258H53.9zM34 39.8v1.61L9.41 66H0v-2h8.59L32 40.59V0h2v39.8zM2 300.1a5 5 0 0 1 3.9 3.9H3.83A3 3 0 0 0 0 302.17V256h18v48h-2v-46H2v42.1zM34 241v63h-2v-62H0v-2h34v1zM17 18H0v-2h16V0h2v18h-1zm273-2h14v2h-16V0h2v16zm-32 273v15h-2v-14h-14v14h-2v-16h18v1zM0 92.1A5.02 5.02 0 0 1 6 97a5 5 0 0 1-6 4.9v-2.07a3 3 0 1 0 0-5.66V92.1zM80 272h2v32h-2v-32zm37.9 32h-2.07a3 3 0 0 0-5.66 0h-2.07a5 5 0 0 1 9.8 0zM5.9 0A5.02 5.02 0 0 1 0 5.9V3.83A3 3 0 0 0 3.83 0H5.9zm294.2 0h2.07A3 3 0 0 0 304 3.83V5.9a5 5 0 0 1-3.9-5.9zm3.9 300.1v2.07a3 3 0 0 0-1.83 1.83h-2.07a5 5 0 0 1 3.9-3.9zM97 100a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-48 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 48a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 96a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-144a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-96 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm96 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-32 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM49 36a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-32 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM33 68a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-48a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 240a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm80-176a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 48a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm112 176a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM17 180a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM17 84a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6z'%3E%3C/path%3E%3C/svg%3E");}
        .fm-login-page .brand{ width:121px;overflow:hidden;margin:0 auto;position:relative;z-index:1}
        .fm-login-page .brand img{ width:100%}
        .fm-login-page .card-wrapper{ width:360px;margin-top:10%;margin-left:auto;margin-right:auto;}
        .fm-login-page .card{ border-color:transparent;box-shadow:0 4px 8px rgba(0,0,0,.05)}
        .fm-login-page .card-title{ margin-bottom:1.5rem;font-size:24px;font-weight:400;}
        .fm-login-page .form-control{ border-width:2.3px}
        .fm-login-page .form-group label{ width:100%}
        .fm-login-page .btn.btn-block{ padding:12px 10px}
        .fm-login-page .footer{ margin:40px 0;color:#888;text-align:center}
        @media screen and (max-width:425px){
            .fm-login-page .card-wrapper{ width:90%;margin:0 auto;margin-top:10%;}
        }
        @media screen and (max-width:320px){
            .fm-login-page .card.fat{ padding:0}
            .fm-login-page .card.fat .card-body{ padding:15px}
        }
        .message{ padding:4px 7px;border:1px solid #ddd;background-color:#fff}
        .message.ok{ border-color:green;color:green}
        .message.error{ border-color:red;color:red}
        .message.alert{ border-color:orange;color:orange}
        body.fm-login-page.theme-dark {background-color: #2f2a2a;}
        .theme-dark svg g, .theme-dark svg path {fill: #ffffff; }
    </style>
</head>
<body class="fm-login-page <?php echo(FM_THEME=="dark")?'theme-dark':'';?>">
<div id="wrapper" class="container-fluid">

    <?php }/**
     * Show page footer in Login Form
     */ function fm_show_footer_login(){?>
</div>
<?php print_external('js-jquery');?>
<?php print_external('js-bootstrap');?>
</body>
</html>
<?php }/**
 * Show Header after login
 */ function fm_show_header(){$i273='20160315';header("Content-Type: text/html; charset=utf-8");header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");header("Pragma: no-cache");global $n31,$e11,$r21,$n18;$x264=$r21?'navbar-fixed':'navbar-normal';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Web based File Manager in PHP, Manage your files efficiently and easily with Tiny File Manager">
    <meta name="author" content="CCP Programmers">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex">
    <?php if($n18){echo '<link rel="icon" href="'.fm_enc($n18).'" type="image/png">';}?>
    <title><?php echo fm_enc(APP_TITLE)?></title>
    <?php print_external('pre-jsdelivr');?>
    <?php print_external('pre-cloudflare');?>
    <?php print_external('css-bootstrap');?>
    <?php print_external('css-font-awesome');?>
    <?php if(FM_USE_HIGHLIGHTJS&&isset($_GET['view'])):?>
    <?php print_external('css-highlightjs');?>
    <?php endif;?>
    <script type="text/javascript">window.csrf = '<?php echo $_SESSION['token'];?>';</script>
    <style>
        html { -moz-osx-font-smoothing: grayscale; -webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility; height: 100%; scroll-behavior: smooth;}
        *,*::before,*::after { box-sizing: border-box;}
        body { font-size:15px; color:#222;background:#F7F7F7; }
        body.navbar-fixed { margin-top:55px; }
        a, a:hover, a:visited, a:focus { text-decoration:none !important; }
        .filename, td, th { white-space:nowrap  }
        .navbar-brand { font-weight:bold; }
        .nav-item.avatar a { cursor:pointer;text-transform:capitalize; }
        .nav-item.avatar a > i { font-size:15px; }
        .nav-item.avatar .dropdown-menu a { font-size:13px; }
        #search-addon { font-size:12px;border-right-width:0; }
        .brl-0 { background:transparent;border-left:0; border-top-left-radius: 0; border-bottom-left-radius: 0; }
        .brr-0 { border-top-right-radius: 0; border-bottom-right-radius: 0; }
        .bread-crumb { color:#cccccc;font-style:normal; }
        #main-table { transition: transform .25s cubic-bezier(0.4, 0.5, 0, 1),width 0s .25s;}
        #main-table .filename a { color:#222222; }
        .table td, .table th { vertical-align:middle !important; }
        .table .custom-checkbox-td .custom-control.custom-checkbox, .table .custom-checkbox-header .custom-control.custom-checkbox { min-width:18px; display: flex;align-items: center; justify-content: center; }
        .table-sm td, .table-sm th { padding:.4rem; }
        .table-bordered td, .table-bordered th { border:1px solid #f1f1f1; }
        .hidden { display:none  }
        pre.with-hljs { padding:0; overflow: hidden;  }
        pre.with-hljs code { margin:0;border:0;overflow:scroll;  }
        code.maxheight, pre.maxheight { max-height:512px  }
        .fa.fa-caret-right { font-size:1.2em;margin:0 4px;vertical-align:middle;color:#ececec  }
        .fa.fa-home { font-size:1.3em;vertical-align:bottom  }
        .path { margin-bottom:10px  }
        form.dropzone { min-height:200px;border:2px dashed #007bff;line-height:6rem; }
        .right { text-align:right  }
        .center, .close, .login-form, .preview-img-container { text-align:center  }
        .message { padding:4px 7px;border:1px solid #ddd;background-color:#fff  }
        .message.ok { border-color:green;color:green  }
        .message.error { border-color:red;color:red  }
        .message.alert { border-color:orange;color:orange  }
        .preview-img { max-width:100%;max-height:80vh;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAIAAACQkWg2AAAAKklEQVR42mL5//8/Azbw+PFjrOJMDCSCUQ3EABZc4S0rKzsaSvTTABBgAMyfCMsY4B9iAAAAAElFTkSuQmCC);cursor:zoom-in }
        input#preview-img-zoomCheck[type=checkbox] { display:none }
        input#preview-img-zoomCheck[type=checkbox]:checked ~ label > img { max-width:none;max-height:none;cursor:zoom-out }
        .inline-actions > a > i { font-size:1em;margin-left:5px;background:#3785c1;color:#fff;padding:3px 4px;border-radius:3px; }
        .preview-video { position:relative;max-width:100%;height:0;padding-bottom:62.5%;margin-bottom:10px  }
        .preview-video video { position:absolute;width:100%;height:100%;left:0;top:0;background:#000  }
        .compact-table { border:0;width:auto  }
        .compact-table td, .compact-table th { width:100px;border:0;text-align:center  }
        .compact-table tr:hover td { background-color:#fff  }
        .filename { max-width:420px;overflow:hidden;text-overflow:ellipsis  }
        .break-word { word-wrap:break-word;margin-left:30px  }
        .break-word.float-left a { color:#7d7d7d  }
        .break-word + .float-right { padding-right:30px;position:relative  }
        .break-word + .float-right > a { color:#7d7d7d;font-size:1.2em;margin-right:4px  }
        #editor { position:absolute;right:15px;top:100px;bottom:15px;left:15px  }
        @media (max-width:481px) {
            #editor { top:150px; }
        }
        #normal-editor { border-radius:3px;border-width:2px;padding:10px;outline:none; }
        .btn-2 { padding:4px 10px;font-size:small; }
        li.file:before,li.folder:before { font:normal normal normal 14px/1 FontAwesome;content:"\f016";margin-right:5px }
        li.folder:before { content:"\f114" }
        i.fa.fa-folder-o { color:#0157b3 }
        i.fa.fa-picture-o { color:#26b99a }
        i.fa.fa-file-archive-o { color:#da7d7d }
        .btn-2 i.fa.fa-file-archive-o { color:inherit }
        i.fa.fa-css3 { color:#f36fa0 }
        i.fa.fa-file-code-o { color:#007bff }
        i.fa.fa-code { color:#cc4b4c }
        i.fa.fa-file-text-o { color:#0096e6 }
        i.fa.fa-html5 { color:#d75e72 }
        i.fa.fa-file-excel-o { color:#09c55d }
        i.fa.fa-file-powerpoint-o { color:#f6712e }
        i.go-back { font-size:1.2em;color:#007bff; }
        .main-nav { padding:0.2rem 1rem;box-shadow:0 4px 5px 0 rgba(0, 0, 0, .14), 0 1px 10px 0 rgba(0, 0, 0, .12), 0 2px 4px -1px rgba(0, 0, 0, .2)  }
        .dataTables_filter { display:none; }
        table.dataTable thead .sorting { cursor:pointer;background-repeat:no-repeat;background-position:center right;background-image:url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAATCAQAAADYWf5HAAAAkElEQVQoz7XQMQ5AQBCF4dWQSJxC5wwax1Cq1e7BAdxD5SL+Tq/QCM1oNiJidwox0355mXnG/DrEtIQ6azioNZQxI0ykPhTQIwhCR+BmBYtlK7kLJYwWCcJA9M4qdrZrd8pPjZWPtOqdRQy320YSV17OatFC4euts6z39GYMKRPCTKY9UnPQ6P+GtMRfGtPnBCiqhAeJPmkqAAAAAElFTkSuQmCC'); }
        table.dataTable thead .sorting_asc { cursor:pointer;background-repeat:no-repeat;background-position:center right;background-image:url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAATCAYAAAByUDbMAAAAZ0lEQVQ4y2NgGLKgquEuFxBPAGI2ahhWCsS/gDibUoO0gPgxEP8H4ttArEyuQYxAPBdqEAxPBImTY5gjEL9DM+wTENuQahAvEO9DMwiGdwAxOymGJQLxTyD+jgWDxCMZRsEoGAVoAADeemwtPcZI2wAAAABJRU5ErkJggg=='); }
        table.dataTable thead .sorting_desc { cursor:pointer;background-repeat:no-repeat;background-position:center right;background-image:url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAATCAYAAAByUDbMAAAAZUlEQVQ4y2NgGAWjYBSggaqGu5FA/BOIv2PBIPFEUgxjB+IdQPwfC94HxLykus4GiD+hGfQOiB3J8SojEE9EM2wuSJzcsFMG4ttQgx4DsRalkZENxL+AuJQaMcsGxBOAmGvopk8AVz1sLZgg0bsAAAAASUVORK5CYII='); }
        table.dataTable thead tr:first-child th.custom-checkbox-header:first-child { background-image:none; }
        .footer-action li { margin-bottom:10px; }
        .app-v-title { font-size:24px;font-weight:300;letter-spacing:-.5px;text-transform:uppercase; }
        hr.custom-hr { border-top:1px dashed #8c8b8b;border-bottom:1px dashed #fff; }
        #snackbar { visibility:hidden;min-width:250px;margin-left:-125px;background-color:#333;color:#fff;text-align:center;border-radius:2px;padding:16px;position:fixed;z-index:1;left:50%;bottom:30px;font-size:17px; }
        #snackbar.show { visibility:visible;-webkit-animation:fadein 0.5s, fadeout 0.5s 2.5s;animation:fadein 0.5s, fadeout 0.5s 2.5s; }
        @-webkit-keyframes fadein { from { bottom:0;opacity:0; }
        to { bottom:30px;opacity:1; }
        }
        @keyframes fadein { from { bottom:0;opacity:0; }
        to { bottom:30px;opacity:1; }
        }
        @-webkit-keyframes fadeout { from { bottom:30px;opacity:1; }
        to { bottom:0;opacity:0; }
        }
        @keyframes fadeout { from { bottom:30px;opacity:1; }
        to { bottom:0;opacity:0; }
        }
        #main-table span.badge { border-bottom:2px solid #f8f9fa }
        #main-table span.badge:nth-child(1) { border-color:#df4227 }
        #main-table span.badge:nth-child(2) { border-color:#f8b600 }
        #main-table span.badge:nth-child(3) { border-color:#00bd60 }
        #main-table span.badge:nth-child(4) { border-color:#4581ff }
        #main-table span.badge:nth-child(5) { border-color:#ac68fc }
        #main-table span.badge:nth-child(6) { border-color:#45c3d2 }
        @media only screen and (min-device-width:768px) and (max-device-width:1024px) and (orientation:landscape) and (-webkit-min-device-pixel-ratio:2) { .navbar-collapse .col-xs-6 { padding:0; }
        }
        .btn.active.focus,.btn.active:focus,.btn.focus,.btn.focus:active,.btn:active:focus,.btn:focus { outline:0!important;outline-offset:0!important;background-image:none!important;-webkit-box-shadow:none!important;box-shadow:none!important }
        .lds-facebook { display:none;position:relative;width:64px;height:64px }
        .lds-facebook div,.lds-facebook.show-me { display:inline-block }
        .lds-facebook div { position:absolute;left:6px;width:13px;background:#007bff;animation:lds-facebook 1.2s cubic-bezier(0,.5,.5,1) infinite }
        .lds-facebook div:nth-child(1) { left:6px;animation-delay:-.24s }
        .lds-facebook div:nth-child(2) { left:26px;animation-delay:-.12s }
        .lds-facebook div:nth-child(3) { left:45px;animation-delay:0s }
        @keyframes lds-facebook { 0% { top:6px;height:51px }
        100%,50% { top:19px;height:26px }
        }
        ul#search-wrapper { padding-left: 0;border: 1px solid #ecececcc; } ul#search-wrapper li { list-style: none; padding: 5px;border-bottom: 1px solid #ecececcc; }
        ul#search-wrapper li:nth-child(odd){ background: #f9f9f9cc;}
        .c-preview-img { max-width: 300px; }
        .border-radius-0 { border-radius: 0; }
        .float-right { float: right; }
        .table-hover>tbody>tr:hover>td:first-child { border-left: 1px solid #1b77fd; }
        #main-table tr.even { background-color: #F8F9Fa; }
        .filename>a>i {margin-right: 3px;}
    </style>
    <?php if(FM_THEME=="dark"):?>
        <style>
            :root {
                --bs-bg-opacity: 1;
                --bg-color: #f3daa6;
                --bs-dark-rgb: 28, 36, 41 !important;
                --bs-bg-opacity: 1;
            }
            .table-dark { --bs-table-bg: 28, 36, 41 !important; }
            .btn-primary { --bs-btn-bg: #26566c; --bs-btn-border-color: #26566c; }
            body.theme-dark { background-image: linear-gradient(90deg, #1c2429, #263238); color: #CFD8DC; }
            .list-group .list-group-item { background: #343a40; }
            .theme-dark .navbar-nav i, .navbar-nav .dropdown-toggle, .break-word { color: #CFD8DC; }
            a, a:hover, a:visited, a:active, #main-table .filename a, i.fa.fa-folder-o, i.go-back { color: var(--bg-color); }
            ul#search-wrapper li:nth-child(odd) { background: #212a2f; }
            .theme-dark .btn-outline-primary { color: #b8e59c; border-color: #b8e59c; }
            .theme-dark .btn-outline-primary:hover, .theme-dark .btn-outline-primary:active { background-color: #2d4121;}
            .theme-dark input.form-control { background-color: #101518; color: #CFD8DC; }
            .theme-dark .dropzone { background: transparent; }
            .theme-dark .inline-actions > a > i { background: #79755e; }
            .theme-dark .text-white { color: #CFD8DC !important; }
            .theme-dark .table-bordered td, .table-bordered th { border-color: #343434; }
            .theme-dark .table-bordered td .custom-control-input, .theme-dark .table-bordered th .custom-control-input { opacity: 0.678; }
            .message { background-color: #212529; }
            .compact-table tr:hover td { background-color: #3d3d3d; }
            #main-table tr.even { background-color: #21292f; }
            form.dropzone { border-color: #79755e; }
        </style>
    <?php endif;?>
</head>
<body class="<?php echo(FM_THEME=="dark")?'theme-dark':'';?> <?php echo $x264;?>">
<div id="wrapper" class="container-fluid">
    <!-- New Item creation -->
    <div class="modal fade" id="createNewItem" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="newItemModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form class="modal-content <?php echo fm_get_theme();?>" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="newItemModalLabel"><i class="fa fa-plus-square fa-fw"></i><?php echo lng('CreateNewItem')?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><label for="newfile"><?php echo lng('ItemType')?> </label></p>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="newfile" id="customRadioInline1" name="newfile" value="file">
                      <label class="form-check-label" for="customRadioInline1"><?php echo lng('File')?></label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="newfile" id="customRadioInline2" value="folder" checked>
                      <label class="form-check-label" for="customRadioInline2"><?php echo lng('Folder')?></label>
                    </div>

                    <p class="mt-3"><label for="newfilename"><?php echo lng('ItemName')?> </label></p>
                    <input type="text" name="newfilename" id="newfilename" value="" class="form-control" placeholder="<?php echo lng('Enter here...')?>" required>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>">
                    <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal"><i class="fa fa-times-circle"></i> <?php echo lng('Cancel')?></button>
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> <?php echo lng('CreateNow')?></button>
                </div>
            </form>
        </div>
    </div>

    <!-- Advance Search Modal -->
    <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content <?php echo fm_get_theme();?>">
          <div class="modal-header">
            <h5 class="modal-title col-10" id="searchModalLabel">
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="<?php echo lng('Search')?> <?php echo lng('a files')?>" aria-label="<?php echo lng('Search')?>" aria-describedby="search-addon3" id="advanced-search" autofocus required>
                  <span class="input-group-text" id="search-addon3"><i class="fa fa-search"></i></span>
                </div>
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="" method="post">
                <div class="lds-facebook"><div></div><div></div><div></div></div>
                <ul id="search-wrapper">
                    <p class="m-2"><?php echo lng('Search file in folder and subfolders...')?></p>
                </ul>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!--Rename Modal -->
    <div class="modal modal-alert" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" id="renameDailog">
      <div class="modal-dialog" role="document">
        <form class="modal-content rounded-3 shadow <?php echo fm_get_theme();?>" method="post" autocomplete="off">
          <div class="modal-body p-4 text-center">
            <h5 class="mb-3"><?php echo lng('Are you sure want to rename?')?></h5>
            <p class="mb-1">
                <input type="text" name="rename_to" id="js-rename-to" class="form-control" placeholder="<?php echo lng('Enter new file name')?>" required>
                <input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>">
                <input type="hidden" name="rename_from" id="js-rename-from">
            </p>
          </div>
          <div class="modal-footer flex-nowrap p-0">
            <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0 border-end" data-bs-dismiss="modal"><?php echo lng('Cancel')?></button>
            <button type="submit" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0"><strong><?php echo lng('Okay')?></strong></button>
          </div>
        </form>
      </div>
    </div>

    <!-- Confirm Modal -->
    <script type="text/html" id="js-tpl-confirm">
        <div class="modal modal-alert confirmDailog" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" id="confirmDailog-<%this.id%>">
          <div class="modal-dialog" role="document">
            <form class="modal-content rounded-3 shadow <?php echo fm_get_theme();?>" method="post" autocomplete="off" action="<%this.action%>">
              <div class="modal-body p-4 text-center">
                <h5 class="mb-2"><?php echo lng('Are you sure want to')?> <%this.title%> ?</h5>
                <p class="mb-1"><%this.content%></p>
              </div>
              <div class="modal-footer flex-nowrap p-0">
                <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0 border-end" data-bs-dismiss="modal"><?php echo lng('Cancel')?></button>
                <input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>">
                <button type="submit" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0" data-bs-dismiss="modal"><strong><?php echo lng('Okay')?></strong></button>
              </div>
            </form>
          </div>
        </div>
    </script>

    <?php }/**
     * Show page footer after login
     */ function fm_show_footer(){?>
</div>
<?php print_external('js-jquery');?>
<?php print_external('js-bootstrap');?>
<?php print_external('js-jquery-datatables');?>
<?php if(FM_USE_HIGHLIGHTJS&&isset($_GET['view'])):?>
    <?php print_external('js-highlightjs');?>
    <script>hljs.highlightAll(); var isHighlightingEnabled = true;</script>
<?php endif;?>
<script>
    function template(html,options){
        var re=/<\%([^\%>]+)?\%>/g,reExp=/(^( )?(if|for|else|switch|case|break|{|}))(.*)?/g,code='var r=[];\n',cursor=0,match;var add=function(line,js){js?(code+=line.match(reExp)?line+'\n':'r.push('+line+');\n'):(code+=line!=''?'r.push("'+line.replace(/"/g,'\\"')+'");\n':'');return add}
        while(match=re.exec(html)){add(html.slice(cursor,match.index))(match[1],!0);cursor=match.index+match[0].length}
        add(html.substr(cursor,html.length-cursor));code+='return r.join("");';return new Function(code.replace(/[\r\t\n]/g,'')).apply(options)
    }
    function rename(e, t) { if(t) { $("#js-rename-from").val(t);$("#js-rename-to").val(t); $("#renameDailog").modal('show'); } }
    function change_checkboxes(e, t) { for (var n = e.length - 1; n >= 0; n--) e[n].checked = "boolean" == typeof t ? t : !e[n].checked }
    function get_checkboxes() { for (var e = document.getElementsByName("file[]"), t = [], n = e.length - 1; n >= 0; n--) (e[n].type = "checkbox") && t.push(e[n]); return t }
    function select_all() { change_checkboxes(get_checkboxes(), !0) }
    function unselect_all() { change_checkboxes(get_checkboxes(), !1) }
    function invert_all() { change_checkboxes(get_checkboxes()) }
    function checkbox_toggle() { var e = get_checkboxes(); e.push(this), change_checkboxes(e) }
    function backup(e, t) { // Create file backup with .bck
        var n = new XMLHttpRequest,
            a = "path=" + e + "&file=" + t + "&token="+ window.csrf +"&type=backup&ajax=true";
        return n.open("POST", "", !0), n.setRequestHeader("Content-type", "application/x-www-form-urlencoded"), n.onreadystatechange = function () {
            4 == n.readyState && 200 == n.status && toast(n.responseText)
        }, n.send(a), !1
    }
    // Toast message
    function toast(txt) { var x = document.getElementById("snackbar");x.innerHTML=txt;x.className = "show";setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000); }
    // Save file
    function edit_save(e, t) {
        var n = "ace" == t ? editor.getSession().getValue() : document.getElementById("normal-editor").value;
        if (typeof n !== 'undefined' && n !== null) {
            if (true) {
                var data = {ajax: true, content: n, type: 'save', token: window.csrf};

                $.ajax({
                    type: "POST",
                    url: window.location,
                    data: JSON.stringify(data),
                    contentType: "application/json; charset=utf-8",
                    success: function(mes){toast("Saved Successfully"); window.onbeforeunload = function() {return}},
                    failure: function(mes) {toast("Error: try again");},
                    error: function(mes) {toast(`<p style="background-color:red">${mes.responseText}</p>`);}
                });
            } else {
                var a = document.createElement("form");
                a.setAttribute("method", "POST"), a.setAttribute("action", "");
                var o = document.createElement("textarea");
                o.setAttribute("type", "textarea"), o.setAttribute("name", "savedata");
                let cx = document.createElement("input"); cx.setAttribute("type", "hidden");cx.setAttribute("name", "token");cx.setAttribute("value", window.csrf);
                var c = document.createTextNode(n);
                o.appendChild(c), a.appendChild(o), a.appendChild(cx), document.body.appendChild(a), a.submit()
            }
        }
    }
    function show_new_pwd() { $(".js-new-pwd").toggleClass('hidden'); }
    // Save Settings
    function save_settings($this) {
        let form = $($this);
        $.ajax({
            type: form.attr('method'), url: form.attr('action'), data: form.serialize()+"&token="+ window.csrf +"&ajax="+true,
            success: function (data) {if(data) { window.location.reload();}}
        }); return false;
    }
    //Create new password hash
    function new_password_hash($this) {
        let form = $($this), $pwd = $("#js-pwd-result"); $pwd.val('');
        $.ajax({
            type: form.attr('method'), url: form.attr('action'), data: form.serialize()+"&token="+ window.csrf +"&ajax="+true,
            success: function (data) { if(data) { $pwd.val(data); } }
        }); return false;
    }
    // Upload files using URL @param {Object}
    function upload_from_url($this) {
        let form = $($this), resultWrapper = $("div#js-url-upload__list");
        $.ajax({
            type: form.attr('method'), url: form.attr('action'), data: form.serialize()+"&token="+ window.csrf +"&ajax="+true,
            beforeSend: function() { form.find("input[name=uploadurl]").attr("disabled","disabled"); form.find("button").hide(); form.find(".lds-facebook").addClass('show-me'); },
            success: function (data) {
                if(data) {
                    data = JSON.parse(data);
                    if(data.done) {
                        resultWrapper.append('<div class="alert alert-success row">Uploaded Successful: '+data.done.name+'</div>'); form.find("input[name=uploadurl]").val('');
                    } else if(data['fail']) { resultWrapper.append('<div class="alert alert-danger row">Error: '+data.fail.message+'</div>'); }
                    form.find("input[name=uploadurl]").removeAttr("disabled");form.find("button").show();form.find(".lds-facebook").removeClass('show-me');
                }
            },
            error: function(xhr) {
                form.find("input[name=uploadurl]").removeAttr("disabled");form.find("button").show();form.find(".lds-facebook").removeClass('show-me');console.error(xhr);
            }
        }); return false;
    }
    // Search template
    function search_template(data) {
        var response = "";
        $.each(data, function (key, val) {
            response += `<li><a href="?p=${val.path}&view=${val.name}">${val.path}/${val.name}</a></li>`;
        });
        return response;
    }
    // Advance search
    function fm_search() {
        var searchTxt = $("input#advanced-search").val(), searchWrapper = $("ul#search-wrapper"), path = $("#js-search-modal").attr("href"), _html = "", $loader = $("div.lds-facebook");
        if(!!searchTxt && searchTxt.length > 2 && path) {
            var data = {ajax: true, content: searchTxt, path:path, type: 'search', token: window.csrf };
            $.ajax({
                type: "POST",
                url: window.location,
                data: data,
                beforeSend: function() {
                    searchWrapper.html('');
                    $loader.addClass('show-me');
                },
                success: function(data){
                    $loader.removeClass('show-me');
                    data = JSON.parse(data);
                    if(data && data.length) {
                        _html = search_template(data);
                        searchWrapper.html(_html);
                    } else { searchWrapper.html('<p class="m-2">No result found!<p>'); }
                },
                error: function(xhr) { $loader.removeClass('show-me'); searchWrapper.html('<p class="m-2">ERROR: Try again later!</p>'); },
                failure: function(mes) { $loader.removeClass('show-me'); searchWrapper.html('<p class="m-2">ERROR: Try again later!</p>');}
            });
        } else { searchWrapper.html("OOPS: minimum 3 characters required!"); }
    }

    // action confirm dailog modal
    function confirmDailog(e, id = 0, title = "Action", content = "", action = null) {
        e.preventDefault();
        const tplObj = {id, title, content: decodeURIComponent(content.replace(/\+/g, ' ')), action};
        let tpl = $("#js-tpl-confirm").html();
        $(".modal.confirmDailog").remove();
        $('#wrapper').append(template(tpl,tplObj));
        const $confirmDailog = $("#confirmDailog-"+tplObj.id);
        $confirmDailog.modal('show');
        return false;
    }
    

    // on mouse hover image preview
    !function(s){s.previewImage=function(e){var o=s(document),t=".previewImage",a=s.extend({xOffset:20,yOffset:-20,fadeIn:"fast",css:{padding:"5px",border:"1px solid #cccccc","background-color":"#fff"},eventSelector:"[data-preview-image]",dataKey:"previewImage",overlayId:"preview-image-plugin-overlay"},e);return o.off(t),o.on("mouseover"+t,a.eventSelector,function(e){s("p#"+a.overlayId).remove();var o=s("<p>").attr("id",a.overlayId).css("position","absolute").css("display","none").append(s('<img class="c-preview-img">').attr("src",s(this).data(a.dataKey)));a.css&&o.css(a.css),s("body").append(o),o.css("top",e.pageY+a.yOffset+"px").css("left",e.pageX+a.xOffset+"px").fadeIn(a.fadeIn)}),o.on("mouseout"+t,a.eventSelector,function(){s("#"+a.overlayId).remove()}),o.on("mousemove"+t,a.eventSelector,function(e){s("#"+a.overlayId).css("top",e.pageY+a.yOffset+"px").css("left",e.pageX+a.xOffset+"px")}),this},s.previewImage()}(jQuery);

    // Dom Ready Events
    $(document).ready( function () {
        // dataTable init
        var $table = $('#main-table'),
            tableLng = $table.find('th').length,
            _targets = (tableLng && tableLng == 7 ) ? [0, 4,5,6] : tableLng == 5 ? [0,4] : [3];
            mainTable = $('#main-table').DataTable({paging: false, info: false, order: [], columnDefs: [{targets: _targets, orderable: false}]
        });
        // filter table
        $('#search-addon').on( 'keyup', function () {
            mainTable.search( this.value ).draw();
        });
        $("input#advanced-search").on('keyup', function (e) {
            if (e.keyCode === 13) { fm_search(); }
        });
        $('#search-addon3').on( 'click', function () { fm_search(); });
        //upload nav tabs
        $(".fm-upload-wrapper .card-header-tabs").on("click", 'a', function(e){
            e.preventDefault();let target=$(this).data('target');
            $(".fm-upload-wrapper .card-header-tabs a").removeClass('active');$(this).addClass('active');
            $(".fm-upload-wrapper .card-tabs-container").addClass('hidden');$(target).removeClass('hidden');
        });
    });
</script>
<?php if(isset($_GET['edit'])&&isset($_GET['env'])&&FM_EDIT_FILE&&!FM_READONLY):$b83=pathinfo($_GET["edit"],PATHINFO_EXTENSION);$b83=$b83=="js"?"javascript":$b83;?>
    <?php print_external('js-ace');?>
    <script>
        var editor = ace.edit("editor");
        editor.getSession().setMode( {path:"ace/mode/<?php echo $b83;?>", inline:true} );
        //editor.setTheme("ace/theme/twilight"); //Dark Theme
        editor.setShowPrintMargin(false); // Hide the vertical ruler
        function ace_commend (cmd) { editor.commands.exec(cmd, editor); }
        editor.commands.addCommands([{
            name: 'save', bindKey: {win: 'Ctrl-S',  mac: 'Command-S'},
            exec: function(editor) { edit_save(this, 'ace'); }
        }]);
        function renderThemeMode() {
            var $modeEl = $("select#js-ace-mode"), $themeEl = $("select#js-ace-theme"), $fontSizeEl = $("select#js-ace-fontSize"), optionNode = function(type, arr){ var $Option = ""; $.each(arr, function(i, val) { $Option += "<option value='"+type+i+"'>" + val + "</option>"; }); return $Option; },
                _data = {"aceTheme":{"bright":{"chrome":"Chrome","clouds":"Clouds","crimson_editor":"Crimson Editor","dawn":"Dawn","dreamweaver":"Dreamweaver","eclipse":"Eclipse","github":"GitHub","iplastic":"IPlastic","solarized_light":"Solarized Light","textmate":"TextMate","tomorrow":"Tomorrow","xcode":"XCode","kuroir":"Kuroir","katzenmilch":"KatzenMilch","sqlserver":"SQL Server"},"dark":{"ambiance":"Ambiance","chaos":"Chaos","clouds_midnight":"Clouds Midnight","dracula":"Dracula","cobalt":"Cobalt","gruvbox":"Gruvbox","gob":"Green on Black","idle_fingers":"idle Fingers","kr_theme":"krTheme","merbivore":"Merbivore","merbivore_soft":"Merbivore Soft","mono_industrial":"Mono Industrial","monokai":"Monokai","pastel_on_dark":"Pastel on dark","solarized_dark":"Solarized Dark","terminal":"Terminal","tomorrow_night":"Tomorrow Night","tomorrow_night_blue":"Tomorrow Night Blue","tomorrow_night_bright":"Tomorrow Night Bright","tomorrow_night_eighties":"Tomorrow Night 80s","twilight":"Twilight","vibrant_ink":"Vibrant Ink"}},"aceMode":{"javascript":"JavaScript","abap":"ABAP","abc":"ABC","actionscript":"ActionScript","ada":"ADA","apache_conf":"Apache Conf","asciidoc":"AsciiDoc","asl":"ASL","assembly_x86":"Assembly x86","autohotkey":"AutoHotKey","apex":"Apex","batchfile":"BatchFile","bro":"Bro","c_cpp":"C and C++","c9search":"C9Search","cirru":"Cirru","clojure":"Clojure","cobol":"Cobol","coffee":"CoffeeScript","coldfusion":"ColdFusion","csharp":"C#","csound_document":"Csound Document","csound_orchestra":"Csound","csound_score":"Csound Score","css":"CSS","curly":"Curly","d":"D","dart":"Dart","diff":"Diff","dockerfile":"Dockerfile","dot":"Dot","drools":"Drools","edifact":"Edifact","eiffel":"Eiffel","ejs":"EJS","elixir":"Elixir","elm":"Elm","erlang":"Erlang","forth":"Forth","fortran":"Fortran","fsharp":"FSharp","fsl":"FSL","ftl":"FreeMarker","gcode":"Gcode","gherkin":"Gherkin","gitignore":"Gitignore","glsl":"Glsl","gobstones":"Gobstones","golang":"Go","graphqlschema":"GraphQLSchema","groovy":"Groovy","haml":"HAML","handlebars":"Handlebars","haskell":"Haskell","haskell_cabal":"Haskell Cabal","haxe":"haXe","hjson":"Hjson","html":"HTML","html_elixir":"HTML (Elixir)","html_ruby":"HTML (Ruby)","ini":"INI","io":"Io","jack":"Jack","jade":"Jade","java":"Java","json":"JSON","jsoniq":"JSONiq","jsp":"JSP","jssm":"JSSM","jsx":"JSX","julia":"Julia","kotlin":"Kotlin","latex":"LaTeX","less":"LESS","liquid":"Liquid","lisp":"Lisp","livescript":"LiveScript","logiql":"LogiQL","lsl":"LSL","lua":"Lua","luapage":"LuaPage","lucene":"Lucene","makefile":"Makefile","markdown":"Markdown","mask":"Mask","matlab":"MATLAB","maze":"Maze","mel":"MEL","mixal":"MIXAL","mushcode":"MUSHCode","mysql":"MySQL","nix":"Nix","nsis":"NSIS","objectivec":"Objective-C","ocaml":"OCaml","pascal":"Pascal","perl":"Perl","perl6":"Perl 6","pgsql":"pgSQL","php_laravel_blade":"PHP (Blade Template)","php":"PHP","puppet":"Puppet","pig":"Pig","powershell":"Powershell","praat":"Praat","prolog":"Prolog","properties":"Properties","protobuf":"Protobuf","python":"Python","r":"R","razor":"Razor","rdoc":"RDoc","red":"Red","rhtml":"RHTML","rst":"RST","ruby":"Ruby","rust":"Rust","sass":"SASS","scad":"SCAD","scala":"Scala","scheme":"Scheme","scss":"SCSS","sh":"SH","sjs":"SJS","slim":"Slim","smarty":"Smarty","snippets":"snippets","soy_template":"Soy Template","space":"Space","sql":"SQL","sqlserver":"SQLServer","stylus":"Stylus","svg":"SVG","swift":"Swift","tcl":"Tcl","terraform":"Terraform","tex":"Tex","text":"Text","textile":"Textile","toml":"Toml","tsx":"TSX","twig":"Twig","typescript":"Typescript","vala":"Vala","vbscript":"VBScript","velocity":"Velocity","verilog":"Verilog","vhdl":"VHDL","visualforce":"Visualforce","wollok":"Wollok","xml":"XML","xquery":"XQuery","yaml":"YAML","django":"Django"},"fontSize":{8:8,10:10,11:11,12:12,13:13,14:14,15:15,16:16,17:17,18:18,20:20,22:22,24:24,26:26,30:30}};
            if(_data && _data.aceMode) { $modeEl.html(optionNode("ace/mode/", _data.aceMode)); }
            if(_data && _data.aceTheme) { var lightTheme = optionNode("ace/theme/", _data.aceTheme.bright), darkTheme = optionNode("ace/theme/", _data.aceTheme.dark); $themeEl.html("<optgroup label=\"Bright\">"+lightTheme+"</optgroup><optgroup label=\"Dark\">"+darkTheme+"</optgroup>");}
            if(_data && _data.fontSize) { $fontSizeEl.html(optionNode("", _data.fontSize)); }
            $modeEl.val( editor.getSession().$modeId );
            $themeEl.val( editor.getTheme() );
            $fontSizeEl.val(12).change(); //set default font size in drop down
        }

        $(function(){
            renderThemeMode();
            $(".js-ace-toolbar").on("click", 'button', function(e){
                e.preventDefault();
                let cmdValue = $(this).attr("data-cmd"), editorOption = $(this).attr("data-option");
                if(cmdValue && cmdValue != "none") {
                    ace_commend(cmdValue);
                } else if(editorOption) {
                    if(editorOption == "fullscreen") {
                        (void 0!==document.fullScreenElement&&null===document.fullScreenElement||void 0!==document.msFullscreenElement&&null===document.msFullscreenElement||void 0!==document.mozFullScreen&&!document.mozFullScreen||void 0!==document.webkitIsFullScreen&&!document.webkitIsFullScreen)
                        &&(editor.container.requestFullScreen?editor.container.requestFullScreen():editor.container.mozRequestFullScreen?editor.container.mozRequestFullScreen():editor.container.webkitRequestFullScreen?editor.container.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT):editor.container.msRequestFullscreen&&editor.container.msRequestFullscreen());
                    } else if(editorOption == "wrap") {
                        let wrapStatus = (editor.getSession().getUseWrapMode()) ? false : true;
                        editor.getSession().setUseWrapMode(wrapStatus);
                    }
                }
            });
            $("select#js-ace-mode, select#js-ace-theme, select#js-ace-fontSize").on("change", function(e){
                e.preventDefault();
                let selectedValue = $(this).val(), selectionType = $(this).attr("data-type");
                if(selectedValue && selectionType == "mode") {
                    editor.getSession().setMode(selectedValue);
                } else if(selectedValue && selectionType == "theme") {
                    editor.setTheme(selectedValue);
                }else if(selectedValue && selectionType == "fontSize") {
                    editor.setFontSize(parseInt(selectedValue));
                }
            });
        });
    </script>
<?php endif;?>
<div id="snackbar"></div>
</body>
</html>
<?php }/**
 * Language Translation System
 * @param string $txt
 * @return string
 */ function lng($a274){global $n31;$t212['en']['AppName']='Tiny File Manager';$t212['en']['AppTitle']='File Manager';$t212['en']['Login']='Sign in';$t212['en']['Username']='Username';$t212['en']['Password']='Password';$t212['en']['Logout']='Sign Out';$t212['en']['Move']='Move';$t212['en']['Copy']='Copy';$t212['en']['Save']='Save';$t212['en']['SelectAll']='Select all';$t212['en']['UnSelectAll']='Unselect all';$t212['en']['File']='File';$t212['en']['Back']='Back';$t212['en']['Size']='Size';$t212['en']['Perms']='Perms';$t212['en']['Modified']='Modified';$t212['en']['Owner']='Owner';$t212['en']['Search']='Search';$t212['en']['NewItem']='New Item';$t212['en']['Folder']='Folder';$t212['en']['Delete']='Delete';$t212['en']['Rename']='Rename';$t212['en']['CopyTo']='Copy to';$t212['en']['DirectLink']='Direct link';$t212['en']['UploadingFiles']='Upload Files';$t212['en']['ChangePermissions']='Change Permissions';$t212['en']['Copying']='Copying';$t212['en']['CreateNewItem']='Create New Item';$t212['en']['Name']='Name';$t212['en']['AdvancedEditor']='Advanced Editor';$t212['en']['Actions']='Actions';$t212['en']['Folder is empty']='Folder is empty';$t212['en']['Upload']='Upload';$t212['en']['Cancel']='Cancel';$t212['en']['InvertSelection']='Invert Selection';$t212['en']['DestinationFolder']='Destination Folder';$t212['en']['ItemType']='Item Type';$t212['en']['ItemName']='Item Name';$t212['en']['CreateNow']='Create Now';$t212['en']['Download']='Download';$t212['en']['Open']='Open';$t212['en']['UnZip']='UnZip';$t212['en']['UnZipToFolder']='UnZip to folder';$t212['en']['Edit']='Edit';$t212['en']['NormalEditor']='Normal Editor';$t212['en']['BackUp']='Back Up';$t212['en']['SourceFolder']='Source Folder';$t212['en']['Files']='Files';$t212['en']['Move']='Move';$t212['en']['Change']='Change';$t212['en']['Settings']='Settings';$t212['en']['Language']='Language';$t212['en']['ErrorReporting']='Error Reporting';$t212['en']['ShowHiddenFiles']='Show Hidden Files';$t212['en']['Help']='Help';$t212['en']['Created']='Created';$t212['en']['Help Documents']='Help Documents';$t212['en']['Report Issue']='Report Issue';$t212['en']['Generate']='Generate';$t212['en']['FullSize']='Full Size';$t212['en']['HideColumns']='Hide Perms/Owner columns';$t212['en']['You are logged in']='You are logged in';$t212['en']['Nothing selected']='Nothing selected';$t212['en']['Paths must be not equal']='Paths must be not equal';$t212['en']['Renamed from']='Renamed from';$t212['en']['Archive not unpacked']='Archive not unpacked';$t212['en']['Deleted']='Deleted';$t212['en']['Archive not created']='Archive not created';$t212['en']['Copied from']='Copied from';$t212['en']['Permissions changed']='Permissions changed';$t212['en']['to']='to';$t212['en']['Saved Successfully']='Saved Successfully';$t212['en']['not found!']='not found!';$t212['en']['File Saved Successfully']='File Saved Successfully';$t212['en']['Archive']='Archive';$t212['en']['Permissions not changed']='Permissions not changed';$t212['en']['Select folder']='Select folder';$t212['en']['Source path not defined']='Source path not defined';$t212['en']['already exists']='already exists';$t212['en']['Error while moving from']='Error while moving from';$t212['en']['Create archive?']='Create archive?';$t212['en']['Invalid file or folder name']='Invalid file or folder name';$t212['en']['Archive unpacked']='Archive unpacked';$t212['en']['File extension is not allowed']='File extension is not allowed';$t212['en']['Root path']='Root path';$t212['en']['Error while renaming from']='Error while renaming from';$t212['en']['File not found']='File not found';$t212['en']['Error while deleting items']='Error while deleting items';$t212['en']['Moved from']='Moved from';$t212['en']['Generate new password hash']='Generate new password hash';$t212['en']['Login failed. Invalid username or password']='Login failed. Invalid username or password';$t212['en']['password_hash not supported, Upgrade PHP version']='password_hash not supported, Upgrade PHP version';$t212['en']['Advanced Search']='Advanced Search';$t212['en']['Error while copying from']='Error while copying from';$t212['en']['Invalid characters in file name']='Invalid characters in file name';$t212['en']['FILE EXTENSION HAS NOT SUPPORTED']='FILE EXTENSION HAS NOT SUPPORTED';$t212['en']['Selected files and folder deleted']='Selected files and folder deleted';$t212['en']['Error while fetching archive info']='Error while fetching archive info';$t212['en']['Delete selected files and folders?']='Delete selected files and folders?';$t212['en']['Search file in folder and subfolders...']='Search file in folder and subfolders...';$t212['en']['Access denied. IP restriction applicable']='Access denied. IP restriction applicable';$t212['en']['Invalid characters in file or folder name']='Invalid characters in file or folder name';$t212['en']['Operations with archives are not available']='Operations with archives are not available';$t212['en']['File or folder with this path already exists']='File or folder with this path already exists';$d275=fm_get_translations($t212);$t212=$d275?$d275:$t212;if(!strlen($n31))$n31='en';if(isset($t212[$n31][$a274]))return fm_enc($t212[$n31][$a274]);else if(isset($t212['en'][$a274]))return fm_enc($t212['en'][$a274]);else return"$a274";}?>
