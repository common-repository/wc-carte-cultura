<?php
/**
 * ilGhera Notice class extension
 *
 * @author ilGhera
 * @package ilghera-notice/ 
 * @since 1.0.1
 */

/* The extension */
class WCCC_Notice extends Ilghera_Notice {

    /**
     * The construct
     */
    public function __construct() {

        $this->products[] = array(
            'name' => 'WooCommerce Carte Cultura - Premium',
            'slug' => 'woocommerce-carte-cultura-premium',
            'sign' => 'wccc',
            'domain' => '',
        );

        add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ) );

        $this->check_license();

    }

}
new WCCC_Notice();

