<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Photos */
/* @var $newPhotoDetail app\models\PhotosDetail */
/* @var $detailModelList array */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => '产品管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    .img-thumbnail {
        max-width: 150px;
        max-height: 150px;
    }

    .img-box {
        height: 300px;
        border: 1px solid #ccc
    }
</style>
<div class="content-view">
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation"><?= Html::a('相册管理', ['index']) ?></li>
            <li role="presentation"><?= Html::a('添加相册', ['create']) ?></li>
            <li role="presentation" class="active"><?= Html::a('上传照片', ['#']) ?></li>
        </ul>
        <div class="tab-content">
            <p>
                <?= $this->render('_upload_form', [
                    'model' => $newPhotoDetail,
                ]) ?>
            </p>
            <div class="row">
                <div class="col-lg-3"><img src="<?= $model->image ?>"/></div>
            </div>

            <div class="row" id="photo-list">
                <?php if (isset($detailModelList) && is_array($detailModelList)):foreach ($detailModelList as $item): ?>
                    <?= $this->render('_detail_item', ['model' => $item]) ?>
                <?php endforeach;endif; ?>
            </div>
        </div>
    </div>
</div>
