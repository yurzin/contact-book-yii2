<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $model app\models\Contacts */

?>
<h1><?= Html::encode($this->title) ?></h1>
<?= $this->render('_form', [
    'model' => $model
]) ?>
<?= ListView::widget([
    'dataProvider' => $dataProvider,
    'summary' => false,
    'itemView' => '_contact',
    'options' => ['class' => 'contacts-book-list'],
    'layout' => '<div class="title-item">Список контактов</div>{items}{pager}',
])
?>
