<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<title>Right</title>
		<script type="text/javascript" src="__PUBLIC__/Js/jquery.js"></script>
		<script>
			$(function(){
				var error=new Array();
				$('input[name="title"]').blur(function(){
					var title=$(this).val();
					$('#mtitle').remove();
					$('#atitle').remove();
					if(title==""){
					$('input[name="title"]').after('<p id="mtitle" style="color:red">标题不能为空</p>');
					}
					else{
					    /*$('input[name="con"]').blur(function(){
				            var con=$(this).val();
					        $('#mcon').remove();
				        if(con==""){
					        error['con']=1;
					        $('input[name="title"]').after('<p id="mcon" style="color:red">内容不能为空</p>');
					    }else{
					        error['con']=0;
					    }
				    });*/
					
					$.get('__URL__/checkInformation',{'title':title},function(data){
						if(data=="不允许"){
							error['title']=1;
							$('input[name="title"]').after('<p id="atitle" style="color:red">该公告已经发布</p>');
						}else{
							error['title']=0;
						}
					});
				}
				});

				//提交表单
				$('img.add').click(function(){
					if(error['title']==1){
						return false;
					}else{
						$('form[name="myForm"]').submit();
					}
				});
			});
		</script>
	</head>
	<body>
		<style type="text/css"></style>
        <form action='__URL__/doAddInformation' method='post' name='myForm'>
           公告标题：<input type="text" name="title"><br>
           <P>公告内容：<br>
           <textarea name="con" rows="5" cols="45"></textarea><br></p>
          <img src='__PUBLIC__/Images/add.gif' class='add' width=70px height=30px/>
			<!--<img src='__PUBLIC__/Images/reset.gif' class='reset'/>-->
		</form>
	</body>
</html>