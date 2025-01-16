<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php
    include "dbupdate.php";
    ?>
    <div class="mt-3 d-flex justify-content-center align-item-center">
        <form action="dbadd.php" name="form" id="form" class="w-50 p-4 border border-2 rounded-2 shadow" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="row mb-3">
                <label for="firstname" class="col-3 form-label text-end">Firstname:</label>
                <div class="col-9">
                    <input type="text" class="form-control w-75" name="firstname" id="firstname" value="<?php echo $firstname; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label for="lastname" class="col-3 form-label text-end">Lastname:</label>
                <div class="col-9">
                    <input type="text" class="form-control w-75" name="lastname" id="lastname" value="<?php echo $lastname; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label for="gmail" class="col-3 form-label text-end">Email:</label>
                <div class="col-9">
                    <input type="text" class="form-control w-75" name="email" id="email" value="<?php echo $email; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label for="city" class="col-3 form-label text-end">City:</label>
                <div class="col-9">
                <select name="city" id="city" class="form-select w-75" >
                    <option value="Choose.." <?php if($city == 'Choose..') {echo 'selected';} ?>>Choose..</option>
                    <option value="Mumbai" <?php if($city == 'Mumbai') {echo 'selected';} ?>>Mumbai</option> 
                    <option value="Delhi" <?php if($city == 'Delhi') {echo 'selected';} ?>>Delhi</option>
                    <option value="Goa" <?php if($city == 'Goa') {echo 'selected';} ?>>Goa</option>
                </select>
                </div>
            </div>

            <div class="row mb-3">
                <label for="gender" class="form-label col-3 text-end">Gender:</label>
                <div class="col-9 gap-2 d-flex ">
                    <div class="form-check">
                    <input type="radio" name="gender" class="form-check-input" value="Male" <?php if($gender == 'Male') {echo "checked";} ?>>
                    <label for="Male" class="form-check-label">Male</label>
                    </div>
                    <div class="form-check">
                    <input type="radio" name="gender" class="form-check-input" value="Female" <?php if($gender == 'Female') {echo "checked";} ?>>
                    <label for="Female" class="form-check-label">Female</label>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <label for="Language" class="col-3 form-label text-end">Language:</label>
                <div class="col-9 d-flex gap-2">
                    <div class="form-check">
                        <input type="checkbox" name="language[]" class="form-check-input" value="Hindi" <?php if ($language) {echo 'checked';} ?>>
                        <label for="Hindi" class="form-check-label">Hindi</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="language[]" class="form-check-input" value="English" <?php if ($language) {echo 'checked';} ?>>
                        <label for="English" class="form-check-label">English</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="language[]" class="form-check-input" value="Gujarati" <?php if ($language) {echo 'checked';} ?>>
                        <label for="Gujarati" class="form-check-label">Gujarati</label>
                    </div>
                </div>
            </div>

            <div class="text-center">
              <input type="submit" name="submit" class="btn btn-primary">
            </div>
        </form>
    </div>

    <table class="table table-dark container mt-3 table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>Fisrtname</th>
            <th>Lastname</th>
            <th>Gmail</th>
            <th>City</th>
            <th>Gemder</th>
            <th>Language</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php
            include "dbconfig.php";

            $sql = "SELECT * FROM user";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row['id'];
                    $firstname = $row['firstname'];
                    $lastname = $row['lastname'];
                    $email = $row['email'];
                    $city = $row['City'];
                    $gender = $row['gender'];
                    $language = $row['Language'];
                    ?>

                    <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $firstname; ?></td>
                        <td><?php echo $lastname; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $city; ?></td>
                        <td><?php echo $gender; ?></td>
                        <td><?php echo $language; ?></td>
                        <td>
                            <a href="index.php?edit=<?php echo $id; ?>" class="btn btn-danger">Edit</a>
                            <a href="dbdelete.php?delete=<?php echo $id; ?>" class="btn btn-info">Delete</a>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
        </tr>
    </tbody>
    </table>
</body>
</html>