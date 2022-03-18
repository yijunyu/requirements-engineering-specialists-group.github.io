<?php
$bannerContent = '';
$query = new WP_Query(array(
            'category_name' => 'banner',
            'post_status' => 'future'
        ));

while ($query->have_posts()) {
    $query->the_post();
    $bannerContent = $query->post->post_content;
}
wp_reset_query();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
        <script type="text/javascript" src="/wp-content/themes/resg-theme/js/jquery.js"></script>
        <script type="text/javascript" src="/wp-content/themes/resg-theme/js/jquery-corners.js"></script>
        <script type="text/javascript">
            $(function() {
                
                $('.re-menu-item').corner('width 4px;');
                $('.re-content').corner('width 4px;');
                $('#re-banner').corner('width 4px;');
            });
        </script>
        <link href="/wp-content/themes/resg-theme/layout/main.css" rel="stylesheet" type="text/css" />
    </head>
    <body>

        <div style="position: absolute; left: 0px; top: 0px;">
            <a href="http://www.bcs.org" target="_blank"><img class="bcs-logo" src="/wp-content/themes/resg-theme/images/bcs_logo.png" /></a>
        </div>

        <div class="re-content-outer-wrapper">

            <div class="re-content">
                <div class="re-content-inner-wrapper">

                    <div class="re-upper-header">
                        <div>
                            <div id="re-main-menu">
                                <div class="re-main-menu">
                                    <div class="re-menu-item-wrapper">
                                        <a class="re-menu-item" href="/events">
                                            <div class="re-menu-item-header">Events</div>
                                            <div class="re-menu-item-description">Forthcoming and past events, speakers slides</div>
                                        </a>
                                    </div>
                                    <div class="re-menu-item-wrapper">
                                        <a class="re-menu-item" href="/articles">
                                            <div class="re-menu-item-header">Articles</div>
                                            <div class="re-menu-item-description">Experience reports, book reviews & other</div>
                                        </a>
                                    </div>
                                    <div class="re-menu-item-wrapper">
                                        <a class="re-menu-item" href="/re-sources">
                                            <div class="re-menu-item-header">RE Sources</div>
                                            <div class="re-menu-item-description">RE groups, journals, conferences, etc.</div>
                                        </a>
                                    </div>
                                    <div class="re-menu-item-wrapper-last">
                                        <a class="re-menu-item" href="/researchers">
                                            <div class="re-menu-item-header">Researchers</div>
                                            <div class="re-menu-item-description">PhDs and early researchers, interesting tools</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a href="/"><img id="re-logo" src="/wp-content/themes/resg-theme/images/resg_logo.png" /></a>
                        </div>
                        <div style="clear: both;"></div>
                    </div>

                    <div class="re-lower-header">

                        <div id="re-banner">
                            <?= $bannerContent == '' ? '<img src="/wp-content/themes/resg-theme/images/resg-wordle.png" />' : $bannerContent?>
                        </div>

                        <div id="re-title">
                            <div id="re-about">
                                A special interest group for systems requirements engineers, researchers and students. Find out <a href="/about-us/" style="font-weight: bold;">who we are</a>.
                            </div>
                            <div id="re-join-content">
                                <a id="re-join-button" href="/join-resg">Join RESG</a>
                            </div>
                        </div>

                    </div>
                    <div style="clear: both;"></div>

                </div>
            </div>