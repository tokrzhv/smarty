<form enctype="multipart/form-data" method="post" action="add_admin.php">
    <h2>ADD your name</h2>
    <input type="text" name="namme">
    <h2>ADD awatar</h2>
    <input type="file" name="awatar">
    <h2>ADD your login</h2>
    <input type="text" name="login">
    <h2>ADD PASSWORD</h2>
    <input type="password" name="password">
    <h2>ADD PASSWORD</h2>
    <input type="password" name="password2"><br>
    <hr>
    <input type="email" name="email" placeholder="email"><br>
    <input type="tel" name="tel" placeholder="tel"><br>
    <select name="prava">
        <option selected value="1" name="prava">Admin</option>
        <option value="2">Operator</option>
    </select><br>
    <input type="submit" name="send"><br>
</form>