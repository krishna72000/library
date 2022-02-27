<?php

use yii\bootstrap4\ActiveForm;
use yii\helpers\Url;
?>
<style>

body{
    background-color: #508bfc;
}
</style>
<div class="container py-5 h-100">
  <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
      <div class="card shadow-2-strong" style="border-radius: 1rem;">
        <div class="card-body p-5 ">

          <h3 class="mb-5 text-center">Admin Login</h3>
          <?php $form = ActiveForm::begin([
        'id' => 'login-form',
    ]); ?>
          <div class="form-outline mb-2">
          <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label("Email") ?>
           </div>

          <div class="form-outline mb-2">
          <?= $form->field($model, 'password')->passwordInput() ?>
         
          </div>

          <!-- Checkbox -->
          <div class="form-check d-flex justify-content-start mb-2">
            <input
              class="form-check-input"
              type="checkbox"
              value=""
              id="form1Example3"
            />
            <label class="form-check-label" for="form1Example3"> Remember password </label>
          </div>
          <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
          <hr class="my-4">
          <p class="text-center">
              <a class="mb-1" href="<?= Url::to(["/site/login"]) ?>">User Login</a>
          </p>
          <?php ActiveForm::end(); ?>
        </div>
      </div>
    </div>
  </div>
</div>