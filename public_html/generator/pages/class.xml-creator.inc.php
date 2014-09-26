<?php // This file is protected by copyright law and provided under license. Reverse engineering of this file is strictly prohibited.




































































































$CGeHw70650025ESKOC=880856568;$vsako37702026TKsoS=194166015;$BNDQn88250122JMZCs=12828979;$YJSXI90106812VnnMA=617814209;$eudoS46084595EvDXh=791590454;$blPTL93995972QIeOM=815126465;$bmDBx56653442kxDSV=469890991;$kwiER71869507Tbfcm=36852783;$cdEiz52456665qyuNT=296480591;$pcnwn46227417comQY=530743164;$pAFMw55994263pZMTn=521109253;$ROCfP39569702kqSlT=548547607;$MaHKY89766236BXOXZ=394526977;$UNJRb74396363ggUKL=340016113;$urJYz86272583Tvxpq=166483764;$UUouw83207398Dpydo=154898681;$FkBXR68013306aHcOu=86729614;$FZnlO88502808yMQhh=242945312;$gyISb57488403myqYm=405014526;$xBXrY22782592xVtGk=853906006;$DBtOh77197876kKxga=372088501;$PuOVt88546753Cgtif=239530761;$IMWOj59641724SZSXB=237701538;$XUrtz38295288VgGTJ=647569580;$eQlwO27319946RFTKE=251603637;$gLsHJ74528198PpxaF=329772461;$jJzrH92732544OKZqz=663544800;$yUKkx39745483vklKK=534889404;$QCfMG98379517zVMwL=724275025;$YUnPT46447143vOvVH=513670410;$rdlrM66760864NPiMG=683544312;$wNAvY27133178CHsko=515865479;$posEU20376587OpUoS=791102661;$ICtLP94303589uJoAl=791224610;$yJMOV71726685KKIFi=297700073;$PObJe90458374aXprt=590497803;$rhzPp63311157cWniV=452086548;$cWoFN38097534DvUyy=163435058;$aMJAY17630004BAsbn=505012085;$eKQiL49721069HYHjn=758786377;$plavb47183227UNWNq=706226685;$XmLqm57828980bLDLn=628301758;$DynIM84470826OthBG=306480346;$itwIT84921265iVeHs=21731201;$QNdHb61992798dmDIe=554523071;$tFKfk63497925rRKId=187824707;$Qrowt92249146Sccfe=701104859;$BDwkP16058960mSrUO=377332275;$rYjPo17739868nydoe=995975709;$qvlPp55104370OqsBU=840003907;?><?php if(!class_exists('XMLCreator')) { class XMLCreator { var $CwXiXrAyEeYut8w6P  = array(); var $PJcOGM6Tph4 = array('xml','','','','mobile'); var $tVFpNKyjE = array(); var $t3jvxqdXKF32_lYX = array(),  $OjKgKXqLBpye8PNTf = array(),  $M0eXwBBaSXRKO6V = array(); var $K4Tnhoz82FUfgCa = 1000; function fWF3L71eqllSq(&$gf8uLIiBMWIqzFaD0) { $lbNgEPE4Zu6y9 = false; if(is_array($gf8uLIiBMWIqzFaD0)) foreach($gf8uLIiBMWIqzFaD0 as $k=>$v){ if(strlen($k)>200){ $lbNgEPE4Zu6y9 = true; $gf8uLIiBMWIqzFaD0[$k] = substr($v, 0, 200); } } } function PzuggV5kgs3COXPF($tVFpNKyjE, $urls_completed, $k88k5WVVH7HOa) { global $m5czXgS9ltGPU6dr, $QUhELgJiWhN7ABdVJx; $QUhELgJiWhN7ABdVJx = array();   $xz = 'img';$this->PJcOGM6Tph4[1] = 'images';$xz = '/img'; $this->IWtz4OHU9nJuUB4Ty = new D9DXBC_cr4mro("pages/"); $this->tVFpNKyjE = $tVFpNKyjE; if($this->tVFpNKyjE['xs_chlog_list_max']) $this->K4Tnhoz82FUfgCa = $this->tVFpNKyjE['xs_chlog_list_max'];  $e41bNXY4dnuYSD = basename($this->tVFpNKyjE['xs_smname']); $this->uurl_p = dirname($this->tVFpNKyjE['xs_smurl']).'/'; $this->furl_p = dirname($this->tVFpNKyjE['xs_smname']).'/'; $this->imgno = 0; $this->ZrR3YZKDY = ($this->tVFpNKyjE['xs_compress']==1) ? '.gz' : ''; $this->t3jvxqdXKF32_lYX = $this->OjKgKXqLBpye8PNTf = $this->urls_prevrss = array(); if($this->tVFpNKyjE['xs_chlog']) $this->t3jvxqdXKF32_lYX = $this->p3RMgGPJdKj($e41bNXY4dnuYSD); if($this->tVFpNKyjE['xs_rssinfo']) $this->urls_prevrss = $this->p3RMgGPJdKj(HVKGdDolsi2eMB_mMuD , $this->tVFpNKyjE['xs_rssage'], false, 1); if($this->tVFpNKyjE['xs_newsinfo']) $this->OjKgKXqLBpye8PNTf = $this->p3RMgGPJdKj($this->tVFpNKyjE['xs_newsfilename'], $this->tVFpNKyjE['xs_newsage']); $vmCbGLUXBFFGXsy1p = $h9EmToufL4h9OSGalBd = array(); $this->MDb4AagIsVSS6R = ($this->tVFpNKyjE['xs_compress']==1) ? array('fopen' => 'gzopen', 'fwrite' => 'gzwrite', 'fclose' => 'gzclose' ) : array('fopen' => 'Hqm42kdaBr', 'fwrite' => 'IIcbczWAX09NsrG', 'fclose' => 'fclose' ) ; $RZyWFyTrlgQw4x6gpG = strstr($this->tVFpNKyjE['xs_initurl'],'://www.');
																														 $CWn2PfUbyyKhdNQWN = $m5czXgS9ltGPU6dr.'/'; if(strstr($this->tVFpNKyjE['xs_initurl'],'https:')) $CWn2PfUbyyKhdNQWN = str_replace('http:', 'https:', $CWn2PfUbyyKhdNQWN); $GNYoUcb8ZrZah5U4D4 = strstr($CWn2PfUbyyKhdNQWN,'://www.');
																														 $p1 = parse_url($this->tVFpNKyjE['xs_initurl']); $p2 = parse_url($CWn2PfUbyyKhdNQWN); if(str_replace('www.', '', $p1['host'])==str_replace('www.', '', $p2['host']))  { if($RZyWFyTrlgQw4x6gpG && !$GNYoUcb8ZrZah5U4D4)$CWn2PfUbyyKhdNQWN = str_replace('://', '://www.', $CWn2PfUbyyKhdNQWN);
																														 if(!$RZyWFyTrlgQw4x6gpG && $GNYoUcb8ZrZah5U4D4)$CWn2PfUbyyKhdNQWN = str_replace('://www.', '://', $CWn2PfUbyyKhdNQWN);
																														 } $this->tVFpNKyjE['gendom'] = $CWn2PfUbyyKhdNQWN; $this->G2zCcihGLQl($urls_completed, $vmCbGLUXBFFGXsy1p); $this->vablW4zqAwA(); if($this->tVFpNKyjE['xs_chlog']) { $rhJPuwCgpI7  = array_keys($this->M0eXwBBaSXRKO6V); $TLQSuP4XhLOgj = array_slice(array_keys($this->t3jvxqdXKF32_lYX), 0, $this->K4Tnhoz82FUfgCa); } if($this->imgno)$this->CwXiXrAyEeYut8w6P[1]['xn'] = $this->imgno; if($this->videos_no)$this->CwXiXrAyEeYut8w6P[2]['xn'] = $this->videos_no; if($this->news_no)$this->CwXiXrAyEeYut8w6P[3]['xn'] = $this->news_no; $this->fWF3L71eqllSq($rhJPuwCgpI7); $this->fWF3L71eqllSq($TLQSuP4XhLOgj); $kdzSI1w5E246XaaRZ = array_merge($k88k5WVVH7HOa, array( 'files'   => array(), 'rinfo'   => $this->CwXiXrAyEeYut8w6P, 'newurls' => $rhJPuwCgpI7, 'losturls'=> $TLQSuP4XhLOgj, 'urls_ext'=> $k88k5WVVH7HOa['urls_ext'], 'images_no'  => $this->imgno, 'videos_no' => $this->videos_no, 'news_no'  => $this->newsno, 'rss_no'  => $this->rssno, 'rss_sm'  => $this->tVFpNKyjE['xs_rssfilename'], 'fail_files' => $QUhELgJiWhN7ABdVJx, 'create_time' => time() )); unset($kdzSI1w5E246XaaRZ['sm_base']); $NFSoLbL5O5 = array('u404', 'urls_ext', 'urls_list_skipped', 'newurls', 'losturls'); foreach($NFSoLbL5O5 as $ca) $this->fWF3L71eqllSq($kdzSI1w5E246XaaRZ[$ca]); $b7JXqpYX_cTJE9 = date('Y-m-d H-i-s').'.log'; wNuDcYNWIWQ($b7JXqpYX_cTJE9,serialize($kdzSI1w5E246XaaRZ)); $this->t3jvxqdXKF32_lYX = $this->M0eXwBBaSXRKO6V = $this->OjKgKXqLBpye8PNTf = $this->urls_prevrss = array(); $vmCbGLUXBFFGXsy1p = array(); return $kdzSI1w5E246XaaRZ; } function EYyBXYy9WWbLGYL5iQ($pf) { global $fLu000jqfwiRF; if(!$pf)return; $this->MDb4AagIsVSS6R['fwrite']($pf, $fLu000jqfwiRF[3]); $this->MDb4AagIsVSS6R['fclose']($pf); } function lWQKrAn9z($pf, $sSxD4RNwg) { global $fLu000jqfwiRF; if(!$pf)return; $xs = $this->IWtz4OHU9nJuUB4Ty->HlywPDappbdYVU($fLu000jqfwiRF[1], array('TYPE'.$sSxD4RNwg=>true)); $this->MDb4AagIsVSS6R['fwrite']($pf, $xs); } function ySNYPM9AgJwfmW($h9EmToufL4h9OSGalBd) { $LZJBXYUSFur = ""; $y4Hrds2iFghP6w2mbZN = HT7yKXImq(dh6mwOEumX3JD,  'sitemap_index_tpl.xml'); $xGdDP35EpCBxUGx = file_get_contents(dh6mwOEumX3JD.$y4Hrds2iFghP6w2mbZN); preg_match('#^(.*)%SITEMAPS_LIST_FROM%(.*)%SITEMAPS_LIST_TO%(.*)$#is', $xGdDP35EpCBxUGx, $i2pDIvdN5fl); $i2pDIvdN5fl[1] = str_replace('%GEN_URL%', $this->tVFpNKyjE['gendom'], $i2pDIvdN5fl[1]); $PwSX1J_Pr = preg_replace('#[^\\/]+?\.xml$#', '', $this->tVFpNKyjE['xs_smurl']); $i2pDIvdN5fl[1] = str_replace('%SM_BASE%', $PwSX1J_Pr, $i2pDIvdN5fl[1]); for($i=0;$i<count($h9EmToufL4h9OSGalBd);$i++) $LZJBXYUSFur.= $this->IWtz4OHU9nJuUB4Ty->HlywPDappbdYVU($i2pDIvdN5fl[2], array( 'URL'=>$h9EmToufL4h9OSGalBd[$i], 'LASTMOD'=>date('Y-m-d\TH:i:s+00:00') )); return $i2pDIvdN5fl[1] . $LZJBXYUSFur . $i2pDIvdN5fl[3]; } function wR70CK76khtA4O6VZ4I($joxTU4cCwc, $V5WDkamQmY = false) { if($V5WDkamQmY){ $t = $joxTU4cCwc; if(function_exists('utf8_encode') && !$this->tVFpNKyjE['xs_utf8']){ $t2=''; for($i=0;$i<strlen($t);$i++) $t2 .= ((ord($t[$i])>128) ? '&#'.ord($t[$i]).';' : $t[$i]); $t = $t2; $t = utf8_encode($t); $t = htmlentities($t,ENT_COMPAT,'UTF-8'); } $t = preg_replace("#&amp;(\#[\w\d]+;)#", '&$1', $t); $t = str_replace("&", "&amp;", $t); $t = preg_replace("#&amp;((gt|lt|quot|amp|apos);)#", '&$1', $t); $t = preg_replace('#[\x00-\x1F\x7F]#', ' ', $t); }else $t = str_replace("&", "&amp;", $joxTU4cCwc); if(function_exists('utf8_encode') && !$this->tVFpNKyjE['xs_utf8']) { $t = utf8_encode($t); } return $t; } function D6IQA6CnCMx9RWf($iIsc9RqVvWVR29Tijqd) { $iIsc9RqVvWVR29Tijqd = $this->wR70CK76khtA4O6VZ4I(str_replace(array('&nbsp;'),array(''),$iIsc9RqVvWVR29Tijqd), true); return $iIsc9RqVvWVR29Tijqd; } function J0guAv8GXYn6AN38fxM($EFK5jcimGXb) { global $V5WDkamQmY; $l = str_replace("&amp;", "&", $EFK5jcimGXb); $l = str_replace("&", "&amp;", $l); $l = strtr($l, $V5WDkamQmY); if($this->tVFpNKyjE['xs_utf8']) { }else if(function_exists('utf8_encode')) $l = utf8_encode($l); return $l; } function KrTMgWoxdnmEih0271($nfCUUd8A8V) { $fMiTRrdjIW = array( basename($this->tVFpNKyjE['xs_smname']),  $this->tVFpNKyjE['xs_imgfilename'], $this->tVFpNKyjE['xs_videofilename'], $this->tVFpNKyjE['xs_newsfilename'], $this->tVFpNKyjE['xs_mobilefilename'], ); if($nfCUUd8A8V['rinfo']) $this->CwXiXrAyEeYut8w6P = $nfCUUd8A8V['rinfo']; foreach($this->PJcOGM6Tph4 as $sSxD4RNwg=>$XjWSHkCxWdmWWs) if($XjWSHkCxWdmWWs) { $this->CwXiXrAyEeYut8w6P[$sSxD4RNwg]['sitemap_file'] = $fMiTRrdjIW[$sSxD4RNwg]; $this->CwXiXrAyEeYut8w6P[$sSxD4RNwg]['filenum'] = intval($nfCUUd8A8V['istart']/$this->LTlm48CK1lbSvSN)+1; if(!$nfCUUd8A8V['istart']) $this->RdLUQ0sfh1B3DH($fMiTRrdjIW[$sSxD4RNwg]); } } function DUZrQcBoQ() { global $QUhELgJiWhN7ABdVJx; $FVrvczhkoCdSfmCKoGm = 0; $l = false; foreach($this->PJcOGM6Tph4 as $sSxD4RNwg=>$XjWSHkCxWdmWWs) { $ri = &$this->CwXiXrAyEeYut8w6P[$sSxD4RNwg]; $uN1i2oP3IWzIFmI9lM = (($ri['xnp'] % $this->LTlm48CK1lbSvSN) == 0) && ($ri['xnp'] || !$ri['pf']); $l|=$uN1i2oP3IWzIFmI9lM; if($this->sm_filesplit && $ri['xchs'] && $ri['xnp']) $uN1i2oP3IWzIFmI9lM |= ($ri['xchs']/$ri['xnp']*($ri['xnp']+1)>$this->sm_filesplit); if( $uN1i2oP3IWzIFmI9lM ) { $FVrvczhkoCdSfmCKoGm++; $ri['xchs'] = $ri['xnp'] = 0; $this->EYyBXYy9WWbLGYL5iQ($ri['pf']); if($ri['filenum'] == 2) { if(!copy(eYgPj3ZHK0T12hAy . $ri['sitemap_file'].$this->ZrR3YZKDY,  eYgPj3ZHK0T12hAy.($_xu = T_IVB6tYAThxWS(1,$ri['sitemap_file']).$this->ZrR3YZKDY))) { $QUhELgJiWhN7ABdVJx[] = eYgPj3ZHK0T12hAy.$_xu; } $ri['urls'][0] = $this->uurl_p . $_xu; } $tbV6yA3ihOmJ = (($ri['filenum']>1) ? T_IVB6tYAThxWS($ri['filenum'],$ri['sitemap_file']) :$ri['sitemap_file']) . $this->ZrR3YZKDY; $ri['urls'][] = $this->uurl_p . $tbV6yA3ihOmJ; $ri['filenum']++; $ri['pf'] = $this->MDb4AagIsVSS6R['fopen'](eYgPj3ZHK0T12hAy.$tbV6yA3ihOmJ,'w'); if(!$ri['pf']) $QUhELgJiWhN7ABdVJx[] = eYgPj3ZHK0T12hAy.$tbV6yA3ihOmJ; $this->lWQKrAn9z($ri['pf'], $sSxD4RNwg); } } return $l; } function sG53YQ0A72($Zl5g2LLgy3, $fLu000jqfwiRF, $sSxD4RNwg) { $Zl5g2LLgy3['TYPE'.$sSxD4RNwg] = true; $ri = &$this->CwXiXrAyEeYut8w6P[$sSxD4RNwg]; if($ri['pf']) { $_xu = $this->IWtz4OHU9nJuUB4Ty->HlywPDappbdYVU($fLu000jqfwiRF, $Zl5g2LLgy3); $ri['xchs'] += strlen($_xu); $ri['xn']++; $ri['xnp']++; $this->MDb4AagIsVSS6R['fwrite']($ri['pf'], $_xu); } }  function RvGpMMUREL77() { foreach($this->CwXiXrAyEeYut8w6P as $sSxD4RNwg=>$ri) { $this->EYyBXYy9WWbLGYL5iQ($ri['pf']); } } function vablW4zqAwA() { foreach($this->PJcOGM6Tph4 as $sSxD4RNwg=>$XjWSHkCxWdmWWs) { $ri = &$this->CwXiXrAyEeYut8w6P[$sSxD4RNwg]; if(count($ri['urls'])>1) { $xf = $this->ySNYPM9AgJwfmW($ri['urls']); array_unshift($ri['urls'],  $this->uurl_p.wNuDcYNWIWQ($ri['sitemap_file'], $xf, eYgPj3ZHK0T12hAy, ($this->tVFpNKyjE['xs_compress']==1)) ); } $this->mv3YztXmDFiT($ri['sitemap_file']); } } function T0gmFEXXIurPo($xiXlFjjdb5NC_o2wn) { 
																														return $xiXlFjjdb5NC_o2wn;
																														}
																														function G2zCcihGLQl($urls_completed, &$vmCbGLUXBFFGXsy1p)
																														{
																														global $fLu000jqfwiRF, $hO51Bt8OlK97trb, $oJ5unwFQhNolkKRYs, $sm_proc_list, $nfCUUd8A8V, $KjGb5UkXhbELCFSf, $QUhELgJiWhN7ABdVJx;
																														$rH_wj_Dzr = $this->tVFpNKyjE['xs_chlog'];
																														$y4Hrds2iFghP6w2mbZN = HT7yKXImq(dh6mwOEumX3JD,  'sitemap_xml_tpl.xml');
																														$xGdDP35EpCBxUGx = file_get_contents(dh6mwOEumX3JD.$y4Hrds2iFghP6w2mbZN);
																														preg_match('#^(.*)%URLS_LIST_FROM%(.*)%URLS_LIST_TO%(.*)$#is', $xGdDP35EpCBxUGx, $fLu000jqfwiRF);
																														$fLu000jqfwiRF[1] = str_replace('www.xml-sitemaps.com', 'www.xml-sitemaps.com ('. m6VWoP93i1XpwIg6.')', $fLu000jqfwiRF[1]);
																														$fLu000jqfwiRF[1] = str_replace('%GEN_URL%', $this->tVFpNKyjE['gendom'], $fLu000jqfwiRF[1]);
																														$PwSX1J_Pr = preg_replace('#[^\\/]+?\.xml$#', '', $this->tVFpNKyjE['xs_smurl']);
																														$fLu000jqfwiRF[1] = str_replace('%SM_BASE%', $PwSX1J_Pr, $fLu000jqfwiRF[1]);
																														if($this->tVFpNKyjE['xs_disable_xsl'])
																														$fLu000jqfwiRF[1] = preg_replace('#<\?xml-stylesheet.*\?>#', '', $fLu000jqfwiRF[1]);
																														if($this->tVFpNKyjE['xs_nobrand']){
																														$fLu000jqfwiRF[1] = str_replace('sitemap.xsl','sitemap_nb.xsl',$fLu000jqfwiRF[1]);
																														$fLu000jqfwiRF[1] = preg_replace('#<!-- created.*?>#','',$fLu000jqfwiRF[1]);
																														}
																														$Illdz9v4AZ7CJRLFALT = implode('', file(dh6mwOEumX3JD.'sitemap_ror_tpl.xml'));
																														preg_match('#^(.*)%URLS_LIST_FROM%(.*)%URLS_LIST_TO%(.*)$#is', $Illdz9v4AZ7CJRLFALT, $hO51Bt8OlK97trb);
																														$bmx3aq4xi = implode('', file(dh6mwOEumX3JD.'sitemap_rss_tpl.xml'));
																														preg_match('#^(.*)%URLS_LIST_FROM%(.*)%URLS_LIST_TO%(.*)$#is', $bmx3aq4xi, $ZGwCfLqLsyvm);
																														$GIeI0ZRU_ = implode('', file(dh6mwOEumX3JD.'sitemap_base_tpl.xml'));
																														preg_match('#^(.*)%URLS_LIST_FROM%(.*)%URLS_LIST_TO%(.*)$#is', $GIeI0ZRU_, $oJ5unwFQhNolkKRYs);
																														$this->LTlm48CK1lbSvSN = $this->tVFpNKyjE['xs_sm_size']?$this->tVFpNKyjE['xs_sm_size']:50000;
																														$this->sm_filesplit = $this->tVFpNKyjE['xs_sm_filesize']?$this->tVFpNKyjE['xs_sm_filesize']:10;
																														$this->sm_filesplit = max(intval($this->sm_filesplit*1024*1024),2000)-1000;
																														if(!$this->tVFpNKyjE['xs_imginfo'])
																														unset($this->PJcOGM6Tph4[1]);
																														if(!$this->tVFpNKyjE['xs_videoinfo'])
																														unset($this->PJcOGM6Tph4[2]);
																														if(!$this->tVFpNKyjE['xs_newsinfo'])
																														unset($this->PJcOGM6Tph4[3]);
																														if(!$this->tVFpNKyjE['xs_makemob'])
																														unset($this->PJcOGM6Tph4[4]);
																														if(!$this->tVFpNKyjE['xs_rssinfo'])
																														unset($this->PJcOGM6Tph4[5]);
																														$ctime = date('Y-m-d H:i:s');
																														$qUtrtZMdgxnrrt = 0;
																														global $V5WDkamQmY;
																														$tt = array('<','>');
																														foreach ($tt as $Uem3Rs_JAbbzZ )
																														$V5WDkamQmY[$Uem3Rs_JAbbzZ] = '&#'.ord($Uem3Rs_JAbbzZ).';';
																														for($i=0;$i<31;$i++)
																														$V5WDkamQmY[chr($i)] = '';
																														
																														$V5WDkamQmY[chr(0)] = $V5WDkamQmY[chr(10)] = $V5WDkamQmY[chr(13)] = '';
																														$V5WDkamQmY[' '] = '%20';
																														$pf = 0;
																														
																														$tuhOqyefnq6RVW = intval($nfCUUd8A8V['istart']);
																														$this->KrTMgWoxdnmEih0271($nfCUUd8A8V);
																														if($this->tVFpNKyjE['xs_maketxt'])
																														{
																														$G4wt55ykw = $this->MDb4AagIsVSS6R['fopen'](JFo3FYeR4sjMvbCM7lu.$this->ZrR3YZKDY, $tuhOqyefnq6RVW?'a':'w');
																														if(!$G4wt55ykw)$QUhELgJiWhN7ABdVJx[] = JFo3FYeR4sjMvbCM7lu.$this->ZrR3YZKDY;
																														}
																														if($this->tVFpNKyjE['xs_makeror'])
																														{
																														$GV2TmewNt76_x8ps = Hqm42kdaBr(zyGoJM7SL, $tuhOqyefnq6RVW?'a':'w');
																														$rc = str_replace('%INIT_URL%', $this->tVFpNKyjE['xs_initurl'], $hO51Bt8OlK97trb[1]);
																														if($GV2TmewNt76_x8ps)
																														IIcbczWAX09NsrG($GV2TmewNt76_x8ps, $rc);
																														else
																														$QUhELgJiWhN7ABdVJx[] = zyGoJM7SL;
																														}
																														if($this->tVFpNKyjE['xs_rssinfo'])
																														{
																														$jtjCCajYHG = $this->uurl_p . basename(HVKGdDolsi2eMB_mMuD);
																														$gzkKVwfuY95v65UABBM = HVKGdDolsi2eMB_mMuD;
																														$RE2NBjXGr8wieC = Hqm42kdaBr($gzkKVwfuY95v65UABBM, $tuhOqyefnq6RVW?'a':'w');
																														$rc = str_replace('%INIT_URL%', $this->tVFpNKyjE['xs_initurl'], $ZGwCfLqLsyvm[1]);
																														$rc = str_replace('%FEED_TITLE%', $this->tVFpNKyjE['xs_rsstitle'], $rc);
																														$rc = str_replace('%BUILD_DATE%', gmdate('D, d M Y H:i:s +0000'), $rc);
																														$rc = str_replace('%SELF_URL%', $jtjCCajYHG, $rc);
																														if($RE2NBjXGr8wieC)
																														IIcbczWAX09NsrG($RE2NBjXGr8wieC, $rc);
																														else
																														$QUhELgJiWhN7ABdVJx[] = $gzkKVwfuY95v65UABBM;
																														}
																														if($sm_proc_list)
																														foreach($sm_proc_list as $k=>$Kw78M62lrI5rS)
																														$sm_proc_list[$k]->qNh0L3Iqq4xOGQ($this->tVFpNKyjE, $this->MDb4AagIsVSS6R, $this->IWtz4OHU9nJuUB4Ty);
																														if($this->tVFpNKyjE['xs_write_delay'])
																														list($wjX5uaTwf5NEglz1aoT, $Kd9n5bwrnd17vZn9U) = explode('|',$this->tVFpNKyjE['xs_write_delay']);
																														for($i=$xn=$tuhOqyefnq6RVW;$i<count($urls_completed);$i++,$xn++)
																														{   
																														
																														
																														
																														if($i%100 == 0) {
																														MMwXOhanJ6q();
																														DFJUj5XaZVoZf(" / $i / ".(time()-$_tm));
																														$_tm=time();
																														}
																														NgBWwllTme(array(
																														'cmd'=> 'info',
																														'id' => 'percprog',
																														'text'=> number_format($i*100/count($urls_completed),0).'%'
																														));
																														$FVrvczhkoCdSfmCKoGm = $this->DUZrQcBoQ();
																														if($FVrvczhkoCdSfmCKoGm && ($i != $tuhOqyefnq6RVW))
																														{
																														wNuDcYNWIWQ($KjGb5UkXhbELCFSf,K8zTIUVnwPDUDC(array('istart'=>$i,'rinfo'=>$this->CwXiXrAyEeYut8w6P)));
																														}
																														if($this->tVFpNKyjE['xs_memsave'])
																														{
																														$cu = g9mWWYIteSa7dD7($urls_completed[$i]);
																														}else
																														$cu = $urls_completed[$i];
																														if(!is_array($cu)) $cu = @unserialize($cu);
																														$l = $this->J0guAv8GXYn6AN38fxM($cu['link']);
																														$cu['link'] = $l;
																														$t = $this->wR70CK76khtA4O6VZ4I($cu['t'], true);
																														$d = $this->wR70CK76khtA4O6VZ4I($cu['d'] ? $cu['d'] : $cu['t'], true);
																														$TpQN9kkrncje4u = '';
																														if($cu['clm'])
																														$TpQN9kkrncje4u = $cu['clm'];
																														else
																														switch($this->tVFpNKyjE['xs_lastmod']){
																														case 1:$TpQN9kkrncje4u = $cu['lm']?$cu['lm']:$ctime;break;
																														case 2:$TpQN9kkrncje4u = $ctime;break;
																														case 3:$TpQN9kkrncje4u = $this->tVFpNKyjE['xs_lastmodtime'];break;
																														}
																														$jDyVj7CkPgy = $NflWkBeP1J4N8 = false;
																														if($cu['p'])
																														$p = $cu['p'];
																														else
																														{
																														$p = $this->tVFpNKyjE['xs_priority'];
																														if($this->tVFpNKyjE['xs_autopriority'])
																														{
																														$p = $p*pow($this->tVFpNKyjE['xs_descpriority']?$this->tVFpNKyjE['xs_descpriority']:0.8,$cu['o']);
																														if($this->t3jvxqdXKF32_lYX)
																														{
																														$jDyVj7CkPgy = true;
																														$NflWkBeP1J4N8 = ($this->t3jvxqdXKF32_lYX&&!isset($this->t3jvxqdXKF32_lYX[$cu['link']]))||$this->OjKgKXqLBpye8PNTf[$cu['link']];
																														if($NflWkBeP1J4N8)
																														$p=0.95;
																														}
																														$p = max(0.0001,min($p,1.0));
																														$p = @number_format($p, 4);
																														}
																														}
																														if($TpQN9kkrncje4u){
																														$TpQN9kkrncje4u = strtotime($TpQN9kkrncje4u);
																														$TpQN9kkrncje4u = gmdate('Y-m-d\TH:i:s+00:00',$TpQN9kkrncje4u);
																														}
																														$f = $cu['f']?$cu['f']:$this->tVFpNKyjE['xs_freq'];
																														$Zl5g2LLgy3 = array(
																														'URL'=>$l,
																														'TITLE'=>$t,
																														'DESC'=>($d),
																														'PERIOD'=>$f,
																														'LASTMOD'=>$TpQN9kkrncje4u,
																														'ORDER'=>$cu['o'],
																														'PRIORITY'=>$p
																														);
																														if($this->tVFpNKyjE['xs_makemob'])
																														{
																														if(!$this->tVFpNKyjE['xs_mobileincmask'] ||
																														preg_match('#'.str_replace(' ', '|', preg_quote($this->tVFpNKyjE['xs_mobileincmask'],'#')).'#',$Zl5g2LLgy3['URL']))
																														$this->sG53YQ0A72(array_merge($Zl5g2LLgy3, array('ismob'=>true)), $fLu000jqfwiRF[2], 4);
																														}
																														
																														
																														$this->sG53YQ0A72($Zl5g2LLgy3, $fLu000jqfwiRF[2], 0);
																														$xz = 'img';
																														if($cu['i'])
																														{
																														foreach($cu['i'] as $im)
																														$Zl5g2LLgy3['imgs'][] = array(
																														'iurl'=>$this->J0guAv8GXYn6AN38fxM($im[0]), 
																														'caption'=>$this->wR70CK76khtA4O6VZ4I($im[1], true)
																														);
																														if($Zl5g2LLgy3['imgs'])
																														{
																														$this->imgno+=count($Zl5g2LLgy3['imgs']);
																														$this->sG53YQ0A72($Zl5g2LLgy3, $fLu000jqfwiRF[2], 1);
																														}
																														unset($Zl5g2LLgy3['imgs']);
																														}
																														$xz = '/img';
																														
																														if($this->tVFpNKyjE['xs_maketxt'] && $G4wt55ykw)
																														$this->MDb4AagIsVSS6R['fwrite']($G4wt55ykw, $cu['link']."\n");
																														if($sm_proc_list)
																														foreach($sm_proc_list as $Kw78M62lrI5rS)
																														$Kw78M62lrI5rS->cELF4rAmlQsI9AR($Zl5g2LLgy3);
																														if($this->tVFpNKyjE['xs_makeror'] && $GV2TmewNt76_x8ps){
																														if($this->tVFpNKyjE['xs_ror_unique']){
																														$t=$Zl5g2LLgy3['TITLE'];
																														$d=$Zl5g2LLgy3['DESC'];
																														while($lYg1fh6INMq=$ai[md5('t'.$t)]++){
																														$t=$Zl5g2LLgy3['TITLE'].' '.$lYg1fh6INMq;
																														}
																														while($lYg1fh6INMq=$ai[md5('d'.$d)]++){
																														$d=$Zl5g2LLgy3['DESC'].' '.$lYg1fh6INMq;
																														}
																														$Zl5g2LLgy3['TITLE']=$t;
																														$Zl5g2LLgy3['DESC']=$d;
																														}
																														IIcbczWAX09NsrG($GV2TmewNt76_x8ps, $this->IWtz4OHU9nJuUB4Ty->HlywPDappbdYVU($hO51Bt8OlK97trb[2],$Zl5g2LLgy3));
																														}
																														if($rH_wj_Dzr) {
																														if(!isset($this->t3jvxqdXKF32_lYX[$cu['link']]) && 
																														count($this->M0eXwBBaSXRKO6V)<$this->K4Tnhoz82FUfgCa)
																														$this->M0eXwBBaSXRKO6V[$cu['link']]++;
																														}
																														unset($this->t3jvxqdXKF32_lYX[$cu['link']]);
																														}
																														$this->RvGpMMUREL77();
																														if($this->tVFpNKyjE['xs_maketxt'])
																														{
																														$this->MDb4AagIsVSS6R['fclose']($G4wt55ykw);
																														@chmod(JFo3FYeR4sjMvbCM7lu.$this->ZrR3YZKDY, 0666);
																														}
																														if($this->tVFpNKyjE['xs_makeror'])
																														{
																														if($GV2TmewNt76_x8ps)
																														IIcbczWAX09NsrG($GV2TmewNt76_x8ps, $hO51Bt8OlK97trb[3]);
																														fclose($GV2TmewNt76_x8ps);
																														}
																														if($this->tVFpNKyjE['xs_rssinfo'])
																														{
																														if($RE2NBjXGr8wieC)
																														IIcbczWAX09NsrG($RE2NBjXGr8wieC, $ZGwCfLqLsyvm[3]);
																														fclose($RE2NBjXGr8wieC);
																														$this->mv3YztXmDFiT($this->tVFpNKyjE['xs_rssfilename']);
																														}
																														if($sm_proc_list)
																														foreach($sm_proc_list as $Kw78M62lrI5rS)
																														$Kw78M62lrI5rS->UVtSAwQYOsEzzCeKfY();
																														wNuDcYNWIWQ($KjGb5UkXhbELCFSf,K8zTIUVnwPDUDC(array('done'=>true)));
																														NgBWwllTme(array('cmd'=> 'info','id' => 'percprog',''));
																														}
																														function RdLUQ0sfh1B3DH($e41bNXY4dnuYSD)
																														{
																														for($i=0;file_exists($sf=eYgPj3ZHK0T12hAy.T_IVB6tYAThxWS($i,$e41bNXY4dnuYSD).$this->ZrR3YZKDY);$i++){
																														tV12hsJy_($sf);
																														}
																														}
																														function C79HmoYonnik($Gc2nlIgGoyc5qc, $B3HB6KxX6W)
																														{
																														global $QUhELgJiWhN7ABdVJx;
																														if(!@copy($Gc2nlIgGoyc5qc,$B3HB6KxX6W))
																														{
																														if($this->tVFpNKyjE['xs_filewmove'] && file_exists($B3HB6KxX6W) ){
																														tV12hsJy_($B3HB6KxX6W);
																														}
																														if($cn = @Hqm42kdaBr($B3HB6KxX6W, 'w')){
																														@IIcbczWAX09NsrG($cn, file_get_contents($Gc2nlIgGoyc5qc));
																														@fclose($cn);
																														}else
																														if(file_exists($Gc2nlIgGoyc5qc))
																														{
																														$QUhELgJiWhN7ABdVJx[] = $B3HB6KxX6W;
																														}
																														}
																														
																														@chmod($Gc2nlIgGoyc5qc, 0666);
																														}
																														function mv3YztXmDFiT($e41bNXY4dnuYSD)
																														{
																														$gp = ($this->tVFpNKyjE['xs_compress']==2) ? '.gz' : '';
																														for($i=0;file_exists(eYgPj3ZHK0T12hAy.($sf=T_IVB6tYAThxWS($i,$e41bNXY4dnuYSD).$this->ZrR3YZKDY));$i++){
																														$this->C79HmoYonnik(eYgPj3ZHK0T12hAy.$sf,$this->furl_p.$sf);
																														if($gp) {
																														$cn = file_get_contents(eYgPj3ZHK0T12hAy.$sf);
																														if(strstr($cn, '<sitemapindex'))
																														$cn = str_replace('.xml</loc>', '.xml.gz</loc>', $cn);
																														wNuDcYNWIWQ(eYgPj3ZHK0T12hAy.$sf, $cn, '', true);
																														$this->C79HmoYonnik(eYgPj3ZHK0T12hAy.$sf.$gp,$this->furl_p.$sf.$gp);
																														}
																														}
																														}
																														function p3RMgGPJdKj($e41bNXY4dnuYSD, $C629L4qvNEC = -1, $oeRk87tdBad = '', $sSxD4RNwg = 0)
																														{
																														$cn = '';
																														$_fold = (strstr($e41bNXY4dnuYSD,'/')||strstr($e41bNXY4dnuYSD,'\\')) ? '' : eYgPj3ZHK0T12hAy ;
																														$_fapp = ($sSxD4RNwg ?  '' : $this->ZrR3YZKDY);
																														for($i=0;file_exists($sf=$_fold.T_IVB6tYAThxWS($i,$e41bNXY4dnuYSD).$_fapp);$i++)
																														{
																														
																														if(@filesize($sf)<100000000)// 100MB max
																														$cn .= $_fapp?implode('',gzfile($sf)):a_swOP2hskJvhpi2o($sf);
																														if($i>200)break;
																														}
																														$pez0n43nSLB = array(
																														array('loc', 'news:publication_date', 'priority'),
																														array('link', 'pubDate', ''),
																														);
																														$mt = $pez0n43nSLB[$sSxD4RNwg];
																														preg_match_all('#<'.$mt[0].'>(.*?)</'.$mt[0].'>'.
																														(($C629L4qvNEC>=0) ? '.*?<'.$mt[1].'>(.*?)</'.$mt[1].'>' : '').
																														(($oeRk87tdBad && $mt[2])? '.*?<'.$mt[2].'>(.*?)</'.$mt[2].'>' : '').
																														'#is',$cn,$um);
																														$al = array();
																														foreach($um[1] as $i=>$l)
																														{             
																														if($oeRk87tdBad){
																														if(!strstr($l, $oeRk87tdBad))
																														continue;
																														$l = substr($l, strlen($oeRk87tdBad));
																														}
																														if(!$l)continue;
																														if($C629L4qvNEC<=0) {
																														if($um[2][$i])
																														$al[$l] = $um[2][$i];
																														else
																														$al[$l]++;
																														}
																														else
																														if(time()-strtotime($um[2][$i])<=$C629L4qvNEC*24*3600)
																														$al[$l] = $um[2][$i];
																														}
																														return $al;
																														}
																														}
																														global $QYWCGBQX7GggVu4;
																														$QYWCGBQX7GggVu4 = new XMLCreator();
																														}
																														



































































































