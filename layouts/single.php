
<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

frontend\web\template\sports\SportsAssets::register($this);


if(!isset(Yii::$app->params['keywords'])){
    Yii::$app->params['keywords'] = Yii::$app->setting->get('siteName');
}

if(!isset(Yii::$app->params['description'])){
    Yii::$app->params['description'] = Yii::$app->setting->get('siteName');
}

if(!isset(Yii::$app->params['title'])){
    Yii::$app->params['title'] = Yii::$app->setting->get('siteName');
}

?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Robots" Content="All">
    <meta name="googlebot" content="All">
    <meta name="keywords" content="<?= Html::encode(Yii::$app->params['keywords']) ?>" />
    <meta name="description" content="<?= Html::encode(Yii::$app->params['description']) ?>" />
    <meta name="author" content="Panda blog Team" />
    <meta name="Copyright" content="Panda blog" />

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode(Yii::$app->params['title']) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<?= $this->render('header.php') ?>

<div class="container">

    <div class="row">
        <!-- Article main content -->
        <article class="col-sm-8 maincontent">
            <?= $content ?>
        </article>
        <!-- /Article -->

        <!-- Sidebar -->
            <?php echo($this->render('recentpost')) ?>
        <!-- /Sidebar -->

    </div>
</div>	<!-- /container -->


<?= $this->render('footer.php') ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
