
<form action="http://localhost/mvc/user/registration" method="post">

    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <form action="http://localhost/mvc/user/registration" method="post">
                    <div class="form-group" >
                        <label for="exampleInputEmail1">Name</label>
                        <input name="user_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">Write your name</small>
                    </div>

                    <div class="form-group" >
                        <label for="exampleInputEmail1">Surname</label>
                        <input name="user_surname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">Write your surname</small>
                    </div>

                    <div class="form-group" >
                        <label for="exampleInputEmail1">Email address</label>
                        <input name="user_email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">Write your email</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input name="user_pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>



</form>
