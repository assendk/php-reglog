<?php //var_dump($countryList); ?>


<div class="container py-5">
    <div class="row">
        <div class="col-md-10 mx-auto">

            <form id="signup" method="post" action="<?php $_SERVER['PHP_SELF']; ?>" >
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputFirstname">First name*</label>
                        <input type="text" class="form-control" name="first_name" id="inputFirstname" placeholder="First name">
                    </div>
                    <div class="col-sm-6">
                        <label for="inputLastname">Last name*</label>
                        <input type="text" class="form-control" name="last_name" id="inputLastname" placeholder="Last name">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputContactNumber">Email*</label>
                        <input type="email" class="form-control" name="email" id="inputEmail" placeholder="email@site.com" required>
                    </div>
                    <div class="col-sm-6">
                        <label for="inputContactNumber">Phone number*</label>
                        <input type="text" class="form-control" name="phone" id="inputPhone" placeholder="+123 456789">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputContactNumber">Password*</label>
                        <input type="password" class="form-control" name="password" id="inputPassword" placeholder="password here">
                    </div>
                    <div class="col-sm-6">
                        <label for="inputContactNumber">Password Confirm*</label>
                        <input type="password" class="form-control" name="password_confirm" id="inputPasswordConfirm" placeholder="password here">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">

                        <label for="Country">Country</label>

                        <select id="countries" name="countries" class="form-control">
                            <?php
                            foreach ($countryList as $country){
                                echo '<option value="'. $country['id'] .'" selected>'. $country['country_name'] .'</option>';
                            }
                            ?>
                        </select>
<!--                        <option value="33" selected>Bulgaria</option>;-->

                    </div>
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">Address</label>
                        <input type="text" class="form-control" name="address" address id="inputAddressLine" placeholder="Street Address">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label for="inputPostalCode">Postal Code</label>
                        <input type="text" class="form-control" name="postcode" id="inputPostCode" placeholder="Postal Code">
                    </div>
                </div>

                <input type="submit" class="btn btn-primary px-4 float-right" name="register" value="Register">

            </form>
        </div>
    </div>
</div>