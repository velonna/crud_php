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
            <?= $this->Html->link(__('List Proffesion'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="proffesion form content">
            <?= $this->Form->create($proffesion) ?>
            <fieldset>
                <legend><?= __('Add Proffesion') ?></legend>
                <?php
                    echo $this->Form->control('description');
                    echo $this->Form->control('level');
                    echo $this->Form->control('effect_date');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
