<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Collection\CollectionInterface|string[] $skills
 */
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>

<section id="form" class="form section">

    <div class="container form-title" data-aos="fade-up">
        <p>Register as a Contractor</p>
    </div>

    <div class="container" data-aos="fade" data-aos-delay="100">

        <div class="row justify-content-center">

            <div class="col-lg-8 col-md-8">
                <?= $this->Form->create(null, [
                    'id' => 'contractorForm',
                    'url' => [
                        'controller' => 'Contractors',
                        'action' => 'add'
                    ],
                    'type' => 'POST'
                ]); ?>
                <div class="php-email-form row gy-4" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-md-12 text-center">
                        <?= $this->Flash->render() ?>
                    </div>

                    <div class="col-md-6">
                        <?= $this->Form->control('first_name', [
                            'type' => 'text',
                            'class' => 'form-control',
                            'label' => 'First Name <span style="color: red;">*</span>',
                            'id' => 'first-name',
                            'placeholder' => 'Your First Name',
                            'escape' => false,
                            'maxlength' => 255,
                            'required' => true
                        ]) ?>
                        <div class="invalid-feedback" data-sb-feedback="firstname:required">A first name is required.</div>
                    </div>

                    <div class="col-md-6">
                        <?= $this->Form->control('last_name', [
                            'type' => 'text',
                            'class' => 'form-control',
                            'label' => 'Last Name <span style="color: red;">*</span>',
                            'id' => 'last-name',
                            'placeholder' => 'Your Last Name',
                            'escape' => false,
                            'maxlength' => 255,
                            'required' => true
                        ]) ?>
                        <div class="invalid-feedback" data-sb-feedback="lastname:required">A last name is required.</div>
                    </div>

                    <div class="col-md-6 ">
                        <?= $this->Form->control('email', [
                            'type' => 'email',
                            'class' => 'form-control',
                            'label' => 'Email Address <span style="color: red;">*</span>',
                            'id' => 'email',
                            'placeholder' => 'email@example.com',
                            'escape' => false,
                            'maxlength' => 255,
                            'pattern' => '^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$',
                            'required' => true
                        ]) ?>
                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                    </div>

                    <div class="col-md-6">
                        <?= $this->Form->control('phone_number', [
                            'type' => 'text',
                            'class' => 'form-control',
                            'label' => 'Phone Number <span style="color: red;">*</span>',
                            'placeholder' => 'Your Phone Number',
                            'escape' => false,
                            'pattern' => '0[23478]\d{8}',
                            'maxlength' => 10,
                            'required' => true
                        ]) ?>
                        <small class="form-text text-muted">
                            Australian mobile numbers: 04xxxxxxxx<br>
                            Australian landline numbers: 02xxxxxxxx, 03xxxxxxxx, 07xxxxxxxx, 08xxxxxxxx
                        </small>
                        <div class="invalid-feedback">Please enter a valid Australian phone number.</div>
                    </div>

                    <div class="col-md-12">
                        <?= $this->Form->control('skills._ids', [
                            'type' => 'select',
                            'options' => $skills,
                            'multiple' => true,
                            'class' => 'form-control',
                            'label' => 'Skills <span style="color: red;">*</span>',
                            'escape' => false,
                            'id' => 'skills-ids',
                        ]) ?>
                        <div class="invalid-feedback" id="skills-feedback">Please select at least one skill.</div>
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

<script>
    document.getElementById('contractorForm').addEventListener('submit', function(event) {
        const skillsField = document.querySelector('#skills-ids');
        const skillsFeedback = document.querySelector('#skills-feedback');

        if (!skillsField.value) {
            event.preventDefault();  // Prevent form submission
            skillsField.classList.add('is-invalid');
            skillsFeedback.style.display = 'block';
        } else {
            skillsField.classList.remove('is-invalid');
            skillsFeedback.style.display = 'none';
        }
    });

    const element = document.querySelector('#skills-ids');
    const choices = new Choices(element, {
        removeItems: true,
        removeItemButton: true
    });
</script>

