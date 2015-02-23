<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?php echo $page->getPage_title(); ?></title>
<?php foreach($page->getCss() as $stylesheet) : ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/<?php echo $stylesheet; ?>" type="text/css" media="screen" />
<?php endforeach; ?>
<?php foreach($page->getJs() as $script) : ?>
    <script src="<?php echo base_url(); ?>js/<?php echo $script; ?>"></script>
<?php endforeach; ?>
</head>
<body>
    <div id="page-wrapper">
        <?php echo $page->getHtml(); ?>
    </div>
</body>
</html>