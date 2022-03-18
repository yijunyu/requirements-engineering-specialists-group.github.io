<?php
get_header(); ?>

<div class="re-content" style="background-color: #ffffff;">
    <div class="re-content-inner-wrapper-thicker">

        <?php
        $page = get_page_by_path($_SERVER['REQUEST_URI']);
        $pageContent = $page->post_content;
        ?>

        <div style="width: 220px; float: right">
        <h1>Archives</h1>
        <div id="archives">
        <?php if ( dynamic_sidebar('home_right_1') ) : else : ?> <?php endif; ?>
        <h2>Search:</h2>
        <?php get_search_form();?>
        </div>
            <h1>Requirements Quarterly</h1>
            <p style="font-size: 13px; "><i>An Aladdin's Cave of articles and reviews:</i></p>
            <div style="font-size: 0.9em; padding-left: 5px; color: #333;">
                Issue 58 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ58.pdf">pdf</a>) | March 2012<br />
                Issue 57 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ57.pdf">pdf</a>) | September 2011<br />
                Issue 56 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ56.pdf">pdf</a>) | May 2011<br />
                Issue 55 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ55.pdf">pdf</a>) | September 2010<br />
                Issue 54 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ54.pdf">pdf</a>) | April 2010<br />
                Issue 53 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ53.pdf">pdf</a>) | January 2010<br />
                Issue 52 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ52.pdf">pdf</a>) | October 2009<br />
                Issue 51 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ51.pdf">pdf</a>) | April 2009<br />
                Issue 50 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ50.pdf">pdf</a>) | January 2009<br />
                Issue 49 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ49.pdf">pdf</a>) | October 2008<br />
                Issue 48 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ48.pdf">pdf</a>) | June 2008<br />
                Issue 47 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ47.pdf">pdf</a>) | March 2008<br />
                Issue 46 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ46.pdf">pdf</a>) | December 2007<br />
                Issue 45 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ45.pdf">pdf</a>) | September 2007<br />
                Issue 44 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ44.pdf">pdf</a>) | June 2007<br />
                Issue 43 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ43.pdf">pdf</a>) | March 2007<br />
                Issue 42 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ42.pdf">pdf</a>) | December 2006<br />
                Issue 41 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ41.pdf">pdf</a>) | September 2006<br />
                Issue 40 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ40.pdf">pdf</a>) | June 2006<br />
                Issue 39 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ39.pdf">pdf</a>) | March 2006<br />
                Issue 38 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ38.pdf">pdf</a>) | December 2005<br />
                Issue 37 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ37.pdf">pdf</a>) | September 2005<br />
                Issue 36 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ36.pdf">pdf</a>) | June 2005<br />
                Issue 35 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ35.pdf">pdf</a>) | March 2005<br />
                Issue 34 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ34.pdf">pdf</a>) | December 2004<br />
                Issue 33 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ33.pdf">pdf</a>) | September 2004<br />
                Issue 32 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ32.pdf">pdf</a>) | June 2004<br />
                Issue 31 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ31.pdf">pdf</a>) | March 2004<br />
                Issue 30 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ30.pdf">pdf</a>) | December 2003<br />
                Issue 29 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ29.pdf">pdf</a>) | August 2003<br />
                Issue 28 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ28.pdf">pdf</a>) | February 2003<br />
                Issue 27 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ27.pdf">pdf</a>) | November 2002<br />
                Issue 26 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ26.pdf">pdf</a>) | May 2002<br />
                Issue 25 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ25.pdf">pdf</a>) | January 2002<br />
                Issue 24 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ24.pdf">pdf</a>) | July 2001<br />
                Issue 23 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ23.pdf">pdf</a>) | March 2001<br />
                Issue 22 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ22.pdf">pdf</a>) | October 2000<br />
                Issue 21 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ21.pdf">pdf</a>) | July 2000<br />
                Issue 20 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ20.pdf">pdf</a>) | March 2000<br />
                Issue 19 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ19.pdf">pdf</a>) | December 1999<br />
                Issue 18 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ18.pdf">pdf</a>) | August 1999<br />
                Issue 17 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ17.pdf">pdf</a>) | June 1999<br />
                Issue 16 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ16.pdf">pdf</a>) | February 1999<br />
                Issue 15 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ15.pdf">pdf</a>) | October 1998<br />
                Issue 14 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ14.pdf">pdf</a>) | April 1998<br />
                Issue 13 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ13.pdf">pdf</a>) | January 1998<br />
                Issue 12 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ12.pdf">pdf</a>) | October 1997<br />
                Issue 11 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ11.pdf">pdf</a>) | July 1997<br />
                Issue 10 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ10.pdf">pdf</a>) | April 1997<br />
                Issue 09 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ9.pdf">pdf</a>) | January 1997<br />
                Issue 08 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ8.pdf">pdf</a>) | October 1996<br />
                Issue 07 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ7.pdf">pdf</a>) | July 1996<br />
                Issue 06 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ6.pdf">pdf</a>) | April 1996<br />
                Issue 05 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ5.pdf">pdf</a>) | January 1996<br />
                Issue 04 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ4.pdf">pdf</a>) | October 1995<br />
                Issue 03 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ3.pdf">pdf</a>) | April 1995<br />
                Issue 02 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ02.pdf">pdf</a>) | January 1995<br />
                Issue 01 (<a href="http://www.resg.org.uk/wp-content/uploads/2012/11/RQ01.pdf">pdf</a>) | October 1994<br />
            </div>
        </div>

        <div style="width: 580px;">
            <h1>Search Results</h1>

            <?= $pageContent?>

            <div style="margin-top: 30px; padding-left: 20px;">
			<?php if ( have_posts() ) : ?>
				<div id="post-0" class="post no-results not-found">
					<div class="entry-content">
						<?php  while (have_posts()):
                    the_post();
                    global $more;
                    $more = 0;
                    $articleTitle = get_the_title();
                    $categories = get_the_category();
					$output = '';
                    if($categories){
						foreach($categories as $category) {
							$output .= '<a href="'.get_category_link($category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
						}
					}
                    if (strpos($output,'Articles') !== false):
                    ?>

                    <div class="re-article">
                        <div class="re-article-title">
                            <a href="<?= get_permalink()?>"><?= $articleTitle?></a>
                        </div>
                        <div class="re-article-content">
                           <? 
								the_content('Read more &raquo;');
                            ?>
                        </div>
                    </div>
					<?php endif; ?>
                <? endwhile;?>
					</div><!-- .entry-content -->
				</div>
			<?php else : ?>
				<div id="post-0" class="post no-results not-found">
					<div class="entry-content">
						<p>No results</p>
					</div><!-- .entry-content -->
				</div><!-- #post-0 -->
			<?php endif; ?>
			
			
        <div style="clear: both;"></div>

    </div>
</div>


