<?php
/* @var $this yii\web\View */
/* @var $model app\models\Contacts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contact-item">
    <div class="name-item"> <?= $model->name ?> <a href="/site/delete?id=<?= $model->id ?>"
                                                   class="delete-contact"><span
                    aria-hidden="true">&times;</span></a></div>
    <div class="phone-item"><?= $model->phone ?></div>
</div>
