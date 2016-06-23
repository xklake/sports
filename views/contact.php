<?php
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 5/23/16
 * Time: 5:05 PM
 */
?>

<div class="container">


    <div class="row">

        <!-- Article main content -->
        <article class="col-sm-8 maincontent">
            <header class="page-header">
                <h1 class="page-title">Contact us</h1>
            </header>
            <style>
                .map-responsive{
                    overflow:hidden;
                    padding-bottom:26.25%;
                    position:relative;
                    height:0;
                }
                .map-responsive iframe{
                    left:0;
                    top:0;
                    height:100%;
                    width:100%;
                    position:absolute;
                }
            </style>
            <p>
                <a href='tel:<?=Yii::$app->setting->get('phone')?>' class="fa fa-phone">
                    <?=Yii::$app->setting->get('phone')?>
                </a>
                </p>
            <p>
               <a href="mailto:<?=Yii::$app->setting->get('email')?>"   class="fa fa-envelope-o">
                    <?=Yii::$app->setting->get('email')?>
                </a>
            </p>

            <p>
                <a href='#'  class="fa fa-map-marker">
                    <?=Yii::$app->setting->get('address')?>
                </a

            </p>

            <div class="map-responsive">
                <iframe src="<?=Yii::$app->setting->get('googlemap')?>" width="750" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

            <div style="margin-top: 40px;">
                <p><b>Xu Huaiwen,Head coach of Xu huaiwen's Badminton Club</b></p>
                <img src="<?='/' . $catalog->banner?>">
            </div>

        </article>
        <!-- /Article -->

        <?= $this->render('../layouts/recentpost')?>


    </div>
</div>	<!-- /container -->

<!--section class="container-full top-space">
    <div id="map">

    </div>
</section-->
