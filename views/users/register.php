<div class="container py-5">
    <div class="row">
        <div class="col-md-10 mx-auto">

            <form id="signup" method="post" action="<?php //$_SERVER['PHP_SELF']; ?>" >
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
                        <label for="inputContactNumber">Password*</label>
                        <input type="password" class="form-control" name="password" id="inputPassword" placeholder="******">
                    </div>
                    <div class="col-sm-6">
                        <label for="inputContactNumber">Password Confirm*</label>
                        <input type="password" class="form-control" name="password_confirm" id="inputPassword" placeholder="******">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine2">Country</label>
<!--                        <input type="text" class="form-control" id="inputAddressLine2" placeholder="Line 2">-->

                        <select id="countries" name="countries" class="form-control">

                            <?php foreach($viewmodel as $item) : ?>
                                <div class="card">
                                    <div class="card-body">
                                        <h3><?php echo $item['address']; ?></h3>
                                        <small><?php echo $item['country_id']; ?></small>
                                        <hr />
                                        <p><?php echo $item['postcode']; ?></p>
                                        <br />
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </select>

                    </div>
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">Address</label>
                        <input type="text" class="form-control" address id="inputAddressLine" placeholder="Street Address">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputCity">Phone</label>
                        <input type="text" class="form-control" id="inputCity" placeholder="City">
                    </div>
                    <div class="col-sm-3">
                        <label for="inputState">State</label>
                        <input type="text" class="form-control" id="inputState" placeholder="State">
                    </div>
                    <div class="col-sm-3">
                        <label for="inputPostalCode">Postal Code</label>
                        <input type="text" class="form-control" id="inputPostalCode" placeholder="Postal Code">
                    </div>
                </div>

                <button type="button" class="btn btn-primary px-4 float-right">Save</button>
            </form>
        </div>
    </div>
</div>

<!--<div class="panel panel-default">-->
<!--    <div class="panel-heading">-->
<!--        <h3 class="panel-title">Register User</h3>-->
<!--    </div>-->
<!--    <div class="panel-body">-->
<!--        <form method="post" action="--><?php //$_SERVER['PHP_SELF']; ?><!--">-->
<!--            <div class="form-group">-->
<!--                <label>First Name*</label>-->
<!--                <input type="text" name="first_name" class="form-control" required />-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <label>Last Name*</label>-->
<!--                <input type="text" name="last_name" class="form-control" required />-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <label>Email*</label>-->
<!--                <input type="email" name="email" class="form-control" required />-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <label>Password*</label>-->
<!--                <input type="password" name="password" class="form-control" required />-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <label>Phone</label>-->
<!--                <input type="text" name="phone" class="form-control" />-->
<!--            </div>-->
<!--            <input class="btn btn-primary" name="register" type="submit" value="Submit" />-->
<!--        </form>-->
<!--    </div>-->
<!--</div>-->