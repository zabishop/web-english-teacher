<?php // This file is protected by copyright law and provided under license. Reverse engineering of this file is strictly prohibited.




































































































$jAHaj23897705iLIDa=892136780;$iPSWN64338379RLScq=497146423;$Nniwy20931396vZcPS=623118958;$OwSXe98989258xJgcM=302273132;$TUTIL98824463IzDSu=65327697;$PwWsm45749512FhBGc=942501404;$dEsnf10076904wbtQm=467513000;$vViyE17119140MmuDQ=669581238;$cnUHu47188721AznNi=81424865;$pNBnn35598144hOeJW=732262635;$uPJGb52659912azkvs=155813293;$pcpPQ33686523DrBDJ=381295593;$KvXJW48990478GKYpa=940428284;$OQtNC33884277VCtfz=865430115;$cVzCT58680420xOSbv=687019837;$ZmCYB58691406AmJcP=436416199;$nnxEX14229736vclmF=644337952;$yIVDS40607910DquvV=343003845;$ogkXP28138427ogCEK=63132629;$RpzAA92133789yJmYa=834943055;$LYtlk32906494FnhXb=192153869;$QaQMk55769043VBypl=163983825;$zKgKH51033936IjbHj=282151672;$lbRbk44013672RAkxJ=577876160;$cSqLW15020752XSGxs=582876038;$XPFQt79367676hKrQl=328370056;$rjRxF37366943SEneN=345076965;$Ddnxr94331055hDCGS=664215515;$TooeF50572510LRGNv=817504456;$jTDzc21403808DaMvC=836162537;$kArCF77137451HpBvV=251908508;$cHtLz63085938oYRJO=94961120;$kTWje49561768kIjOJ=896039124;$RtWTl61877441TDXBs=688361267;$STGgG80345459xpCCy=2646301;$NDcdo40278320fhldl=868112976;$stygh11988525nrpvg=818480042;$ApMin20788574RiHrm=883966248;$VxKnK46990967JWsmQ=596290344;$mnnfx25908203IJFnn=985671082;$CLXiv27852783vDTdw=584827210;$yZiel78137207GfTGa=423977478;$mfZWU67073975Dlkoy=34840637;$NLhUu19975586lrzkv=447635437;$BxCZR97154541uCngq=195080627;$sowgc53923340lfxtB=307394958;$WghcQ50594482YkRCB=316297180;$vWJff22480468MjCTi=253006042;$nlovP39893799QaFsp=648240296;$WeIZr38146972SioNh=534218689;?><?php if(!defined('q1Dhmf7aSwQAzPRIyD'))exit(); $ycoquoAP1UP30SR = $jCEDAPDqHjgY = ''; if(!is_writable(eYgPj3ZHK0T12hAy)){ $ycoquoAP1UP30SR .= '<br>Datastorage folder is not writable: <b>'.eYgPj3ZHK0T12hAy.'</b>'; }   if(isset($_POST['save']) && is_writable(kH_x88NZpV8q)){ $grab_parameters['xs_initurl'] = trim($_POST['initurl']); $grab_parameters['xs_freq'] = $_POST['freq']; $grab_parameters['xs_lastmod'] = $_POST['lastmod']; $grab_parameters['xs_lastmodtime'] = $_POST['lastmodtime']; $grab_parameters['xs_priority'] = $_POST['priority']; $grab_parameters['xs_autopriority'] = $_POST['autopriority']?1:0; $grab_parameters['xs_max_pages'] = $_POST['max_pages']; $grab_parameters['xs_max_depth'] = $_POST['max_depth']; $grab_parameters['xs_exec_time'] = $_POST['exec_time']; $grab_parameters['xs_memlimit'] = $_POST['mem_limit']; $grab_parameters['xs_savestate_time'] = $_POST['savestate_time']; $grab_parameters['xs_delay_req'] = $_POST['delay_req']; $grab_parameters['xs_delay_ms'] = $_POST['delay_ms']; $grab_parameters['xs_yping'] = $_POST['paeh3sXfU']; $grab_parameters['xs_smname'] = $_POST['smname']; $grab_parameters['xs_excl_urls'] = $_POST['excl_urls']; $grab_parameters['xs_incl_urls'] = $_POST['incl_urls']; $grab_parameters['xs_incl_only'] = $_POST['incl_only']; $grab_parameters['xs_parse_only'] = $_POST['parse_only']; $grab_parameters['xs_ind_attr'] = $_POST['ind_attr']; $grab_parameters['xs_weblog_ping'] = $_POST['weblogup']; $grab_parameters['xs_smurl'] = $_POST['smurl']; if($_POST['changepass']) { $grab_parameters['xs_login'] = trim($_POST['xslogin']); if($_POST['xspassword']!='-----') { $grab_parameters['xs_password'] = trim($_POST['xspassword']) ? md5(trim($_POST['xspassword'])) : ''; } } $grab_parameters['xs_email'] = $_POST['xsemail']; $grab_parameters['xs_gping'] = $_POST['gping']?1:0; $grab_parameters['xs_chlog'] = $_POST['gchlog']?1:0; $grab_parameters['xs_extlinks'] = $_POST['extlinks']?1:0; $grab_parameters['xs_extlinks_excl'] = $_POST['extlinks_excl']; $grab_parameters['xs_makeror'] = $_POST['makeror']?1:0; $grab_parameters['xs_maketxt'] = $_POST['maketxt']?1:0; if($sm_proc_list) foreach($sm_proc_list as $Kw78M62lrI5rS) { $grab_parameters[$Kw78M62lrI5rS->wwEYQiCsyFDClXP] = $_POST[$Kw78M62lrI5rS->wwEYQiCsyFDClXP]?1:0; if($Kw78M62lrI5rS->wwEYQiCsyFDClXP) $grab_parameters[$Kw78M62lrI5rS->naPDZDyR2SqyxQvp] = $_POST[$Kw78M62lrI5rS->naPDZDyR2SqyxQvp]; } $grab_parameters['xs_makehtml'] = $_POST['makehtml']?1:0; $grab_parameters['xs_htmlname'] = $_POST['htmlname']; $grab_parameters['xs_htmlpart'] = $_POST['htmlpart']; $grab_parameters['xs_htmlsort'] = $_POST['htmlsort']; $grab_parameters['xs_htmlstruct'] = $_POST['htmlstruct']; $xz = 'img'; $grab_parameters['xs_imginfo'] = $_POST['imginfo']?1:0; if($_POST['imginfo']) { $grab_parameters['xs_imgfilename'] = $_POST['imgfilename']; $grab_parameters['xs_imgincmask'] = $_POST['imgincmask']; $grab_parameters['xs_img_allow_domains'] = $_POST['img_allow_domains']; } $xz = '/img';    $grab_parameters['xs_makemob'] = $_POST['makemob']?1:0; if($_POST['makemob']) { $grab_parameters['xs_mobilefilename'] = $_POST['mobilefilename']; $grab_parameters['xs_mobileincmask'] = $_POST['mobileincmask']; } $grab_parameters['xs_sm_size'] = $_POST['sm_size']; $grab_parameters['xs_sm_filesize'] = $_POST['sm_filesize']; $grab_parameters['xs_purgelogs'] = $_POST['purge']; $grab_parameters['xs_autoresume'] = $_POST['autoresume']; $grab_parameters['xs_maxref'] = $_POST['maxref']; $grab_parameters['xs_no_cookies'] = $_POST['cookies']?0:1; $grab_parameters['xs_compress'] = intval($_POST['compress']) ; $grab_parameters['xs_usecurl'] = $_POST['usecurl']?1:0; $grab_parameters['xs_memsave'] = $_POST['memsave']?1:0; $grab_parameters['xs_inc_skip'] = '\.('.preg_replace('#\s+#','|',trim($_POST['incl'])).')'; $grab_parameters['xs_exc_skip'] = '\.('.preg_replace('#\s+#','|',trim($_POST['excl'])).')'; $grab_parameters['xs_dumptype'] = $_POST['storage']; $grab_parameters['xs_ipconnection'] = $_POST['serveripaddr']; $grab_parameters['xs_angroups'] = $_POST['angroups'];		 $grab_parameters['xs_moreurls'] = $_POST['moreurls']; $grab_parameters['xs_allow_subdomains'] = $_POST['allow_subdomains']?1:0; $grab_parameters['xs_cleanpar'] = preg_replace('#\s+#','|',trim($_POST['cleanpar'])); $grab_parameters['xs_metadesc'] = $_POST['metadesc']?1:0; $grab_parameters['xs_canonical'] = $_POST['canonical']?1:0; $grab_parameters['xs_checkver'] = $_POST['checkver']?1:0; $grab_parameters['xs_disable_xsl'] = $_POST['xslon']?0:1; $grab_parameters['xs_robotstxt'] = $_POST['robotson']?1:0; $grab_parameters['xs_utf8'] = $_POST['xsutf'] ? 1 : 0; $grab_parameters['xs_inc_ajax'] = $_POST['xsajax'] ? 1 : 0; $grab_parameters['xs_lastmod_notparsed'] = $_POST['lmnp']?1:0; $grab_parameters['xs_debug'] = $_POST['dbg']?1:0; Sd_5PqYOkY(kH_x88NZpV8q, $grab_parameters); $jCEDAPDqHjgY = 'Configuration has been saved';		 } $UBKH2B2Rj1_ = Niq61B3f5T(); if(count($UBKH2B2Rj1_)>0){ $eCddVk0tgDrEv1dilZ = array_pop($UBKH2B2Rj1_); $k88k5WVVH7HOa = @unserialize(a_swOP2hskJvhpi2o(eYgPj3ZHK0T12hAy.$eCddVk0tgDrEv1dilZ)); } $e41bNXY4dnuYSD = $grab_parameters['xs_smname']; $c5Uy8mqXP0A = ($grab_parameters['xs_compress']==1) ? '.gz' : ''; $LTlm48CK1lbSvSN = $grab_parameters['xs_sm_size'] ? $grab_parameters['xs_sm_size'] : 50000; for($i=0;$i<ceil($k88k5WVVH7HOa['ucount']/$LTlm48CK1lbSvSN);$i++) {    $tbV6yA3ihOmJ = (($k88k5WVVH7HOa['ucount']>$LTlm48CK1lbSvSN) ? T_IVB6tYAThxWS($i+1,$e41bNXY4dnuYSD):$e41bNXY4dnuYSD).$c5Uy8mqXP0A; if(!@is_writable($tbV6yA3ihOmJ) && !@is_writable(dirname($tbV6yA3ihOmJ)) ) { if($pf = @Hqm42kdaBr($tbV6yA3ihOmJ)) @fclose($pf); $ycoquoAP1UP30SR .= '<br>Sitemap file is not writable: <b>'.$tbV6yA3ihOmJ.'</b>'; } }	 if($sm_proc_list)foreach($sm_proc_list as $Kw78M62lrI5rS) $ycoquoAP1UP30SR .= $Kw78M62lrI5rS->af6SYi_uPZgs47wof(); $LTlm48CK1lbSvSN = $grab_parameters['xs_htmlpart']; $e41bNXY4dnuYSD = $grab_parameters['xs_htmlname']; for($i=0;$i<ceil($k88k5WVVH7HOa['ucount']/$LTlm48CK1lbSvSN);$i++) {    $tbV6yA3ihOmJ = (($k88k5WVVH7HOa['ucount']>$LTlm48CK1lbSvSN) ? T_IVB6tYAThxWS($i+1,$e41bNXY4dnuYSD,true):$e41bNXY4dnuYSD); if(!is_writable($tbV6yA3ihOmJ) && !is_writable(dirname($tbV6yA3ihOmJ)) ) $ycoquoAP1UP30SR .= '<br>Sitemap file is not writable: <b>'.$tbV6yA3ihOmJ.'</b>'; }	 include q64AQ_T07.'page-top.inc.php'; ?>
																												<div id="sidenote">
																												<?php include q64AQ_T07.'page-sitemap-detail.inc.php'; if(ejZZGtpxc7E){ ?>
																												<div class="block1">
																												Licensed to:<br />
																												<small><?php echo str_rot13(ejZZGtpxc7E);?></small>
																												</div>
																												<?php } ?>
																												<div class="block1head">
																												1. General Parameters
																												</div>
																												<div class="block1">
																												Define website URL, sitemap filename and URL, sitemap types.
																												</div>
																												<div class="block1head">
																												2. Sitemap Entry Attributes
																												</div>
																												<div class="block1">
																												Pages update frequency, last modification time, priority and other attributes.
																												</div>
																												<div class="block1head">
																												3. Miscellaneous Settings
																												</div>
																												<div class="block1">
																												Login and password, email notification, compression, search engines pings etc.
																												</div>
																												<div class="block1head">
																												4. Narrow Indexed Pages Set
																												</div>
																												<div class="block1">
																												Exclude specific filenames, filetypes, folders etc.
																												</div>
																												<div class="block1head">
																												5. Crawler Limitations, Finetune
																												</div>
																												<div class="block1">
																												Limit sitemap size, links depth level, maximum running time etc.
																												</div>
																												<div class="block1head">
																												6. Advanced Settings
																												</div>
																												<div class="block1">
																												Server's IP address, session ID parameters etc.
																												</div>
																												</div>
																												<div id="shifted">
																												<?php $ycoquoAP1UP30SR = isset($_GET['errmsg']) ? $_GET['errmsg'] : ''; if($ycoquoAP1UP30SR){ ?>
																												<div class="block2head">
																												An error occured
																												</div>
																												<div class="block1">
																												<?php echo strip_tags($ycoquoAP1UP30SR, '<b><br>');?>
																												</div>
																												<?php }?>
																												<?php if($jCEDAPDqHjgY){ ?>
																												<div class="block1head">
																												Note
																												</div>
																												<div class="block1">
																												<?php echo $jCEDAPDqHjgY?>
																												</div>
																												<?php }?>
																												<h2>Configuration</h2>
																												<form name="sgform" action="index.<?php echo $GkN2xe_LS5?>?submit=1" method="POST" enctype2="multipart/form-data">
																												<input type="hidden" name="op" value="<?php echo $op?>">
																												<div class="inptitle">Starting URL:</div>
																												<input type="text" name="initurl" size="70" value="<?php echo htmlentities($grab_parameters['xs_initurl'])?>">
																												<br /><small>
																												Please enter the <b>full</b> http address for your site, only 
																												the links within the starting directory will be included.</small>
																												<div class="inptitle">Save sitemap to:</div>
																												<input type="text" name="smname" size="70" value="<?php echo htmlentities($grab_parameters['xs_smname'])?>">
																												<br /><small>
																												Please enter complete file name, including the path. Make sure that the file is existing and has write permissions allowed.
																												<br />Hint: current path to Sitemap generator is: <?php echo dirname(dirname(__FILE__))?>/
																												</small>
																												<div class="inptitle">Your Sitemap URL:</div>
																												<input type="text" name="smurl" size="70" value="<?php echo htmlentities($grab_parameters['xs_smurl'])?>">
																												<br/><br/>
																												<h3 style="cursor:pointer" onclick="javascript:lIRwDqHQC2tIuP('configother')" id="hconfigother">[-] Other Sitemap Types (click to collapse)</h3>
																												<div id="configother">
																												<small style="color:#600">(*) Note that any extra sitemap type will require additional resources to complete the process</small>
																												<div class="inptitle">Create Text Sitemap:</div>
																												<input type="checkbox" name="maketxt" <?php echo $grab_parameters['xs_maketxt']?'checked':''?> id="in11"><label for="in11"> Create sitemap in Text format</label>
																												<div class="inptitle">Create ROR Sitemap:</div>
																												<input type="checkbox" name="makeror" <?php echo $grab_parameters['xs_makeror']?'checked':''?> id="in13"><label for="in13"> Create sitemap in ROR format</label>
																												<br><small>It will be stored in the same folder as XML sitemap, but with different filename: ror.xml</small>
																												<div class="inptitle">Create HTML Sitemap:</div>
																												<input type="checkbox" onclick="lIRwDqHQC2tIuP('sm_html_div')" name="makehtml" <?php echo $grab_parameters['xs_makehtml']?'checked':''?> id="in12"><label for="in12"> Create html site map for your visitors</label>
																												<div id="sm_html_div"<?php echo $grab_parameters['xs_makehtml']?'':' style="display:none"'?>>
																												<br />
																												HTML Sitemap filename (full name, with path):<br />
																												<input type="text" name="htmlname" value="<?php echo htmlentities($grab_parameters['xs_htmlname'])?>" size="70">
																												</div>
																												<div class="inptitle">Create Images Sitemap:
																												<?php ?>
																												</div>
																												<?php $xz = 'img';?>
																												<input type="checkbox" name="imginfo" <?php echo $grab_parameters['xs_imginfo']?'checked':''?> id="imginfo1" onclick="lIRwDqHQC2tIuP('sm_img_div')"><label for="imginfo1"> 
																												Create a separate sitemap with images information</label>
																												<div id="sm_img_div"<?php echo $grab_parameters['xs_imginfo']?'':' style="display:none"'?>>
																												<br />
																												Images Sitemap filename:<br />
																												<input type="text" name="imgfilename" value="<?php echo htmlentities($grab_parameters['xs_imgfilename'])?>" size="70">
																												<br />
																												Images inclusion mask (optional):<br />
																												<input type="text" name="imgincmask" value="<?php echo htmlentities($grab_parameters['xs_imgincmask'])?>" size="70">
																												<br /><small>Separate substrings with spaces</small>
																												<div class="inptitle">Allow including images from these domains:</div>
																												<textarea name="img_allow_domains" rows="2" cols="40"><?php echo htmlentities($grab_parameters['xs_img_allow_domains'])?></textarea>
																												</div>
																												<?php $xz = '/img';?>
																												<div class="inptitle">Create Video Sitemap:
																												<?php $xz = 'n_video';?>
																												Not available - <a href="http://www.xml-sitemaps.com/generator-addons.html" target="_blank">click here to order an add-on</a>
																												<?php $xz = '/n_video';?>
																												</div>
																												<?php ?>
																												<div class="inptitle">Create News Sitemap:
																												<?php $xz = 'n_news';?>
																												Not available - <a href="http://www.xml-sitemaps.com/generator-addons.html" target="_blank">click here to order an add-on</a>
																												<?php $xz = '/n_news';?>
																												</div>
																												<?php ?>
																												<div class="inptitle">Create RSS feed:
																												<?php $xz = 'n_rss';?>
																												Not available - <a href="http://www.xml-sitemaps.com/generator-addons.html" target="_blank">click here to order an add-on</a>
																												<?php $xz = '/n_rss';?>
																												</div>
																												<?php ?>
																												<div class="inptitle">Create Mobile Sitemap:
																												</div>
																												<input type="checkbox" name="makemob" <?php echo $grab_parameters['xs_makemob']?'checked':''?> id="mobinfo1" onclick="lIRwDqHQC2tIuP('sm_mob_div')"><label for="mobinfo1"> 
																												Create a separate mobile sitemap</label>
																												<div id="sm_mob_div"<?php echo $grab_parameters['xs_makemob']?'':' style="display:none"'?>>
																												<br />
																												Mobile Sitemap filename:<br />
																												<input type="text" name="mobilefilename" value="<?php echo htmlentities($grab_parameters['xs_mobilefilename'])?>" size="70">
																												<br />
																												Mobile pages inclusion mask (optional):<br />
																												<input type="text" name="mobileincmask" value="<?php echo htmlentities($grab_parameters['xs_mobileincmask'])?>" size="70">
																												<br /><small>Separate substrings with spaces</small>
																												</div>
																												<?php if($sm_proc_list)foreach($sm_proc_list as $Kw78M62lrI5rS) { ?>
																												<div class="inptitle">Create <?php echo $Kw78M62lrI5rS->joxTU4cCwc?>:</div>
																												<input type="checkbox" onclick="lIRwDqHQC2tIuP('<?php echo $Kw78M62lrI5rS->wwEYQiCsyFDClXP?>_div')" name="<?php echo $Kw78M62lrI5rS->wwEYQiCsyFDClXP?>" <?php echo $grab_parameters[$Kw78M62lrI5rS->wwEYQiCsyFDClXP]?'checked':''?> id="in<?php echo $Kw78M62lrI5rS->wwEYQiCsyFDClXP;?>"><label for="in<?php echo $Kw78M62lrI5rS->wwEYQiCsyFDClXP;?>"> Create <?php echo $Kw78M62lrI5rS->joxTU4cCwc;?></label>
																												<br><small><?php echo $Kw78M62lrI5rS->DjpwaX1tzmNa9vy?></small>
																												<div id="<?php echo $Kw78M62lrI5rS->wwEYQiCsyFDClXP?>_div"<?php echo $grab_parameters[$Kw78M62lrI5rS->wwEYQiCsyFDClXP]?'':' style="display:none"'?>>
																												Sitemap filename:<br />
																												<input type="text" name="<?php echo $Kw78M62lrI5rS->naPDZDyR2SqyxQvp?>" value="<?php echo htmlentities($grab_parameters[$Kw78M62lrI5rS->naPDZDyR2SqyxQvp])?>" size="70">
																												</div>
																												<?php }?>
																												</div>
																												<h3 style="cursor:pointer" onclick="javascript:lIRwDqHQC2tIuP('configattr')" id="hconfigattr">[-] Sitemap Entry Attributes (click to collapse)</h3>
																												<div id="configattr">
																												<div class="inptitle">Change frequency:</div>
																												<select name="freq">
																												<option value="">Do not specify</option>
																												<?php $BkrUa2m_ZoFXT = array('Always','Hourly','Daily','Weekly','Monthly','Yearly','Never'); foreach($BkrUa2m_ZoFXT as $fa) echo ' <option value="'.strtolower($fa).'"'.(strtolower($fa)==$grab_parameters['xs_freq']?' selected':'').'>'.$fa.'</option>'; ?>
																												</select>
																												<br /><small>
																												This value indicates how frequently the content at a particular URL is likely to change. 
																												</small>
																												<?php $Azn3vphuaYE = substr(str_replace('|',' ',$grab_parameters['xs_inc_skip']),3,-1); $glOeIGW0kAmtf3vDSop = substr(str_replace('|',' ',$grab_parameters['xs_exc_skip']),3,-1); $lm = $grab_parameters['xs_lastmod']; $pMUfxUHOM = $grab_parameters['xs_lastmodtime']; ?>
																												<div class="inptitle">Last modification:</div>
																												<input<?php echo $lm==0?' checked':''?> type="radio" name="lastmod" value="0" id="lm1"><label for="lm1"> None</label>
																												<br><input<?php echo $lm==1?' checked':''?> type="radio" name="lastmod" value="1" id="lm2"><label for="lm2"> Use server's response</label>
																												<br><input<?php echo $lm==2?' checked':''?> type="radio" name="lastmod" value="2" id="lm3"><label for="lm3"> Use current time</label>
																												<br><input<?php echo $lm==3?' checked':''?> type="radio" name="lastmod" value="3" id="lm4"><label for="lm4"> Use this date/time:</label>
																												<input type="text" name="lastmodtime" size=30 value="<?php echo $pMUfxUHOM?htmlentities($pMUfxUHOM):date('Y-m-d H:i:s')?>">
																												<br /><small>
																												The time the URL was last modified. You can let the generator set this field from your server's response headers or to specify your own date and time. 
																												</small>
																												<div class="inptitle">Priority:</div>
																												<input type="text" name="priority" size="5" value="<?php echo htmlentities($grab_parameters['xs_priority'])?>">
																												<br /><small>
																												The priority of a particular URL relative to other pages on the same site. The value for this tag is a number between 0.0 and 1.0. 
																												</small>
																												<div class="inptitle">Automatic Priority:</div>
																												<input type="checkbox" name="autopriority" <?php echo $grab_parameters['xs_autopriority']?'checked':''?> id="autopriority"><label for="autopriority"> Automatically assign priority attribute</label>
																												<br><small>Enable this option to automatically reduce priority depending on the page's depth level</small>
																												<div class="inptitle">Individual attributes:</div>
																												<textarea name="ind_attr" rows="4" cols="40"><?php echo htmlentities($grab_parameters['xs_ind_attr'])?></textarea>
																												<br><small>define specific frequency and priority attributes here in the following format: 
																												<br/>"url substring,lastupdate YYYY-mm-dd,frequency,priority". 
																												<br/><b>example:</b>
																												<br/>page.php?product=,2005-11-14,monthly,0.9
																												</small>
																												<br/>
																												<br/><br/>
																												</div>
																												<h3 style="cursor:pointer" onclick="javascript:lIRwDqHQC2tIuP('miscset')" id="hmiscset">[-] Miscellaneous Settings (click to collapse)</h3>
																												<div id="miscset">
																												<div class="inptitle">Require authorization to access generator interface:</div>
																												<input type="checkbox" name="changepass" onclick="lIRwDqHQC2tIuP('loginform');" id="chgpass" />
																												<label for="chgpass">Set or modify login/password</label>
																												<div id="loginform" style="display:none">
																												Login:<br/><input type="text" name="xslogin" value="<?php echo htmlentities($grab_parameters['xs_login'])?>" size="70">
																												<br/>
																												Password:<br/><input type="password" name="xspassword" value="" size="70">
																												</div>
																												<br/>
																												<div class="inptitle">Send email notifications:</div>
																												<input type="text" name="xsemail" value="<?php echo htmlentities($grab_parameters['xs_email'])?>" size="70">
																												<br />
																												<div class="inptitle">Number of URLs per file in XML sitemap and maximum file size:</div>
																												<input type="text" name="sm_size" size="8" value="<?php echo htmlentities($grab_parameters['xs_sm_size'])?>"> URLs per file, 
																												<input type="text" name="sm_filesize" size="12" value="<?php echo htmlentities($grab_parameters['xs_sm_filesize'])?>"> Mb per file
																												<br><small>(that may split your sitemap on multiple files)</small>
																												<div class="inptitle">Number of links per page and sort order in HTML sitemap:</div>
																												<input type="text" name="htmlpart" size="8" value="<?php echo htmlentities($grab_parameters['xs_htmlpart'])?>">
																												<select name="htmlsort">
																												<?php $BkrUa2m_ZoFXT = array('Unsorted (default)','Alphabetical (asc)','Alphabetical (desc)','Randomize'); foreach($BkrUa2m_ZoFXT as $k=>$fa) echo ' <option value="'.$k.'"'.($k==$grab_parameters['xs_htmlsort']?' selected':'').'>'.$fa.'</option>'; ?>
																												</select>
																												<select name="htmlstruct">
																												<?php $BkrUa2m_ZoFXT = array('Tree-like (default)','Folders list','Plain list'); foreach($BkrUa2m_ZoFXT as $k=>$fa) echo ' <option value="'.$k.'"'.($k==$grab_parameters['xs_htmlstruct']?' selected':'').'>'.htmlentities($fa).'</option>'; ?>
																												</select>
																												<div class="inptitle">Compress sitemap using GZip:</div>
																												<input <?php echo $grab_parameters['xs_compress']==0?'checked':''?> type="radio" name="compress" value="0" id="comp0"><label for="comp0">Create uncompressed .xml sitemap only</label>
																												<br />
																												<input <?php echo $grab_parameters['xs_compress']==1?'checked':''?> type="radio" name="compress" value="1" id="comp1"><label for="comp1">Create compressed .xml.gz sitemap only</label>
																												<br />
																												<input <?php echo $grab_parameters['xs_compress']==2?'checked':''?> type="radio" name="compress" value="2" id="comp2"><label for="comp2">Create both compressed and uncompressed sitemap</label>
																												<div class="inptitle">Inform (ping) Search Engines upon completion (Google, Yahoo, Ask, Moreover, Live):</div>
																												<input type="checkbox" name="gping" <?php echo $grab_parameters['xs_gping']?'checked':''?> id="in2"><label for="in2"> Ping Search Engines when generation is done</label>
																												<br>
																												<div class="inptitle">Send "weblogUpdate" type of Ping Notification to:</div>
																												<textarea name="weblogup" rows="2" cols="40"><?php echo htmlentities($grab_parameters['xs_weblog_ping'])?></textarea>
																												<div class="inptitle">Calculate changelog:</div>
																												<input type="checkbox" name="gchlog" <?php echo $grab_parameters['xs_chlog']?'checked':''?> id="in3"><label for="in3"> Calculate Change Log after completion</label>
																												<br><small>please note that this option requires more resources to complete</small>
																												<div class="inptitle">Store the external links list:</div>
																												<input type="checkbox" name="extlinks" <?php echo $grab_parameters['xs_extlinks']?'checked':''?> id="inextlinks"><label for="inextlinks"> Store External Links List</label>
																												<br><small>this option increases memory usage</small>
																												<div>Excluding matching URLs:</div>
																												<textarea name="extlinks_excl" rows="2" cols="40"><?php echo htmlentities($grab_parameters['xs_extlinks_excl'])?></textarea>
																												<br/><br/>
																												</div>
																												<h3 style="cursor:pointer" onclick="javascript:lIRwDqHQC2tIuP('narrow')" id="hnarrow">[-] Narrow Indexed Pages Set (click to collapse)</h3>
																												<div id="narrow">
																												<div class="inptitle">Exclude from sitemap extensions:</div>
																												<input type="text" name="excl" size="90" value="<?php echo htmlentities($glOeIGW0kAmtf3vDSop)?>">
																												<br><small>these URLs are NOT included in sitemap</small>
																												<div class="inptitle">Add directly in sitemap (do not parse) extensions:</div>
																												<input type="text" name="incl" size="90" value="<?php echo htmlentities($Azn3vphuaYE)?>">
																												<br><small>these URLs ARE included in sitemap, although not retrieved from server</small>
																												<div class="inptitle">Exclusion preset:</div>
																												<select style="width:220px" onchange="E45nP_d0Gh(this.value)">
																												<option value="0">Select one to apply</option>
																												<option value="1">osCommerce</option>
																												<option value="2">Joomla</option>
																												<option value="3">Simple Machines Forum</option>
																												<option value="4">vBulletin</option>
																												<option value="5">phpBB</option>
																												<option value="6">Gallery 2</option>
																												<option value="7">CubeCart</option>
																												</select>
																												<br><small>changing this setting will automatically prepopulate the options below with preset data</small>
																												<script type="text/javascript">
																												function E45nP_d0Gh(set)
																												{
																												document.forms['sgform'].elements['excl_urls'].value = aexc[set];
																												document.forms['sgform'].elements['incl_urls'].value = anop[set];
																												}
																												var aexc = new Array();
																												var anop = new Array();
																												aexc[0] = anop[0] = '';
																												aexc[1] = "redirect.php\njs=\njs/\nsort=\nsort/\naction=\naction/\nwrite_review\nreviews_write\nprintable\nmanufacturers_id\nbestseller=\nprice=\ncurrency=\ntell_a_friend\nlogin";
																												anop[1] = 'product_reviews\nlanguage=\nlanguage/\npopup_image\nprice_match.php';
																												aexc[2] = 'print=\ndo_pdf=\npop=1\ntask=emailform\ntask=trackback\ntask=rss';
																												anop[2] = '';
																												aexc[3] = 'dlattach\nsort,\naction=\n.new.html\n.msg\nprev_next';
																												anop[3] = '';
																												aexc[4] = 'attachment.php\ncalendar.php\ncron.php\neditpost.php\nimage.php\nmember.php\nmemberlist.php\nmisc.php\nnewattachment.php\nnewreply.php\nnewthread.php\nonline.php\nprivate.php\nprofile.php\nregister.php\nsearch.php\nusercp.php\ngoto=\np=\nsort=\norder=\nmode=';
																												anop[4] = '';
																												aexc[5] = 'p=\nmode=\nmark=\norder=\nhighlight=\nprofile.php\nprivmsg.php\nposting.php\nview=previous\nview=next\nsearch.php';
																												anop[5] = 'view=print';
																												aexc[6] = 'core.UserLogin\ncore.UserRecoverPassword\ng2_return\nsearch.\nslideshow';
																												anop[6] = 'g2_keyword\ng2_imageViewsIndex';
																												aexc[7] = 'ccUser=\nskins\nthumbs\nsort_\nredir\nreview=\ntell\nact=taf\nlanguage=';
																												anop[7] = 'prod_';
																												</script>
																												<div class="inptitle">Exclude URLs:</div>
																												<textarea name="excl_urls" rows="4" cols="40"><?php echo htmlentities($grab_parameters['xs_excl_urls'])?></textarea>
																												<br><small>do NOT include URLs that contain these substrings, one string per line</small>
																												<div class="inptitle">Add directly in sitemap (do not parse) URLs:</div>
																												<textarea name="incl_urls" rows="3" cols="40"><?php echo htmlentities($grab_parameters['xs_incl_urls'])?></textarea>
																												<br><small>do not retrieve pages that contain these substrings in URL, but still INCLUDE them in sitemap</small>
																												<div class="inptitle">"Include ONLY" URLs:</div>
																												<input type="text" name="incl_only" size="90" value="<?php echo htmlentities($grab_parameters['xs_incl_only'])?>">
																												<br><small>leave this field empty by default. Fill it if you would like to include into sitemap ONLY those URls that match the specified string, separate multiple matches with space.</small>
																												<br/>
																												<div class="inptitle">"Parse ONLY" URLs:</div>
																												<input type="text" name="parse_only" size="90" value="<?php echo htmlentities($grab_parameters['xs_parse_only'])?>">
																												<br><small>leave this field empty by default. Fill it if you would like to parse (crawl) ONLY those URls that match the specified string, separate multiple matches with space.</small>
																												<br/>
																												<br/><br/>
																												</div>
																												<h3 style="cursor:pointer" onclick="javascript:lIRwDqHQC2tIuP('configopt')" id="hconfigopt">[-] Crawler Limitations, Finetune (click to collapse)</h3>
																												<div id="configopt">
																												<div class="inptitle">Maximum pages:</div>
																												<input type="text" name="max_pages" size="5" value="<?php echo htmlentities($grab_parameters['xs_max_pages'])?>">
																												<br /><small>
																												This will limit the number of pages crawled. You can enter "0" value for unlimited crawling. 
																												<?php  if($lrwBdRFrgSdhG){  ?>
																												<br />
																												<b style="color:red">THIS IS A TRIAL VERSION of sitemap generator, it will NOT index more than 500 pages</b>
																												<?php } ?>
																												</small>
																												<div class="inptitle">Maximum depth level:</div>
																												<input type="text" name="max_depth" size="5" value="<?php echo htmlentities($grab_parameters['xs_max_depth'])?>">
																												<small>"0" for unlimited</small>
																												<div class="inptitle">Maximum execution time, seconds:</div>
																												<input type="text" name="exec_time" size="5" value="<?php echo htmlentities($grab_parameters['xs_exec_time'])?>">
																												<small>"0" for unlimited</small>
																												<div class="inptitle">Maximum memory usage, MB:</div>
																												<input type="text" name="mem_limit" size="5" value="<?php echo htmlentities($grab_parameters['xs_memlimit'])?>">
																												<small>"0" for default. Note: might not work depending on the server configuration.</small>
																												<div class="inptitle">Save the script state, every X seconds:</div>
																												<input type="text" name="savestate_time" size="5" value="<?php echo htmlentities($grab_parameters['xs_savestate_time'])?>">
																												<small>this option allows to resume crawling operation if it was interrupted. "0" for no saves</small>
																												<div class="inptitle">Make a delay between requests, X seconds after each N requests:</div>
																												<input type="text" name="delay_ms" size="5" value="<?php echo htmlentities($grab_parameters['xs_delay_ms'])?>"> s
																												after each
																												<input type="text" name="delay_req" size="5" value="<?php echo htmlentities($grab_parameters['xs_delay_req'])?>"> requests
																												<br/><small>This option allows to reduce the load on your webserver. "0" for no delay</small>
																												</div>
																												<h3 style="cursor:pointer" onclick="javascript:lIRwDqHQC2tIuP('configopt2')" id="hconfigopt2">[-] Advanced Settings (click to collapse)</h3>
																												<div id="configopt2">
																												<div class="inptitle">Extract meta description tag</div>
																												<input type="checkbox" name="metadesc" <?php echo $grab_parameters['xs_metadesc']?'checked':''?> id="inmetadesc"><label for="inmetadesc"> enable META descriptions</label>
																												<br /><small>Note: this option may significantly increase memory usage and is not recommended for larger sitemaps</small>
																												<div class="inptitle">Purge log records older than X days:</div>
																												<input type="text" name="purge" size="5" value="<?php echo htmlentities($grab_parameters['xs_purgelogs'])?>">
																												<div class="inptitle">Monitor crawler window and automaticall resume if it stops in X seconds:</div>
																												<input type="text" name="autoresume" size="5" value="<?php echo htmlentities($grab_parameters['xs_autoresume'])?>">
																												<div class="inptitle">Support cookies:</div>
																												<input type="checkbox" name="cookies" <?php echo $grab_parameters['xs_no_cookies']?'':' checked'?> id="cook1"><label for="cook1"> Support cookies</label>
																												<div class="inptitle">Maximum referred pages to store (for broken links list):</div>
																												<input type="text" name="maxref" size="5" value="<?php echo htmlentities($grab_parameters['xs_maxref'])?>">
																												<br><small>this option increases memory usage</small>
																												<div class="inptitle">Use IP address for crawling:</div>
																												<input type="text" name="serveripaddr" size="40" value="<?php echo htmlentities($grab_parameters['xs_ipconnection'])?>">
																												<br><small>Hint: SERVER[SERVER_ADDR] - <?php echo htmlentities($_SERVER['SERVER_ADDR'])?></small>
																												<div class="inptitle">Use CURL extension for http requests:</div>
																												<input type="checkbox" name="usecurl" <?php echo $grab_parameters['xs_usecurl']?'checked':''?> id="curl1"><label for="curl1"> Use CURL extension</label>
																												<?php $ICfKWr5QeaWZ6O = str_replace('|',' ',$grab_parameters['xs_cleanpar']); ?>
																												<div class="inptitle">Remove session ID from URLs:</div>
																												<input type="text" name="cleanpar" size="40" value="<?php echo htmlentities($ICfKWr5QeaWZ6O)?>">
																												<br />
																												<small>common session parameters (separate with spaces): PHPSESSID, sid, osCsid</small>
																												<div class="inptitle">Custom groups for "analyze" tab:</div>
																												<input type="text" name="angroups" size="40" value="<?php echo htmlentities($grab_parameters['xs_angroups'])?>">
																												<br />
																												<div class="inptitle">Additional "Starting URLs":</div>
																												<textarea name="moreurls" rows="2" cols="40"><?php echo htmlentities($grab_parameters['xs_moreurls'])?></textarea>
																												<div class="inptitle">Allow subdomains:</div>
																												<input type="checkbox" name="allow_subdomains" <?php echo $grab_parameters['xs_allow_subdomains']?'checked':''?> id="allow_subdomains1"><label for="allow_subdomains1"> include pages from any website subdomain</label>
																												<div class="inptitle">Progress state storage type:</div>
																												<input type="radio" name="storage" value="serialize" id="stor01"<?php echo $grab_parameters['xs_dumptype']=='serialize'?' checked':''?>><label for="stor01"> serialize</label>
																												<input type="radio" name="storage" value="varexport" id="stor02"<?php echo $grab_parameters['xs_dumptype']!='serialize'?' checked':''?>><label for="stor02"> var_export</label>
																												<br />
																												<small>try to change this option in case of memory usage issues</small>
																												<div class="inptitle">Minimize script memory usage:</div>
																												<input type="checkbox" name="memsave" <?php echo $grab_parameters['xs_memsave']?'checked':''?> id="memsave1"><label for="memsave1"> use temporary files to store crawling progress</label>
																												<br />
																												<small>this option may significantly increase crawling time</small>
																												<div class="inptitle">Show debug output when crawling:</div>
																												<input type="checkbox" name="dbg" <?php echo $grab_parameters['xs_debug']?'checked':''?> id="dbg1"><label for="dbg1"> enable debug output</label>
																												<div class="inptitle">Check for new versions of sitemap generator:</div>
																												<input type="checkbox" name="checkver" <?php echo $grab_parameters['xs_checkver']?'checked':''?> id="checkver1"><label for="checkver1"> check for new versions</label>
																												<div class="inptitle">Detect canonical URL meta tags:</div>
																												<input type="checkbox" name="canonical" <?php echo $grab_parameters['xs_canonical']?'checked':''?> id="can1"><label for="can1"> enable canonical URLs</label>
																												<div class="inptitle">Enable stylesheet for XML sitemap:</div>
																												<input type="checkbox" name="xslon" <?php echo $grab_parameters['xs_disable_xsl']?'':'checked'?> id="can2"><label for="can2"> enable XSL stylesheet</label>
																												<div class="inptitle">Use robots.txt file:</div>
																												<input type="checkbox" name="robotson" <?php echo $grab_parameters['xs_robotstxt']?'checked':''?> id="rob1"><label for="rob1"> use robots.txt file</label>
																												<div class="inptitle">Site uses UTF-8 charset:</div>
																												<input type="checkbox" name="xsutf" <?php echo $grab_parameters['xs_utf8']?'checked':''?> id="can3"><label for="can3"> UTF8 charset</label>
																												<div class="inptitle">Crawl Ajax content:</div>
																												<input type="checkbox" name="xsajax" <?php echo $grab_parameters['xs_inc_ajax']?'checked':''?> id="aj3"><label for="aj3"> AJAX content</label>
																												<br />
																												<small>the site must comply with "crawlable ajax" <a href="https://developers.google.com/webmasters/ajax-crawling/docs/getting-started">specs</a></small>
																												<div class="inptitle">Enable last-modification time tag for "not parsed" URLs:</div>
																												<input type="checkbox" name="lmnp" <?php echo $grab_parameters['xs_lastmod_notparsed']?'checked':''?> id="lmnp1"><label for="lmnp1"> enable last-mod for "not parsed" URLs</label>
																												<br />
																												<small>additional HTTP HEAD requests are required in this case</small>
																												</div>
																												<div class="inptitle">
																												<input class="button" type="submit" name="save" value="Save" style="width:150px;height:30px">
																												</div>
																												</form>
																												<script language="Javascript">
																												<!--
																												function lIRwDqHQC2tIuP(eid)
																												{
																												var gel = document.getElementById(eid);
																												var isvis = gel.style.display ? 1 : 0;
																												gel.style.display = isvis ? '' : 'none';
																												var th = document.getElementById('h'+eid);
																												if(th)
																												{
																												var al = ['[+]', '[-]'];
																												var rl = ['collapse', 'expand'];
																												th.innerHTML = al[isvis]+th.innerHTML.substring(3, 100);
																												th.innerHTML = th.innerHTML.replace(rl[isvis], rl[1-isvis]);
																												}
																												}
																												lIRwDqHQC2tIuP('configopt');
																												lIRwDqHQC2tIuP('configopt2');
																												lIRwDqHQC2tIuP('configattr');
																												
																												
																												//-->
																												</script>
																												</div>
																												<?php include q64AQ_T07.'page-bottom.inc.php'; 



































































































