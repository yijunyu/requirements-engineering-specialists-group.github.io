<?php
get_header();

if (have_posts()) {
    while (have_posts()) {
        the_post();
    }
}

$categories = get_the_category();
$category = $categories[0]->slug;

?>

<div class="re-content" style="background-color: #ffffff;">
    <div class="re-content-inner-wrapper">

        <div class="re-post">
            <div class="re-post-title-wrapper">
                <div class="re-post-date">
                    <? $category == 'events' ? '' : the_date()?>
                </div>
                <div class="re-post-title">
                    <?= $category == 'events' ? 'Event: ' : ''?>
                    <? the_title()?>
                </div>
            </div>

            <div class="re-post-content">
                <? the_content()?>
            </div>

            <? if ($category != 'events'): ?>
            <div class="re-post-comments">
                <? comments_template()?>
            </div>
            <? endif; ?>
            
        </div>

    </div>
</div>

<?php
get_footer();
?>