<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Trainer */

$this->title = 'Создать тренера';
$this->params['breadcrumbs'][] = ['label' => 'Trainers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trainer-create" style="margin-top: 40px;">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>