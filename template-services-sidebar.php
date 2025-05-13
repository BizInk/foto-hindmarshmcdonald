<?php
/**
 * Template Name: Services with Sidebar
 */
?>

<?php do_action('luca/theme/page-header'); ?>

<div class="section">
  <div class="container">
    <div class="row">
      <div class="pageContent pageContent-withSidebar">

        <?php if (get_field('services_block_title')): ?>
        <div class="blockHeader">
          <h2 class="blockHeader_title"><?= get_field('services_block_title'); ?></h2>
        </div>
        <?php endif; ?>

        <?php if (get_field('services_content')): ?>
        <div class="pageContent_section">
          <div class="u-editorContent">
            <?= get_field('services_content'); ?>
          </div>
        </div>
        <?php endif; ?>

        <?php if( have_rows('services') ): $i = 0; ?>
        <div class="pageContent_section">
          <?php while ( have_rows('services') ) : the_row(); $i++; ?>
          <div class="collapseBlock collapseBlock-services">

            <a href="#collapseBlock-<?= $i; ?>" class="collapseBlock_header collapsed" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseExample">
              <h3 class="collapseBlock_title"><?= get_sub_field('title'); ?></h3>

              <div class="collapseBlock_transformIcon">
                <div class="transformIconPlus">
                  <span class="transformIconPlus_icon transformIconPlus_icon-minus">
                    <svg class="transformIconPlus_shape">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-minus"></use>
                    </svg>
                  </span>
                  <span class="transformIconPlus_icon transformIconPlus_icon-plus">
                    <svg class="transformIconPlus_shape">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-plus"></use>
                    </svg>
                  </span>
                </div>
              </div><!-- /.collapseBlock_transformIcon -->
            </a><!-- /.collapseBlock_header -->

            <div id="collapseBlock-<?= $i; ?>" class="collapseBlock_collapse collapse" aria-expanded="false">

              <div class="collapseBlock_content">

                <div class="collapseBlock_body">
                  <div class="u-editorContent">
                    <?= get_sub_field('description'); ?>
                  </div>
                </div><!-- /.collapseBlock_body -->

              </div><!-- /.collapseBlock_content -->

            </div><!-- /.collapseBlock_collapse -->

          </div><!-- /.collapseBlock -->
          <?php endwhile; ?>
        </div>
        <?php endif; ?>

      </div> <!-- /.pageContent -->

      <div class="sidebar">
        <div class="sidebarContent">
          <?php do_action('luca/theme/page/sidebar'); ?>
        </div> <!-- /.sidebarContent -->

      </div> <!-- /.sidebar -->

    </div> <!-- /.row -->
  </div>
</div>