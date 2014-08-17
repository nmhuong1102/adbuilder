<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ADX - Ad Builder</title>
    <link rel="stylesheet" type="text/css" href="/adx-adbuilder/public/components/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/adx-adbuilder/public/components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" media="screen" type="text/css" href="/adx-adbuilder/public/components/colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" type="text/css" href="/adx-adbuilder/public/css/styles.css">
</head>
<body>
<?php include_once('header.php'); ?>
<!--<div class="test-upload">-->
<!--    <form action="helpers/upload_file.php" method="post"-->
<!--          enctype="multipart/form-data">-->
<!--        <label for="file">Filename:</label>-->
<!--        <input type="file" name="file" id="file"><br>-->
<!--        <input type="submit" name="submit" value="Submit">-->
<!--    </form>-->
<!--</div>-->
<div class="ad-builder-container container">
    <div class="row">
        <div class="toolbar col-xs-12">
            <a class="undo"><i class="fa fa-undo"></i></a>
        </div>
    </div>
    <div class="content row">
        <div class="col-left col-xs-4">
            <?php include_once('form.php'); ?>
        </div>
        <div class="col-main col-xs-8">
            <div class="row">
                <strong class="title col-xs-12">Ad preview</strong>
            </div>
            <div class="form-inline row">
                <div class="select-area col-xs-12">
                    <div class="form-group">
                        <label for="format">Format</label>
                        <select class="form-control" id="format">
                            <option value="120_600">120x600</option>
                            <option value="160_600">160x600</option>
                            <option value="300_250">300x250</option>
                            <option value="728_90">728x90</option>
                            <option value="300_600">300x600</option>
                            <option value="336_280">336x280</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="template">Template</label>
                        <select class="form-control" id="template">
                            <option value="neutral">Neutral</option>
                            <!-- <option value="slideshow">Slideshow</option>
                            <option value="carrousel">Carrousel</option>
                            <option value="mosaic">Mosaic</option>
                            <option value="showcase">Showcase</option>
                            <option value="zoom">Zoom</option>
                            <option value="multiple">Multiple</option>
                            <option value="all">All</option> -->
                        </select>
                    </div>
                </div>
            </div>
            <div class="display-area">
                <?php include_once('ads.php'); ?>
            </div>
        </div>
    </div>
</div>
<?php include_once('footer.php'); ?>
<script type="text/javascript" src="/adx-adbuilder/public/components/jquery/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="/adx-adbuilder/public/components/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/adx-adbuilder/public/components/colorpicker/js/colorpicker.js"></script>
<script type="text/javascript" src="/adx-adbuilder/public/js/script.js"></script>
<script type="text/javascript">

</script>
</body>
</html>



