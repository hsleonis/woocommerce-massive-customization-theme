<?php
/**
 * Template name: Restaurant
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php
        do_action ( 'tmx_before_content' );
        ?>
        <table class="product-tbl">
                <tr class="product-heading">
                    <td><?php _e('Preview','tmx'); ?></td>
                    <td><?php _e('Product Name','tmx'); ?></td>
                    <td><?php _e('Price','tmx'); ?></td>
                </tr>
                <?php
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 50
                );
                $loop = new WP_Query( $args );
                if ( $loop->have_posts() ) {
                    while ( $loop->have_posts() ) : $loop->the_post();
                        get_template_part( 'table' );
                    endwhile;
                } else {
                    echo '<td colspan="3">'.__( 'No products found' ).'</td>';
                }
                wp_reset_postdata();
                ?>
        </table><!--/.products-->
    </main><!-- .site-main -->

    <?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
