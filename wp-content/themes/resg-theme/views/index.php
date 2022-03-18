<div class="re-content" style="background-color: #e5e5e5;">

    <div class="re-content-inner-wrapper-thicker" style="padding: 20px;">

        <div class="re-section">
            <div class="re-section-heading" style="margin-bottom: 5px;">
                <a href="/events">Upcoming RESG Events</a>
            </div>
            <div class="re-section-content">
                <table style="border-collapse: collapse;">
                    <?
                    query_posts(array('category_name' => 'events', 'post_status' => 'future', 'orderby' => 'date', 'order' => 'ASC'));
                    if (!have_posts()) {
                        echo "<div style=\"padding-top: 7px;\"><a href=\"http://www.resg.org.uk/join-resg\" style=\"font-weight: bold;\">Join RESG</a> to be notified of any future events!</div>";
                    }
                    while (have_posts()):
                        the_post();
                        ?>
                        <tr>
                            <td class="re-event-date"><?= the_date("M d, Y") ?></td>
                            <td class="re-event-title"><a href="<? the_permalink() ?>"><?= the_title() ?></a></td>
                        </tr>
                    <? endwhile; ?>
                </table>
            </div>
        </div>

        <div class="re-section">
            <div class="re-section-heading" style="margin-bottom: 5px;">
                <a href="/events">Recent RESG Events</a>
            </div>
            <div class="re-section-content">
                <table style="border-collapse: collapse;">
                    <?
                    $maxPosts = 4;
                    query_posts(array('category_name' => 'events'));
                    while (have_posts() && $maxPosts > 0):
                        $maxPosts--;
                        the_post();
                        ?>
                        <tr>
                            <td class="re-event-date"><?= the_date("M d, Y") ?></td>
                            <td class="re-event-title"><a href="<? the_permalink()?>"><?= the_title() ?></a></td>
                        </tr>
                    <? endwhile; ?>
                </table>
                <div style="padding: 12px 0 0 16px;">
                    <a href="http://www.resg.org.uk/events/">View all past events &rsaquo;</a>
                </div>
            </div>
        </div>

        
        <div class="re-section">
            <div class="re-section-heading" style="margin-bottom: 5px;">
                <a href="/events">Other Events of Interest</a>
            </div>
            <div class="re-section-content">
                <table style="border-collapse: collapse;">
                    <?
                    query_posts(array('category_name' => 'external', 'post_status' => 'future', 'orderby' => 'date', 'order' => 'ASC'));
                    if (!have_posts()) {
                        echo "<div style=\"padding-top: 7px;\"><a href=\"http://www.resg.org.uk/join-resg\" style=\"font-weight: bold;\"></div>";
                    }
                    while (have_posts()):
                        the_post();
                        ?>
                        <tr>
                            <td class="re-event-date"><?= the_date("M d, Y") ?></td>
                            <td class="re-event-title"><a href="<? the_permalink() ?>"><?= the_title() ?></a></td>
                        </tr>
                    <? endwhile; ?>
                </table>
            </div>
        </div>


        <div class="re-section" style="padding-bottom: 3px;">
            <div class="re-section-heading" style="margin-bottom: 15px;">
                <a href="/articles">Latest Articles</a>
            </div>
            <div class="re-section-content">

                <?
                query_posts('category_name=articles&posts_per_page=3');
                while (have_posts()):
                    the_post();
                    global $more;
                    $articleTitle = get_the_title();
                    ?>

                        <div class="re-article-title">
                            <a href="<?= get_permalink() ?>"><?= $articleTitle ?></a>
                            <!--<span class="re-articles-date" style="text-align: left; font-weight: normal;">(2 July 2012)</span>-->
                        </div>
                        <div class="re-article-content">
                            <? the_content('Read more &raquo;') ?>
                        </div>

                <? endwhile; ?>
            </div>
        </div>
<div style="text-align: right; padding-right: 4px;">
	<a href="mailto:d.stefan@ucl.ac.uk">Contact the webmaster</a>
</div>
    </div>
</div>