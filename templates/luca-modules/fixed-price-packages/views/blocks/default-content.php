<?php if (count($data['packages'])): ?>

  <div id="<?= $this->block_id; ?>" class="<?= $data['modifier']; ?> row">
  
    <?php do_action($this->hook('block/before')); ?>
    
    <div class="blockHeader">
      <h2 class="blockHeader_title"><?= $data['title']; ?></h2>
      <div class="sectionSummary">
        <?= $data['summary']; ?>    
      </div>
    </div>
    
    <div class="packages" style="overflow:hidden">
      <?php foreach ($data['packages'] as $package):
      global $post;
      $post = $package['post'];
      setup_postdata($post);

      $this->render('default-single', $package);
      wp_reset_postdata();

      endforeach; ?>
    </div>
    
    <div class="blockHeader" style="margin-top: 30px;">
      <div class="sectionSummary">
        <?= $data['summary_after']; ?>    
      </div>
    </div>

    <?php do_action($this->hook('block/after')); ?>
    
  </div>

<?php endif; ?>