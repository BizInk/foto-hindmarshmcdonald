<?php
/**
 * Standard Page with Sidebar
 *
 * This is the standard page template with sidebar
 */
?>

<?php do_action('luca/theme/page-header'); ?>

<div class="section">
  <div class="container">
    <div class="row">
      <div class="pageContent pageContent-withSidebar">
        <?php do_action('luca/theme/page/content'); ?>
      </div> <!-- /.pageContent -->

      <div class="sidebar">
       <div class="sidebarContent">
          <?php do_action('luca/theme/page/sidebar'); ?>
        </div> <!-- /.sidebarContent -->

      </div> <!-- /.sidebar -->

    </div> <!-- /.row -->
  </div>
</div>
