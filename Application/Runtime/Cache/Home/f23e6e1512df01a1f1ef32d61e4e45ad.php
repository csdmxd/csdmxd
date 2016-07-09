<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<body>

<form action="<?php echo U('index/add_blog');?>" method="post">
    标题: <input type="text" name="name"><br>
    摘要:  <textarea name="abstract" rows="5" cols="60"></textarea><br>
    正文:  <textarea name="text" rows="20" cols="120"></textarea><br>
    <input type="submit">
</form>

</body>
</html>