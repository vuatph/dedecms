<?php 
require_once(dirname(__FILE__)."/config.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>点卡生成向导</title>
<link href="base.css" rel="stylesheet" type="text/css">
</head>
<body background='img/allbg.gif' leftmargin='8' topmargin='8'>
<table width="98%" border="0" cellpadding="3" cellspacing="1" bgcolor="#98CAEF" align="center">
  <form action="member_card_make_action.php" name="form1" target="stafrm">
    <tr> 
      <td height="20" background='img/tbg.gif'><table width="98%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="30%"><strong><a href="co_main.php"><u>会员管理</u></a> &gt; 
            点卡生成向导：</strong> </td>
          <td align="right"><input type="button" name="ss1" value="点卡产品分类" style="width:90px;margin-right:6px" onClick="location='member_card_type.php';" class='nbt'>
              <input type="button" name="ss2" value="点卡使用记录" style="width:90px" onClick="location='member_card.php';" class='nbt'>
          </td>
        </tr>
      </table></td>
    </tr>
    <tr> 
      <td bgcolor="#FFFFFF">
<table width="90%" border="0" cellpadding="2" cellspacing="2">
          <tr> 
            <td width="13%">点卡类型：</td>
            <td width="32%">
<select name='cardtype' style='width:120px'>
<?php 
$dsql = new DedeSql(false);
$dsql->SetQuery("Select * From #@__moneycard_type");
$dsql->Execute();
while($row=$dsql->GetArray()){
  echo "  <option value='{$row['tid']}'>{$row['pname']}</option>\r\n";
}
$dsql->Close();			
?>
</select>
			</td>
            <td width="14%">生成数量：</td>
            <td width="41%">
			<input name="mnum" type="text" id="mnum"  style='width:120px' value="100">
			</td>
          </tr>
          <tr> 
            <td>点卡前缀：</td>
            <td> 
              <input name="snprefix" type="text" id="snprefix"  style='width:120px' value="SN"> 
            </td>
            <td>密码长度：</td>
            <td><input name="pwdlen" type="text" id="pwdlen2"  style='width:120px' value="4"> 
            </td>
          </tr>
          <tr> 
            <td>密码类型：</td>
            <td><input type="radio" name="ctype" value="1" class="np">
              纯数字 
              <input name="ctype" type="radio" class="np" value="2" checked>
              大写字母</td>
            <td>密码组数：</td>
            <td><input name="pwdgr" type="text" id="pwdlen3"  style='width:120px' value="3"> 
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr> 
      <td height="31" bgcolor="#F8FBFB" align="center">
	  <input type="submit" name="Submit" value="开始生成点卡"> 
      </td>
    </tr>
  </form>
  <tr bgcolor="#E5F9FF"> 
    <td height="20"> <table width="100%">
        <tr> 
          <td width="74%"><strong>结果：</strong></td>
          <td width="26%" align="right"> <script language='javascript'>
            	function ResizeDiv(obj,ty)
            	{
            		if(ty=="+") document.all[obj].style.pixelHeight += 50;
            		else if(document.all[obj].style.pixelHeight>80) document.all[obj].style.pixelHeight = document.all[obj].style.pixelHeight - 50;
            	}
            	</script>
            [<a href='#' onClick="ResizeDiv('mdv','+');">增大</a>] [<a href='#' onClick="ResizeDiv('mdv','-');">缩小</a>] 
          </td>
        </tr>
      </table></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td id="mtd"> <div id='mdv' style='width:100%;height:100;'> 
        <iframe name="stafrm" frameborder="0" id="stafrm" width="100%" height="100%"></iframe>
      </div>
      <script language="JavaScript">
	  document.all.mdv.style.pixelHeight = screen.height - 420;
	  </script> </td>
  </tr>
</table>
</body>
</html>
