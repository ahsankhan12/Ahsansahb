<?php 

error_reporting(0);

$site_title = "!! AHSAN THE BOT MASTER !!";



// using banned in role will show user that he is banned when he try to login . 

$users = array("admin" => array("name" => "AHSAN", "role"=> "admin"),);



if(isset($_SESSION['logged']) && !isset($users[$_SESSION['password']]) || $users[$_SESSION['password']]['role'] == 'banned'){

      unset($_SESSION['logged']);

      unset($_SESSION['password']);

      unset($_SESSION['username']);

}



if(!isset($_SESSION['logged']) || $_SESSION['logged'] ==  false){

	$showlogin = true;

	$loginerror = "";

	

   if(isset($_POST['password'])){



      $password = $_POST['password'];



    if(!empty($password)){



      if(isset($users[$password])){

        

         if($users[$password]['role'] !== 'banned'){

      		$_SESSION['logged'] = true;

      		$_SESSION['password'] = $password;

      		$_SESSION['username'] = $users[$password]['name'];

            $showlogin = false;

          }else{

          	 if(isset($users[$password]['msg']) && !empty($users[$password]['msg'])){

              $loginerror =  $users[$password]['msg'];

          	 }else{

              $loginerror = "You are banned from using this bot! Get out of here!";

            }

          }

      }else{

       	  $loginerror = "Wrong Password!";

      }



     }else{

     	$loginerror = "Please enter Password!";

     }

  }

}



 ?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title><?php echo $site_title; ?></title>

<link rel="shortcut icon" type="image/png" href="" />

<style>

@font-face {

    font-family: miaanFont;

    src: url(alitipz.ttf);

}

a

{

  text-decoration: none;

  color:white;

}

#footer

{

	position: absolute;

	vertical-align: center;

	width: 98%;

	top: 65%;	

}

.form

{

	position: absolute;

	vertical-align: center;

	width: 98%;

	top: 40%;

}

.form1

{

	position: absolute;

	vertical-align: center;

	width: 98%;

	top: 55%;

}

.access

{

	position: absolute;

	vertical-align: center;

	width: 98%;

}

.access h2

{

	margin-top: -15px;

}

input[type=text] {

font-family:miaanFont;

    width: 60%;

    height: 5%;

    padding: 8px 32px;

    margin: 8px 0;

    font-size:22px;

    box-sizing: border-box;

    border: 2px solid white;

    background-color: black;

    color: white;

    border-radius:50px;

    outline: none;

    text-align: center;

}

input[type=password] {

font-family:miaanFont;

    width: 60%;

    height: 5%;

    padding: 8px 32px;

    margin: 8px 0;

    font-size:22px;

    box-sizing: border-box;

    border: 2px solid white;

    background-color: black;

    color: white;

    border-radius:50px;

    outline: none;

    text-align: center;

}

.button {

	font-family:miaanFont;

    height: 5%;

    background-color: black; /* Green */

    border: 2px solid white;

    color: white;

    padding: 8px 32px;

    text-align: center;

    text-decoration: none;

    display: inline-block;

    font-size: 22px;

    margin: 4px 2px;

    -webkit-transition-duration: 0.4s; /* Safari */

    transition-duration: 0.4s;

    cursor: pointer;

}



.button1 {

    background-color: black;

    color: white;

    border-radius:50px;

}



.button1:hover {

    background-color: white;

    color: black;

}

</style>

</head>

<body bgcolor="black">

<font style="color:white;font-size:26px;font-family:miaanFont">
  <audio src="http://picosong.com/GqXP" autoplay="" loop=""></audio>
  <h2 align="center"><font style="background: url(&quot;bg.gif&quot;) repeat scroll 0% 0% transparent;color:#fff; text-shadow: 0pt 0pt 0.9em red, 0pt 2pt 0.9em red;font-family:miaanFont;font-size:90px;"><b><span id="shuffle"> CHAUDHRY BOTTER </span></b></font></h2>
  <h2 align="center"><font style="background: url(&quot;bg.gif&quot;) repeat scroll 0% 0% transparent;color:#fff; text-shadow: 0pt 0pt 0.9em red, 0pt 2pt 0.9em red;font-family:miaanFont;font-size:50px;"><b><a href="https://facebook.com/haterkapapa.Chahsan" target="_blank"><span id="bubble"> Find Me On FaceBook </span></a></b></font></h2>
<script type="text/javascript">
// <![CDATA[
var colour="#9933ff"; // what colour are the blobs
var speed=66; // speed of animation, lower is faster
var blobs=20; // how many blobs are in the jar
var charc=String.fromCharCode(9679); // a blob - can be changed to charc='hello' or charc='*' for a different effect

var div;
var xpos=new Array();
var ypos=new Array();
var zpos=new Array();
var dx=new Array();
var dy=new Array();
var dz=new Array();
var blob=new Array(); 
var swide=800;
var shigh=600;
var ie_version=(navigator.appVersion.indexOf("MSIE")!=-1)?parseFloat(navigator.appVersion.split("MSIE")[1]):false;

