<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proffesion[]|\Cake\Collection\CollectionInterface $proffesion
 */
?>
<div class="proffesion index content">
    <?= $this->Html->link(__('New Proffesion'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Proffesion') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('level') ?></th>
                    <th><?= $this->Paginator->sort('effect_date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($proffesion as $proffesion): ?>
                <tr>
                    <td><?= $this->Number->format($proffesion->id) ?></td>
                    <td><?= h($proffesion->description) ?></td>
                    <td><?= $this->Number->format($proffesion->level) ?></td>
                    <td><?= h($proffesion->effect_date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $proffesion->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $proffesion->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $proffesion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proffesion->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
