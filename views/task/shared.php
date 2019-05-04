<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Shared Tasks';
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
                [       'label' => 'Users',
                        'value' => function(\app\models\Task $model){
                            return  join(', ' , $model->getSharedUsers()->select('username')->column());
                            },
                ],
                'created_at:datetime',
                'updated_at:datetime',

            [
                    'class' => 'yii\grid\ActionColumn',
                    'template' => '{view} {update} {unshare}',
                    'buttons' => [
                        'unshare' => function ($url, $model, $key) {
                                     $icon = \yii\bootstrap\Html::icon('remove');
                                     return Html::a($icon,['task-user/unshare-all', 'taskId' => $model->id],[
                                         'title' => 'Unshare all',
                                         'data' => [
                                             'confirm' => 'Are you sure you want to unshare?',
                                             'method' => 'post',
                                         ],
                                     ]);
                                 },
                    ],
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
