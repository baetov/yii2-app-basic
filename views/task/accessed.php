<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Accessed Tasks';
$this->params['breadcrumbs'][] = ['label' => 'Tasks', 'url' => ['task/my']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-index">

    <h1><?= Html::encode($this->title) ?></h1>



    <?php Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [

                'title',
                'description',
            [
                'attribute' => 'creator.username',
                'value' => function(\app\models\Task $model){
                    $link = html::a($model->creator->username,['user/view', 'id' =>$model->creator->id]);
                    return $link;
                },
                'format' => 'raw',

            ],
                'created_at:datetime',

        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
