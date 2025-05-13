<article class="article">

  <?php do_action($this->hook('single/before')); ?>

  <div class="article_content">

    <h2 class="article_title">
      <?= $data['title']; ?>
    </h2> <!-- /.article_title -->

    <div class="article_meta">
      <?php $this->render('partials/postmeta', $data); ?>
    </div> <!-- /.article_meta -->

    <div class="article_text u-editorContent">
      <?= apply_filters('the_content',$data['content']); ?>
    </div> <!-- /.article_text -->

  </div> <!-- /.article_content -->

  <?php do_action($this->hook('single/after')); ?>

</article><!-- /.article -->

<div class="pageNav">
  <div class="pageNav_wrapper">
    <div class="pageNav_links">
      <?php previous_post_link('<span class="pageNav_previous">%link</span>', '< Previous'); ?>
      <?php next_post_link('<span class="pageNav_next">%link</span>', 'Next >'); ?>
    </div> <!-- /.pageNav_links -->
  </div>
</div> <!-- /.pageNav -->
