<?php
  /**
   * Created by PhpStorm.
   * User: cai
   * Date: 2017/4/8
   * Time: 20:07
   * 添加留言
   */
  session_start();
  include "include/config.php";

  ?>
<!DOCTYPE html>
<html >
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加留言</title>
  <script language="JavaScript" type="text/javascript" src="include/checkForm.js"></script>
</head>
<body>
<?php
//  if (isset($_SESSION['time'])&&time()-$_SESSION['time']<60) {
//    ?>
<!--<div>-->
<!--  请过60秒后再留言.............-->
<!--  还需要等待--><?php //echo abs(60-(time()-$_SESSION['time'])) ?><!--秒<br>-->
<!--  <a href="javascript:history.back();">如果没有自动返回，请点击此处手动返回</a>-->
<!--</div>-->
<!--    -->
<!--    echo "<script>window.location.href=document.referrer;</script>";-->
<!--  }else{-->
<!--    if (empty($_POST['submitFlag']))-->
<!--    {-->
<!--//?>-->
<!--FrontPage_Form1_Validator 为include里写的js函数 验证表单-->
<img src="http://img02.fs.yiban.cn/6079821/avatar/user/200"  alt="userLog" />
<form name="add" method="post" action="<?  $_SERVER['PHP_SELF'] ?>" onsubmit="return FrontPage_Form1_Validator(this)">
<label for="user">昵称：</label> <label><input type="text" id="username" name="username" value=""/></label><br>
  <label for="email">Email:</label> <label><input type="text" id="email" name="email" value=""></label><br>
  <label for="comment">内容:</label> <label><textarea id="content" name="content" rows="4" cols="20"  ></textarea></label><br>
  <label for="random"></label>验证码： <label><input name="random" type="text" id="random" size="10"></label><img src="include/random.php" onclick="this.src+='?'">
 <input type="submit" id="submit" value="确定" ><br>
  <input name="submitFlag" type="hidden" id="submitFlag" value="add">
<!--  --><?php
//
//    }else
//  {
//
//  }
//  }
//  ?>
</form>
</body>
</html>