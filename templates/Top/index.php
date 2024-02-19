<?= $this->Html->script([
    'top/index.js',
]) ?>

<?= $this->Form->button('debounce テストボタン', [
    'type' => 'button',
    'id' => 'test-debounce',
    'class' => [
        'btn',
        'btn-primary',
    ],
]) ?>
