<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\widgets\headertopareaWidget;
use frontend\widgets\mainmenuareaWidget;
use frontend\widgets\sliderwrapWidget;
use frontend\widgets\promotionareaWidget;
use frontend\widgets\featuresareaWidget;
use frontend\widgets\saleproductareaWidget;
use frontend\widgets\footertopareaWidget;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="no-js">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody([
        'class' => 'home-3',
        ]
) ?>

<!-- header start -->
<header>
    <!-- header-top-area start -->
    <?= headertopareaWidget::widget(); ?>
    <!-- header-top-area end -->
    <!-- mainmenu-area start -->
    <?= mainmenuareaWidget::widget(); ?>
    <!-- mainmenu-area end -->
</header>
<!-- header end -->

<!-- HOME SLIDER -->
<?= sliderwrapWidget::widget(); ?>
<!-- HOME SLIDER END -->

<!-- promotion-area start -->
<?= promotionareaWidget::widget(); ?>
<!-- promotion-area end -->

<!-- features-area start -->
<?= featuresareaWidget::widget(); ?>
<!-- features-area end -->

<!-- sale-product-area start -->
<?= saleproductareaWidget::widget() ?>
<!-- sale-product-area end -->

<!-- category-area start -->

<!-- category-area end -->
<!-- banner-area start -->

<!-- banner-area end -->
<!-- recent-post-area start -->

<!-- recent-post-area end -->
<!-- brand-area start -->

<!-- brand-area end -->
<!-- corporate-about-area start -->

<!-- corporate-about-area end -->

<!-- footer start -->
<footer>
    <!-- footer-top-area start -->
    <?= footertopareaWidget::widget() ?>
    <!-- footer-top-area end -->
    <!-- footer-middle-area start -->

    <!-- footer-middle-area end -->
    <!-- footer-bootom-area start -->

    <!-- footer-bootom-area end -->
</footer>
<!-- footer end -->

<!-- QUICKVIEW PRODUCT -->
<div id="quickview-wrapper">
    <!-- Modal -->
    <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="modal-product">
                        <div class="product-images">
                            <div class="main-image images">
                                <img alt="" src="img/product/13.jpg">
                            </div>
                        </div><!-- .product-images -->

                        <div class="product-info">
                            <h1>Diam quis cursus</h1>
                            <div class="price-box">
                                <p class="price"><span class="special-price"><span class="amount">$132.00</span></span></p>
                            </div>
                            <a href="shop.html" class="see-all">See all features</a>
                            <div class="quick-add-to-cart">
                                <form method="post" class="cart">
                                    <div class="numbers-row">
                                        <input type="number" id="french-hens" value="3">
                                    </div>
                                    <button class="single_add_to_cart_button" type="submit">Add to cart</button>
                                </form>
                            </div>
                            <div class="quick-desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.
                            </div>
                            <div class="social-sharing">
                                <div class="widget widget_socialsharing_widget">
                                    <h3 class="widget-title-modal">Share this product</h3>
                                    <ul class="social-icons">
                                        <li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
                                        <li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
                                        <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .product-info -->
                    </div><!-- .modal-product -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    <!-- END Modal -->
</div>
<!-- END QUICKVIEW PRODUCT -->


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
