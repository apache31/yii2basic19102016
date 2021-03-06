<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ComStatus */

$this->title = $model->com_status_name;
$this->params['breadcrumbs'][] = ['label' => 'สถานะคอมพิวเตอร์', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="com-status-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('ปรับปรุงข้อมูล', ['update', 'id' => $model->com_status_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('ลบรายการ', ['delete', 'id' => $model->com_status_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'com_status_id',
            'com_status_name',
        ],
    ]) ?>

</div>
