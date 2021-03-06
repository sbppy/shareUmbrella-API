<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台管理系统&gt;条目管理</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- jquery 3 -->
	<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
	<!-- Layui -->
	<link rel="stylesheet" href="http://cdn.90so.net/layui/2.3.0/css/layui.css">
	<script src="http://cdn.90so.net/layui/2.3.0/layui.js"></script>
	<!-- import module "element"-->
	<script>
		layui.use('element', function(){
			var element = layui.element;
		});
	</script>
</head>
<body class="layui-layout-body">
	<div class="layui-layout layui-layout-admin">
		<!-- navbar start -->
		<div class="layui-header">
			<div class="layui-logo">管理面板</div>
			<ul class="layui-nav layui-layout-left">
				
			</ul>
			<ul class="layui-nav layui-layout-right">
				<li class="layui-nav-item">
					<a href="javascript:;">
						<img src="https://t.alipayobjects.com/images/rmsweb/T1B9hfXcdvXXXXXXXX.svg" class="layui-nav-img">
						<span>Admin</span>
					</a>
					<dl class="layui-nav-child">
						<dd><a href="">基本资料</a></dd>
					</dl>
				</li>
				<li class="layui-nav-item"><a href="">登出</a></li>
			</ul>
		</div>
		<!-- navbar end -->
		<!-- sidebar start -->
		<div class="layui-side layui-bg-black">
			<div class="layui-side-scroll">
				<ul class="layui-nav layui-nav-tree"  lay-filter="test">
					<li class="layui-nav-item layui-nav-itemed">
						<a class="" href="javascript:;">条目管理</a>
					</li>
					<li class="layui-nav-item">
						<a href="javascript:;">用户管理</a>
					</li>
					<li class="layui-nav-item">
						<a href="javascript:;">地区管理</a>
					</li>
					<li class="layui-nav-item">
						<a href="javascript:;">标签管理</a>
					</li>
				</ul>
			</div>
		</div>
		<!-- sidebar end -->
		<!-- content start -->
		<div class="layui-body" style="padding: 15px;">
			<fieldset class="layui-elem-field layui-field-title">
				<legend>用户信息</legend>
			</fieldset>
			<!-- search bar start -->
			<div class="search layui-inline">
				搜索用户：
				<div class="layui-inline">
					<input class="layui-input" name="searchuser" id="searchuser" autocomplete="on">
				</div>
				<button class="layui-btn" data-type="reload">搜索</button>
			</div>
			<!-- search bar end -->
			<!-- tool bar start -->
			<div class="del layui-inline" style="padding: 15px;">
					<button class="layui-btn layui-btn-danger" data-type="delete">删除</button>
			</div>
			<!-- tool bar end -->
			<table class="layui-hide" id="item" lay-filter="item"></table>
			<script>
				layui.use(['table','layer'], function(){
					var table = layui.table;

					table.render({
						elem: '#item'
						,url: 'testData/testItem.json'
						,cols: [[
							{type:'checkbox'}
						   ,{field: 'usernick', title: '用户名', width: 80}
					       ,{field: 'area_name', title: '地区', Width: 60, edit: 'text'}
					       ,{field: 'title', title: '标题', Width: 60, edit: 'text'}
					       ,{field: 'content', title: '内容', width: 80, edit: 'text'}
					       ,{field: 'created_at', title: '创建时间', minwidth: 80}
					       ,{field: 'updated_at', title: '更新时间', minwidth: 80}
						]]
						,id: 'searchuser'
						,page: true
					});

					table.on('edit(item)', function(obj){
							var value = obj.value
						    ,data = obj.data
						    ,field = obj.field;
						    layer.msg(data.usernick + '的' + field + '更改为' + value)
					});
					
					//搜索功能未完成
				});
			</script>
		</div>
		<!-- content end -->
		<div class="layui-footer">
			© 华南农业大学 共享雨伞创作组
		</div>
	</div>
</body>
</html>