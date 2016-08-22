<tr class="product-row" <?php post_class(); ?>>

    <td class="product-img"><?php do_action( 'woocommerce_before_shop_loop_item_title' ); ?></td><!-- Featured Image -->
    <td class="product-title">
        <?php do_action( 'woocommerce_before_shop_loop_item' ); ?><!-- Permalink Start-->
        <?php do_action( 'woocommerce_shop_loop_item_title' ); ?><!-- Title -->
        <?php the_excerpt(); ?><!-- Short Description -->
        <?php do_action( 'woocommerce_after_shop_loop_item' ); ?><!-- Add to cart & Permalink End -->
    </td><!-- Title -->
    <td class="product-price"><?php do_action( 'woocommerce_after_shop_loop_item_title' ); ?></td><!-- Price -->
</tr>