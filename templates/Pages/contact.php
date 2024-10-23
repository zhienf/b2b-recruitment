<section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Contact Us</p>
    </div><!-- End Section Title -->

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
