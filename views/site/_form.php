<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

/* @var $this yii\web\View */
/* @var $model app\models\Contacts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contacts-form">
    <?php $form = ActiveForm::begin(); ?>
    <div class="contact">
        <div class="title-item">Добавить контакт</div>
    </div>
    <div class="form-wrap">
        <?= $form->field($model, 'name')->textInput(['placeholder' => $model->getAttributeLabel('Имя'), ['unselect' => null]])->label(false) ?>

        <?= $form->field($model, 'phone')->widget(
            MaskedInput::class,
            [
                'mask' => '9 999 999 9999',
                'options' => ['placeholder' => ('Телефон')]
            ]
        )->label(false) ?>
        <div class="form-group">
            <?= Html::submitButton('Добавить', ['class' => 'btn btn-primary add']) ?>
        </div>
    <?php ActiveForm::end(); ?>
    </div>
</div>
