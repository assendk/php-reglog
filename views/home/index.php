<div class="text-center">
    <h1>Welcome To Simple PHP 7 Register/Login App</h1>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">User Login</h3>
        </div>
        <div class="align-content-md-center">



            <div class="panel-body align-content-center" >
                <div class=" d-flex justify-content-center">

                    <div class="form-group row">

                        <form method="post" action="/users/login" class="card p-4 bg-light">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Email" />
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="password" />
                            </div>

                            <input class="btn btn-primary btn-sm" name="submit" type="submit" value="Submit" />
                            <small>or <a href="/users/register">register here </a></small>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>