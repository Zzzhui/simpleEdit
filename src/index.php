<?php
/**
* simpleEditor
* ================================================
* Web: liuxhui.cn
* ================================================
* Author: liuhui
* Date: 2017-10-13
*/
	require 'includes/global.func.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>simpleEditor</title>
<link rel="stylesheet" href="../dist/main.css">
</head>
<body>
<div id="post">
	<h2>内容填写</h2>
	<form method="post" name="post" action="receive.php?action=post">
		<dl>
			<dd>标　　题：<input type="text" name="title" class="text" /></dd>
			<dd>
				<?php require 'includes/main.php'; ?>
				<textarea name="content"></textarea>
			</dd>
			<dd class="tr"><input type="submit" class="submit" value="发表" /></dd>

		</dl>
	</form>
</div>
</body>
<script src="../vander/jquery.min.js"></script>
<script src="../vander/layer/layer.js"></script>
<script src="../dist/main.js"></script>
</html>
