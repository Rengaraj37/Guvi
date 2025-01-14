html


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
        crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-5">
        <div class="jumbotron">
            <h1 class="display-4">User Profile</h1>
            <p class="lead">Welcome to your profile page!</p>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">User Information</h2>
                        <p class="card-text"><strong>Username:</strong> <span id="username"></span></p>
                        <p class="card-text"><strong>Email:</strong> <span id="email"></span></p>
                        <p class="card-text"><strong>Location:</strong> <span id="location"></span></p>
                        <p class="card-text"><strong>Interests:</strong> <span id="interests"></span></p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Update Profile</h2>
                        <form id="updateForm">
                            <div class="form-group">
                                <label for="location">Location:</label>
                                <input type="text" class="form-control" id="locationInput" name="location">
                            </div>
                            <div class="form-group">
                                <label for="interests">Interests:</label>
                                <input type="text" class="form-control" id="interestsInput" name="interests">
                            </div>
                            <button type="submit" class="btn btn-primary">Update Profile</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Your custom script -->
    <script src="js/profile.js"></script>
</body>

</html>