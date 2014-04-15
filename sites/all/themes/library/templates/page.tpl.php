<?php

/**
 * @file
 * Library's theme implementation to display a single Drupal page.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see library_process_page()
 * @see html.tpl.php
 */
?>
<div class="container-fluid">
  <header class="row">
    <div class="col-md-4">
    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
    <?php endif; ?>
    </div>
    
    <?php print render($page['header']); ?>
    
    <?php if ($main_menu): ?>
      <div class="col-md-12">
        <navbar class="navbar navbar-default" role="navigation">
          <?php print theme('links__system_main_menu', array(
            'links' => $main_menu,
            'attributes' => array(
              'id' => 'main-menu-links',
              'class' => array('nav', 'navbar-nav'),
            ),
          ));
          ?>
        </navbar>
      </div>
    <?php endif; ?>
  </header>

  <?php if ($breadcrumb): ?>
  <div class="row">
    <div class="col-md-12">
      <?php print $breadcrumb; ?>
    </div>
  </div>
  <?php endif; ?>

  <?php if ($message): ?>
  <div class="row">
    <div class="col-md-12">
      <?php print $message; ?>
    </div>
  </div>
  <?php endif; ?>

  <div class="row">
    <div class="col-md-12">
      <?php print render($page['content']); ?>
    </div>
  </div>

  <footer class="row">
    <div class="col-md-8">
      <address>
        541004<br>
        <?php print t('No.15 Yucai Road, Guilin, Guangxi, China'); ?><br>
        +86 773 5858565 8510<br>
        &copy 2014<?php print date('Y') != '2014' ? ' - ' . date('Y') : ' ' ?><?php print t('<a href="@copyright">Guangxi Normal University Library</a>', array('@copyright' => $front_page));?>.<?php print t('All rights reserved') ?>.
      </address>
    </div>
  </footer>
</div>
