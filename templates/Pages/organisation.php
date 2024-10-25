<?php
/**
 * @var \App\View\AppView $this
 */
?>
<section id="form" class="form section">

    <div class="container form-title" data-aos="fade-up">
        <p>Register as an Organisation</p>
    </div>

    <div class="container" data-aos="fade" data-aos-delay="100">

        <div class="row justify-content-center">

            <div class="col-lg-8 col-md-8">
                <?= $this->Form->create(null, [
                    'id' => 'contactForm',
                    'url' => [
                        'controller' => 'Organisations',
                        'action' => 'add'
                    ],
                    'type' => 'POST'
                ]); ?>
                <div class="php-email-form row gy-4" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-md-12 text-center">
                        <?= $this->Flash->render() ?>
                    </div>

                    <div class="col-md-12">
                        <?= $this->Form->control('business_name', [
                            'type' => 'text',
                            'class' => 'form-control',
                            'label' => 'Business Name <span style="color: red;">*</span>',
                            'placeholder' => 'Your Business Name',
                            'escape' => false,
                            'required' => true
                        ]) ?>
                        <div class="invalid-feedback" data-sb-feedback="businessname:required">A business name is required.</div>
                    </div>

                    <div class="col-md-6">
                        <?= $this->Form->control('contact_first_name', [
                            'type' => 'text',
                            'class' => 'form-control',
                            'label' => 'Contact First Name <span style="color: red;">*</span>',
                            'placeholder' => 'Contact First Name',
                            'escape' => false,
                            'maxlength' => 255,
                            'required' => true
                        ]) ?>
                        <div class="invalid-feedback" data-sb-feedback="firstname:required">A contact first name is required.</div>
                    </div>

                    <div class="col-md-6">
                        <?= $this->Form->control('contact_last_name', [
                            'type' => 'text',
                            'class' => 'form-control',
                            'label' => 'Contact Last Name <span style="color: red;">*</span>',
                            'placeholder' => 'Contact Last Name',
                            'escape' => false,
                            'maxlength' => 255,
                            'required' => true
                        ]) ?>
                        <div class="invalid-feedback" data-sb-feedback="lastname:required">A contact last name is required.</div>
                    </div>

                    <div class="col-md-12">
                        <?= $this->Form->control('contact_email', [
                            'type' => 'email',
                            'class' => 'form-control',
                            'label' => 'Contact Email <span style="color: red;">*</span>',
                            'placeholder' => 'email@example.com',
                            'escape' => false,
                            'maxlength' => 255,
                            'pattern' => '^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$',
                            'required' => true
                        ]) ?>
                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                    </div>

                    <div class="col-md-12">
                        <?= $this->Form->control('website', [
                            'type' => 'text',
                            'class' => 'form-control',
                            'label' => 'Current Business Website',
                            'placeholder' => 'https://example.com',
                            'maxlength' => 255,
                            'pattern' => "https://.*"
                        ]) ?>
                    </div>

                    <div class="col-md-12">
                        <?= $this->Form->control('industry', [
                            'type' => 'textarea',
                            'class' => 'form-control',
                            'label' => 'Business Industry',
                            'placeholder' => 'Your Business Industry',
                            'maxlength' => 255,
                        ]) ?>
                    </div>

                    <div class="col-md-12 text-center">
                        <?= $this->Form->button(__('Register')) ?>
                    </div>

                </div>
                <?= $this->Form->end() ?>
            </div>

        </div>

    </div>

</section>
