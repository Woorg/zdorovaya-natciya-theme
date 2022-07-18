<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class('page'); ?>>
    <?php wp_body_open(); ?>
    <?php do_action('get_header'); ?>

    <div id="app" class="page__wrapper">

      <?php echo view(app('sage.view'), app('sage.data'))->render(); ?>

      <div class="page__footer">
        <?php do_action('get_footer'); ?>
        <?php wp_footer(); ?>
      </div>
      <!-- end page footer -->
    </div>
    <!-- end page wrapper -->

  </body>
</html>