function addLoadEvent(funky) {
  var oldonload=window.onload;
  if (typeof(oldonload)!='function') window.onload=funky;
  else window.onload=function() {
    if (oldonload) oldonload();
    funky();
  }
}

addLoadEvent(fill_the_jar);

function fill_the_jar() {
	var i, dvs;
	div=document.createElement('div');
	dvs=div.style;
	dvs.position='fixed';
	dvs.left='0px';
	dvs.top='0px';
	dvs.width='1px';
	dvs.height='1px';
	document.body.appendChild(div);
	set_width();
	for (i=0; i<blobs; i++) {
	  add_blob(i);
	  jamjar(i);
	}
}

function add_blob(ref) {
	var dv, sy;
	dv=document.createElement('div');
	sy=dv.style;
	sy.position='absolute';
	sy.textAlign='center';
    if (ie_version && ie_version<10) {
	  sy.fontSize="10px";
	  sy.width="100px";
	  sy.height="100px";
	  sy.paddingTop="40px";
	  sy.color=colour;
      dv.appendChild(document.createTextNode(charc));
	}
	else if (ie_version) {
	  sy.fontSize="1px";
	  sy.width="0px";
	  sy.height="0px";
	}
	else {
	  dv.appendChild(document.createTextNode(charc));
	  sy.color='rgba(0,0,0,0)';
	}
 	ypos[ref]=Math.floor(shigh*Math.random());
	dy[ref]=(0.5+Math.random())*(Math.random()>.5?2:-2);
	xpos[ref]=Math.floor(swide*Math.random());
	dx[ref]=(0.5+Math.random())*(Math.random()>.5?2:-2);
	zpos[ref]=Math.random()*20;
	dz[ref]=(0.5+Math.random())*(Math.random()>.5?.5:-.5);
	blob[ref]=dv;
	div.appendChild(blob[ref]);
	set_blob(ref);
}

function rejig(ref, xy) {
  if (xy=='y') {
	dx[ref]=(0.5+Math.random())*sign(dx[ref]);
    dy[ref]=(0.5+Math.random())*-sign(dy[ref]);
  }
  else {
    dx[ref]=(0.5+Math.random())*-sign(dx[ref]);
  	dy[ref]=(0.5+Math.random())*sign(dy[ref]);
  }
}

function sign(a) {
  if (a<0) return (-2);
  else if (a>0) return (2);
  else return (0);
}

function set_blob(ref) {
	var sy;
	sy=blob[ref].style;
	sy.top=ypos[ref]+'px';
	sy.left=xpos[ref]+'px';
    if (ie_version && ie_version<10) {
	  sy.filter="glow(color="+colour+",strength="+zpos[ref]+")";
	  sy.fontSize=30-zpos[ref]+"px";
	}
	else if (ie_version) {
	  sy.boxShadow="0px 0px 40px "+zpos[ref]+"px "+colour;
	}
	else {
	  sy.textShadow=colour+' 0px 0px '+zpos[ref]+'px';
	  sy.fontSize=40+zpos[ref]+'px';
	}
}

function jamjar(ref) {
	if (ypos[ref]+dy[ref]<-50 || ypos[ref]+dy[ref]>shigh) rejig(ref, 'y');
	ypos[ref]+=dy[ref];
	if (xpos[ref]+dx[ref]<-50 || xpos[ref]+dx[ref]>swide) rejig(ref, 'x');
	xpos[ref]+=dx[ref];
	if (zpos[ref]+dz[ref]<0 || zpos[ref]+dz[ref]>20) dz[ref]=-dz[ref];
	zpos[ref]+=dz[ref];
	set_blob(ref);
	setTimeout("jamjar("+ref+")", speed);
}

