<?php
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 5/24/16
 * Time: 12:01 PM
 */

?>


<!-- product main content -->
<article class="col-md-8 maincontent">
    <!--/.blog-item-->

    <header class="page-header">
        <h3 class="page-title">
            <?php if(isset($product) && $product != null){
                echo ($product->name);
            }
            ?>
        </h3>
        <div class="entry-meta">
            <span id="publish_date" ><i class="fa fa-calendar"></i><?= 'Start Time: '.Yii::$app->formatter->asDate($product->created_at); ?></span>
            <span style="margin-left:10px;"><i class="fa fa-user"></i>Coach: Xu Huaiwen</span>
            <span style="margin-left:10px;">Price: <i class="fa fa-gbp"></i><?=$product->price?></span>
            <!--span><i class="fa fa-heart"></i><a href="#">56 Likes</a></span-->
        </div>
    </header>
    <?php
    if($product != null) {
        echo($product->content);
    }
    ?>

</article>
<!-- /product -->
