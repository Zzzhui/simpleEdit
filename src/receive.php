<?php
	require 'includes/global.func.php';
	if (@$_GET['action'] == 'post') {
			//接受帖子内容
			$_clean = array();
			$_clean['title'] = $_POST['title'];
			$_clean['content'] = $_POST['content'];
			$_clean = _html($_clean);
	}else{
		exit('非法操作');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>发布的内容</title>
	<link rel="stylesheet" href="../dist/main.css">
</head>
<body>
	<div id="get">
		<h2>发布的内容</h2>
		<dl>
			<dd>标题:<?php echo $_clean['title'] ?></dd>
			<dd>
				内容:
				<p><?php echo _ubb($_clean['content']) ?></p>
			</dd>
		</dl>
	</div>
</body>
</html>
