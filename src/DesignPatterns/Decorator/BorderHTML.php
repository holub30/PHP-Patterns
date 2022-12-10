<head>
    <style>
        .<?= $this->block->class ?> {
            border-style: solid;
            border-width: <?= $this->borderWidth ?>px;
            border-color: <?= $this->borderColor ?>;
        }
    </style>
</head>
<body>
<?= $this->block->render() ?>
</body>
