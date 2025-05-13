<div class="infoBlock">
 
  <?php if ($data['company_name']): ?>
    <h3 class="infoBlock_item infoBlock_item-title">
      <?= $data['company_name']; ?>
    </h3>
  <?php endif; ?>

  <?php if ($data['address']): ?>
    <span class="infoBlock_item">
      <?= $data['address']; ?>
    </span>
  <?php endif; ?>

  <?php if ($data['phone']): ?>
    <a href="tel:<?= $data['phone']; ?>" class="infoBlock_item infoBlock_item-link">
      <?= $data['phone']; ?>
    </a>
  <?php endif; ?>

  <?php if ($data['email']): ?>
    <a href="mailto:<?= $data['email']; ?>" class="infoBlock_item infoBlock_item-link">
      <?= $data['email']; ?>
    </a>
  <?php endif; ?>

</div><!-- /.infoBlock -->
