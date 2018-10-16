<?php
/**
 * Provides a 'Copyright Footer' Block
 *
 * @Block(
 *   id = "auto_copyright_footer_block",
 *   admin_label = @Translation("Auto copyright footer block"),
 * )
 */

namespace Drupal\auto_copyright_footer\Plugin\Block;

use Drupal\Core\Block\BlockBase;

class AutoCopyrightFooter extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
  	$site_config = \Drupal::config('system.site');
    return array(
      '#markup' => $this->t('<p>Content copyright &copy; ').(date("Y")).t(' ').$site_config->get('name').t('. All rights reserved. Having a problem with the site or this page? <u><a href="/contact">Please click here to contact us</a></u></p>'),
    );
  }
}
?>
