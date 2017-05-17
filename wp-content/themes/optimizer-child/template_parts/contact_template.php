<?php
/*
Template Name: contact Page
*/
global $optimizer;?>

<?php get_header(); ?>


    <div class="page_wrap layer_wrapper">

        <!--CUSTOM PAGE HEADER STARTS-->
            <?php get_template_part('framework/core','pageheader'); ?>
        <!--CUSTOM PAGE HEADER ENDS-->

        <div id="content">
            <div class="center">
                <div class="single_wrap<?php if ( !is_active_sidebar( 'sidebar' ) ) { ?> no_sidebar<?php } ?>">
                    <div class="single_post">
                        <?php if(have_posts()): ?><?php while(have_posts()): ?><?php the_post(); ?>




                        <!--PAGE CONTENT START-->
                        <div class="single_post_content">

                                <!--THE CONTENT START-->
                                    <div class="thn_post_wrap">
                                        <?php the_content(); ?>
                                    </div>
                                        <div style="clear:both"></div>
                                    <div class="thn_post_wrap wp_link_pages">
                                        <?php wp_link_pages('<p class="pages"><strong>'.__('Pages:', 'optimizer').'</strong> ', '</p>', 'number'); ?>
                                    </div>
                                <!--THE CONTENT END-->
                        </div>
                        <!--PAGE CONTENT END-->


                        </div>

                   <?php endwhile ?>
                    </div>




                  <?php endif ?>

                    </div>

                <!--PAGE END-->


                <!--SIDEBAR START-->
                    <?php get_sidebar(); ?>
                <!--SIDEBAR END-->

                    </div>
            </div>
    </div><!--layer_wrapper class END-->

<?php get_footer(); ?>
