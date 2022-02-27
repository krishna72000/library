<?php

use yii\bootstrap4\Html;
use yii\widgets\ActiveForm;

?>
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-2 mx-1 mx-md-4 mt-1">Sign up</p>

                    
    <?php $form = ActiveForm::begin(); ?> 

                  <div class="d-flex flex-row align-items-center">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                      <!-- <input type="text" id="form3Example1c" class="form-control" />
                      <label class="form-label" for="form3Example1c">Your Name</label> -->
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <?= $form->field($model, 'email')->textInput() ?>

                      <!-- <input type="email" id="form3Example3c" class="form-control" />
                      <label class="form-label" for="form3Example3c">Your Email</label> -->
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <?= $form->field($model, 'password')->textInput() ?>
                      <!-- <input type="password" id="form3Example4c" class="form-control" />
                      <label class="form-label" for="form3Example4c">Password</label> -->
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <?= $form->field($model, 'password_repeat')->textInput() ?>
                      <!-- <input type="password" id="form3Example4cd" class="form-control" />
                      <label class="form-label" for="form3Example4cd">Repeat your password</label> -->
                    </div>
                  </div>

                  <!-- <div class="form-check d-flex mb-5">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value=""
                      id="form2Example3c"
                    />
                    <label class="form-check-label" for="form2Example3">
                      I agree all statements in <a href="#!">Terms of service</a>
                    </label>
                  </div> -->
                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
            
                    <button type="submit" class="btn btn-primary btn-lg">Register</button>
                  </div>

                  <?php ActiveForm::end(); ?>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp" class="img-fluid" alt="Sample image">

              </div>
            </div>
      </div>
    </div>