<?php
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 5/23/16
 * Time: 5:02 PM
 */

?>

<!-- Article main content -->
<article class="col-md-8 maincontent">
    <!--/.blog-item-->

    <header class="page-header">
        <h3 class="page-title">
            <?=$post->title?>
        </h3>

        <div class="entry-meta">
            <span id="publish_date"><i class="fa fa-calendar"></i><?= ' '.Yii::$app->formatter->asDate($post->created_at); ?></span>
            <span><i class="fa fa-user"></i> <a href="#">Xuhuai Wen</a></span>
            <!--span><i class="fa fa-comment"></i> <a href="#">2 Comments</a></span>
            <!--span><i class="fa fa-heart"></i><a href="#">56 Likes</a></span-->
        </div>
    </header>


        <?=$post->content?>

</article>
<!-- /Article -->