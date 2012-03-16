<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title_for_layout?></title>

</head>

<body>
    <?php echo $content_for_layout; ?>
    <?php echo $this->element('sql_dump'); ?>
</body>
</html>
