<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $model app\models\Contacts */

?>

<div class="contacts-index">
    <div class="contacts-book-form">
        <h1><?= Html::encode($this->title) ?></h1>
        <?= $this->render('_form', [
            'model' => $model
        ]) ?>
    </div>
    <div class="contacts-book-list">
        <h4>Список контактов</h4>
        <?= ListView::widget([
            'dataProvider' => $dataProvider,
            'summary' => false,
            'itemView' => '_contact'])
        ?>
    </div>
</div>
