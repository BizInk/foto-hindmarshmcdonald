<?
/**
 * Single Team Member template
 */
?>
<?php do_action('luca/theme/page-header'); ?>

<div class="section">
  <div class="container">
    <div class="row">

      <div class="sidebar">
        <div class="sidebarContent">
          <?php do_action('luca/theme/team/single/sidebar'); ?>
        </div> <!-- /.sidebarContent -->
      </div> <!-- /.sidebar -->

      <div class="pageContent pageContent-withSidebar">
        <?php do_action('luca/theme/team/single/content'); ?>
      </div> <!-- /.pageContent -->

    </div> <!-- /.row -->
  </div>
</div>
