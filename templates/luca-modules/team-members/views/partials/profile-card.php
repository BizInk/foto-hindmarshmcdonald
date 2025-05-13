<div class="profileCard">
  <?php do_action($this->hook('single/before')); ?>

  <div class="profileCard_imageWrap">

    <?php if (isset($data['args']['show_links']) && $data['args']['show_links']): ?>
      <a href="<?= $data['permalink']; ?>" class="profileCard_image" style="<?php if ($data['image']): ?>background-image: url('<?= $data['image']['url']; ?>')<?php endif; ?>">
      </a>
    <?php else: ?>
      <div class="profileCard_image" style="<?php if ($data['image']): ?>background-image: url('<?= $data['image']['url']; ?>')<?php endif; ?>">
      </div>
    <?php endif; ?>


  </div> <!-- /.profileCard_imageWrap -->

  <div class="profileCard_content">

    <h3 class="profileCard_title">

      <?php if (isset($data['args']['show_links']) && $data['args']['show_links']): ?>
        <a href="<?= $data['permalink']; ?>">
      <?php endif; ?>

      <?= $data['title']; ?>

      <?php if (isset($data['args']['show_links']) && $data['args']['show_links']): ?>
        </a>
      <?php endif; ?>

    </h3>

    <?php if ($data['position']): ?>
      <div class="profileCard_position"><?=  $data['position']; ?></div>
    <?php endif; ?>

    <div class="profileCard_info">

      <?php if ($data['email']): ?>
        <a href="mailto:<?= $data['email']; ?>" class="profileCard_icon">
          <div class="u-scalingSvg" style="padding-bottom: 88%;">
            <svg class="u-scalingSvg_shape">
              <use xlink:href="#shape-envelope" />
            </svg>
          </div>
        </a>
      <?php endif; ?>

      <?php if ($data['linkedin']): ?>
        <a class="profileCard_icon" href="<?= $data['linkedin']; ?>">
          <div class="u-scalingSvg" style="padding-bottom: 88%;">
            <svg class="u-scalingSvg_shape">
              <use xlink:href="#shape-linkedin" />
            </svg>
          </div>
        </a>
      <?php endif; ?>

      <?php if ($data['twitter']): ?>
        <a class="profileCard_icon" href="<?= $data['twitter']; ?>">
          <div class="u-scalingSvg" style="padding-bottom: 88%;">
            <svg class="u-scalingSvg_shape" xmlns="http://www.w3.org/2000/svg"  aria-label="Twitter - X" width="14" height="14" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
              <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z"></path>
            </svg>
          </div>
        </a>
      <?php endif; ?>

      <?php if ($data['facebook']): ?>
        <a class="profileCard_icon" href="<?= $data['facebook']; ?>">
          <div class="u-scalingSvg" style="padding-bottom: 88%;">
            <svg class="u-scalingSvg_shape">
              <use xlink:href="#shape-facebook" />
            </svg>
          </div>
        </a>
      <?php endif; ?>

      <?php if ($data['instagram']) : ?>
        <a href="<?= $data['instagram']; ?>" class="socialIcons_icon socialIcons_icon-instagram" target="_blank" aria-label="Instagram">
          <div class="u-scalingSvg" style="padding-bottom: 88%;" aria-hidden="true">
            <svg class="u-scalingSvg_shape" x="0px" y="0px" width="299.5px" height="299.5px" viewBox="0 -275.5 299.5 299.5" enable-background="new 0 -275.5 299.5 299.5" xml:space="preserve">
              <path d="M149.751-214.478c28.9,0,32.326,0.106,43.742,0.63c29.332,1.334,43.039,15.252,44.378,44.368
                c0.52,11.412,0.616,14.838,0.616,43.739c0,28.909-0.105,32.326-0.616,43.734c-1.349,29.094-15.01,43.038-44.378,44.377
                c-11.416,0.52-14.824,0.625-43.742,0.625c-28.901,0-32.327-0.105-43.739-0.625c-29.403-1.348-43.033-15.327-44.368-44.377
                c-0.524-11.416-0.63-14.833-0.63-43.743c0-28.901,0.115-32.318,0.63-43.739c1.344-29.107,15.01-43.034,44.368-44.369
                C117.432-214.372,120.85-214.478,149.751-214.478z M149.751-233.989c-29.395,0-33.076,0.128-44.619,0.648
                c-39.313,1.805-61.158,23.615-62.964,62.962c-0.528,11.553-0.656,15.234-0.656,44.628s0.128,33.084,0.647,44.624
                c1.806,39.321,23.615,61.166,62.963,62.963c11.553,0.528,15.234,0.652,44.629,0.652c29.394,0,33.084-0.124,44.633-0.652
                c39.269-1.797,61.175-23.607,62.944-62.963c0.538-11.54,0.661-15.23,0.661-44.624s-0.123-33.076-0.652-44.619
                c-1.761-39.277-23.606-61.158-62.945-62.963C182.835-233.861,179.145-233.989,149.751-233.989z M149.751-181.332
                c-30.693,0-55.582,24.889-55.582,55.582c0,30.689,24.889,55.59,55.582,55.59c30.688,0,55.581-24.884,55.581-55.59
                C205.332-156.443,180.439-181.332,149.751-181.332z M149.751-89.67c-19.925,0-36.08-16.146-36.08-36.08
                c0-19.925,16.155-36.08,36.08-36.08s36.079,16.155,36.079,36.08C185.83-105.816,169.676-89.67,149.751-89.67z M207.534-196.513
                c-7.188,0-13.001,5.818-13.001,12.992c0,7.17,5.813,12.988,13.001,12.988c7.17,0,12.983-5.818,12.983-12.988
                C220.518-190.695,214.704-196.513,207.534-196.513z" />
            </svg>
          </div>
        </a>
      <?php endif; ?>

    </div> <!-- /.profileCard_info -->


    <div class="profileCard_phone">
      <?php if ($data['phone']): ?>
        <?= $data['phone']; ?>
      <?php else: ?>
        &nbsp;
      <?php endif; ?>
    </div> <!-- /.profileCard_phone -->


    <?php if (isset($data['args']['show_links']) && $data['args']['show_links']): ?>
      <div class="profileCard_footer">
        <a href="<?= $data['permalink']; ?>" class="profileCard_link">Full profile &raquo;</a>
      </div>
    <?php endif; ?>

  </div> <!-- /.profileCard_content -->

  <?php do_action($this->hook('single/after')); ?>
</div> <!-- /.profileCard -->