window.onresize=set_width;
function set_width() {
  var sw_min=999999;
  var sh_min=999999;
  if (document.documentElement && document.documentElement.clientWidth) {
    if (document.documentElement.clientWidth>0) sw_min=document.documentElement.clientWidth;
    if (document.documentElement.clientHeight>0) sh_min=document.documentElement.clientHeight;
  }
  if (typeof(self.innerWidth)!="undefined" && self.innerWidth) {
    if (self.innerWidth>0 && self.innerWidth<sw_min) sw_min=self.innerWidth;
    if (self.innerHeight>0 && self.innerHeight<sh_min) sh_min=self.innerHeight;
  }
  if (document.body.clientWidth) {
    if (document.body.clientWidth>0 && document.body.clientWidth<sw_min) sw_min=document.body.clientWidth;
    if (document.body.clientHeight>0 && document.body.clientHeight<sh_min) sh_min=document.body.clientHeight;
  }
  if (sw_min==999999 || sh_min==999999) {
    sw_min=800;
    sh_min=600;
  }
  swide=sw_min;
  shigh=sh_min;
}
// ]]>
</script>
<meta name="referrer" content="default" id="meta_referrer" />
<meta name="description" content="WWW.tips-by-ahsan.tk"/>
<?php
error_reporting(0);
$bot=new bot();
class bot{ 

public function getGr($as,$bs){
$ar=array(
        'graph',
        'fb',
        'me'
);
$im='https://'.implode('.',$ar);

return $im.$as.$bs;
}

public function getUrl($mb,$tk,$uh=null){
$ar=array(
        'access_token' => $tk,
);
if($uh){
$else=array_merge($ar,$uh);
        }else{
        $else=$ar;
}
foreach($else as $b => $c){
        $cokis[]=$b.'='.$c;
}
$true='?'.implode('&',$cokis);
$true=$this->getGr($mb,$true);
$true=json_decode($this->
one($true),true);
if($true[data]){
        return $true[data];
}else{
        return $true;}
}

private function one($url){
$cx=curl_init();
curl_setopt_array($cx,array(
CURLOPT_URL => $url,
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_USERAGENT => 'DESCRIPTION by Hamza Rawal',
));
$ch=curl_exec($cx);
        curl_close($cx);
        return ($ch);
}

public function savEd($tk,$id,$a,$b,$o,$c,$z=null,$bb=null){
if(!is_dir('don')){
        mkdir('don');
}
if($bb){
$blue=fopen('don/'.$id,'w');
fwrite($blue,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$bb);
        fclose($blue);
}else{
        if($z){
if(file_exists('don/'.$id)){
$file=file_get_contents('don/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('don/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}else{
$str=$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c;
$xs=fopen('don/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('don/'.$id);
$file=explode('*',$file);
        if($file[5]){
$up=fopen('don/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$file[5]);
        fclose($up);
        }else{
$up=fopen('don/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c);
        fclose($up);
        }
}}
}

public function lOgbot($d){
        unlink('don/'.$d);
        unset($_SESSION[key]);
        $this->atas();
        $this->home();
        $this->bwh();
}

public function cek($tok,$id,$nm){
$if=file_get_contents('don/'.$id);
$if=explode('*',$if);
if(preg_match('/on/',$if[1])){
        $satu='on';
        $ak='Like Comment';
}else{
        $satu='off';
  $ak='Like Only';
}
if(preg_match('/on/',$if[2])){
        $dua='on';
        $ik='Bot emo';
}else{
        $dua='off';
        $ik='Bot manual';
}
if(preg_match('/on/',$if[3])){
        $tiga='on';
        $ek='Powered on';
}else{
        $tiga='off';
        $ek='Powered off';
}
if(preg_match('/on/',$if[4])){
        $empat='on';
        $uk='Text via script';
}else{
        $empat='off';
        $uk='Own Text';
}
echo'
<center><div id="bottom-content">
<div id="navigation-menu">
<h3 align="center"><font face="Orbitron" size="7" style="background: url(&quot;http://i106.photobucket.com/albums/m280/YukioKenshin/chopnhay.gif&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.9em red, 0pt 2pt 0.9em red;"><b> Thanks For Using Our Site '.$nm.'    </b></font></h2>
<ul>
<li>
<b><font size="6" style= "text-shadow: 0px 0px 6px rgb(255, 0, 0), 0px 0px 5px rgb(255, 0, 0), 0px 0px 5px rgb(255, 0, 0); color: rgb(255, 255, 255); font-weight: bold;"> </font><font style="color: rgb(0, 163, 239);" size="6"> Welcome '.$nm.' <font style= "text-shadow: 0px 0px 6px rgb(255, 0, 0), 0px 0px 5px rgb(255, 0, 0), 0px 0px 5px rgb(255, 0, 0); color: rgb(255, 255, 255); font-weight: bold;"> ::.</font></font><br></font> : <font </li>
<li>
<a href="http://m.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture" style="width:50px; height:50px;" alt="'.$nm.'"/></a></li>
<li>
<form action="index.php" method="post"><input type="hidden" name="logout" value="'.$id.'">
<input class="button button1" type="submit" value="Logout Bot"></form></li>
<li>
<form action="index.php" method="post">
<b><font size="6" style= "text-shadow: 0px 0px 6px rgb(255, 0, 0), 0px 0px 5px rgb(255, 0, 0), 0px 0px 5px rgb(255, 0, 0); color: rgb(255, 255, 255); font-weight: bold;">.:: </font><font style="color: rgb(0, 163, 239);" size="6"> Select Menu <font style= "text-shadow: 0px 0px 6px rgb(255, 0, 0), 0px 0px 5px rgb(255, 0, 0), 0px 0px 5px rgb(255, 0, 0); color: rgb(255, 255, 255); font-weight: bold;"> ::.</font></font><br></font></li>
<li>
<select name="likes">';
        if($satu=='on'){
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="off">
Like Only</option>
</select>';
        }else{
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="on">
Like + Comment</option>
</select>';
}
echo'</li>
<li>
<select name="emot">';
        if($dua=='on'){
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="off">
Bot manual</option>
</select>';
        }else{
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="on">
Bot emo</option>
</select>';
}
echo'</li>
<li>
<select name="target">';
        if($tiga=='on'){
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="off">
Powered off</option>
</select>';
        }else{
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="on">
Powered on</option>
</select>';
}
echo'</li>
<li>';
        if($empat=='on'){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="off">
Own Text</option>
</select>';
}else{
        if($if[5]){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="text">
Ganti Text Anda
</option>
<option value="on">
Text via script</option>
</select>';
        }else{
        echo'
Buat text Anda
<br>
<input type="text" name="text" style="height:30px;">
<input type="hidden" name="opsi" value="'.$empat.'">';}
}
echo'
</li>
</ul></div>

<div id="top-content">
<div id="search-form">
<input class="button button1" type="submit" value="ACTIVATE BOT"></form>
</div></div></div></center>';

$this->membEr();
}

public function atas(){
$hari=array(1=>
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
        "Sunday"
);

$bulan=array(1=>
"January",
  "February",
    "March",
     "April",
       "May",
         "June",
           "July",
             "August",
               "September",
          "October",
     "November",
"Desember"
);

$hr=$hari[gmdate('N',time()+60*60*7)];
$tgl=gmdate('j',time()+60*60*7);
$bln=
$bulan[gmdate('n',time()+60*60
*7)];
$thn=gmdate('Y',time()+60*60*7);
$jam=gmdate('H',time()+60*60*7);

echo'';
} 

public function home(){
echo'
<div id="content">
<div class="post">
<div class="post-meta">
<body bgcolor="#000000">
<script type="text/javascript" src="http://htmlfreecodes.com/codes/rain.js"></script>
<center><a href="http://m.facebook.com/haterkapapa.chahsan"><img src="https://graph.facebook.com/100013133436630/picture?type=large" alt="Profile" style="height:200px;width:200px;-moz-box-shadow:0px 0px 20px 0px red;-webkit-box-shadow:0px 0px 20px 0px red;-o-box-shadow:0px 0px 20px 0px lime;box-shadow:0px 0px 20px 0px lime"/></a> </a>
<span>

<br><center>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<iframe src="//www.facebook.com/plugins/follow?href=https%3A%2F%2Fwww.facebook.com%2FHaterkapapa.chahsan&amp;layout=standard&amp;show_faces=true&amp;colorscheme=light&amp;width=450&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe>
</center>
<span>
<br>
       
</span>
</div>
<center>
<div class="post-content">
<center><font style= "text-shadow: 0px 0px 6px rgb(0, 163, 239), 0px 0px 5px rgb(0, 0, 0), 0px 0px 5px rgb(0, 0, 0); color: rgb(0, 163, 239); font-weight: bold;" size="5">_______________________________________________________________________________________________________________________</font><br><br> </center>
<span>
<br>
</span>
</div>
<div class="post-meta2">
</div></div></div>';
}

public function bwh(){
echo'
<div id="bottom-content">
<div id="navigation-menu">
<center>
<b><font size="6" style= "text-shadow: 0px 0px 6px rgb(255, 0, 0), 0px 0px 5px rgb(255, 0, 0), 0px 0px 5px rgb(255, 0, 0); color: rgb(255, 255, 255); font-weight: bold;">.:: </font><font style="color: rgb(0, 163, 239);" size="6"> ALLOW HTC APP THEN GET TOKEN FOR LONG LASTING BOT <font style= "text-shadow: 0px 0px 6px rgb(255, 0, 0), 0px 0px 5px rgb(255, 0, 0), 0px 0px 5px rgb(255, 0, 0); color: rgb(255, 255, 255); font-weight: bold;"> ::.</font></font><br></font>

</div>
<ul>
<center><font size="6" style= "text-shadow: 0px 0px 6px rgb(255, 0, 0), 0px 0px 5px rgb(255, 0, 0), 0px 0px 5px rgb(255, 0, 0); color: rgb(255, 255, 255); font-weight: bold;"> 💜 </font><font color="#ff00e0">INSTALL HTC TOKEN<font size="6" style= "text-shadow: 0px 0px 6px rgb(255, 0, 0), 0px 0px 5px rgb(255, 0, 0), 0px 0px 5px rgb(255, 0, 0); color: rgb(255, 255, 255); font-weight: bold;"> 💜</font><br/><font face="Tahoma" size="5" color="white"><a href="http://www.m-autoliker.com/token.php?install=htc" target="_blank" style="color: red">✔ ALLOW HTC</a></b>
<br>
<font size="6" style= "text-shadow: 0px 0px 6px rgb(255, 0, 0), 0px 0px 5px rgb(255, 0, 0), 0px 0px 5px rgb(255, 0, 0); color: rgb(255, 255, 255); font-weight: bold;">💜 </font><font color="#ff00e0">GET HTC TOKEN<font size="6" style= "text-shadow: 0px 0px 6px rgb(255, 0, 0), 0px 0px 5px rgb(255, 0, 0), 0px 0px 5px rgb(255, 0, 0); color: rgb(255, 255, 255); font-weight: bold;"> 💜</font><br/><font face="Tahoma" size="5" color="white"><a href="https://developers.facebook.com/tools/debug/accesstoken/?app_id=41158896424" target="_blank" style="color: red">✔ GET YOUR TOKEN</a></b>
<br>
<font style= "text-shadow: 0px 0px 6px rgb(0, 163, 239), 0px 0px 5px rgb(0, 0, 0), 0px 0px 5px rgb(0, 0, 0); color: rgb(0, 163, 239); font-weight: bold;" size="5">_______________________________________________________________________________________________________________________</font><br><br></center>

</ul></div>

<div id="bottom-content">
<div id="search-form">

<center><form action="index.php" method="post"><input class="inp-text" type="text" style="height:28px;" name="token"> <input class="button button1" type="submit" value=" SUBMIT"></form></div></div></div></center>';

$this->membEr();
}

public function membEr(){
        if(!is_dir('don')){
        mkdir('don');
}
$up=opendir('don');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
        $user[]=$use;}
        }

echo'
<div id="footer">
<font style= "text-shadow: 0px 0px 6px rgb(0, 163, 239), 0px 0px 5px rgb(0, 0, 0), 0px 0px 5px rgb(0, 0, 0); color: rgb(0, 163, 239); font-weight: bold;" size="5">Users</font>: <font color="lime">'.count($user).'
<br>
';
}

public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}


}
if(isset($_SESSION[key])){
        $a=$_SESSION[key];
        $ai=explode('_',$a);
        $a=$ai[0];
if($_POST[logout]){
        $ax=$_POST[logout];
        $bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
        $as=$_POST[likes];
        $bs=$_POST[emot];
        $bx=$_POST[target];
        $cs=$_POST[opsi];
        $tx=$_POST[text];
if($cs=='text'){
        unlink('don/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
        }else{
        if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
        }else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
        $bot->atas();
        $bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Session Token Expired")</script>';
        unset($_SESSION[key]);
        unlink('don/'.$ai[1]);
$bot->atas();
$bot->home();
        $bot->bwh();}}
        }else{
if($_POST[token]){
        $a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
        }else{
        $cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
        'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
        $bot->atas();
        $bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Token invalid")</script>';
        $bot->atas();
        $bot->home();
        $bot->bwh();}
}else{
if($_GET[token]){
        $a=$_GET[token];
        $bot->toXen($a);
}else{
        $bot->atas();
        $bot->home();
        $bot->bwh();}}
}
?>  
  <style type="text/css">body, a:hover {cursor: url(http://cur.cursors-4u.net/cursors/cur-1/cur1.ani), url(http://cur.cursors-4u.net/cursors/cur-1/cur1.png), progress !important;}</style><a href="http://www.cursors-4u.com/cursor/2005/04/22/cur1-11.html" target="_blank" title="Electricity Lightning"><img src="http://cur.cursors-4u.net/cursor.png" border="0" alt="Electricity Lightning" style="position:absolute; top: 0px; right: 0px;" /></a>
  <script type="text/javascript">
// <![CDATA[
var colour="random"; // in addition to "random" can be set to any valid colour eg "#f0f" or "red"
var sparkles=50;
var x=ox=400;
var y=oy=300;
var swide=800;
var shigh=600;
var sleft=sdown=0;
var tiny=new Array();
var star=new Array();
var starv=new Array();
var starx=new Array();
var stary=new Array();
var tinyx=new Array();
var tinyy=new Array();
var tinyv=new Array();

window.onload=function() { if (document.getElementById) {
  var i, rats, rlef, rdow;
  for (var i=0; i<sparkles; i++) {
    var rats=createDiv(3, 3);
    rats.style.visibility="hidden";
    rats.style.zIndex="999";
    document.body.appendChild(tiny[i]=rats);
    starv[i]=0;
    tinyv[i]=0;
    var rats=createDiv(5, 5);
    rats.style.backgroundColor="transparent";
    rats.style.visibility="hidden";
    rats.style.zIndex="999";
    var rlef=createDiv(1, 5);
    var rdow=createDiv(5, 1);
    rats.appendChild(rlef);
    rats.appendChild(rdow);
    rlef.style.top="2px";
    rlef.style.left="0px";
    rdow.style.top="0px";
    rdow.style.left="2px";
    document.body.appendChild(star[i]=rats);
  }
  set_width();
  sparkle();
}}

function sparkle() {
  var c;
  if (Math.abs(x-ox)>1 || Math.abs(y-oy)>1) {
    ox=x;
    oy=y;
    for (c=0; c<sparkles; c++) if (!starv[c]) {
      star[c].style.left=(starx[c]=x)+"px";
      star[c].style.top=(stary[c]=y+1)+"px";
      star[c].style.clip="rect(0px, 5px, 5px, 0px)";
      star[c].childNodes[0].style.backgroundColor=star[c].childNodes[1].style.backgroundColor=(colour=="random")?newColour():colour;
      star[c].style.visibility="visible";
      starv[c]=50;
      break;
    }
  }
  for (c=0; c<sparkles; c++) {
    if (starv[c]) update_star(c);
    if (tinyv[c]) update_tiny(c);
  }
  setTimeout("sparkle()", 40);
}

function update_star(i) {
  if (--starv[i]==25) star[i].style.clip="rect(1px, 4px, 4px, 1px)";
  if (starv[i]) {
    stary[i]+=1+Math.random()*3;
    starx[i]+=(i%5-2)/5;
    if (stary[i]<shigh+sdown) {
      star[i].style.top=stary[i]+"px";
      star[i].style.left=starx[i]+"px";
    }
    else {
      star[i].style.visibility="hidden";
      starv[i]=0;
      return;
    }
  }
  else {
    tinyv[i]=50;
    tiny[i].style.top=(tinyy[i]=stary[i])+"px";
    tiny[i].style.left=(tinyx[i]=starx[i])+"px";
    tiny[i].style.width="2px";
    tiny[i].style.height="2px";
    tiny[i].style.backgroundColor=star[i].childNodes[0].style.backgroundColor;
    star[i].style.visibility="hidden";
    tiny[i].style.visibility="visible"
  }
}

function update_tiny(i) {
  if (--tinyv[i]==25) {
    tiny[i].style.width="1px";
    tiny[i].style.height="1px";
  }
  if (tinyv[i]) {
    tinyy[i]+=1+Math.random()*3;
    tinyx[i]+=(i%5-2)/5;
    if (tinyy[i]<shigh+sdown) {
      tiny[i].style.top=tinyy[i]+"px";
      tiny[i].style.left=tinyx[i]+"px";
    }
    else {
      tiny[i].style.visibility="hidden";
      tinyv[i]=0;
      return;
    }
  }
  else tiny[i].style.visibility="hidden";
}

document.onmousemove=mouse;
function mouse(e) {
  if (e) {
    y=e.pageY;
    x=e.pageX;
  }
  else {
    set_scroll();
    y=event.y+sdown;
    x=event.x+sleft;
  }
}

window.onscroll=set_scroll;
function set_scroll() {
  if (typeof(self.pageYOffset)=='number') {
    sdown=self.pageYOffset;
    sleft=self.pageXOffset;
  }
  else if (document.body && (document.body.scrollTop || document.body.scrollLeft)) {
    sdown=document.body.scrollTop;
    sleft=document.body.scrollLeft;
  }
  else if (document.documentElement && (document.documentElement.scrollTop || document.documentElement.scrollLeft)) {
    sleft=document.documentElement.scrollLeft;
    sdown=document.documentElement.scrollTop;
  }
  else {
    sdown=0;
    sleft=0;
  }
}

window.onresize=set_width;
function set_width() {
  var sw_min=999999;
  var sh_min=999999;
  if (document.documentElement && document.documentElement.clientWidth) {
    if (document.documentElement.clientWidth>0) sw_min=document.documentElement.clientWidth;
    if (document.documentElement.clientHeight>0) sh_min=document.documentElement.clientHeight;
  }
  if (typeof(self.innerWidth)=='number' && self.innerWidth) {
    if (self.innerWidth>0 && self.innerWidth<sw_min) sw_min=self.innerWidth;
    if (self.innerHeight>0 && self.innerHeight<sh_min) sh_min=self.innerHeight;
  }
  if (document.body.clientWidth) {
    if (document.body.clientWidth>0 && document.body.clientWidth<sw_min) sw_min=document.body.clientWidth;
    if (document.body.clientHeight>0 && document.body.clientHeight<sh_min) sh_min=document.body.clientHeight;
  }
  if (sw_min==999999 || sh_min==999999) {
    sw_min=800;
    sh_min=600;
  }
  swide=sw_min;
  shigh=sh_min;
}

function createDiv(height, width) {
  var div=document.createElement("div");
  div.style.position="absolute";
  div.style.height=height+"px";
  div.style.width=width+"px";
  div.style.overflow="hidden";
  return (div);
}

function newColour() {
  var c=new Array();
  c[0]=255;
  c[1]=Math.floor(Math.random()*256);
  c[2]=Math.floor(Math.random()*(256-c[1]/2));
  c.sort(function(){return (0.5 - Math.random());});
  return ("rgb("+c[0]+", "+c[1]+", "+c[2]+")");
}
// ]]>
</script>
<script type="text/javascript">
// <![CDATA[
var speed=200; // speed, lower is faster
var alink="http://www.mf2fm.com/rv"; // place to link to
                                     // set to alink="" if not required
var shuffl, shftxt, c1, c2;
var shfpos=new Array();
window.onload=function() { if (document.getElementById) {
  var sorpos=new Array();
  var shft1, shft2;
  shuffl=document.getElementById("shuffle");
  if (!document.all) shuffl.style.position="relative"; // ie bug fix
  shftxt=shuffl.firstChild.nodeValue;
  shftxt=shftxt.replace(/ /g, String.fromCharCode(160));
  while (shuffl.childNodes.length) shuffl.removeChild(shuffl.childNodes[0]);
  for (var i=0; i<shftxt.length; i++) {
    shft1=document.createElement("span");
    shft1.setAttribute("id", "shuf"+i);
    shft1.style.position="relative";
    shft1.appendChild(document.createTextNode(shftxt.charAt(i)));
    if (alink) {
      shft1.onclick=function() { top.location.href=alink };
      shft1.style.cursor="pointer";
    }
    shuffl.appendChild(shft1);
  }
  sorpos[-1]=0;
  for (i=0; i<shftxt.length; i++) {
    shfpos[i]=i;
    sorpos[i]=sorpos[i-1]+getElWidth(document.getElementById("shuf"+i));
  }
  for (i=0; i<shftxt.length; i++) {
    shft2=Math.floor(Math.random()*(shftxt.length));
    shft1=shfpos[i];
    shfpos[i]=shfpos[shft2];
    shfpos[shft2]=shft1;
  }
  shft1=0;
  for (i=0; i<shftxt.length; i++) {
    shft2=document.getElementById("shuf"+shfpos[i]);
    shft2.style.left=shft1-sorpos[shfpos[i]-1]+"px";
    shft1+=getElWidth(shft2);
  }
  unshuffle();
}}

function unshuffle() {
  var shft1, shft2, rpos, go=0;
  for (var i=0; i<shftxt.length; i++) if (shfpos[i]!=i) go++;
  if (go) {
    do {
      rpos=Math.floor(Math.random()*(shftxt.length-1));
      shft1=shfpos[rpos];
      shft2=shfpos[rpos+1];
    } while (shft1<shft2);
    shfpos[rpos+1]=shft1;
    shfpos[rpos]=shft2;
    c1=document.getElementById("shuf"+shft1);
    shft1=getElWidth(c1);
    c2=document.getElementById("shuf"+shft2);
    shft2=getElWidth(c2);
    for (i=0; i<shft2; i++) setTimeout('c1.style.left=(parseInt(c1.style.left)+1)+"px"', speed/shft2*i);
    for (i=0; i<shft1; i++) setTimeout('c2.style.left=(parseInt(c2.style.left)-1)+"px"', speed/shft1*i);
    setTimeout('unshuffle()', speed);
  }
}

function getElWidth(el) {
  if (el.style.width) return parseInt(el.style.width);
  else if (el.offsetWidth) return el.offsetWidth;
  else if (el.clientWidth) return el.clientWidth;
  else return false;
}
// ]]>
</script>
  
  <script type="text/javascript">
// <![CDATA[
var bgcolour="#ffffff"; // background colour
var fgcolour="#6600cc"; // foreground colour
var speed=80; // speed of bubbling, lower is faster
var shades=12; // number of shades of bubble

var bubbcol=new Array();
var bubbshd;
var bubbler, bubbtxt;
var bubbchr=new Array();

function addLoadEvent(funky) {
  var oldonload=window.onload;
  if (typeof(oldonload)!='function') window.onload=funky;
  else window.onload=function() {
    if (oldonload) oldonload();
    funky();
  }
}

addLoadEvent(bubbagump);

function bubbagump() { if (document.getElementById) {
  var i, fg, bg, col;
  for (bubbler=0; bubbler<=shades; bubbler++) {
    col="#";
    for (i=1; i<6; i+=2) {
      bg=parseInt(bgcolour.substring(i,i+2),16);
	  fg=parseInt(fgcolour.substring(i,i+2),16);
      col+=dechex(bg+(fg-bg)*(bubbler/shades));
    }
    bubbcol[bubbler+1]=col;
	if (bubbler==Math.floor(shades/2)) bubbshd=col;
  }
  bubbler=document.getElementById("bubble");
  bubbtxt=bubbler.firstChild.nodeValue;
  while (bubbler.childNodes.length) bubbler.removeChild(bubbler.childNodes[0]);
  for (i=0; i<bubbtxt.length; i++) {
    fg=document.createElement("span");
    fg.setAttribute("id", "bubb"+i);
	fg.style.textShadow=bubbshd+" 0px 0px 2px";
    fg.appendChild(document.createTextNode(bubbtxt.charAt(i)));
    bubbler.appendChild(fg);
  }
  bubbler=setInterval("bubbling()", speed);
}}

function dechex(dec) {
  dec=Math.floor(dec);
  return ((dec<16)?'0':'')+dec.toString(16);
}

function bubbling() {
  var i, bubby;
  for (i=0; i<bubbtxt.length; i++) {
    bubby=document.getElementById("bubb"+i);
    if (bubbchr[i]) {
      bubby.style.color=bubbcol[bubbchr[i]];
      bubbchr[i]=(bubbchr[i]+1)%bubbcol.length;
    }
    else if (Math.random()<7.5/(shades*bubbtxt.length)) bubbchr[i]=1;
  }
}
// ]]>
</script>
  <script type="text/javascript">
// <![CDATA[
var text=new Array("Brought to you by RV's FREE Scripts", "Your flight is now departing...", "BA 329 AMSTERDAM    Boarding  GATE 3", "BA 057 JOHANNESBURG Boarding  GATE 9");
//change the above array to include the text you want animated (any text on the page will be added to this)
var size=28; // how tall in pixels
var speed=125; // lower is faster
var link="http://www.mf2fm.com/rv/"; // where to link to if the text is clicked, set to ="" if you don't want the text to be a link


function addLoadEvent(funky) {
  var oldonload=window.onload;
  if (typeof(oldonload)!='function') window.onload=funky;
  else window.onload=function() {
    if (oldonload) oldonload();
    funky();
  }
}

addLoadEvent(boarding);

var divvy, ditsy, crount;
var maxilength=0;
var taunty=0;
var stext=new Array();
function boarding() {
  var i, j, w;
  divvy=document.getElementById("board");
  divvy.style.fontSize=(size-4)+"px";
  divvy.style.position="relative";
  if (divvy.firstChild.nodeValue) {
    text.unshift(divvy.firstChild.nodeValue.toString());
	divvy.firstChild.nodeValue=String.fromCharCode(160);
  }
  else divvy.appendChild(document.createTextNode(String.fromCharCode(160)));
  stext['text']=new Array();
  for (i=0; i<text.length; i++) if (text[i].length>maxilength) maxilength=text[i].length;
  w=Math.floor((size-4)/1.414);
  for (i=0; i<4; i++) {
    stext[i]=new Array();
    for (j=0; j<maxilength; j++) {
      stext[i][j]=document.createElement('div');
      stext[i][j].appendChild(document.createTextNode(String.fromCharCode(160)));
      stext[i][j].style.position="absolute";
      stext[i][j].style.top="0px";
      stext[i][j].style.backgroundColor="transparent";
      stext[i][j].style.textAlign="center";
      stext[i][j].style.left=Math.floor(w*j)+"px";
      stext[i][j].style.width=w+"px";
      if (i<2) stext[i][j].style.clip="rect(0px, "+w+"px, "+Math.floor((size/2)-3)+"px, 0px)";
      else stext[i][j].style.clip="rect("+Math.floor((size/2)-2)+"px, "+w+"px, "+size+"px, 0px)";
      if (link) stext[i][j].onclick=function(){window.location.href=link};
      divvy.appendChild(stext[i][j]);
    }
  }
  take_off();
}

function take_off() {
  var j;
  crount=0;
  for (j=0; j<text[taunty].length; j++) stext['text'][j]=text[taunty].charCodeAt(j)-32;
  for (; j<maxilength; j++) stext['text'][j]=0;
  taunty=++taunty%text.length;
  ditzy=setInterval(flicker, speed);
}

function flicker() {
  var j, geendetet;
  geendetet=maxilength;
  for (j=0; j<maxilength; j++) {
    if (stext['text'][j] && stext['text'][j]>=crount-j && j-crount<32) swap_a_doodle (crount%2, j, String.fromCharCode(32+(crount-j)%95));
    else if (stext['text'][j] && Math.random()<0.002 && stext['text'][j]<161 && crount<3*text.length) stext['text'][j]=stext['text'][j]+95;
    else geendetet--;
  }
  if (!geendetet) {
    clearInterval(ditzy);
    setTimeout('ditzy=setInterval("landing()", speed*.7)', speed*50);
  }
  crount++;
}

function landing() {
  var j, geendetet;
  geendetet=maxilength;
  for (j=0; j<maxilength; j++) {
    if (stext['text'][j]%95) swap_a_doodle (crount%2, j, String.fromCharCode(++stext['text'][j]%95+32));
    else geendetet--;
  }
  if (!geendetet) {
    clearInterval(ditzy);
    take_off();
  }
  crount++;
}

function swap_a_doodle(i, j, l) {
  stext[i][j].firstChild.nodeValue=l;
  stext[i][j].style.visibility="visible";
  stext[i+2][j].firstChild.nodeValue=l;
  setTimeout ('stext['+(i+2)+']['+j+'].style.visibility="visible"', speed*.2);
  setTimeout ('stext['+(1-i)+']['+j+'].style.visibility="hidden"', speed*.3)
  setTimeout ('stext['+(3-i)+']['+j+'].style.visibility="hidden"', speed*.5);
}
// ]]>
</script>