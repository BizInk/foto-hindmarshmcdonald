<article class="postPreview postPreview-stacked">

   <div class="postPreview_imageWrap">
     <a class="postPreview_image"
        title="<?= $data['title']; ?>"
        href="<?= $data['permalink']; ?>"
        style="<?php if ($data['image']): ?>background-image: url('<?= $data['image']['url']; ?>')<?php endif; ?>">
     </a> <!-- /.postPreview_image -->
  </div> <!-- /.postPreview_imageWrap -->

  <div class="postPreview_content">

    <div class="postPreview_text">
      <h3 class="postPreview_title">
        <a href="<?= $data['permalink']; ?>">
          <?= $data['title']; ?>
        </a>
      </h3> <!-- /.postPreview_title -->

      <div class="postPreview_meta">
        <?php $this->render('partials/postmeta', $data); ?>
      </div><!-- /.postPreview_meta -->

      <div class="postPreview_excerpt">
        <?= $data['excerpt']; ?>
      </div>
    </div> <!-- /.postPreview_text -->

  </div> <!-- /.postPreview_content -->

</article> <!-- /.postPreview -->
