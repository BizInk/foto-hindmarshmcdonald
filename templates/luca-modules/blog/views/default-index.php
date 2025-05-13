<?php if (count($data['posts'])): ?>
  <div class="posts">
    <div class="row">

      <?php foreach ($data['posts'] as $post): ?>
        <div class="col-sm-6 col-lg-4 col-verticalSpacing u-smartClear">
          <?php $this->render('default-single-list', $post); ?>
        </div>
      <?php endforeach; ?>

    </div>
  </div><!-- /.posts -->

  <div class="pagination">
    <?= $data['pagination']; ?>
  </div>

<?php endif; ?>
