<?php
//by:hhh frist github 2015
//test: github & jquery.pjax.js  & i am old, doesn't it
$a=apache_request_headers();
  if(empty($a["X-PJAX"])){

  }else{
 echo "<h1>啦啦啦啦啦啦啦我是1 iam from php</h1>Go to <a id='aaa' href='index2.php'>去2</a>";
 exit();
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang='zh-CN' xml:lang='zh-CN' xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<h1>啦啦啦啦啦啦啦</h1>
<h1>啦啦啦啦啦啦啦</h1>
<h1>啦啦啦啦啦啦啦</h1>
  <div class="container" id="pjax-container">
  <h1>啦啦啦啦啦啦啦我是1</h1>
    Go to <a id="aaa" href="index2.php">去2</a>
  </div>
<h1>啦啦啦啦啦啦啦</h1>
<h1>啦啦啦啦啦啦啦</h1>
<h1>啦啦啦啦啦啦啦</h1>
<div id="loading" style="display:none;position:fixed;top: 0;left: 0;bottom: 0;right: 0;padding-top: 190px;background: rgba(255,255,255,0.8);z-index: 9999;text-align: center;color: #767676;">
<p><img alt="" height="64" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-128.gif" width="64"></p>
<p>Loading…</p>
</div>
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<!--<script src="pjax.js"></script>-->
<!--https://github.com/defunkt/jquery-pjax/blob/master/jquery.pjax.js-->
<script src="https://raw.github.com/defunkt/jquery-pjax/master/jquery.pjax.js"></script>
<!--这个的优点就是 你以前 都要自己ajax去 刷新。一个ajax一个ajax去请求，，现在 是直接指定符合条件的a跳转页面，就不要去考虑  以前ajax 拆 解 重新 组合。-->
<script>
$(document).pjax('#aaa', '#pjax-container');
$(document).on("pjax:send", "#pjax-container", function() {
$('#loading').show();
    });
$(document).on("pjax:complete", "#pjax-container", function(t) {
$('#loading').hide();
    });
$(document).on("pjax:timeout", "#pjax-container", function() {
        return !1
});
$(function(){
var mydate = new Date();
var t=mydate.toLocaleString();
$("h1").append("<i>"+t+"</i>");
});
</script>
</body>
</html>