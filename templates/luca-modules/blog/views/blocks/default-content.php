<?php do_action($this->hook('block/before')); ?>

<div class="blockHeader">
  <h2 class="blockHeader_title">
    <?= __('From our Blog', 'luca'); ?>
  </h2>
</div>

<article class="postPreview col-verticalSpacing">

   <div class="postPreview_imageWrap">
     <a class="postPreview_image"
        title="<?= $data['title']; ?>"
        href="<?= $data['permalink']; ?>"
        style="<?php if ($data['image']): ?>background-image: url('<?= $data['image']['url']; ?>')<?php endif; ?>">
     </a> <!-- /.postPreview_image -->
  </div> <!-- /.postPreview_imageWrap -->

  <?php do_action($this->hook('single/before')); ?>

  <div class="postPreview_content">

    <div class="postPreview_text">
      <h2 class="postPreview_title">
        <a href="<?= $data['permalink']; ?>">
          <?= $data['title']; ?>
        </a>
      </h2> <!-- /.postPreview_title -->

      <div class="postPreview_meta">
        <?php $this->render('partials/postmeta', $data); ?>
      </div><!-- /.postPreview_meta -->

      <div class="postPreview_excerpt">
        <?= $data['excerpt']; ?>
      </div>
    </div> <!-- /.postPreview_text -->

  </div> <!-- /.postPreview_content -->
</article> <!-- /.postPreview -->

<?php do_action($this->hook('block/after')); ?>
