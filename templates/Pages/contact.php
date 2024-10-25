<section id="contact" class="contact section">

    <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Contact Us</p>
    </div>

    <div class="container" data-aos="fade" data-aos-delay="100">

        <div class="row gy-4">

            <div class="col-lg-4">
                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                    <i class="bi bi-geo-alt flex-shrink-0"></i>
                    <div>
                        <h3>Address</h3>
                        <p>2 Wellington Rd, Clayton VIC 3800</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                    <i class="bi bi-telephone flex-shrink-0"></i>
                    <div>
                        <h3>Call Us</h3>
                        <p>+03 4123 8567</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                    <i class="bi bi-envelope flex-shrink-0"></i>
                    <div>
                        <h3>Email Us</h3>
                        <p>info@jimsrecruiting.com</p>
                    </div>
                </div><!-- End Info Item -->

            </div>

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

                    <div class="col-md-12 text-center">
                        <?= $this->Flash->render() ?>
                    </div>

                    <div class="col-md-6">
                        <?= $this->Form->control('first_name', [
                            'type' => 'text',
                            'label' => 'First Name <span style="color: red;">*</span>',
                            'class' => "form-control",
                            'placeholder' => "Your First Name ",
                            'escape' => false,
                            'maxlength' => 255,
                            'required' => true
                        ]) ?>
                        <div class="invalid-feedback" data-sb-feedback="name:required">A first name is required.</div>
                    </div>

                    <div class="col-md-6">
                        <?= $this->Form->control('last_name', [
                            'type' => 'text',
                            'label' => 'Last Name <span style="color: red;">*</span>',
                            'class' => "form-control",
                            'placeholder' => "Your Last Name",
                            'escape' => false,
                            'maxlength' => 255,
                            'required' => true
                        ]) ?>
                        <div class="invalid-feedback" data-sb-feedback="name:required">A last name is required.</div>
                    </div>

                    <div class="col-md-6 ">
                        <?= $this->Form->control('email', [
                            'type' => 'email',
                            'label' => 'Email Address <span style="color: red;">*</span>',
                            'class' => "form-control",
                            'placeholder' => "email@example.com",
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
                            'label' => 'Phone Number <span style="color: red;">*</span>',
                            'class' => "form-control",
                            'placeholder' => "Your Phone Number",
                            'escape' => false,
                            'maxlength' => 10,
                            'pattern' => '0[23478]\d{8}',
                            'required' => true
                        ]) ?>
                        <small class="form-text text-muted">
                            Australian mobile numbers: 04xxxxxxxx<br>
                            Australian landline numbers: 02xxxxxxxx, 03xxxxxxxx, 07xxxxxxxx, 08xxxxxxxx
                        </small>
                    </div>

                    <div class="col-md-12">
                        <?= $this->Form->control('message', [
                            'type' => 'textarea',
                            'label' => 'Message <span style="color: red;">*</span>',
                            'class' => "form-control",
                            'rows' => 6,
                            'placeholder' => "Message",
                            'escape' => false,
                            'maxlength' => 255,
                            'required' => true
                        ]) ?>
                    </div>

                    <div class="col-md-12 text-center">
                        <?= $this->Form->button(__('Send Message')) ?>
                    </div>

                </div>
                <?= $this->Form->end() ?>
            </div><!-- End Contact Form -->

        </div>

    </div>

</section><!-- /Contact Section -->
