<html><head>
<title>Guestbook</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="keywords" content="guestbook, php, script, mySQL, free, advance">
<style type="text/css">
<!--
.font1 {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: #000000 }
.font2 {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; color: #000000 }
.font3 { font-family: Arial, Helvetica, sans-serif; font-size: 7.5pt; color: #000000; font-weight: bold}
.select {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9pt}
.input {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9pt}
-->
</style>
<script language="JavaScript">
<!--
function gb_picture(Image,imgWidth,imgHeight) {
    var border = 24;
    var img = Image;
    var features;
    var w;
    var h;
    winWidth = (imgWidth<100) ? 100 : imgWidth+border;
    winHeight = (imgHeight<100) ? 100 : imgHeight+border;
    if (imgWidth+border > screen.width) {
        winWidth = screen.width-10;
        w = (screen.width - winWidth)/2;
        features = "scrollbars=yes";      
    } else {
        w = (screen.width - (imgWidth+border))/2;
    }
    if (imgHeight+border > screen.height) {
        winHeight = screen.height-60;
        h = 0;
        features = "scrollbars=yes";      
    } else {
        h = (screen.height - (imgHeight+border))/2 - 20;
    }
    winName = (img.indexOf("t_") == -1) ? img.substr(4,(img.length-8)) : img.substr(6,(img.length-10));
    features = features+',toolbar=no,width='+winWidth+',height='+winHeight+',top='+h+',left='+w;
    theURL = '/guest/picture.php?img='+Image;
    popup = window.open(theURL,winName,features);
    popup.focus();  
}
//-->
</script>
</head>
<body bgcolor="#FFFFFF" link="#006699" vlink="#006699"><br><h2><a href="../index.html">   Back to 'Send Bob To Mars' Home</a></h2><br>

<script language="JavaScript">
<!--
var flag=0;
function SetFlag() {
  flag=1;
}
//-->
</script>
<table border="0" cellspacing="0" cellpadding="2" align="center" width="95%">
   <tbody><tr>
    <td height="45"><b><font size="4" face="Verdana, Arial, Helvetica, sans-serif" color="#000000">Guestbook</font></b></td>
    <td height="45">&nbsp;</td>
  </tr>
  <tr>
    <td width="45%" valign="bottom" class="font2">Write a comment for this guestbook entry.</td>
    <td width="55%" align="right" valign="bottom" class="font2"> <b><img src="img/return.gif" width="10" height="10">
     <a href="index.php">Back to Guestbook</a> | <img src="img/lock.gif" width="9" height="11"> <a href="admin.php">Administration</a></b></td>
  </tr>
</tbody></table>
<form method="post" action="comment.php" onsubmit="return SetFlag()">
  <table border="0" cellspacing="1" cellpadding="4" width="95%" align="center" bgcolor="#000000">
    <tbody><tr>
     <td colspan="2" bgcolor="#7878BE"><b><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">Sign the Guestbook:</font></b></td>
    </tr>

<tr bgcolor="#E8E8E8">
 <td width="32%" valign="top">
   <table border="0" cellspacing="0" cellpadding="2">
     <tbody><tr>
       <td class="font2" valign="top" width="8%"><b>9)</b></td>
       <td width="92%"> 
        
        
        
       </td>
     </tr>
     <tr>
       <td colspan="2" class="font1"><b>brad</b>&nbsp;</td>
     </tr>
     <tr>
       <td colspan="2" class="font1"></td>
     </tr>
     <tr>
       <td colspan="2" class="font2">Location:<br>maine</td>
     </tr>
    </tbody></table>
  </td>
  <td width="68%" class="font1" valign="top"> 
    <div align="left" class="font3"><img src="img/post.gif" width="9" height="9">Friday, June 11, 2004 15:03&nbsp;
     <a href="comment.php"><img src="img/edit.gif" width="18" height="13" border="0" alt="Write a comment"></a>
     
    </div>
    <hr size="1"><div align="left">
     well done. not the sheep, the story
   </div>
   
 </td>
</tr>


    <tr bgcolor="#E8E8E8">
      <td width="32%" class="font1"><img src="img/edit.gif" width="18" height="13">Comments:</td>
      <td><textarea name="comment" cols="32" rows="6"></textarea></td>
    </tr>
    <tr bgcolor="#E8E8E8">
      <td width="32%" class="font1">Name:</td>
      <td><input type="text" name="gb_user" size="35" maxlength="25"></td>
    </tr>
    


    <tr bgcolor="#E8E8E8">
      <td width="32%">&nbsp;</td>
      <td>
        <input type="submit" name="action" value="Submit" class="input" onclick="if(flag==1) return false;">
        <input type="reset" value="Reset" class="input">
        <input type="hidden" name="gb_id" value="9">
        <input type="hidden" name="gb_comment" value="1">
      </td>
    </tr>
  </tbody></table>
</form>

<br><h2><a href="../index.html">   Back to 'Send Bob To Mars' Home</a></h2><br>


</body></html>