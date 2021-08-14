<?php include 'header.php' ?>
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="adzu-seal text-center">
                                <img src="img/adzu_seal.png" alt="" width="150" style="padding: 20px;">
                            </div>
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">AdZU Senior High Database
                                    Registration
                                </h1>
                            </div>
                            <!-- REGISTRATION FORM -->
                            <form class="user" action="" method="post" id="registration-form">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="fname" name="fname"
                                            placeholder="First Name" required>
                                        
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="lname" name="lname"
                                            placeholder="Last Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="username" name="username"
                                        placeholder="Username" minlength="3" required>
                                    <span id="username-status"></span>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="email" name="email"
                                        placeholder="Email Address">
                                    <span id="email-status"></span>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="password" name="password"
                                        placeholder="Password" minlength>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="confirmpassword" name="confirmpassword" placeholder="Confirm Password">
                                        <span id="password-status"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                        <select class="form-control custom-select" id="office" name="office" style="border-radius: 10rem; padding: .5rem .3; font-size: 0.8rem;">
                                            <option selected value="" disabled>Choose...</option>
                                            <option value="Admin">Admin (Principal, AP)</option>
                                            <option value="Admissions">Admissions</option>
                                            <option value="Campus Ministry">Campus Ministry</option>
                                            <option value="Guidance Counseling">Guidance Counseling</option>
                                            <option value="Infirmary">Infirmary</option>
                                            <option value="Library">Library</option>
                                            <option value="Registrar">Registrar</option>
                                            <option value="Student Activities">Student Activities</option>
                                            <option value="Student Affairs">Student Affairs</option>
                                          </select>
                                </div>
                                <input class="btn btn-primary btn-user btn-block" type="submit" name="submit" value="Register Account">
                            </form>        
                            <?php include 'php-scripts/registration-script.php'; ?>
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php include 'footer.php' ?>
 