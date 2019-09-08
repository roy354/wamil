<?php

$data = file_get_contents("data.html");
preg_match_all('<input type="hidden" name="_csrfToken" autocomplete="off" value="(.*)" \/>', $data, $p);
preg_match_all('/<input type="hidden" name="ad_form_data" value="(.*)" \/>/', $data, $oke);
preg_match_all('/<input type="hidden" name="_Token\[fields\]" autocomplete="off" value="(.*)" \/><input type="/', $data, $token);
//echo print_r($token);
//$kode = array("nama"=>"nama","kode"=>"kode");
preg_match_all('/<input type="hidden" name="_Token\[unlocked\]" autocomplete="off" value="(.*)" \/>/', $data, $token2);
$q = array('_method'=>"POST","_csrfToken"=>$p[1][0],"ad_form_data"=>$oke[1][0],'_Token[fields]'=>$token[1][0],'_Token[unlocked]'=>$token2[1][0]);
$qj = http_build_query($q);
echo $qj;