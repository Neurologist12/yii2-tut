<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Shop - Signup';
$this->params['breadcrumbs'][] = "Signup";
?>
<div class="site-signup">
    <h1>Signup</h1>
    <p>Please fill out the following fields to signup:</p>
    <div class="row">
        <div class="col-lg-5">

            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
            <?= $form->field($model, 'email') ?>
            <?= $form->field($model, 'password')->passwordInput() ?>
            <?= $form->field($model2, 'name') ?>
            <?= $form->field($model2, 'age') ?>
            <div class="form-group">
                <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>