<?php

if (have_posts()) {
    while (have_posts()) {
        the_post();
    }
}

?>


<div class="re-content" style="background-color: #ffffff;">
    <div class="re-content-inner-wrapper-thicker">

        <h1><? the_title()?></h1>

        <div class="re-page-content">
            <? the_content();?>
        </div>

    </div>
</div>