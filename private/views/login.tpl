<link rel="stylesheet" href="css/loginCss.css">
<form action="index.php" method="post">
    <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit" class="w3-black" name="submit_login">Login</button>
    </div>

    <div class="container">
        <button type="button" class="w3-black" onclick="location.href='index.php?page=home'" class="cancelbtn">Cancel</button>
    </div>
</form>
<style>
    footer,
    .push {
        height: 220px;
    }
</style>