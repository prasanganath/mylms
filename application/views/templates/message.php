<div class="ui middle aligned center aligned grid">
  <div class="column">
<?php if($type == 'negative'): ?>
    <div class="ui icon negative message">
      <i class="meh outline icon"></i>
<?php else: ?>
    <div class="ui icon message">
      <i class="smile outline icon"></i>
<?php endif; ?>
      <div class="content">
        <div class="header">
          <?= $message_title ?>
        </div>
        <p>You will be redirected to the next page in
        <span id="eta">5</span> seconds. click <a href="<?= site_url($redirect) ?>">here</a>
        If you don't want to wait</p>
      </div>
    </div>
  </div>
</div>
