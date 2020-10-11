<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \mdm\admin\models\form\PasswordResetRequest */

$this->title = 'Request password reset';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">
    <div class="card-body register-card-body">
        <div class="site-request-password-reset">
    
            <p>Please fill out your email. A link to reset password will be sent there.</p>

            <div class="row">
                <div class="col-lg-12">
                    <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>
                        <?= $form->field($model, 'email') ?>
                        <div class="form-group">
                            <?= Html::submitButton(Yii::t('rbac-admin', 'Send'), ['class' => 'btn btn-primary']) ?>
                        </div>
                        <?= Html::a('I already have a membership', ['/admin/user/login']) ?>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>