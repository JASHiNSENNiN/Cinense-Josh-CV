<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/signIn.css">
  <title>Welcome Visitor!</title>
</head>

<body>
  <button id="toggle-form-button" onclick="toggleForm()">$~/.Sign-Up ----\></button>
  <script src="../js/signIn.js"></script>

  <div class="terminal">
  <form id="login-form" action="../php/signIn.php" method="POST">
      <h2 class="terminal-typing" data-text="./Sign-In   "></h2>
      <label for="login-username">Username:</label>
      <input type="text" id="login-username" name="login-username" required>
      <label for="login-password">Password:</label>
      <input type="password" id="login-password" name="login-password" required>
      <button type="submit">Sign In</button>
  </form>

  <form id="signup-form" action="../php/signUp.php" method="POST">
    <h2 class="terminal-typing" data-text="./Sign-Up   "></h2>
    <label for="signup-username">Username:</label>
    <input type="text" id="signup-username" name="signup-username" required>
    <label for="signup-password">Password:</label>
    <input type="password" id="signup-password" name="signup-password" required>
    <label for="signup-confirm-password">Confirm Password:</label>
    <input type="password" id="signup-confirm-password" name="signup-confirm-password" required>
    <button type="submit">Sign Up</button>
</form>
  </div>

</body>

</html>