<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proffesion $proffesion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Proffesion'), ['action' => 'edit', $proffesion->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Proffesion'), ['action' => 'delete', $proffesion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proffesion->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Proffesion'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Proffesion'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="proffesion view content">
            <h3><?= h($proffesion->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($proffesion->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($proffesion->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Level') ?></th>
                    <td><?= $this->Number->format($proffesion->level) ?></td>
                </tr>
                <tr>
                    <th><?= __('Effect Date') ?></th>
                    <td><?= h($proffesion->effect_date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
