<?php $this->setLayoutVar('title', $user['user_name']); ?>

<h2><?php echo $this->escape($user['user_name']); ?></h2>

<?php if (!is_null($following)): ?>
<?php if ($following): ?>


<?php endif; ?>
<div id="statuses">
    <?php foreach ($statuses as $status) ?>
    <?php echo $this->render('status/status', array('status' => $status)); ?>
    <?php endforeach; ?>
</div>

