<?php
$cats = Yii::$app->params['mainMenu'];
?>

<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top headroom" >
    <div class="container">
        <div class="navbar-header">
            <!-- Button for smallest screens -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="<?=Yii::$app->homeUrl?>">
                <span style="font-size: 2rem;">Xu Huaiwen Badminton Club</span>
                <!--img src="/images/sports/logo.png" alt="Progressus HTML5 template"-->
            </a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right">
                <?php foreach($cats as $item) {?>
                    <li>
                        <a href="<?=$item['url']?>">
                            <?=$item['label']?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>
<!-- /.navbar -->


<header id="head" class="secondary"></header>
