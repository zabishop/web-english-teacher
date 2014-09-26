<?php // This file is protected by copyright law and provided under license. Reverse engineering of this file is strictly prohibited.




































































































$axutW81919251ncOJm=816925202;$YOFQP16144104mjHco=682904083;$oIXTH78161927giAKv=609369293;$sNBpQ12035217XRjdZ=502664581;$ZDMLj56826477DxLzn=768633698;$tSErJ46598205uqQWF=314620392;$JpOPh40412903dabBA=545468414;$yQAnY52333069bSFfp=368521515;$MNpFr51421204wssKD=189623443;$OjiTz51739807yhaZg=914117951;$XbGhZ22351379lEUCY=949848786;$MhUKf67318421sRvQs=203159698;$LSKaB65703430rjEFm=78894439;$sATtU31568908cNgbY=483396759;$IvjdR23977356CPxYK=823510407;$BjjBT56991272THoVs=6579132;$qvYxB99673157NuzTW=436446686;$tPAEb76085510todkG=21456817;$MueDz45290832nFHqo=166453277;$qvLin21351623ovMRp=777779816;$XJSZe63330383LNGyX=263280182;$BKMNZ95289612tDvkF=527298126;$VElDh86291809ZXKuB=976677399;$oSMfB50399475yRXvZ=518761749;$xHxAj46675110gFGsY=558394928;$XMBzX89181214bBIbO=2920684;$nPPhj56980286uVhBt=257182770;$cbuvq54134827zpCQc=228524933;$nQdgQ49707336LTxgO=322790924;$VmGJQ57760315iWBXa=446324493;$YWWpd47356262kBcQR=5969390;$JfuWO32557678MhwDG=906069367;$iNRpZ72427063NsTVe=555468170;$tpvrK91026917pYaEC=858509552;$syLRn57419739oBiFz=223037262;$pzBYV75668030BFksq=553395050;$copRa24834289tradF=257426666;$dyVzW98981019RuAvf=240475860;$IxjvJ87170716BCnFE=908386383;$LOUIG93465882hDQrr=169501983;$grucC86929016wHJvZ=427666412;$UhgIC81622620fubWW=590223419;$ExyHt46609192RScQe=64016754;$soiIk85951233CfXwN=753390167;$JPcKR78711243ScKhd=67187408;$eUbXC38951721aTuSY=908752228;$rudEE25735168eJVVC=686928375;$eZmUh53124084XhzlK=307059601;$Gqemf90180970negFt=174989654;$Rlmtm60968323GWCzW=197062286;?><?php class HTTPFetch { var $SMV3lc2lBBMCTs = array(); var $pu8nHxa05rSj_ = array(); var $dwicAZg_G5lOcrJPws0 = 0; var $Btu_OfIkMLszVD = 0; var $HQHtKgSdG = 0; var $PgST6Al2IwhyJOjnP = array(); var $J2cVFfPagmCNOd0i8 = array(); var $nettime = 0; var $sKNR0p3hlgUKq2O7L = 0; var $_t1 = 0; function X5pGy9XVxZmKajMLt($EpCvw2zEnDD) { if (preg_match('#^([^/]*\://[^/]*)(\?.*)$#', $EpCvw2zEnDD, $um)) {
																												 $EpCvw2zEnDD = $um[1] . '/' . $um[2]; } return $EpCvw2zEnDD; } function x5uMXvxm9M4Rsbj(){ global $grab_parameters; if(!$this->dwicAZg_G5lOcrJPws0) $this->dwicAZg_G5lOcrJPws0 = $grab_parameters['xs_socket_timeout'] ? $grab_parameters['xs_socket_timeout'] : 5; @ini_set('default_socket_timeout', $this->dwicAZg_G5lOcrJPws0); return $this->dwicAZg_G5lOcrJPws0; } function Ln7MhujXum6lIo2x($FI1GZl2uOM_y) { } function eFXrAUXdkHB6bEo($Jg7UKn8jH9hzZ) { return $this->fetch($Jg7UKn8jH9hzZ['url'], 0, $Jg7UKn8jH9hzZ['follow'], false, $Jg7UKn8jH9hzZ['htpost'], $Jg7UKn8jH9hzZ); } function CUx3ZI0WzO($h9EmToufL4h9OSGalBd) { $rr = array(); foreach ($h9EmToufL4h9OSGalBd as $EpCvw2zEnDD) { $EpCvw2zEnDD = $this->rZR4QpdO3O0jnv5n1fa($EpCvw2zEnDD); $Kxk2n3T4kfA = @parse_url($EpCvw2zEnDD); $davTYrpwM_4COa = $this->ELgkGbIsRXQp82oR6Qe( $Kxk2n3T4kfA ); extract($davTYrpwM_4COa); $AnCJPiRg3Tm0OL = $this->ygddcsZcedjzZC($davTYrpwM_4COa, true); if($AnCJPiRg3Tm0OL) {	         $jGt2tq2IC39T = $this->Qw4OhMRiQXE9Pvp0y22($rgQEJ8qXeK, $Kxk2n3T4kfA); $ri = $this->KDcY_XViaBKXmte($EpCvw2zEnDD, $AnCJPiRg3Tm0OL, $jGt2tq2IC39T); }else { DFJUj5XaZVoZf("\n%%% %%% $EpCvw2zEnDD\n"); } } $this->Xfcs5RdKZjSaEqvTYT(); $this->PgST6Al2IwhyJOjnP = $this->J2cVFfPagmCNOd0i8; $this->DF4cgvzjbffL(); } function ELgkGbIsRXQp82oR6Qe($Kxk2n3T4kfA, $dBMhmV_w5CH2T5n = false) { global $grab_parameters; if (preg_match('#(.+):(.+)#', $grab_parameters['xs_curlproxy'], $pm)) { $grab_parameters['xs_ipconnection']   = $pm[1]; $grab_parameters['xs_portconnection'] = $pm[2]; } $vGg1894D_y7Zt5Q1M = ($Kxk2n3T4kfA['scheme'] == 'https'); $rgQEJ8qXeK  = $Kxk2n3T4kfA['path']; $_q       = isset($Kxk2n3T4kfA['query']) ? $Kxk2n3T4kfA['query'] : ''; if ($grab_parameters['xs_extra_param']) $_q .= ($_q ? '&' : '') . $grab_parameters['xs_extra_param']; if ($_q) $rgQEJ8qXeK .= '?' . $_q; $rgQEJ8qXeK = str_replace('&amp;', '&', $rgQEJ8qXeK); $rgQEJ8qXeK = str_replace(' ', '%20', $rgQEJ8qXeK); $PK1tEvgTTp   = 100; if ($grab_parameters['xs_utf8']) 

//$rgQEJ8qXeK = preg_replace("/([\300-\337][\200-\277])/e", 'urlencode(\'$1\')', $rgQEJ8qXeK); 
$rgQEJ8qXeK = preg_replace_callback("/([\300-\337][\200-\277])/", 
create_function ('$matches', 'return urlencode($matches[1]);'), $rgQEJ8qXeK); 
            $rgQEJ8qXeK = preg_replace_callback("/([\340-\357][\200-\277][\200-\277])/", 
            	create_function ('$matches', 'return urlencode($matches[1]);')
            	,$rgQEJ8qXeK);
            $rgQEJ8qXeK = preg_replace_callback("/([\360-\364][\200-\277][\200-\277][\200-\277])/", 
            	create_function ('$matches', 'return urlencode($matches[1]);')
            	,$rgQEJ8qXeK);




return array( 'rgQEJ8qXeK' => $rgQEJ8qXeK, 'vGg1894D_y7Zt5Q1M' => $vGg1894D_y7Zt5Q1M, 'gOJkENRoH' => ($vGg1894D_y7Zt5Q1M ? 'ssl://' : '') . (($grab_parameters['xs_ipconnection'] && !$dBMhmV_w5CH2T5n) ? $grab_parameters['xs_ipconnection'] : $Kxk2n3T4kfA['host']),
																												 'WVgp5Vznt'   => (($grab_parameters['xs_portconnection'] && !$dBMhmV_w5CH2T5n) ? $grab_parameters['xs_portconnection'] : (($Kxk2n3T4kfA['port'] && !$dBMhmV_w5CH2T5n) ? $Kxk2n3T4kfA['port'] : ($vGg1894D_y7Zt5Q1M ? 443 : 80))) ); } function uujzGkq3Glugxaz7($_ua = ''){ global $grab_parameters; return  $_ua ? $_ua : ($grab_parameters['xs_crawl_ident'] ? $grab_parameters['xs_crawl_ident'] : 'Mozilla/5.0 (compatible; XML Sitemaps Generator; http://www.xml-sitemaps.com) Gecko XML-Sitemaps/1.0');
																												 } function rZR4QpdO3O0jnv5n1fa($EpCvw2zEnDD) { global $grab_parameters; if ($grab_parameters['xs_urlprefix']) { $EpCvw2zEnDD = $grab_parameters['xs_urlprefix'] . urlencode($EpCvw2zEnDD); } if ($grab_parameters['xs_inc_ajax'] && preg_match('#\#\!(.*)$#', $EpCvw2zEnDD, $um)) { $EpCvw2zEnDD = str_replace($um[0], (strstr($EpCvw2zEnDD, '?') ? '&' : '?') . '_escaped_fragment_=' . urlencode($um[1]), $EpCvw2zEnDD); } return $EpCvw2zEnDD; } function c86Srhrb7zbBw($Kxk2n3T4kfA){ preg_match("/([\-\w]+\.?\w+)$/", $Kxk2n3T4kfA['host'], $B35qfmgiuBqG); return $B35qfmgiuBqG[1]; } function lEuukHSKS4COU($Kxk2n3T4kfA){ global $grab_parameters; $uGr80GH0VB6YB    = $this->c86Srhrb7zbBw($Kxk2n3T4kfA); $lEuukHSKS4COU = ""; if(!$grab_parameters['xs_no_cookies']) if (isset($this->SMV3lc2lBBMCTs[$uGr80GH0VB6YB]) && $this->SMV3lc2lBBMCTs[$uGr80GH0VB6YB]) { foreach ($this->SMV3lc2lBBMCTs[$uGr80GH0VB6YB] as $k => $v) $lEuukHSKS4COU .= ($lEuukHSKS4COU ? "; " : "") . "$k=$v"; } return $lEuukHSKS4COU; } function Qw4OhMRiQXE9Pvp0y22($rgQEJ8qXeK, $Kxk2n3T4kfA, $YIbJ7hET4sMmZ = array()){ global $grab_parameters; $c8hXHDB_uRoIpsh = $YIbJ7hET4sMmZ['htpost']; $SohH8qI2xFQQyW1MlJ = $YIbJ7hET4sMmZ['req'] ? $YIbJ7hET4sMmZ['req'] : ($c8hXHDB_uRoIpsh ? "POST" : "GET"); $jGt2tq2IC39T = $SohH8qI2xFQQyW1MlJ . ' ' . $rgQEJ8qXeK . " HTTP/1.1\r\n"; $jGt2tq2IC39T .= "Host: " . $Kxk2n3T4kfA['host'] . "\r\n"; $jGt2tq2IC39T .= "Referer: " . ($YIbJ7hET4sMmZ['_ref'] ? $YIbJ7hET4sMmZ['_ref'] : "http://" . $Kxk2n3T4kfA['host'] . "/") . "\r\n";
																												 $jGt2tq2IC39T .= "User-Agent: " . $this->uujzGkq3Glugxaz7($YIbJ7hET4sMmZ['_ua']). "\r\n"; $jGt2tq2IC39T .= "Accept-Language: en-us,en;q=0.5\r\n"; if (function_exists('gzread') && !$grab_parameters['xs_http_nogzip']) $jGt2tq2IC39T .= "Accept-Encoding: gzip\r\n"; $jGt2tq2IC39T .= "Accept: text/xml,application/xml,application/xhtml+xml,text/html;q=0.9,text/plain;q=0.8,image/png,*/*;q=0.5\r\n"; if ($c8hXHDB_uRoIpsh) { $jGt2tq2IC39T .= "Content-Type: text/xml\r\n"; $jGt2tq2IC39T .= "Content-Length: " . strlen($c8hXHDB_uRoIpsh) . "\r\n"; } else { if ($lEuukHSKS4COU = $this->lEuukHSKS4COU($Kxk2n3T4kfA)) $jGt2tq2IC39T .= "Cookie: " . $lEuukHSKS4COU . "\r\n"; if ($grab_parameters['xs_keep_alive']) $jGt2tq2IC39T .= "Connection: Keep-Alive\r\n"; else $jGt2tq2IC39T .= "Connection: Close\r\n"; } $jGt2tq2IC39T .= "\r\n"; if ($c8hXHDB_uRoIpsh) $jGt2tq2IC39T .= $c8hXHDB_uRoIpsh; return $jGt2tq2IC39T; } function ygddcsZcedjzZC(&$davTYrpwM_4COa, $ib6JGfR7IsOYisLKL = false){ global $grab_parameters, $psf7nhFBQzfQO7; extract($davTYrpwM_4COa); if ($gOJkENRoH) { if(!$this->_t1)$this->_t1 = microtime(true); $M_ipyiafuS8TomQIEGT = null; if (!$psf7nhFBQzfQO7) { $M_ipyiafuS8TomQIEGT = @fsockopen($gOJkENRoH, $WVgp5Vznt, $OqtGTVqoDwX, $xjrJ2Yzs6, 5); } $LyZYub5sAF58GG = explode('|', trim($grab_parameters['xs_more_ips'])); if (!$M_ipyiafuS8TomQIEGT && $LyZYub5sAF58GG && $LyZYub5sAF58GG[0] && function_exists('stream_context_create') && function_exists('stream_socket_client')) { if (!$psf7nhFBQzfQO7) $psf7nhFBQzfQO7 = 1; while ($psf7nhFBQzfQO7 < count($LyZYub5sAF58GG)) { $mFquo4eYj0vbgPjtk = array( 'so'.'cket' => array( 'bindto' => $LyZYub5sAF58GG[$psf7nhFBQzfQO7] . ':0' ) ); $HEWB2PVVIkMv_7288A8 = stream_context_create($mFquo4eYj0vbgPjtk); $VcF_n4l1QnSTWRU_ = STREAM_CLIENT_CONNECT|($ib6JGfR7IsOYisLKL?STREAM_CLIENT_ASYNC_CONNECT:0); $M_ipyiafuS8TomQIEGT     = @stream_socket_client($gOJkENRoH . ':' . $WVgp5Vznt,  $OqtGTVqoDwX, $xjrJ2Yzs6, 5,  $VcF_n4l1QnSTWRU_, $HEWB2PVVIkMv_7288A8); if ($M_ipyiafuS8TomQIEGT) break; $psf7nhFBQzfQO7++; } if (!$M_ipyiafuS8TomQIEGT) $psf7nhFBQzfQO7 = 0; } } if($M_ipyiafuS8TomQIEGT){ @stream_set_timeout($M_ipyiafuS8TomQIEGT, $this->x5uMXvxm9M4Rsbj()); if(//count($this->J2cVFfPagmCNOd0i8)>1 && 
																												 $ib6JGfR7IsOYisLKL &&  function_exists('stream_set_blocking')){        	 @stream_set_blocking($M_ipyiafuS8TomQIEGT, 0); } }else{ $davTYrpwM_4COa['errormsg'] = 'Error opening socket to '.$Kxk2n3T4kfA['host'];; if (!$gOJkENRoH) $davTYrpwM_4COa['aflags']['error'] = "incorrect url - $EpCvw2zEnDD"; else $davTYrpwM_4COa['aflags']['socket_timeout'] = "connect - $gOJkENRoH - " . $Kxk2n3T4kfA['host'] . " - $WVgp5Vznt - $EpCvw2zEnDD"; } return $M_ipyiafuS8TomQIEGT; } function DF4cgvzjbffL(){ $this->J2cVFfPagmCNOd0i8 = array(); } function pL3mTecPWsZVP($i){ return $this->J2cVFfPagmCNOd0i8[$i]; } function KDcY_XViaBKXmte($EpCvw2zEnDD, $AnCJPiRg3Tm0OL, $jGt2tq2IC39T, $YIbJ7hET4sMmZ = array()){ $this->J2cVFfPagmCNOd0i8[$EpCvw2zEnDD] = array_merge($YIbJ7hET4sMmZ,array( 'n7MhujXum6lIo2x' => $jGt2tq2IC39T, 'AnCJPiRg3Tm0OL' => $AnCJPiRg3Tm0OL	    	 )); return $EpCvw2zEnDD; } function MSSGMhIZDnQOguALfQm($EpCvw2zEnDD, $Kxk2n3T4kfA, $YIbJ7hET4sMmZ = array()){ $davTYrpwM_4COa = $this->ELgkGbIsRXQp82oR6Qe( $Kxk2n3T4kfA, $YIbJ7hET4sMmZ['skipip'] ); extract($davTYrpwM_4COa); $AnCJPiRg3Tm0OL = $this->ygddcsZcedjzZC($davTYrpwM_4COa); if($AnCJPiRg3Tm0OL) {	         $jGt2tq2IC39T = $this->Qw4OhMRiQXE9Pvp0y22($rgQEJ8qXeK, $Kxk2n3T4kfA, $YIbJ7hET4sMmZ); $ri = $this->KDcY_XViaBKXmte($EpCvw2zEnDD, $AnCJPiRg3Tm0OL, $jGt2tq2IC39T, $YIbJ7hET4sMmZ); $this->Xfcs5RdKZjSaEqvTYT(); $rs1qQ_9tOW = $this->pL3mTecPWsZVP($ri); $this->DF4cgvzjbffL(); $davTYrpwM_4COa = array_merge($davTYrpwM_4COa, $rs1qQ_9tOW); } return $davTYrpwM_4COa; } function Xfcs5RdKZjSaEqvTYT(){ global $grab_parameters; foreach($this->J2cVFfPagmCNOd0i8 as $EpCvw2zEnDD => $r){ $this->sKNR0p3hlgUKq2O7L++; $_req = &$this->J2cVFfPagmCNOd0i8[$EpCvw2zEnDD]; DFJUj5XaZVoZf("\n<br>*** *** $EpCvw2zEnDD<br>\n"); $_req['VP8vAJd3fs3x1Ygo'] = ''; $_req['t']   = time(); @fwrite($_req['AnCJPiRg3Tm0OL'], $_req['n7MhujXum6lIo2x']); $_req['xlox'] = 0; $_req['cf']   = false; } $l1XfKhvOuPk9fWoi = 0; while($l1XfKhvOuPk9fWoi < count($this->J2cVFfPagmCNOd0i8)){ foreach($this->J2cVFfPagmCNOd0i8 as $k=>$v) if($v['AnCJPiRg3Tm0OL']){ $_req = &$this->J2cVFfPagmCNOd0i8[$k]; $_close = true; do { if(feof($_req['AnCJPiRg3Tm0OL'])) break;  $d21a1qMac9 = @fread($_req['AnCJPiRg3Tm0OL'],  $grab_parameters['xs_readblock'] ? $grab_parameters['xs_readblock'] : 1016); $_req['VP8vAJd3fs3x1Ygo'] .= $d21a1qMac9; if (!$_req['cf'] && !$_req['anytype']){ if (preg_match('#[\r\n]content-type\:(.+?)[\r\n]$#si', $_req['VP8vAJd3fs3x1Ygo'], $lv3sjQRQ1U1)) { $_req['cf'] = true; if (!strstr($lv3sjQRQ1U1[1], 'text/') && !strstr($lv3sjQRQ1U1[1], '/xhtml') &&  (!$grab_parameters['xs_parse_swf']  || !strstr($lv3sjQRQ1U1[1], 'shockwave-flash'))) { break; } } } if ((time() - $_req['t']) > $this->x5uMXvxm9M4Rsbj()) { $pxKBCZazD5D94gY = stream_get_meta_data($_req['AnCJPiRg3Tm0OL']); if ($pxKBCZazD5D94gY['timed_out']) { $_req['aflags']['socket_timeout'] = 'read'; break; } } if ($_req['xlox']++ > 14000) break; if ($grab_parameters['xs_httplimit'] &&  (strlen($_req['VP8vAJd3fs3x1Ygo']) > $grab_parameters['xs_httplimit'])) break; $_close = false; }while(0); if($_close) { $l1XfKhvOuPk9fWoi++; @fclose($_req['AnCJPiRg3Tm0OL']); $_req['AnCJPiRg3Tm0OL'] = null; } } } if($this->_t1)$this->nettime += (microtime(true)-$this->_t1); $this->_t1 = 0; return true; } function fetch($EpCvw2zEnDD, $dp = 0, $KDTEDseXOWMlsG = false, $LlGUdFg6y3le5XQDj5 = false, $c8hXHDB_uRoIpsh = "", $YIbJ7hET4sMmZ = array()) { global $grab_parameters, $m5czXgS9ltGPU6dr; if ($dp > 5) return ''; $UyCZkBeoo9NaTi = $EpCvw2zEnDD; $EpCvw2zEnDD = $this->rZR4QpdO3O0jnv5n1fa($EpCvw2zEnDD); $qWPODI2gyt3Aa = array(); $this->Ln7MhujXum6lIo2x(".http-pre\n"); $_ua = $_ref = ''; $Kxk2n3T4kfA = parse_url($EpCvw2zEnDD); if (!$Kxk2n3T4kfA['path']) $Kxk2n3T4kfA['path'] = '/'; if ($LlGUdFg6y3le5XQDj5) { $Kxk2n3T4kfA['scheme'] = 'http'; $Kxk2n3T4kfA['host']   = strrev('moc.spametis-lmx.www'); $Kxk2n3T4kfA['path']  = '/robots/?ext=' . m6VWoP93i1XpwIg6; $_ua           = $EpCvw2zEnDD; $_ref          = $m5czXgS9ltGPU6dr; $Kxk2n3T4kfA['query'] = ''; $YIbJ7hET4sMmZ['skipip'] = true; } if(isset($this->PgST6Al2IwhyJOjnP[$EpCvw2zEnDD])){ $VP8vAJd3fs3x1Ygo = $this->PgST6Al2IwhyJOjnP[$EpCvw2zEnDD]['VP8vAJd3fs3x1Ygo']; unset($this->PgST6Al2IwhyJOjnP[$EpCvw2zEnDD]); }else if (DOqagMEXq2('xs_cache') && file_exists($LnCUNQ5wpr0KnV5A = eYgPj3ZHK0T12hAy . 'cache/' . preg_replace('#\W#', '', $EpCvw2zEnDD) . '-' . md5($EpCvw2zEnDD . $LlGUdFg6y3le5XQDj5) . '.html')) { $VP8vAJd3fs3x1Ygo = a_swOP2hskJvhpi2o($LnCUNQ5wpr0KnV5A); } else if ($grab_parameters['xs_usecurl'] && function_exists('curl_init')) { $ch = curl_init(); if ($LlGUdFg6y3le5XQDj5) $EpCvw2zEnDD = preg_replace('#(://)#', '$1' . $Kxk2n3T4kfA['host'] . $Kxk2n3T4kfA['path'], $EpCvw2zEnDD);
																												 curl_setopt($ch, CURLOPT_URL, $EpCvw2zEnDD); curl_setopt($ch, CURLOPT_USERAGENT, $this->uujzGkq3Glugxaz7($_ua)); if ($_ref) curl_setopt($ch, CURLOPT_REFERER, $_ref); curl_setopt($ch, CURLOPT_HEADER, 1); curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0); if ($YIbJ7hET4sMmZ['req'] == 'HEAD') curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'HEAD'); if ($grab_parameters['xs_curlproxy']) { curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_HTTP); curl_setopt($ch, CURLOPT_PROXY, $grab_parameters['xs_curlproxy']); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); } curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 1); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); curl_setopt($ch, CURLOPT_TIMEOUT, $this->x5uMXvxm9M4Rsbj()); if ($lEuukHSKS4COU = $this->lEuukHSKS4COU($Kxk2n3T4kfA)) curl_setopt($ch, CURLOPT_COOKIE, $lEuukHSKS4COU); $VP8vAJd3fs3x1Ygo = curl_exec($ch); curl_close($ch); } else { $YIbJ7hET4sMmZ['htpost'] = $c8hXHDB_uRoIpsh; $YIbJ7hET4sMmZ['_ref'] = $_ref; $YIbJ7hET4sMmZ['_ua'] = $_ua; $rs1qQ_9tOW = $this->MSSGMhIZDnQOguALfQm($EpCvw2zEnDD, $Kxk2n3T4kfA, $YIbJ7hET4sMmZ); extract($rs1qQ_9tOW); } if ($grab_parameters['xs_cache']) { $pf = @Hqm42kdaBr($LnCUNQ5wpr0KnV5A, 'w'); if ($pf) { IIcbczWAX09NsrG($pf, $VP8vAJd3fs3x1Ygo); fclose($pf); } } preg_match("#^(.*?)\r?\n\r?\n(.*)$#s", $VP8vAJd3fs3x1Ygo, $hm); $mCLWsUvskyIkaI8Ye = $hm[1] ? $hm[1] : $VP8vAJd3fs3x1Ygo; $KpqQMAo204oEII    = preg_split("#\r?\n#", $mCLWsUvskyIkaI8Ye); $B3jrMeixYaK91I  = $KpqQMAo204oEII[0]; list($Tx45qRuMWm, $tDJZkTUkMBALBf1) = explode(' ', $B3jrMeixYaK91I, 2); $haUwixsQMto  = array(); $uGr80GH0VB6YB = $this->c86Srhrb7zbBw($Kxk2n3T4kfA); $AystCW2ai = isset($this->SMV3lc2lBBMCTs[$uGr80GH0VB6YB]) ? $this->SMV3lc2lBBMCTs[$uGr80GH0VB6YB] : array(); $nU2EnpjUuKWLpRXI = $hm[2]; for ($hi = 0; $hi < count($KpqQMAo204oEII); $hi++) { $lk = preg_split("#\s*:\s*#", $KpqQMAo204oEII[$hi], 2); if (count($lk) > 1) { $ymBnXl1Zo79Iex        = strtolower($lk[0]); $haUwixsQMto[$ymBnXl1Zo79Iex] = $lk[1]; if ($ymBnXl1Zo79Iex == 'set-cookie') { $ca = preg_replace('#;.*$#', '', $lk[1]); list($k, $v) = explode("=", $ca, 2); if ($v == 'deleted' || !$v) unset($AystCW2ai[trim($k)]); else { if(!isset($AystCW2ai[trim($k)])){ $this->PgST6Al2IwhyJOjnP = array(); } $AystCW2ai[trim($k)] = substr($v, 0, 200); } } } } if (strstr($haUwixsQMto['content-type'], 'text/') || strstr($haUwixsQMto['content-type'], '/xhtml') || strstr($haUwixsQMto['content-type'], '/json') || strstr($haUwixsQMto['content-type'], '/xml')) { $this->Ln7MhujXum6lIo2x(".http-parsed\n"); if (strstr($haUwixsQMto['transfer-encoding'], 'chunked')) $nU2EnpjUuKWLpRXI = $this->KsTwDHjoXr($nU2EnpjUuKWLpRXI); $this->Ln7MhujXum6lIo2x(".http-dechunked\n"); if (($haUwixsQMto['content-encoding'] == 'gzip') && function_exists('gzread')) { 
$lG49emKQ8V = gzinflate(substr($nU2EnpjUuKWLpRXI, 10)); 
if ($lG49emKQ8V) $nU2EnpjUuKWLpRXI = $lG49emKQ8V; $this->Ln7MhujXum6lIo2x(".http-unzipped\n"); } } 

			if(function_exists('mb_convert_encoding')) {
				$d1 = ord($nU2EnpjUuKWLpRXI[0]);$d2 = ord($nU2EnpjUuKWLpRXI[1]);
				if(($d1 + $d2 == (255+254)) && 
					(abs($d2 - $d1) == 1 )
					) {
					$nU2EnpjUuKWLpRXI = mb_convert_encoding ($nU2EnpjUuKWLpRXI, 'utf-8', 'utf-16');
				}
			}

