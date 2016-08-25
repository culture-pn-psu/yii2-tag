<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model culturePnPsu\tag\models\Tag */

$this->title = Yii::t('tag', 'Create Tag');
$this->params['breadcrumbs'][] = ['label' => Yii::t('tag', 'Tags'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tag-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
