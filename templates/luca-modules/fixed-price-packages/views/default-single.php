<div class="col-sm-6  <?= $data['grid_class']; ?> col-verticalSpacing u-smartClear">
  <div class="panel">

    <?php do_action($this->hook('single/before')); ?>

    <div class="panel_header">

      <h2 class="panel_title">
        <?= $data['title']; ?>
      </h2> <!-- /.panel_title -->

    </div> <!-- /.panel_header -->

    <div class="panel_body">

      <?php if ($data['price']): ?>

      <div class="panel_section">
        <div class="panel_meta">
          <?php if ($data['label_price_from']): ?>
          <span class="panel_text">
            <?php _e('Price from:', 'luca'); ?>
          </span>
          <?php endif; ?>

          <?php // todo: price formatting ?>
        <span class="metaBar_highlight">
          <?php if (get_field('currency', 'option') === 'GBP'): ?>
            <?php _e('£', 'luca'); ?><?= $data['price'] ?>
          <?php elseif (get_field('currency', 'option') === 'EUR'): ?>
            <?= $data['price'] ?><?php _e('€', 'luca'); ?>
          <?php else: ?>
            <?php _e('$', 'luca'); ?><?= $data['price'] ?>
          <?php endif; ?>
        </span>
        
        <?php if ($data['label_gst']): ?>
          <span class="metaBar_highlight">
            <?php if (in_array(get_field('region', 'option'), ['au', 'nz'])): ?>
              <?php _e('+ GST', 'luca'); ?>
            <?php elseif (in_array(get_field('region', 'option'), ['uk'])): ?>
              <?php _e('+ VAT', 'luca'); ?>
            <?php endif; ?>
          </span>
        <?php endif; ?>

        <?php if (empty($data['label_per_period'])): // support for deprecated functionality ?>
          <?php if ($data['label_per_month']): ?>
            <span class="metaBar_text">
              <?php _e('per month', 'luca'); ?>
            </span>
          <?php endif; ?>

          <?php if ($data['label_per_year']): ?>
            <span class="metaBar_text">
              <?php _e('per year', 'luca'); ?>
            </span>
          <?php endif; ?>
        <?php else: ?>
          <?php if ('per_day' === $data['label_per_period']): ?>
            <span class="metaBar_text">
              <?php _e('per day', 'luca'); ?>
            </span>
          <?php elseif ('per_week' === $data['label_per_period']): ?>
            <span class="metaBar_text">
              <?php _e('per week', 'luca'); ?>
            </span>
          <?php elseif ('per_month' === $data['label_per_period']): ?>
            <span class="metaBar_text">
              <?php _e('per month', 'luca'); ?>
            </span>
          <?php elseif ('per_year' === $data['label_per_period']): ?>
            <span class="metaBar_text">
              <?php _e('per year', 'luca'); ?>
            </span>
          <?php endif; ?>

        <?php endif; ?>
        </div> <!-- /.panel_meta -->
      </div><!-- /.panel_section -->

      <?php endif; ?>

      <?php if ($data['summary']): ?>
      <div class="panel_section">
        <?= $data['summary']; ?>
      </div> <!-- /.panel_section -->
      <?php endif; ?>

      <?php if (count($data['features'])): ?>

      <div class="panel_section">

        <ul class="bulletList">

          <?php foreach ($data['features'] as $feature): ?>
          <li class="bulletList_item">

            <div class="bulletList_bullet">
              <div class="u-scalingSvg">
                <svg class="u-scalingSvg_shape">
                  <use xlink:href="#shape-tick" />
                </svg>
              </div>
            </div> <!-- /.bulletList_bullet -->

            <?= $feature['feature']; ?>

          </li> <!-- /.bulletList_item -->
          <?php endforeach; ?>

        </ul> <!-- /.bulletList -->

      </div> <!-- /.panel_section -->


      <?php endif; ?>

    </div> <!-- /.panel_body -->

    <div class="panel_footer">

      <?php if ($data['btn_label'] && $data['btn_url']): ?>
        <a href="<?= $data['btn_url']; ?>" title="<?= $data['btn_label']; ?>" class="panel_button <?= $data['btn_class']; ?>">
          <?= $data['btn_label']; ?>
        </a> <!-- /.panel_button -->
      <?php endif; ?>

    </div> <!-- /.panel_footer -->

    <?php do_action($this->hook('single/after')); ?>

  </div> <!-- /.panel -->
</div> <!-- /.col -->
