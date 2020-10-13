<!DOCTYPE HTML>
<html>
<head>
<?php
if(isset($_GET['title']) && !empty($_GET['title'])) {
    echo "<meta name='og:title' content='{$_GET['title']}' />";
};
if(isset($_GET['info']) && !empty($_GET['info'])) {
    echo "<meta name='og:description' content='{$_GET['info']}' />";
};
if(isset($_GET['author']) && !empty($_GET['author'])) {
    echo "<meta name='og:site_name' content='{$_GET['author']}' />";
};
if(isset($_GET['color']) && !empty($_GET['color'])) {
    echo "<meta name='theme-color' content='{$_GET['color']}' />";
};
if(isset($_GET['url']) && !empty($_GET['url'])) {
    echo "<meta name='url' content='{$_GET['url']}' />";
};
?>

</head>
<body>
Look in the head tag
</body>
</html>
