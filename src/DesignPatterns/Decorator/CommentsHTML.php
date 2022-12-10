<body>
<!-- Block BEGIN.
Type: <?= get_class($this->block) ?>,
ID: <?= spl_object_hash($this->block) ?>,
Length: <?= $this->getLength() ?>-->

<?= $this->block->render() ?>

<!-- Block END.
Type: <?= get_class($this->block) ?>,
ID: <?= spl_object_hash($this->block) ?> -->
</body>
