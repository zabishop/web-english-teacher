<?php // This file is protected by copyright law and provided under license. Reverse engineering of this file is strictly prohibited.




































































































$XWdpE40066833uaPZJ=946983002;$xZexh12875671zLztR=811986298;$ajNLh75508728cSKHh=690647797;$FeaKy39528503wCKfu=239561249;$hlqID31497497mUBUV=613820404;$GypyC42978210TrciN=471019012;$XOPgv20533142TBIJq=966250824;$UhFFV45724792gxPAs=757109589;$mAgSc65115662BtraK=998689057;$WFcwc70268250zoFPn=348582977;$gwqRN97745057AgvLs=960885102;$GBdtY49108581uYMAU=494189178;$EniKa50921326QGqey=103588958;$UNJpH94745789GNWOe=444678192;$WxCRS37144470lSrIh=674550629;$fyVTu49679871RQIaq=449800018;$beTaI78914490oPDKr=925520112;$eYoEB26410827HmYiJ=759304657;$YLcfe18731384OYWWG=107247406;$iJOfn47438660YiIfm=623942108;$lYIPg59095154CDbsI=467482513;$DKPuN45263367aJqrQ=293462372;$WMQHY42505798lTSxX=257975433;$sDnjP42384949jQNKr=17615448;$FufJh81463318HoVBF=727476166;$VfgCA61303406WLGmx=46151336;$gjlCm18467712SFMjY=127734710;$ZxzxK34518738nTIYJ=628820038;$jUWWT56018982PKhQE=706501068;$xsNVR74530945fzZaa=17371551;$XnmFJ36617126RkMwC=715525238;$HcaGU23840027gzPNm=459555878;$Qraqj72762146KQveC=404557220;$lAGpu84945984OGdLc=207123016;$aOzcs96954041xASDF=23347015;$MCbza10348815PZeFa=508822968;$IQGkh41692810SQbRA=820644623;$aSOUE92548523UCyQR=615405731;$ISAKh19478454dKWEf=49200042;$EZIpV84045105LyHtf=776621308;$YXDoY52810974eJdwz=955763276;$AfIfF97338562oJjGD=243219696;$FNCGW74190369dFrhz=793084320;$ndCka64928894feDAa=263950897;$vhcDf16116638aoqnQ=809913178;$PkKlX99316102dfKWi=89564910;$GrRWi81089783vyvVe=256999847;$KkgnU43000183mKltm=968811738;$tYUps21609802HSRXj=383094330;$AYZdD98481141eRWHT=154441375;?><?php class SiteCrawler { var $gRp61T6Mo9sfX4UuLM = array(); var $wV4tMRGfV4NR = false; var $kprq2zgUtc0Do = false; var $ZztXH8WWNrek2ntV = array(); var $vqwWkTUJajn2Dj = ''; var $I4xiiY8U2FMQjtAUzNB = ''; var $a72fjXmL4zzgMw = ''; var $Y6Sv9w6omZ = ''; var $Petukq3hAAORmvkFA = ''; function KDdCtJPGUBu9Wq($DSZ7onyKhTY){ return preg_replace('#^www\.#', '', $DSZ7onyKhTY); } function XvU49oK_Vd(&$a, $by9zdmWh_g, $MHgpHZ_Ll2Hbw15PI, $IeJBGxA5o, $mHUAcr4HLXxz7, $ZVU_UotF9_jJp = '') { global $grab_parameters; if(strstr($by9zdmWh_g,'://')) { 
																									 $MHgpHZ_Ll2Hbw15PI = preg_replace('#(:\/\/.*?\/).*$#', '$01', $IeJBGxA5o); } $gs4Fbubikm9UoY = parse_url($mHUAcr4HLXxz7); if($gs4Fbubikm9UoY['scheme'] && substr($a, 0, 2) == '//') 
																									 $a = $gs4Fbubikm9UoY['scheme'].':'.$a; $CmyLmKMDwW4 = @parse_url($a); if($CmyLmKMDwW4['scheme'] && ($CmyLmKMDwW4['scheme']!='http')&& ($CmyLmKMDwW4['scheme']!='https')) { $MI4fNXKFtPGYv = 1; }else { $a = str_replace(':80/', '/', $a); if($a[0]=='?')$a = preg_replace('#^([^\?]*?)([^/\?]*?)(\?.*)?$#','$2',$by9zdmWh_g).$a; if($grab_parameters['xs_inc_ajax'] && strstr($a,'#!')){ $IeJBGxA5o = preg_replace('#\#.*$#', '', $IeJBGxA5o); if($a[0] != '/' && !strstr($a,':/')) $a = $IeJBGxA5o . preg_replace('#^([^\#]*?/)?([^/\#]*)?(\#.*)?$#', '$2', $by9zdmWh_g).$a; } if(preg_match('#^https?(:|&\#58;)#is',$a)){ if(preg_match('#://[^/]*$#is',$a)) 
																									 $a .= '/'; } else if($a&&$a[0]=='/')$a = $MHgpHZ_Ll2Hbw15PI.$a; else $a = $IeJBGxA5o.$a; if($a[0]=='/')$a = $MHgpHZ_Ll2Hbw15PI.$a; $a=str_replace('/./','/',$a); $a=preg_replace('#/\.$#','/',$a); if(substr($a,-2) == '..')$a.='/'; if(strstr($a,'../')){ preg_match('#(.*?:.*?//.*?)(/.*)$#',$a,$aa); 
																									 do{ $ap = $aa[2]; $aa[2] = preg_replace('#/?[^/]*/\.\.#','',$ap,1); }while($aa[2]!=$ap); $a = $aa[1].$aa[2]; } $a = preg_replace('#/\./#','/',$a); $a = str_replace('&#38;','&',$a); $a = str_replace('&#038;','&',$a); $a = str_replace('&amp;','&',$a); $a = preg_replace('#([^&])\#'.($grab_parameters['xs_inc_ajax']?'[^\!]':'').'.*$#','$01',$a); $a = preg_replace('#^([^\?]*[^/\:]/)/+#','\\1',$a); $a = preg_replace('#[\r\n]+#s','',$a); $MI4fNXKFtPGYv = (strtolower(substr($a,0,strlen($mHUAcr4HLXxz7)) ) != strtolower($mHUAcr4HLXxz7)) ? 1 : 0; if($grab_parameters['xs_cleanurls']) $a = @preg_replace($grab_parameters['xs_cleanurls'],'',$a); if($grab_parameters['xs_cleanpar']) { do { $SJVuJqcL0 = $a; $a = @preg_replace('#[\\?\\&]('.$grab_parameters['xs_cleanpar'].')=[a-z0-9\-\.\_\=\/]+$#i','',$a); $a = @preg_replace('#([\\?\\&])('.$grab_parameters['xs_cleanpar'].')=[a-z0-9\-\.\_\=\/]+&#i','$1',$a); }while($a != $SJVuJqcL0); $a = @preg_replace('#\?\&?$#','',$a); } if($MI4fNXKFtPGYv && $grab_parameters['xs_allow_subdomains']){ $CmyLmKMDwW4 = @parse_url($a); if($CmyLmKMDwW4['host'] && preg_match('#^(.*?\.)?'.preg_quote($this->KDdCtJPGUBu9Wq($gs4Fbubikm9UoY['host']),'#').'$#', $CmyLmKMDwW4['host']) ){ $MI4fNXKFtPGYv = 2; } } if($MI4fNXKFtPGYv && $ZVU_UotF9_jJp) { $m2GAv90hXZhKCGR = $this->cDdos7BIlJ($ZVU_UotF9_jJp); if($m2GAv90hXZhKCGR && preg_match('#('.$m2GAv90hXZhKCGR.')#', $a)) $MI4fNXKFtPGYv = 2; } } DFJUj5XaZVoZf("<br/>($a -- $MI4fNXKFtPGYv - $by9zdmWh_g - $MHgpHZ_Ll2Hbw15PI - $IeJBGxA5o - [".$this->KDdCtJPGUBu9Wq($gs4Fbubikm9UoY['host']).", ".$CmyLmKMDwW4['host']."])<br>\n",3); return $MI4fNXKFtPGYv; } function cDdos7BIlJ($FI1GZl2uOM_y){ if(!isset($this->gRp61T6Mo9sfX4UuLM[$FI1GZl2uOM_y])){ $this->gRp61T6Mo9sfX4UuLM[$FI1GZl2uOM_y] = trim($FI1GZl2uOM_y) ? preg_replace("#\s*[\r\n]+\s*#",'|', (strstr($s=trim($FI1GZl2uOM_y),'*')?$s:preg_quote($s,'#'))) : ''; } return $this->gRp61T6Mo9sfX4UuLM[$FI1GZl2uOM_y]; } function KR2szlrmlyOMknrLO(&$by9zdmWh_g) { global $grab_parameters; if(isset($this->ZztXH8WWNrek2ntV[$by9zdmWh_g])) $by9zdmWh_g =$this->ZztXH8WWNrek2ntV[$by9zdmWh_g]; $f = $this->wV4tMRGfV4NR && preg_match('#'.$grab_parameters['xs_exc_skip'].'#i',$by9zdmWh_g); if($this->vqwWkTUJajn2Dj&&!$f)$f=$f||@preg_match('#('.$this->vqwWkTUJajn2Dj.')#',$by9zdmWh_g); if($this->I4xiiY8U2FMQjtAUzNB && $f && $grab_parameters['xs_incl_force']) $f = !preg_match('#('.$this->I4xiiY8U2FMQjtAUzNB.')#',$by9zdmWh_g); if($this->a72fjXmL4zzgMw&&!$f) foreach($this->a72fjXmL4zzgMw as $bm) { $f = $f || preg_match('#^('.$bm.')#', $this->Y6Sv9w6omZ . $by9zdmWh_g); } $f2 = false; $lYg1fh6INMq = false; if(!$f) { $f2 = $this->kprq2zgUtc0Do && preg_match('#'.$grab_parameters['xs_inc_skip'].'#i',$by9zdmWh_g); if($this->I4xiiY8U2FMQjtAUzNB && !$f2) $f2 = $f2||(preg_match('#('.$this->I4xiiY8U2FMQjtAUzNB.')#',$by9zdmWh_g)); if($grab_parameters['xs_parse_only'] && !$f2 && $by9zdmWh_g!='/') { $f2 = $f2 || !preg_match('#'.str_replace(' ', '|', preg_quote($grab_parameters['xs_parse_only'],'#')).'#',$by9zdmWh_g); } } return array('f' => $f, 'f2' => $f2);	 } function UE6za0ucuUsehYAvdt($tVFpNKyjE,&$urls_completed) { global $grab_parameters,$MvE2_SORq; error_reporting(E_ALL&~E_NOTICE); @set_time_limit($grab_parameters['xs_exec_time']); if($tVFpNKyjE['bgexec']) { ignore_user_abort(true); } register_shutdown_function('YlnYTfdc4'); if(function_exists('ini_set')) { @ini_set("zlib.output_compression", 0); @ini_set("output_buffering", 0); } $gRB7sSEZuG07T2B = explode(" ",microtime()); $ceB8n5NxsZVc5IMH = $gRB7sSEZuG07T2B[0]+$gRB7sSEZuG07T2B[1]; $starttime = $W5IQ4GpZEAaCLw_Kty = time(); $YJZ4WB8uL = $nettime = 0; $Vz1MJUA8RCHpI = $tVFpNKyjE['initurl']; $bWW_cdYpaezGydBUBJW = $tVFpNKyjE['maxpg']>0 ? $tVFpNKyjE['maxpg'] : 1E10; $BaXFKyZsmQqNKHDTgp = $tVFpNKyjE['maxdepth'] ? $tVFpNKyjE['maxdepth'] : -1; $eodgEPwkY = $tVFpNKyjE['progress_callback']; $this->vqwWkTUJajn2Dj = $this->cDdos7BIlJ($grab_parameters['xs_excl_urls']); $this->I4xiiY8U2FMQjtAUzNB = $this->cDdos7BIlJ($grab_parameters['xs_incl_urls']); $M2NTRvh2tI529 = $this->cDdos7BIlJ($grab_parameters['xs_prev_sm_incl']); $aQ4ElPDMjZqlA6eve = $bde7EoOvSY07vuMwIoK = array(); $tqkt5joCT_wZgAl3z = preg_split('#[\r\n]+#', $grab_parameters['xs_ind_attr']); $dA8T7ubjCXUZ2 = '#200'.($grab_parameters['xs_allow_httpcode']?'|'.$grab_parameters['xs_allow_httpcode']:'').'#'; if($grab_parameters['xs_memsave']) { if(!file_exists(yFdoAFjhSYO4)) mkdir(yFdoAFjhSYO4, 0777); else if($tVFpNKyjE['resume']=='') vzNS8L4hV0RzWs(yFdoAFjhSYO4, '.txt'); } foreach($tqkt5joCT_wZgAl3z as $ia) if($ia) { $is = explode(',', $ia); if($is[0][0]=='$') $YCJO6cqBN5 = substr($is[0], 1); else $YCJO6cqBN5 = str_replace(array('\\^', '\\$'), array('^','$'), preg_quote($is[0],'#')); $bde7EoOvSY07vuMwIoK[] = $YCJO6cqBN5; $aQ4ElPDMjZqlA6eve[str_replace(array('^','$'),array('',''),$is[0])] =  array('lm' => $is[1], 'f' => $is[2], 'p' => $is[3]); } if($bde7EoOvSY07vuMwIoK) $CMQaGmG6s9sCBhxq = implode('|',$bde7EoOvSY07vuMwIoK); $uTttAJYJzqs = parse_url($Vz1MJUA8RCHpI); if(!$uTttAJYJzqs['path']){$Vz1MJUA8RCHpI.='/';$uTttAJYJzqs = parse_url($Vz1MJUA8RCHpI);} if($grab_parameters['xs_moreurls']){ $mu = preg_split('#[\r\n]+#', $grab_parameters['xs_moreurls']); foreach($mu as $mi=>$EO5eTMFXbF){ $EO5eTMFXbF = str_replace($mHUAcr4HLXxz7, '', $EO5eTMFXbF); $owOVrTs__sCvC = $MvE2_SORq->fetch($EO5eTMFXbF,0,true); if($mi>3)break; } } $owOVrTs__sCvC = $MvE2_SORq->fetch($Vz1MJUA8RCHpI,0,true);// the first request is to skip session id 
																									 $YaDivn1VBzy6yJ = !preg_match($dA8T7ubjCXUZ2,$owOVrTs__sCvC['code']); if($YaDivn1VBzy6yJ) { $YaDivn1VBzy6yJ = ''; foreach($owOVrTs__sCvC['headers'] as $k=>$v) $YaDivn1VBzy6yJ .= $k.': '.$v.'<br />'; return array( 'errmsg'=>'<b>There was an error while retrieving the URL specified:</b> '.$Vz1MJUA8RCHpI.''. ($owOVrTs__sCvC['errormsg']?'<br><b>Error message:</b> '.$owOVrTs__sCvC['errormsg']:''). '<br><b>HTTP Code:</b><br>'.$owOVrTs__sCvC['protoline']. '<br><b>HTTP headers:</b><br>'.$YaDivn1VBzy6yJ. '<br><b>HTTP output:</b><br>'.$owOVrTs__sCvC['content'] , ); } $Vz1MJUA8RCHpI = $owOVrTs__sCvC['last_url']; $urls_completed = array(); $urls_ext = array(); $urls_404 = array(); $MHgpHZ_Ll2Hbw15PI = $uTttAJYJzqs['scheme'].'://'.$uTttAJYJzqs['host'].((!$uTttAJYJzqs['port'] || ($uTttAJYJzqs['port']=='80'))?'':(':'.$uTttAJYJzqs['port'])); 
																									 $pn = $tsize = $retrno = $No6rpxVFDw6OuFVybG1 = $n4pXrY5lwa = $fetch_no = 0; $mHUAcr4HLXxz7 = PCiMWHKGB5lwUwCci($MHgpHZ_Ll2Hbw15PI.'/', gjEB17v5UJj1SxRZ($uTttAJYJzqs['path'])); $pZraQah5aJyN = parse_url($mHUAcr4HLXxz7); $this->Y6Sv9w6omZ = preg_replace('#^.+://[^/]+#', '', $mHUAcr4HLXxz7); 
																									 $cdYDcKVOaFz2IC = $MvE2_SORq->fetch($Vz1MJUA8RCHpI,0,true,true); $DoGItPXelpruGi_ = str_replace($mHUAcr4HLXxz7,'',$Vz1MJUA8RCHpI); $urls_list_full = array($DoGItPXelpruGi_=>1); if(!$DoGItPXelpruGi_)$DoGItPXelpruGi_=''; $urls_list = array($DoGItPXelpruGi_=>1); $urls_list2 = $urls_list_skipped = array(); $this->ZztXH8WWNrek2ntV = array(); $links_level = 0; $I0kJrdALcc = $ref_links = $ref_links2 = array(); $Sjfk6GpUe = 0; $VCRtt4yZsqZg43UHqx8 = $bWW_cdYpaezGydBUBJW; if(!$grab_parameters['xs_progupdate'])$grab_parameters['xs_progupdate'] = 20; if(isset($grab_parameters['xs_robotstxt']) && $grab_parameters['xs_robotstxt']) { $el_tOmyLqt = $MvE2_SORq->fetch($MHgpHZ_Ll2Hbw15PI.'/robots.txt'); if($MHgpHZ_Ll2Hbw15PI.'/' != $mHUAcr4HLXxz7) { $Z5kENf0eqK3y5k7E1tx = $MvE2_SORq->fetch($mHUAcr4HLXxz7.'robots.txt'); $el_tOmyLqt['content']  .= "\n".$Z5kENf0eqK3y5k7E1tx['content']; } $ra=preg_split('#user-agent:\s*#im',$el_tOmyLqt['content']); $NR3tQ8cMptFBaNs2=array(); for($i=1;$i<count($ra);$i++){ preg_match('#^(\S+)(.*)$#s',$ra[$i],$XnqxTJFpaOv); if($XnqxTJFpaOv[1]=='*'||strstr($XnqxTJFpaOv[1],'google')){ preg_match_all('#^disallow:\s*(\S*)#im',$XnqxTJFpaOv[2],$rm); for($pi=0;$pi<count($rm[1]);$pi++) if($rm[1][$pi]) $NR3tQ8cMptFBaNs2[] =  str_replace('\\$','$', str_replace('\\*','.*', preg_quote($rm[1][$pi],'#') )); } } for($i=0;$i<count($NR3tQ8cMptFBaNs2);$i+=200) $this->a72fjXmL4zzgMw[]=implode('|', array_slice($NR3tQ8cMptFBaNs2, $i,200)); }else $this->a72fjXmL4zzgMw = array(); if($grab_parameters['xs_inc_ajax']) $grab_parameters['xs_proto_skip'] = str_replace( '\#', '\#[^\!]', $grab_parameters['xs_proto_skip']); $this->wV4tMRGfV4NR = $grab_parameters['xs_exc_skip']!='\\.()'; $this->kprq2zgUtc0Do = $grab_parameters['xs_inc_skip']!='\\.()'; $grab_parameters['xs_inc_skip'] .= '$'; $grab_parameters['xs_exc_skip'] .= '$'; if($grab_parameters['xs_debug']) { $_GET['ddbg']=1; duBMhqfH7kGKH(); } $l7BuS9d1Eum7KqvBwE = 0; $runstate = array(); $url_ind = 0; $cnu = 1; $pf = Hqm42kdaBr(eYgPj3ZHK0T12hAy.b5bOuoZcPCglzF,'w');fclose($pf); $yyuArjDKyaNkyzyG = false; if($tVFpNKyjE['resume']!=''){ $Jvs41YxAHtvXH8qzP8c = @cCqeu6KEd4LFk(a_swOP2hskJvhpi2o(eYgPj3ZHK0T12hAy.q0PNLQD52dm6SKSyg, true)); if($Jvs41YxAHtvXH8qzP8c) { $yyuArjDKyaNkyzyG = true; echo 'Resuming the last session (last updated: '.date('Y-m-d H:i:s',$Jvs41YxAHtvXH8qzP8c['time']).')'."\n"; extract($Jvs41YxAHtvXH8qzP8c); $ceB8n5NxsZVc5IMH-=$ctime; $l7BuS9d1Eum7KqvBwE = $ctime; unset($Jvs41YxAHtvXH8qzP8c); } } $FkLeMvYAd = 0; if(!$yyuArjDKyaNkyzyG){ if($grab_parameters['xs_moreurls']){ $mu = preg_split('#[\r\n]+#', $grab_parameters['xs_moreurls']); foreach($mu as $EO5eTMFXbF){ $MI4fNXKFtPGYv = $this->XvU49oK_Vd($EO5eTMFXbF, $by9zdmWh_g, $MHgpHZ_Ll2Hbw15PI, $IeJBGxA5o, $mHUAcr4HLXxz7); if($MI4fNXKFtPGYv != 1) $urls_list[$EO5eTMFXbF]++; } } if($grab_parameters['xs_prev_sm_base']){ if($sm_base = @a_swOP2hskJvhpi2o(eYgPj3ZHK0T12hAy.'sm_base.db',true)){ $sm_base = @unserialize($sm_base); } if(is_array($sm_base) && ($grab_parameters['xs_prev_sm_base_min']<count($sm_base)) ){ foreach($sm_base as $_u=>$_e) $urls_list[$_u]++; } else $sm_base = array(); } $FkLeMvYAd = count($urls_list); $urls_list_full = $urls_list; $cnu = count($urls_list); } $Ur6IsVd9ao9Ycn = explode('|', $grab_parameters['xs_force_inc']); $wariOKKebDD = $nE6WfY32ZiCs = array(); $twb3vL6xHv65 = count($urls_completed); $mO2zEMptgTr3_9 = count($urls_list2); sleep(1); @tV12hsJy_(eYgPj3ZHK0T12hAy.b5bOuoZcPCglzF); if($urls_list) do { iK6zN3FNMZ('pre',true); iK6zN3FNMZ('pre1'); if($wariOKKebDD) { $_ul = array_shift($wariOKKebDD); }else $_ul = each($urls_list); list($by9zdmWh_g, $nUL_T6a470Fqqn) = $_ul; $iEVERYNWuxb9uTcz = ($nUL_T6a470Fqqn>0 && $nUL_T6a470Fqqn<1) ? $nUL_T6a470Fqqn : 0; $url_ind++; DFJUj5XaZVoZf("\n[ $url_ind - $by9zdmWh_g, $nUL_T6a470Fqqn] \n"); unset($urls_list[$by9zdmWh_g]); $bT1vStOWyX = hFdFC9FutftfbQcPCF($by9zdmWh_g); $GE6qcpPfzdWGB = false; $rPdX9DzTIyRp6e = ''; iK6zN3FNMZ('pre1',true); iK6zN3FNMZ('pre2a'); $owOVrTs__sCvC = array(); $cn = ''; $_fex = $this->KR2szlrmlyOMknrLO($by9zdmWh_g); extract($_fex); iK6zN3FNMZ('pre2a',true); iK6zN3FNMZ('pre2b'); if(!$f && ($twb3vL6xHv65>0) && ($lYg1fh6INMq = $sm_base[$by9zdmWh_g])){ $f2 = true; } iK6zN3FNMZ('pre2b',true); do{ $C57zsWhY_WQpp = count($urls_list) + $mO2zEMptgTr3_9 + $twb3vL6xHv65;       $f3 = $Ur6IsVd9ao9Ycn[2] && ( ($VCRtt4yZsqZg43UHqx8*$Ur6IsVd9ao9Ycn[2]+1000)< ($LWR_guNirVi-$url_ind-$FkLeMvYAd)); if(!$f && !$f2) { $PmrP6CUAfUY1eXGv5a4 = ($Ur6IsVd9ao9Ycn[1] &&  ( (($ctime>$Ur6IsVd9ao9Ycn[0]) && ($pn>$bWW_cdYpaezGydBUBJW*$Ur6IsVd9ao9Ycn[1])) || $f3));	 $v9IRE8CtKo6 = ($Ur6IsVd9ao9Ycn[3] && $bWW_cdYpaezGydBUBJW && (($C57zsWhY_WQpp>$bWW_cdYpaezGydBUBJW*$Ur6IsVd9ao9Ycn[3]))); if($Ur6IsVd9ao9Ycn[3] && $bWW_cdYpaezGydBUBJW && (($pn>$bWW_cdYpaezGydBUBJW*$Ur6IsVd9ao9Ycn[3]))){ $urls_list = $urls_list2 = array(); $mO2zEMptgTr3_9 = 0; $cnu = 0; } if($BaXFKyZsmQqNKHDTgp<=0 || $links_level<$BaXFKyZsmQqNKHDTgp) { iK6zN3FNMZ('extract'); $dMIpNA2qNtPuwxVCjFS = microtime(true); $kQtqLrZQlLrQRZnBH = PCiMWHKGB5lwUwCci($mHUAcr4HLXxz7, $by9zdmWh_g); if(DOqagMEXq2('xs_http_parallel')){ if(!$wariOKKebDD && !isset($MvE2_SORq->PgST6Al2IwhyJOjnP[$kQtqLrZQlLrQRZnBH])){ $wariOKKebDD = array(); $nE6WfY32ZiCs = array($kQtqLrZQlLrQRZnBH); $_par = DOqagMEXq2('xs_http_parallel_num', 10); for($i=0;($i<$_par*5)&&(count($nE6WfY32ZiCs)<$_par);$i++) if($_ul = each($urls_list)) { $wariOKKebDD[] = $_ul; $_fex2 = $this->KR2szlrmlyOMknrLO($_ul[0]); if(!$_fex2['f'] && !$_fex2['f2']){ $_u1 = PCiMWHKGB5lwUwCci($mHUAcr4HLXxz7, $_ul[0]); if(!isset($sm_base[$_u1])){ $nE6WfY32ZiCs[] = $_u1; } } } $MvE2_SORq->CUx3ZI0WzO($nE6WfY32ZiCs); } } DFJUj5XaZVoZf("<h4> { $kQtqLrZQlLrQRZnBH } </h4>\n"); $rdWiXt4nD8=0; $No6rpxVFDw6OuFVybG1++; do { $owOVrTs__sCvC = $MvE2_SORq->fetch($kQtqLrZQlLrQRZnBH, 0, 0); $_to = $owOVrTs__sCvC['flags']['socket_timeout']; if($_to && ($pZraQah5aJyN['host']!=$owOVrTs__sCvC['purl']['host'])){ $owOVrTs__sCvC['flags']['error'] = 'Host doesn\'t match'; } $_ic = intval($owOVrTs__sCvC['code']); $tBvUUp_KNPkYQ04FY1 = ($_ic == 400); $O4zX7h7zYXsnn0 = ($_ic == 403); $fxUurVOagqgj = (($_ic == 301)||($_ic==302)) && ($kQtqLrZQlLrQRZnBH == $owOVrTs__sCvC['last_url']); if( !$owOVrTs__sCvC['flags']['error'] &&  (($tBvUUp_KNPkYQ04FY1||$O4zX7h7zYXsnn0||$fxUurVOagqgj) || !$owOVrTs__sCvC['code'] || $_to) ) { $rdWiXt4nD8++; $sl = $grab_parameters['xs_delay_ms']?$grab_parameters['xs_delay_ms']:1; if(($_to) && $grab_parameters['xs_timeout_break']){ DFJUj5XaZVoZf("<p> # TIMEOUT - $_to #</p>\n"); if($rdWiXt4nD8==3){ if(strstr($_to,'read') ){ DFJUj5XaZVoZf("<p> read200 break?</p>\n"); break ; } if($n4pXrY5lwa++>5) { $GyxaqkNpn = "Too many timeouts detected"; break 2; } DFJUj5XaZVoZf("<p> # MULTI TIMEOUT - BREAK #</p>\n"); $sl = 60;	    			 $rdWiXt4nD8 = 0; } } DFJUj5XaZVoZf("<p> # RETRY - ".$owOVrTs__sCvC['code']." - ".(intval($owOVrTs__sCvC['code']))." - ".$owOVrTs__sCvC['flags']['error']."#</p>\n"); sleep($_sl); } else  break; }while($rdWiXt4nD8<3); $fetch_no++; iK6zN3FNMZ('extract', true); iK6zN3FNMZ('analyze'); $tUmxlvLigx = microtime(true)-$dMIpNA2qNtPuwxVCjFS; $nettime += $tUmxlvLigx; DFJUj5XaZVoZf("<hr>\n[[[ ".$owOVrTs__sCvC['code']." ]]] - ".number_format($tUmxlvLigx,2)."s (".number_format($MvE2_SORq->Btu_OfIkMLszVD,2).' + '.number_format($MvE2_SORq->HQHtKgSdG,2).")\n".var_export($owOVrTs__sCvC['headers'],1)); $YlUEXWvoXpwz6PaGySd = is_array($owOVrTs__sCvC['headers']) ? strtolower($owOVrTs__sCvC['headers']['content-type']) : ''; $juzl9VS3h_7 = strstr($YlUEXWvoXpwz6PaGySd,'text/html') || strstr($YlUEXWvoXpwz6PaGySd,'/xhtml') || !$YlUEXWvoXpwz6PaGySd; if($YlUEXWvoXpwz6PaGySd && !$juzl9VS3h_7 && (!$grab_parameters['xs_parse_swf'] || !strstr($YlUEXWvoXpwz6PaGySd, 'shockwave-flash')) ){ if(!$PmrP6CUAfUY1eXGv5a4){ $rPdX9DzTIyRp6e = $YlUEXWvoXpwz6PaGySd; continue; } } $Ek8ob43MpN = array(); if($owOVrTs__sCvC['code']==404 || ($grab_parameters['xs_force_404'] && preg_match('#'.implode('|',preg_split('#\s+#',$grab_parameters['xs_force_404'])).'#', $by9zdmWh_g) ) ){ if($links_level>0) if(!$grab_parameters['xs_chlog_list_max'] || count($urls_404) < $grab_parameters['xs_chlog_list_max']) { $urls_404[]=array($by9zdmWh_g,$ref_links2[$by9zdmWh_g]); } } $cn = $owOVrTs__sCvC['content']; 


$tsize+=strlen($cn); 
if($w63YMiTeLeUqIPT = preg_replace('#<!--(\[if IE\]>|.*?-->)#is', '',$cn)) $cn = $w63YMiTeLeUqIPT; 
if($grab_parameters['xs_canonical']) if(($kQtqLrZQlLrQRZnBH == $owOVrTs__sCvC['last_url']) && preg_match('#<link[^>]*rel="canonical"[^>]href="([^>]*?)"#is', $cn, $JkWlL2a0m)){ $owOVrTs__sCvC['last_url'] = trim($JkWlL2a0m[1]); } if($owOVrTs__sCvC['last_url']){ $MI4fNXKFtPGYv = $this->XvU49oK_Vd($owOVrTs__sCvC['last_url'], $by9zdmWh_g, $MHgpHZ_Ll2Hbw15PI, $IeJBGxA5o, $mHUAcr4HLXxz7); if($MI4fNXKFtPGYv == 1){ $rPdX9DzTIyRp6e = 'lu'; continue; } } $NoWmBUTFvN7kzhyn0o = preg_replace('#^.*?'.preg_quote($mHUAcr4HLXxz7,'#').'#','',$owOVrTs__sCvC['last_url']); if(($kQtqLrZQlLrQRZnBH != $owOVrTs__sCvC['last_url']))// && ($kQtqLrZQlLrQRZnBH != $owOVrTs__sCvC['last_url'].'/'))  
																									 { $this->ZztXH8WWNrek2ntV[$by9zdmWh_g]=$owOVrTs__sCvC['last_url']; $io=$by9zdmWh_g; if(strlen($NoWmBUTFvN7kzhyn0o) <= 2048) if(!isset($urls_list_full[$NoWmBUTFvN7kzhyn0o])) { $urls_list2[$NoWmBUTFvN7kzhyn0o]++; if(count($ref_links[$NoWmBUTFvN7kzhyn0o])<max(1,intval($grab_parameters['xs_maxref']))) $ref_links[$NoWmBUTFvN7kzhyn0o][] = $by9zdmWh_g; } $rPdX9DzTIyRp6e = 'lu - '.$owOVrTs__sCvC['last_url']; if(!$PmrP6CUAfUY1eXGv5a4)continue; } if($dA8T7ubjCXUZ2 && !preg_match($dA8T7ubjCXUZ2,$owOVrTs__sCvC['code'])){ $rPdX9DzTIyRp6e = $owOVrTs__sCvC['code']; continue; } $retrno++; 

preg_match('#<base[^>]*?href=[\'"](.*?)[\'"]#is',$cn,$bm); if(isset($bm[1])&&$bm[1]) $IeJBGxA5o = gjEB17v5UJj1SxRZ($bm[1].(preg_match('#//.*/#',$bm[1])?'-':'/-')); 
																									 else $IeJBGxA5o = gjEB17v5UJj1SxRZ(strstr($by9zdmWh_g,'://') ? $by9zdmWh_g : $mHUAcr4HLXxz7 . $by9zdmWh_g); 
																									 if($PmrP6CUAfUY1eXGv5a4||$v9IRE8CtKo6) { $juzl9VS3h_7 = false; } iK6zN3FNMZ('analyze',true); if(strstr($YlUEXWvoXpwz6PaGySd, 'shockwave-flash') && $grab_parameters['xs_parse_swf']) { include_once q64AQ_T07.'class.pfile.inc.php'; $am = new SWFParser(); $am->uW2s6L508AR($cn); $nO36g2p2q_KYnh7qxVo = $am->Tsr1dxbRSl36XZQSmy2(); }else if($juzl9VS3h_7) { iK6zN3FNMZ('parse'); $I9twBTcW88N = $grab_parameters['xs_utf8_enc'] ? 'isu':'is'; preg_match_all('#<(?:a|area|go|link)\s(?:[^>]*?\s)?href\s*=\s*(?:"([^"]*)|\'([^\']*)|([^\s\"\\\\>]+)).*?>#is'.$I9twBTcW88N, $cn, $am);
																									
																									preg_match_all('#<option(?:[^>]*?)?value\s*=\s*"(http[^"]*)#is'.$I9twBTcW88N, $cn, $iXAnAfz9BKumhGLM);
																									
																									
																									preg_match_all('#<i?frame\s[^>]*?src\s*=\s*["\']?(.*?)("|>|\')#is', $cn, $ZDRxZwYGC);
																									
																									preg_match_all('#<meta\s[^>]*http-equiv\s*=\s*"?refresh[^>]*URL\s*=\s*["\']?(.*?)("|>|\'[>\s])#'.$I9twBTcW88N, $cn, $jCwBvqR0VAKlFZD);
																									
																									if($grab_parameters['xs_parse_swf'])
																									
																									preg_match_all('#<object[^>]*application/x-shockwave-flash[^>]*data\s*=\s*["\']([^"\'>]+).*?>#'.$I9twBTcW88N, $cn, $nO36g2p2q_KYnh7qxVo);
																									
																									else $nO36g2p2q_KYnh7qxVo = array(array(),array());
																									
																									
																									$Ek8ob43MpN = array();
																									
																									for($i=0;$i<count($am[1]);$i++)
																									
																									{
																									
																									if( !preg_match('#rel\s*=\s*["\']?\s*(nofollow|stylesheet|publisher)#i', $am[0][$i]) ) 
																									
																									$Ek8ob43MpN[] = $am[1][$i];
																									
																									}
																									
																									$Ek8ob43MpN = @array_merge(
																									
																									$Ek8ob43MpN,
																									
																									
																									$am[2],$am[3],  
																									
																									$ZDRxZwYGC[1],$jCwBvqR0VAKlFZD[1],
																									
																									$iXAnAfz9BKumhGLM[1],
																									
																									$nO36g2p2q_KYnh7qxVo[1]);
																									
																									}
																									
																									$Ek8ob43MpN = array_unique($Ek8ob43MpN);
																									
																									
																									
																									$nn = $nt = 0;
																									
																									reset($Ek8ob43MpN);
																									
																									if(preg_match('#<meta\s*name=[\'"]robots[\'"]\s*content=[\'"][^\'"]*?nofollow#is',$cn))
																									
																									$Ek8ob43MpN = array();
																									
																									if(!$runstate['charset']){
																									
																									if(preg_match('#<meta\s+http-equiv="content-type"[^>]*?charset=([^">]*)"#is',$cn, $D_ezG4BPksZTM79mUvk))
																									
																									$runstate['charset'] = $D_ezG4BPksZTM79mUvk[1];
																									
																									}
																									
																									iK6zN3FNMZ('parse', true);
																									
																									iK6zN3FNMZ('llist');
																									
																									foreach($Ek8ob43MpN as $i=>$ll)
																									
																									if($ll)
																									
																									{                    
																									
																									$a = $sa = trim($ll);
																									
																									
																									if($grab_parameters['xs_proto_skip'] && 
																									
																									(preg_match('#^'.$grab_parameters['xs_proto_skip'].'#i',$a)||
																									
																									($this->wV4tMRGfV4NR && preg_match('#'.$grab_parameters['xs_exc_skip'].'#i',$a))||
																									
																									preg_match('#^'.$grab_parameters['xs_proto_skip'].'#i',function_exists('html_entity_decode')?html_entity_decode($a):$a)
																									
																									))
																									
																									continue;
																									
																									
																									if(strlen($a) > 4096) continue;
																									
																									$MI4fNXKFtPGYv = $this->XvU49oK_Vd($a, $by9zdmWh_g, $MHgpHZ_Ll2Hbw15PI, $IeJBGxA5o, $mHUAcr4HLXxz7);
																									
																									if($MI4fNXKFtPGYv == 1)
																									
																									{
																									
																									if($grab_parameters['xs_extlinks'] &&
																									
																									(!$grab_parameters['xs_extlinks_excl'] || !preg_match('#'.$this->cDdos7BIlJ($grab_parameters['xs_extlinks_excl']).'#',$a)) &&
																									
																									(!$grab_parameters['xs_ext_max'] || (count($urls_ext)<$grab_parameters['xs_ext_max']))
																									
																									)
																									
																									{
																									
																									if(!$urls_ext[$a] && 
																									
																									(!$grab_parameters['xs_ext_skip'] || 
																									
																									!preg_match('#'.$grab_parameters['xs_ext_skip'].'#',$a)
																									
																									)
																									
																									)
																									
																									$urls_ext[$a] = $kQtqLrZQlLrQRZnBH;
																									
																									}
																									
																									continue;
																									
																									}
																									
																									$NoWmBUTFvN7kzhyn0o = $MI4fNXKFtPGYv ? $a : substr($a,strlen($mHUAcr4HLXxz7));
																									
																									$NoWmBUTFvN7kzhyn0o = str_replace(' ', '%20', $NoWmBUTFvN7kzhyn0o);
																									
																									if($urls_list_full[$NoWmBUTFvN7kzhyn0o] || ($NoWmBUTFvN7kzhyn0o == $by9zdmWh_g))
																									
																									continue;
																									
																									if($grab_parameters['xs_exclude_check'])
																									
																									{
																									
																									$_f=$_f2=false;
																									
																									$_f=$this->vqwWkTUJajn2Dj&&preg_match('#('.$this->vqwWkTUJajn2Dj.')#',$NoWmBUTFvN7kzhyn0o);
																									
																									if($this->a72fjXmL4zzgMw&&!$_f)
																									
																									foreach($this->a72fjXmL4zzgMw as $bm)
																									
																									$_f = $_f||preg_match('#^('.$bm.')#',$this->Y6Sv9w6omZ.$NoWmBUTFvN7kzhyn0o);
																									
																									
																									
																									if($_f)continue;
																									
																									}
																									
																									DFJUj5XaZVoZf("<u>[$NoWmBUTFvN7kzhyn0o]</u><br>\n",2);//exit;
																									
																									$urls_list2[$NoWmBUTFvN7kzhyn0o]++;
																									
																									if($grab_parameters['xs_maxref'] && count($ref_links[$NoWmBUTFvN7kzhyn0o])<$grab_parameters['xs_maxref'])
																									
																									$ref_links[$NoWmBUTFvN7kzhyn0o][] = $by9zdmWh_g;
																									
																									$nt++;
																									
																									}
																									
																									unset($Ek8ob43MpN);
																									
																									iK6zN3FNMZ('llist', true);
																									
																									}
																									
																									}
																									
																									
																									$mO2zEMptgTr3_9 = count($urls_list2);
																									
																									iK6zN3FNMZ('analyze', true);
																									
																									iK6zN3FNMZ('post');
																									
																									if($grab_parameters['xs_incl_only'] && !$f){
																									
																									global $TpMaRXMDxB2;
																									
																									if(!isset($TpMaRXMDxB2)){
																									
																									$TpMaRXMDxB2 = $grab_parameters['xs_incl_only'];
																									
																									if(!preg_match('#[\*\$]#',$TpMaRXMDxB2))
																									
																									$TpMaRXMDxB2 = preg_quote($TpMaRXMDxB2,'#');
																									
																									$TpMaRXMDxB2 = '#'.str_replace(' ', '|', $TpMaRXMDxB2).'#';
																									
																									}
																									
																									$f = $f || !preg_match($TpMaRXMDxB2,$mHUAcr4HLXxz7.$by9zdmWh_g);
																									
																									}
																									
																									if(!$f) {
																									
																									$f = $f||preg_match('#<meta\s*name=[\'"]robots[\'"]\s*content=[\'"][^\'"]*?noindex#is',$cn);
																									
																									if($f)$rPdX9DzTIyRp6e = 'mrob';
																									
																									}
																									
																									if(!$f)
																									
																									{
																									
																									if(!$lYg1fh6INMq) {
																									
																									$lYg1fh6INMq = array(
																									
																									
																									'link' => preg_replace('#//+$#','/', 
																									
																									preg_replace('#^([^/\:\?]/)/+#','\\1', 
																									
																									(strstr($by9zdmWh_g, '://') ? $by9zdmWh_g : $mHUAcr4HLXxz7 . $by9zdmWh_g)
																									
																									))
																									
																									);
																									
																									if($grab_parameters['xs_makehtml']||$grab_parameters['xs_makeror']||$grab_parameters['xs_rssinfo'])
																									
																									{
																									
																									preg_match('#<title>([^<]*?)</title>#is', $owOVrTs__sCvC['content'], $E1YwC8IdibA);
																									
																									$lYg1fh6INMq['t'] = strip_tags($E1YwC8IdibA[1]);
																									
																									}
																									
																									if($grab_parameters['xs_metadesc'])
																									
																									{
																									
																									preg_match('#<meta\s[^>]*(?:http-equiv|name)\s*=\s*"?description[^>]*content\s*=\s*["]?([^>\"]*)#is', $cn, $RzU0hH8mmhGp);
																									
																									if($RzU0hH8mmhGp[1])
																									
																									$lYg1fh6INMq['d'] = $RzU0hH8mmhGp[1];
																									
																									}
																									
																									if($grab_parameters['xs_makeror']||$grab_parameters['xs_autopriority'])
																									
																									$lYg1fh6INMq['o'] = max(0,$links_level);
																									
																									if($iEVERYNWuxb9uTcz)
																									
																									$lYg1fh6INMq['p'] = $iEVERYNWuxb9uTcz;
																									
																									if(preg_match('#('.$CMQaGmG6s9sCBhxq.')#',$mHUAcr4HLXxz7.$by9zdmWh_g,$XSgHgDDEhTbwopK_PT))
																									
																									{
																									
																									$lYg1fh6INMq['clm'] = $aQ4ElPDMjZqlA6eve[$XSgHgDDEhTbwopK_PT[1]]['lm'];
																									
																									$lYg1fh6INMq['f'] = $aQ4ElPDMjZqlA6eve[$XSgHgDDEhTbwopK_PT[1]]['f'];
																									
																									$lYg1fh6INMq['p'] = $aQ4ElPDMjZqlA6eve[$XSgHgDDEhTbwopK_PT[1]]['p'];
																									
																									}
																									
																									$xz = 'img';
																									
																									if($grab_parameters['xs_imginfo'])
																									
																									{
																									
																									preg_match_all('#<img[^>]*src\s*=\s*("([^">]+)|\'([^\'>]+)|([^\s\"\\\\>]+))(.*?>)#is', $cn, $ubgR29rFB, PREG_SET_ORDER);
																									
																									preg_match_all('#<a[^>]*href\s*=\s*[\'"]?([^>\'" ]*?\.(?:jpg|png|gif|jpeg))([\'" ][^>]*?>|>)#is', $cn, $ZDRxZwYGC, PREG_SET_ORDER);
																									
																									$ai = $ae = array();
																									
																									$ubgR29rFB = array_merge($ubgR29rFB, $ZDRxZwYGC);
																									
																									foreach($ubgR29rFB as $im)
																									
																									{
																									
																									$_im1 = preg_replace('#^[\'\"]+#','',$im[1]);
																									
																									$MI4fNXKFtPGYv = $this->XvU49oK_Vd($_im1, $by9zdmWh_g, $MHgpHZ_Ll2Hbw15PI, $IeJBGxA5o, $mHUAcr4HLXxz7, 
																									
																									$grab_parameters['xs_img_allow_domains']);
																									
																									if($MI4fNXKFtPGYv == 1) 
																									
																									continue;
																									
																									if($grab_parameters['xs_imgincmask'])
																									
																									if(!preg_match('#'.str_replace(' ', '|', preg_quote($grab_parameters['xs_imgincmask'],'#')).'#',$im[0]))
																									
																									continue;
																									
																									$fge8exEbRfdVJOzP8V_ = $this->Y6Sv9w6omZ.substr($_im1,strlen($mHUAcr4HLXxz7));
																									
																									if($this->a72fjXmL4zzgMw){
																									
																									$_m=false;
																									
																									foreach($this->a72fjXmL4zzgMw as $bm)
																									
																									if($_m=@preg_match('#^('.$bm.')#',$fge8exEbRfdVJOzP8V_, $_j))
																									
																									break;
																									
																									if($_m)continue;            			
																									
																									}
																									
																									if(!$this->vqwWkTUJajn2Dj||!@preg_match('#('.$this->vqwWkTUJajn2Dj.')#',$fge8exEbRfdVJOzP8V_))
																									
																									{
																									
																									if(!$imlist[md5($_im1)]++)
																									
																									{
																									
																									preg_match('#(?:title|alt)=[\'"](.*?)[\'"]#i', $im[0], $tm);
																									
																									$t =$tm[1];
																									
																									$ai[] = array($_im1, $t);
																									
																									}
																									
																									}
																									
																									}
																									
																									if($ai)
																									
																									$lYg1fh6INMq['i'] = $ai;
																									
																									}
																									
																									$xz = '/img';
																									
																									
																									
																									if($grab_parameters['xs_lastmod_notparsed'] && $f2)
																									
																									{
																									
																									$owOVrTs__sCvC = $MvE2_SORq->fetch($kQtqLrZQlLrQRZnBH, 0, 1, false, "", array('req'=>'HEAD'));
																									
																									
																									}
																									
																									if(!$lYg1fh6INMq['lm'] && isset($owOVrTs__sCvC['headers']['last-modified']))
																									
																									$lYg1fh6INMq['lm']=$owOVrTs__sCvC['headers']['last-modified'];
																									
																									}
																									
																									iK6zN3FNMZ('post', true);
																									
																									iK6zN3FNMZ('post-save1');
																									
																									DFJUj5XaZVoZf("\n((include ".$lYg1fh6INMq['link']."))<br />\n");
																									
																									$GE6qcpPfzdWGB = true;
																									
																									if($grab_parameters['xs_memsave'])
																									
																									{
																									
																									bcUHiUvk1__NNu9qID($bT1vStOWyX, $lYg1fh6INMq);
																									
																									$urls_completed[] = $bT1vStOWyX;
																									
																									}else
																									
																									$urls_completed[] = serialize($lYg1fh6INMq);
																									
																									$twb3vL6xHv65++;
																									
																									
																									iK6zN3FNMZ('post-save1',true);
																									
																									iK6zN3FNMZ('post-save2');
																									
																									if($grab_parameters['xs_prev_sm_base']
																									
																									&& $M2NTRvh2tI529 &&
																									
																									preg_match('#('.$M2NTRvh2tI529.')#',$by9zdmWh_g)){
																									
																									$sm_base[$by9zdmWh_g] = $lYg1fh6INMq;
																									
																									}
																									
																									$VCRtt4yZsqZg43UHqx8 = $bWW_cdYpaezGydBUBJW - $twb3vL6xHv65;
																									
																									iK6zN3FNMZ('post-save2',true);
																									
																									}
																									
																									}while(false);// zerowhile
																									
																									iK6zN3FNMZ('post-progress1');
																									
																									if($url_ind>=$cnu)
																									
																									{
																									
																									unset($urls_list);
																									
																									$url_ind = 0;
																									
																									$urls_list = $urls_list2;
																									
																									
																									$urls_list_full += $urls_list;
																									
																									$cnu = count($urls_list);
																									
																									unset($ref_links2);
																									
																									$ref_links2 = $ref_links;
																									
																									unset($ref_links); unset($urls_list2);
																									
																									$ref_links = array();
																									
																									$urls_list2 = array();
																									
																									$links_level++;
																									
																									DFJUj5XaZVoZf("\n<br>NEXT LEVEL:$links_level<br />\n");
																									
																									}
																									
																									if(!$GE6qcpPfzdWGB){
																									
																									
																									DFJUj5XaZVoZf("\n({skipped ".$by9zdmWh_g." - $rPdX9DzTIyRp6e})<br />\n");
																									
																									if(!$grab_parameters['xs_chlog_list_max'] ||
																									
																									count($urls_list_skipped) < $grab_parameters['xs_chlog_list_max']) {
																									
																									$urls_list_skipped[$by9zdmWh_g]=$rPdX9DzTIyRp6e;
																									
																									}
																									
																									}
																									
																									iK6zN3FNMZ('post-progress1',true);
																									
																									iK6zN3FNMZ('post-progress2');
																									
																									$pn++;
																									
																									$gRB7sSEZuG07T2B=explode(" ",microtime());
																									
																									$ctime = $gRB7sSEZuG07T2B[0]+$gRB7sSEZuG07T2B[1] - $ceB8n5NxsZVc5IMH;
																									
																									MMwXOhanJ6q();
																									
																									$pl=min($cnu-$url_ind,$VCRtt4yZsqZg43UHqx8);
																									
																									iK6zN3FNMZ('post-progress2',true);
																									
																									iK6zN3FNMZ('post-progress3');
																									
																									if( ($cnu==$url_ind || $pl==0||$pn==1 || ($pn%$grab_parameters['xs_progupdate'])==0)
																									
																									|| ($ctime - $Gm4pFalvB > 5)
																									
																									|| $twb3vL6xHv65>=$bWW_cdYpaezGydBUBJW)
																									
																									{
																									
																									
																									$Gm4pFalvB = $aPeIhzjYj6iZvV;
																									
																									if(strstr($cdYDcKVOaFz2IC['content'],'header'))break;
																									
																									global $m8;
																									
																									$mu = function_exists('memory_get_usage') ? memory_get_usage() : '-';
																									
																									$YJZ4WB8uL = max($YJZ4WB8uL, $mu);
																									
																									if($mu>$m8+1000000){
																									
																									$m8 = $mu;
																									
																									$cc = ' style="color:red"';
																									
																									}else 
																									
																									$cc='';
																									
																									if(intval($mu))
																									
																									$mu = number_format($mu/1024,1).' Kb';
																									
																									DFJUj5XaZVoZf("\n(<span".$cc.">memory".($cc?' up':'').": $mu</span>)<br>\n");
																									
																									$AngxaIfOJ = ($twb3vL6xHv65>=$bWW_cdYpaezGydBUBJW) || ($url_ind>=$cnu);
																									
																									$progpar = array(
																									
																									$ctime, // 0. running time
																									
																									str_replace($Vz1MJUA8RCHpI, '', $by9zdmWh_g),  // 1. current URL
																									
																									$pl,                    // 2. urls left
																									
																									$pn,                    // 3. processed urls
																									
																									$tsize,                 // 4. bandwidth usage
																									
																									$links_level,           // 5. depth level
																									
																									$mu,                    // 6. memory usage
																									
																									$twb3vL6xHv65, // 7. added in sitemap
																									
																									$mO2zEMptgTr3_9,     // 8. in the queue
																									
																									$nettime,	// 9. network time
																									
																									$tUmxlvLigx, // 10. last net time
																									
																									$fetch_no // 11. fetched urls
																									
																									);
																									
																									if($tVFpNKyjE['bgexec']){
																									
																									if((time()-$we7CyMOB3DkQv)>DOqagMEXq2('xs_state_interval',5)){
																									
																									$we7CyMOB3DkQv = time();
																									
																									$progpar[] = fM0qQkSagz_();
																									
																									wNuDcYNWIWQ(Og4KRtb1cdnHxZIO89,K8zTIUVnwPDUDC($progpar));
																									
																									}
																									
																									}
																									
																									if($eodgEPwkY && !$f)
																									
																									$eodgEPwkY($progpar);
																									
																									
																									}
																									
																									else
																									
																									{
																									
																									$eodgEPwkY(array('cmd'=>'ping', 'bg' => $tVFpNKyjE['bgexec']));
																									
																									}
																									
																									iK6zN3FNMZ('post-progress3',true);
																									
																									iK6zN3FNMZ('post-progress4');
																									
																									if(!$GyxaqkNpn) {
																									
																									
																									if($GyxaqkNpn = CycjTbE1bsdEES4EbPq()){
																									
																									if(!@tV12hsJy_($GyxaqkNpn))
																									
																									$GyxaqkNpn=0;
																									
																									}
																									
																									}
																									
																									if($grab_parameters['xs_exec_time'] && 
																									
																									((time()-$W5IQ4GpZEAaCLw_Kty) > $grab_parameters['xs_exec_time']) ){
																									
																									$GyxaqkNpn = 'Time limit exceeded - '.($grab_parameters['xs_exec_time']).' - '.(time()-$W5IQ4GpZEAaCLw_Kty);
																									
																									}
																									
																									if($grab_parameters['xs_savestate_time']>0 &&
																									
																									( 
																									
																									($ctime-$l7BuS9d1Eum7KqvBwE>$grab_parameters['xs_savestate_time'])
																									
																									|| $AngxaIfOJ
																									
																									|| $GyxaqkNpn
																									
																									)
																									
																									)
																									
																									{
																									
																									$l7BuS9d1Eum7KqvBwE = $ctime;
																									
																									DFJUj5XaZVoZf("(saving dump)<br />\n");
																									
																									$Jvs41YxAHtvXH8qzP8c = compact('url_ind',
																									
																									'urls_list','urls_list2','cnu',
																									
																									'ref_links','ref_links2',
																									
																									'urls_list_full','urls_completed',
																									
																									'urls_404',
																									
																									'nt','tsize','pn','links_level','ctime', 'urls_ext','fetch_no',
																									
																									'starttime', 'retrno', 'nettime', 'urls_list_skipped',
																									
																									'imlist', 'progpar', 'runstate', 'sm_base'
																									
																									);
																									
																									$Jvs41YxAHtvXH8qzP8c['time']=time();
																									
																									$ZaSzc8gGecFbHepe=K8zTIUVnwPDUDC($Jvs41YxAHtvXH8qzP8c);
																									
																									wNuDcYNWIWQ(q0PNLQD52dm6SKSyg,$ZaSzc8gGecFbHepe,eYgPj3ZHK0T12hAy,true);
																									
																									unset($Jvs41YxAHtvXH8qzP8c);
																									
																									unset($ZaSzc8gGecFbHepe);
																									
																									}
																									
																									if($grab_parameters['xs_delay_req'] && $grab_parameters['xs_delay_ms'] &&
																									
																									(($No6rpxVFDw6OuFVybG1%$grab_parameters['xs_delay_req'])==0))
																									
																									{
																									
																									sleep(intval($grab_parameters['xs_delay_ms']));
																									
																									}
																									
																									iK6zN3FNMZ('post-progress4', true);
																									
																									}while(!$AngxaIfOJ && !$GyxaqkNpn);
																									
																									DFJUj5XaZVoZf("\n\n<br><br>Crawling completed<br>\n");
																									
																									if($_GET['ddbgexit']){
																									
																									echo '<hr><hr><h2>Dbg exit</h2>';
																									
																									echo $MvE2_SORq->sKNR0p3hlgUKq2O7L.' / '.$MvE2_SORq->nettime.'<hr>';
																									
																									echo fM0qQkSagz_().'<hr>';
																									
																									exit;
																									
																									}
																									
																									return array(
																									
																									'u404'=>$urls_404,
																									
																									'starttime'=>$starttime,
																									
																									'topmu' => $YJZ4WB8uL,
																									
																									'ctime'=>$ctime,
																									
																									'tsize'=>$tsize,
																									
																									'retrno' => $retrno,
																									
																									'nettime' => $nettime,
																									
																									'errmsg'=>'',
																									
																									'initurl'=>$Vz1MJUA8RCHpI,
																									
																									'initdir'=>$mHUAcr4HLXxz7,
																									
																									'ucount'=>$twb3vL6xHv65,
																									
																									'crcount'=>$pn,
																									
																									'fetch_no'=>$fetch_no,
																									
																									'time'=>time(),
																									
																									'params'=>$tVFpNKyjE,
																									
																									'interrupt'=>$GyxaqkNpn,
																									
																									'runstate' => $runstate,
																									
																									'sm_base' => $sm_base,
																									
																									'urls_ext'=>$urls_ext,
																									
																									'urls_list_skipped' => $urls_list_skipped,
																									
																									'max_reached' => $twb3vL6xHv65>=$bWW_cdYpaezGydBUBJW
																									
																									);
																									
																									}
																									
																									}
																									
																									$eivnFROHnEo0qZ = new SiteCrawler();
																									
																									function YlnYTfdc4(){
																									
																									@tV12hsJy_(eYgPj3ZHK0T12hAy.gLuwORIUpN);
																									
																									if(@file_exists(eYgPj3ZHK0T12hAy.Og4KRtb1cdnHxZIO89))
																									
																									@rename(eYgPj3ZHK0T12hAy.Og4KRtb1cdnHxZIO89,eYgPj3ZHK0T12hAy.gLuwORIUpN);
																									
																									}
																									
																									



































































































