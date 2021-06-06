<!–– NAV BAR CODE FROM BOOTSTRAP -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">HELLO WORLD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="signup.php">Signup</a>
                </li>
        </div>
    </nav>


    $email = $_POST['email'];
    $password = $_POST['password'];
    // database connection
    $con = new mysqli('localhost', 'root', '', 'index');
    if ($con->connect_error) {
    die("Failed to connect:" . $con->connect_error);
    } else {
    $stmt = $con->prepare("SELECT * FROM users WHERE emailid=?");
    $stmt->bind_param("s", $emailid);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if ($stmt_result->num_rows > 0) {
    $data = $stmt_result->fetch_assoc();
    if ($data['password'] === $password) {
    echo "<h2> Login Successfully</h2>";
    } else {
    echo "<h2> Invalid Email or Password</h2>";
    }
    } else {
    echo "<h2> Invalid Email or Password</h2>";
    }
    }

    // Check Whether This username Exists
    $con = new mysqli('localhost', 'root', '', 'index');
    $existsql = "SELECT * FROM users WHERE username = '$username' AND '$emailid'";
    $result = mysqli_query($con, $existsql);
    $numExistRows = mysqli_num_rows($result);
    if ($numExistRows > 0) {
    echo "username already exists";
    }