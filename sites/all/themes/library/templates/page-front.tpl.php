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
    <?php if ($logo): ?>
      <div class="col-md-8">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      </div>
    <?php endif; ?>

    <?php if ($site_name || $site_slogan): ?>
      <div class="col-md-8"<?php if ($hide_site_name && $hide_site_slogan) { print ' class="text-hide"'; } ?>>
        <?php if ($site_name): ?>
          <h1<?php if ($hide_site_name) { print ' class="text-hide"'; } ?>>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a>
            <?php if ($site_slogan): ?>
              <small<?php if ($hide_site_slogan) { print ' class="text-hide"'; } ?>>
                <?php print $site_slogan; ?>
              </small>
            <?php endif; ?>
          </h1>
        <?php endif; ?>
      </div>
    <?php endif; ?>
    
    <div class="col-md-4">
      <?php print render($page['header']); ?>
    </div>
  </header>
    
  <?php if ($main_menu): ?>
    <div class="row">
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
    </div>
  <?php endif; ?>

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

  <?php if ($page['feature']): ?>
  <div class="row">
    <div class="col-md-12">
      <?php print render($page['feature']); ?>
    </div>
  </div>
  <?php endif; ?>

  <?php if ($page['highlighted']): ?>
  <div class="row">
    <div class="col-md-12">
      <?php print render($page['highlighted']); ?>
    </div>
  </div>
  <?php endif; ?>

  <?php if ($page['help']): ?>
  <div class="row">
    <div class="col-md-12">
      <?php print render($page['help']); ?>
    </div>
  </div>
  <?php endif; ?>

  <?php if ($page['search_box'] || $page['slideshow']): ?>
  <div class="row">
    <div class="col-md-8">
      <?php print render($page['search_box']); ?>
    </div>
    <div class="col-md-4">
      <?php print render($page['slideshow']); ?>
    </div>
  </div>
  <?php endif; ?>

  <?php if ($page['triptyth_first'] || $page['triptyth_middle'] || $page['triptyth_last']): ?>
  <div class="row">
    <div class="col-md-4">
      <?php print render($page['triptyth_first']); ?>
    </div>
    <div class="col-md-4">
      <?php print render($page['triptyth_middle']); ?>
    </div>
    <div class="col-md-4">
      <?php print render($page['triptyth_last']); ?>
    </div>
  </div>
  <?php endif; ?>

  <?php if ($page['resource'] || $page['guide']): ?>
  <div class="row">
    <div class="col-md-8">
      <?php print render($page['resource']); ?>
    </div>
    <div class="col-md-4">
      <?php print render($page['guide']); ?>
    </div>
  </div>
  <?php endif; ?>

  <?php if ($page['service'] || $page['communication']): ?>
  <div class="row">
    <div class="col-md-8">
      <?php print render($page['service']); ?>
    </div>
    <div class="col-md-4">
      <?php print render($page['communication']); ?>
    </div>
  </div>
  <?php endif; ?>

  <footer class="row">
    <div class="col-md-8">
      <?php if ($page['friendly_links']): ?>
        <div>
          <?php print $page['friendly_links']; ?>
        </div>
      <?php endif; ?>
      <address>
        541004<br>
        <?php print t('No.15 Yucai Road, Guilin, Guangxi, China'); ?><br>
        +86 773 5858565 8510<br>
        &copy 2014<?php print date('Y') != '2014' ? ' - ' . date('Y') : ' ' ?><?php print t('<a href="@copyright">Guangxi Normal University Library</a>', array('@copyright' => $front_page));?>.<?php print t('All rights reserved') ?>.
      </address>
    </div>
    <div class="col-md-4">
      <?php print t('<a href="@staff" class="btn btn-default">Staff Entrance</a>', array('@staff' => url('user', array('absolute' => TRUE)))); ?>
    </div>
  </footer>
</div>
