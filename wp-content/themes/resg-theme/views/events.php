
<div class="re-content" style="background-color: #ffffff;">
    <div class="re-content-inner-wrapper-thicker">

        <?php
        $page = get_page_by_path($_SERVER['REQUEST_URI']);
        $pageContent = $page->post_content;
        ?>

        <h1>RESG Events</h1>

        <?= $pageContent ?>

        <div style="margin-top: 30px; padding: 0 20px;">
            <h2 style="margin-top: 25px; border-bottom: dashed 1px #777; padding-bottom: 3px;">Forthcoming Events</h2>
            <table>
                <?
                query_posts(array('category_name' => 'events', 'post_status' => 'future'));
                while (have_posts()):
                    the_post();
                    ?>
                    <tr>
                        <td class="re-event-date"><?= the_date("M d, Y") ?></td>
                        <td class="re-event-title"><a href="<? the_permalink()?>"><?= the_title() ?></a></td>
                    </tr>
                <? endwhile; ?>
            </table>

            <h2 style="margin-top: 25px; border-bottom: dashed 1px #777; padding-bottom: 3px;">Past Events</h2>
            <table>
                <?
                query_posts(array('category_name' => 'events'));
                while (have_posts()):
                    the_post();
                    ?>
                    <tr>
                        <td class="re-event-date"><?= the_date("M d, Y") ?></td>
                        <td class="re-event-title"><a href="<? the_permalink()?>"><?= the_title() ?></a></td>
                    </tr>
                <? endwhile; ?>
            </table>

        </div>

    </div>
</div>