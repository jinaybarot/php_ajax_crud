<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="mt-3 d-flex justify-content-center align-item-center">
        <form action="dbadd.php" name="form" id="form" class="w-50 p-4 border border-2 rounded-2 shadow">
            <div class="row mb-3">
                <label for="firstname" class="col-3 form-label text-end">Firstname:</label>
                <div class="col-9">
                    <input type="text" class="form-control w-75" name="firstname" id="" value="">
                </div>
            </div>

            <div class="row mb-3">
                <label for="lastname" class="col-3 form-label text-end">Lastname:</label>
                <div class="col-9">
                    <input type="text" class="form-control w-75" name="lastname" id="" value="">
                </div>
            </div>

            <div class="row mb-3">
                <label for="gmail" class="col-3 form-label text-end">Email:</label>
                <div class="col-9">
                    <input type="text" class="form-control w-75" name="email" id="" value="">
                </div>
            </div>

            <div class="row mb-3">
                <label for="city" class="col-3 form-label text-end">City:</label>
                <div class="col-9">
                <select name="city" id="" class="form-select w-75">
                    <option value="Choose..">Choose..</option>
                    <option value="Mumbai">Mumbai</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Goa">Goa</option>
                </select>
                </div>
            </div>

            <div class="row mb-3">
                <label for="gender" class="form-label col-3 text-end">Gender:</label>
                <div class="col-9 gap-2 d-flex ">
                    <div class="form-check">
                    <input type="radio" class="form-check-input">
                    <label for="Male" name="gender" class="form-check-label">Male</label>
                    </div>
                    <div class="form-check">
                    <input type="radio" class="form-check-input">
                    <label for="Female" name="gender" class="form-check-label">Female</label>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <label for="Language" class="col-3 form-label text-end">Language:</label>
                <div class="col-9 d-flex gap-2">
                    <div class="form-check">
                        <input type="checkbox" name="language" class="form-check-input">
                        <label for="Hindi" class="form-check-label">Hindi</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="language" class="form-check-input">
                        <label for="English" class="form-check-label">English</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="language" class="form-check-input">
                        <label for="Gujarati" class="form-check-label">Gujarati</label>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <button type="button" name="submit" class="btn btn-primary">Submit</button>
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
            
        </tr>
    </tbody>
    </table>
</body>
</html>