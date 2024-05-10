<?php include(APPPATH . 'Views/components/header.php'); ?>
        <section class="vh-100">
            <img src="/images/bgimg/bg.jpg" alt="" style="width: 20%;">
            <section class="vh-100">
                <div class="container py-5 h-100">
                    <?php if (session()->has('success')) : ?>
                        <div class="alert alert-success">
                            <?= session('success') ?>
                        </div>
                    <?php endif; ?>

                    <!-- Display error message if it exists -->
                    <?php if (session()->has('error')) : ?>
                        <div class="alert alert-danger">
                            <?= session('error') ?>
                        </div>
                    <?php endif; ?>
                    <div class="row d-flex align-items-center justify-content-center h-100 img-aligns">
                        <div class="col-md-8 col-lg-7 col-xl-6 mb-3">
                            <img src="/images/how its work/work.png" alt="">
                        </div>
                        <!-- Display success message if it exists -->
                        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                            <!-- Registration form -->
                            <form id="Registration" action="/register" method="POST">

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="name">Name</label>
                                    <input type="name" id="name" required name="name" class="form-control form-control-lg" />
                                    <?php if (isset($validation) && $validation->hasError('name')) : ?>
                                        <p class="text-danger"><?= $validation->getError('name') ?></p>
                                    <?php endif; ?>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="registerNumber">Mobile Number</label>
                                    <input type="tel" id="registerNumber" required name="contact" class="form-control form-control-lg" />
                                    <?php if (isset($validation) && $validation->hasError('contact')) : ?>
                                        <p class="text-danger"><?= $validation->getError('contact') ?></p>
                                    <?php endif; ?>

                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="registerEmail">Email address</label>
                                    <input type="email" id="registerEmail" required name="email" class="form-control form-control-lg" />
                                    <?php if (isset($validation) && $validation->hasError('email')) : ?>
                                        <p class="text-danger"><?= $validation->getError('email') ?></p>
                                    <?php endif; ?>

                                </div>


                                <div class="form-outline mb-4" id="passwordInputField">
                                    <label class="form-label" for="registerPassword">New Password</label>
                                    <input type="password" required name="password" id="registerPassword" class="form-control form-control-lg" />
                                    <?php if (isset($validation) && $validation->hasError('password')) : ?>
                                        <p class="text-danger"><?= $validation->getError('password') ?></p>
                                    <?php endif; ?>
                                </div>

                                <button type="submit" class="btn btn-primary btn-lg btn-block">Sign Up</button>

                                <p class=" mt-2" style="text-align: center;">Have an account. <a href="/login">Log in</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </section>
<!-- JavaScript links -->
<script src="<?= base_url('public/js/jquery-3.3.1.min.js') ?>"></script>
<script src="<?= base_url('public/js/jquery-migrate-1.4.1.min.js') ?>"></script>
<script src="<?= base_url('public/js/popper.min.js') ?>"></script>
<script src="<?= base_url('public/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('public/js/owl.carousel.min.js') ?>"></script>
<script src="<?= base_url('public/js/jquery.prettyPhoto.js') ?>"></script>
<script src="<?= base_url('public/js/isotope.min.js') ?>"></script>
<script src="<?= base_url('public/js/slick.min.js') ?>"></script>
<script src="<?= base_url('public/js/custom.js') ?>"></script>
<script src="<?= base_url('public/js/scroll.js') ?>"></script>
<!-- Add other JavaScript links as needed -->
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init({
                offset: 100,
                duration: 1000,
            });
        </script>
        <script>
            function showRegisterForm() {
                document.getElementById('Login').classList.add('hidden');
                document.getElementById('Registration').classList.remove('hidden');
            }

            function showLoginForm() {
                document.getElementById('Registration').classList.add('hidden');
                document.getElementById('Login').classList.remove('show');
            }
        </script>
        <script>
            document.getElementById('sendOtpButton').addEventListener('click', function() {
                var number = document.getElementById('registerNumber').value;
                var email = document.getElementById('registerEmail').value;

                // Validate mobile number
                if (number.length !== 10 || isNaN(number)) {
                    document.getElementById('numberError').style.display = 'block';
                    return; // Stop further execution
                } else {
                    document.getElementById('numberError').style.display = 'none';
                }

                // Validate email
                if (!validateEmail(email)) {
                    document.getElementById('emailError').style.display = 'block';
                    return; // Stop further execution
                } else {
                    document.getElementById('emailError').style.display = 'none';
                }

                // Show the OTP input field
                document.getElementById('otpInputField').style.display = 'block';

                // Hide the password input field
                document.getElementById('passwordInputField').style.display = 'block';

                // Hide the send OTP button
                this.style.display = 'none';

                // Show the register button
                document.getElementById('registerButton').style.display = 'block';

                // Disable input fields after sending OTP
                document.getElementById('registerNumber').disabled = true;
                document.getElementById('registerEmail').disabled = true;
            });

            function validateEmail(email) {
                var re = /\S+@\S+\.\S+/;
                return re.test(email);
            }

            function validatePassword() {
                var password = document.getElementById('registerPassword').value;
                if (password.length < 6 || password.length > 10) {
                    // alert('Password must be between 6 to 10 characters!');
                    return false; // prevent form submission
                }
                // If validation passes, you can proceed with form submission
            }
        </script>

</body>

</html>