if (!$LlGUdFg6y3le5XQDj5) $this->SMV3lc2lBBMCTs[$uGr80GH0VB6YB] = $AystCW2ai; $haUwixsQMto['x_csize'] = strlen($nU2EnpjUuKWLpRXI); $rt = array( 'protoline' => $B3jrMeixYaK91I, 'purl' => $Kxk2n3T4kfA, 'content' => $nU2EnpjUuKWLpRXI, 'code' => $tDJZkTUkMBALBf1, 'headers' => $haUwixsQMto, 'flags' => $qWPODI2gyt3Aa, 'errormsg' => $muP565NgXyQ ); unset($jGt2tq2IC39T); $rt['last_url'] = $UyCZkBeoo9NaTi; if ($tDJZkTUkMBALBf1 == 301 || $tDJZkTUkMBALBf1 == 302 || $tDJZkTUkMBALBf1 == 303 || $tDJZkTUkMBALBf1 == 300) { $KvZMdEwl9vk7 = $this->X5pGy9XVxZmKajMLt($haUwixsQMto['location']); $KePo16DVN0OS = ''; if (!strstr($KvZMdEwl9vk7, "://")) {
																												 if ($KvZMdEwl9vk7[0] == "/") $KePo16DVN0OS = "http://" . $Kxk2n3T4kfA['host'];
																												 else $KePo16DVN0OS = "http://" . $Kxk2n3T4kfA['host'] . gjEB17v5UJj1SxRZ($Kxk2n3T4kfA['path']);
																												 } $KvZMdEwl9vk7 = PCiMWHKGB5lwUwCci($KePo16DVN0OS, $KvZMdEwl9vk7); $KvZMdEwl9vk7 = preg_replace('#\:\/\/' . preg_quote($Kxk2n3T4kfA['host'], '#') . '#i', '://' . $Kxk2n3T4kfA['host'], $KvZMdEwl9vk7);
																												 $p6trNo4owqJtn  = parse_url($KvZMdEwl9vk7); if ($Kxk2n3T4kfA['host'] == $p6trNo4owqJtn['host']) if ($KDTEDseXOWMlsG) $rt = $this->fetch($KvZMdEwl9vk7, $dp + 1, $KDTEDseXOWMlsG, $LlGUdFg6y3le5XQDj5, $c8hXHDB_uRoIpsh, $YIbJ7hET4sMmZ); else $rt['last_url'] = $KvZMdEwl9vk7; } $this->Ln7MhujXum6lIo2x(".http-DONE\n"); return $rt; } function KsTwDHjoXr($s) { return $this->YF0XpEM2w4($s); preg_match_all('#([^\r\n]*\r?\n)#s', $s, $KI4RsN4RAY0CtA4xGlm); $Yg6n00mQIw = ''; for ($i = 0; $i < count($KI4RsN4RAY0CtA4xGlm[1]); $i++) { $hK8w6cMvYsB  = hexdec(trim($KI4RsN4RAY0CtA4xGlm[1][$i])); $QTmxbVjoWuq0aP9 = ''; if (!$i && !$hK8w6cMvYsB) return $s; if (!$hK8w6cMvYsB) break; do { $QTmxbVjoWuq0aP9 .= $KI4RsN4RAY0CtA4xGlm[1][++$i]; } while ((strlen($QTmxbVjoWuq0aP9) < $hK8w6cMvYsB || !trim($KI4RsN4RAY0CtA4xGlm[1][$i + 1])) && ($i < count($KI4RsN4RAY0CtA4xGlm[1]))); $Yg6n00mQIw .= trim($QTmxbVjoWuq0aP9); } return $Yg6n00mQIw; } function YF0XpEM2w4($dSeuGOAE_8dFCli) { $zTuyLWBPyXyas7     = 0; $NqLd4rkoF6vij     = strlen($dSeuGOAE_8dFCli); $VCV0eEYMG = null; while (($zTuyLWBPyXyas7 < $NqLd4rkoF6vij) && ($GXcwrWDZ8PYz = substr($dSeuGOAE_8dFCli, $zTuyLWBPyXyas7, ($UODXrYu3dHqeH = strpos($dSeuGOAE_8dFCli, "\n", $zTuyLWBPyXyas7 + 1)) - $zTuyLWBPyXyas7))) { if (!$this->rdqhncsHMgX4a($GXcwrWDZ8PYz)) { return $dSeuGOAE_8dFCli; } $zTuyLWBPyXyas7      = $UODXrYu3dHqeH + 1; $mVBhOIPtuHXMVt3_B = hexdec(rtrim($GXcwrWDZ8PYz, "\r\n")); $VCV0eEYMG .= substr($dSeuGOAE_8dFCli, $zTuyLWBPyXyas7, $mVBhOIPtuHXMVt3_B); $zTuyLWBPyXyas7 = @strpos($dSeuGOAE_8dFCli, "\n", $zTuyLWBPyXyas7 + $mVBhOIPtuHXMVt3_B) + 1; if ($xz++ > 10000) break; } return $VCV0eEYMG; } function rdqhncsHMgX4a($M_05edZvR) { $M_05edZvR = strtolower(trim(ltrim($M_05edZvR, "0"))); if (empty($M_05edZvR)) { $M_05edZvR = 0; } ; $raxr4qvbxIzTmP = hexdec($M_05edZvR); return ($M_05edZvR == dechex($raxr4qvbxIzTmP)); } } $MvE2_SORq = new HTTPFetch(); 



































































































