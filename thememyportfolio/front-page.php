<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style-phone.css">
    <title>す～す～のサイト</title>
    <?php wp_head(); ?>
</head>

<body>
    <?php
    if ( have_posts() ) :
    ?>
    <?php endif; ?>
    
    <main class="s-f-main">
        <div class="s-f-logo">
            <a href="http://localhost/"><img class="s-f-l-image" src="<?php echo get_template_directory_uri(); ?>/images/sitelogo.png" alt=""></a>
        </div>
        <div class="container-fluid sf-menu">
            <div class="row">
                <div class="col-6 col-md-4 sfm-block bgc-red-vp">
                    <div class="sfmb-modal bgc-red-s-s">
                        <a class="sfmbm-linkdammy" href="http://localhost/category/oshirase/"></a>
                        <div class="s-relative-dammy">
                            <div class="sfmbm-title">
                                <a class="fs-2" href="">おしらせ</a>
                                <p class="fs-1h sfmbmt-overview">す～す～が関わる公演、イベント、その他諸々をお知らせ。</p>
                            </div>
                        </div>
                    </div>
                    <img class="sfmb-image" src="<?php echo get_template_directory_uri(); ?>/images/osirase.png" alt="">
                </div>
                <div class="col-6 col-md-4 sfm-block bgc-yellow-vp">
                    <div class="sfmb-modal bgc-yellow-s-s">
                        <a class="sfmbm-linkdammy" href="http://localhost/introduction/"></a>
                        <div class="s-relative-dammy">
                            <div class="sfmbm-title">
                                <a class="fs-2">自己紹介</a>
                                <p class="fs-1h sfmbmt-overview">はじめましての皆さまへ</p>
                            </div>
                        </div>
                    </div>
                    <img class="sfmb-image" src="<?php echo get_template_directory_uri(); ?>/images/jikoshoukai.png" alt="">
                </div>
                <div class="col-6 col-md-4 sfm-block bgc-green-vp">
                    <div class="sfmb-modal bgc-green-s-s">
                        <a class="sfmbm-linkdammy" href="http://localhost/category/susulog/"></a>
                        <div class="s-relative-dammy">
                            <div class="sfmbm-title">
                                <a class="fs-2">すすログ</a>
                                <p class="fs-1h sfmbmt-overview">日常の些末をちょこちょこお届け。</p>
                                <p class="fs-1h sfmbmt-overview">週一更新</p>
                            </div>
                        </div>
                    </div>
                    <img class="sfmb-image" src="<?php echo get_template_directory_uri(); ?>/images/suesuelog.png" alt="">
                </div>
                <div class="col-6 col-md-4 sfm-block bgc-pink-vp">
                    <div class="sfmb-modal bgc-pink-s-s">
                        <a class="sfmbm-linkdammy" href="http://localhost/category/susumeru/"></a>
                        <div class="s-relative-dammy">
                            <div class="sfmbm-title">
                                <a class="fs-2">すすメル</a>
                                <p class="fs-1h sfmbmt-overview">記録がてら、みたものをご紹介！</p>
                                <p class="fs-1h sfmbmt-overview">舞台、映画、</p>
                                <p class="fs-1h sfmbmt-overview">エトセトラ、エトセトラ…</p>
                            </div>
                        </div>
                    </div>
                    <img class="sfmb-image" src="<?php echo get_template_directory_uri(); ?>/images/kangeki.png" alt="">
                </div>
                <div class="col-6 col-md-4 sfm-block bgc-purple-vp">
                    <div class="sfmb-modal bgc-purple-s-s">
                        <a class="sfmbm-linkdammy" href="http://localhost/playbook/"></a>
                        <div class="s-relative-dammy">
                            <div class="sfmbm-title">
                                <a class="fs-2">オリジナル脚本</a>
                                <p class="fs-1h sfmbmt-overview">過去に上演した脚本たち。</p>
                                <p class="fs-1h sfmbmt-overview">中身を読むことも…！</p>
                            </div>
                        </div>
                    </div>
                    <img class="sfmb-image" src="<?php echo get_template_directory_uri(); ?>/images/daihon.png" alt="">
                </div>
                <div class="col-6 col-md-4 sfm-block bgc-blue-vp">
                    <div class="sfmb-modal bgc-blue-s-s">
                        <a class="sfmbm-linkdammy" href="http://localhost/category/gallery/"></a>
                        <div class="s-relative-dammy">
                            <div class="sfmbm-title">
                                <a class="fs-2">ギャラリー</a>
                                <p class="fs-1h sfmbmt-overview">撮った写真や書いたイラスト。</p>
                                <p class="fs-1h sfmbmt-overview">脚本の設定資料なんかも。</p>
                            </div>
                        </div>
                    </div>
                    <img class="sfmb-image" src="<?php echo get_template_directory_uri(); ?>/images/gallery.png" alt="">
                </div>
            </div>
        </div>
        <?php get_footer('front'); ?>