<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="language" content="en">
        <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/app.ico" type="image/x-icon" /> 


        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>
        <div id="mainmenu">
            <?php $this->renderPartial('//layouts/menu'); ?>
        </div><!-- mainmenu -->
        <div class="container" id="page" style='min-width:100%'>

            <div id="header">
                <div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
            </div><!-- header -->




            <?php if (isset($this->breadcrumbs)): ?>
                <?php
                $this->widget('zii.widgets.CBreadcrumbs', array(
                    'links' => $this->breadcrumbs,
                ));
                ?><!-- breadcrumbs -->
            <?php endif ?>

<?php echo $content; ?>

            <div class="clear"></div>

            

        </div><!-- page -->

    </body>
</html>


<style>
.filters > td
{
    min-width: 100px;
}
#customers-form
{
    max-width: 50%;
}
</style>