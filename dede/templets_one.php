<?
require_once(dirname(__FILE__)."/config.php");
require_once(dirname(__FILE__)."/../include/pub_datalist.php");
require_once(dirname(__FILE__)."/../include/inc_functions.php");
setcookie("ENV_GOBACK_URL",$dedeNowurl,time()+3600,"/");

function GetIsMake($im)
{
	if($im==1) return "�����";
	else  return "������";
}

$sql = "Select aid,title,ismake,uptime,filename From #@__sgpage order by aid desc";

$dlist = new DataList();
$dlist->Init();
$dlist->SetSource($sql);
$dlist->SetTemplet(dirname(__FILE__)."/templets/templets_one.htm");
$dlist->display();
$dlist->Close();
?>