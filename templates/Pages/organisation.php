<section id="form" class="form section">

    <div class="container section-title" data-aos="fade-up">
        <h2>Register</h2>
        <p>Register as an Organisation</p>
    </div>

    <div class="container" data-aos="fade" data-aos-delay="100">

        <div class="row gy-4">

            <div class="col-lg-8">
                <?= $this->Form->create(null, [
                    'id' => 'contactForm',
                    'url' => [
                        'controller' => 'Enquiries',
                        'action' => 'add'
                    ],
                    'type' => 'POST'
                ]); ?>
                <div class="php-email-form row gy-4" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-md-6">
                        <?= $this->Form->text('first_name', [
                            'class' => "form-control",
                            'id' => "first-name",
                            'placeholder' => "Your First Name",
                            'required' => true
                        ]) ?>
                        <div class="invalid-feedback" data-sb-feedback="name:required">A first name is required.</div>
                    </div>

                    <div class="col-md-6">
                        <?= $this->Form->text('last_name', [
                            'class' => "form-control",
                            'id' => "last-name",
                            'placeholder' => "Your Last Name",
                            'required' => true
                        ]) ?>
                        <div class="invalid-feedback" data-sb-feedback="name:required">A last name is required.</div>
                    </div>

                    <div class="col-md-6 ">
                        <?= $this->Form->email('email', [
                            'class' => "form-control",
                            'id' => "email",
                            'placeholder' => "Your Email",
                            'required' => true
                        ]) ?>
                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                    </div>

                    <div class="col-md-6">
                        <?= $this->Form->control('phone_number', [
                            'type' => 'text',
                            'label' => false,
                            'class' => "form-control",
                            'placeholder' => "Your Phone Number",
                            'required' => true
                        ]) ?>
                    </div>

                    <div class="col-md-12">
                        <?= $this->Form->control('message', [
                            'type' => 'textarea',
                            'label' => false,
                            'class' => "form-control",
                            'rows' => 6,
                            'placeholder' => "Message",
                            'required' => true
                        ]) ?>
                    </div>

                    <div class="col-md-12 text-center">
                        <?= $this->Form->button(__('Send Message')) ?>
                    </div>

                    <div class="col-md-12 text-center">
                        <?= $this->Flash->render() ?>
                    </div>

                </div>
                <?= $this->Form->end() ?>
            </div><!-- End Contact Form -->

        </div>

    </div>

</section><!-- /Contact Section -->
