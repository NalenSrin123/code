<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    form.container{
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }
</style>
<body>
    <div class="container">
        <form action="" method="post" class="container w-25 bg-light  p-4 rounded mt-5">
            <h3 class="text-center">Register</h3>
            <div class="form-group">
                <label for="uname" class="form-label">Username</label>
                <input type="text" name="uname" id="uname" class="form-control">
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="pass" class="form-label">Password</label>
                <input type="password" name="password" id="pass" class="form-control">
            </div>
            <div class="form-group">
                <label for="cpass" class="form-label">Confirm Password</label>
                <input type="password" name="cpassword" id="cpass" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="mt-3 me-2 btn btn-success" name="btnSubmit">Submit</button>
                <button type="submit" class="mt-3 btn btn-danger">Cancel</button>
            </div>
        </form>
        <table class="table table-hover align-middle" style=" table-layout: fixed;">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Confirm Password</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'function.php';
                 getUser() ?>
            </tbody>
        </table>
    </div>

</body>
</html>
