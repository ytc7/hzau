<?php if (!defined('THINK_PATH')) exit();?>﻿<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<title>Right</title>
	</head>
	<body>
		<?php if(is_array($list)): foreach($list as $key=>$vo): ?><p><?php echo ($vo["title"]); ?></p>
		<p><?php echo ($vo["con"]); ?></p>
		<p align="right"><a href='__APP__/Add/shownews' >修改公告</a></p>
		<hr/><?php endforeach; endif; ?>

		<?php echo ($show); ?>
	</body>
</html>