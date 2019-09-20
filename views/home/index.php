<div class="text-center">
    <h1>Welcome To Test Register/Login App</h1>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">User Login</h3>
        </div>
        <div class="align-content-md-center">



            <div class="panel-body align-content-center" >
                <div class="col-6 d-flex justify-content-center">


                <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" />
                    </div>
                    <input class="btn btn-primary" name="submit" type="submit" value="Submit" />
                </form>
                </div>
            </div>

        </div>
    </div>
</div>