<?php if (!defined('THINK_PATH')) exit();?>﻿<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>华中农业大学学生事务中心管理系统</title>
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/basic.css" />
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/login.css" />
		<script type="text/javascript" src="__PUBLIC__/Js/jquery.js"></script>
		<script>
			$(function(){
				$('img[title="login"]').click(function(){
					$('form[name="myForm"]').submit();
				});
			});
		</script>
</head>
<body>
     <style type="text/css"></style>
        <form action='__URL__/doLogin' method='post' name='myForm'>
			用户名：<input type='text' name='username'/><br/>
			密　码：<input type='password' name='password'/><br/>
			验证码：<input type='text' name='code'/><img src='__APP__/Public/code' onclick="this.src=this.src+'?'+Math.random()"/><br/>
			<img src='__PUBLIC__/Images/login.gif' title='login' class='submit'/>
		</form>
</body>
</html>