<?php include 'include\views\_header.php'; ?>

<br>
<br>
<br>
<br>
<div class="title">
    <h1> Registrera dig </h1>
</div>
<div class="box-1" id="registerDiv">
    <form>
        <label for="emailRegister">Email:</label> <br>
        <input id="emailRegister" type="text" placeholder="fyll i din email.."><br>
        <br>
        <label for="passwordRegister">Lösenord:</label> <br>
        <input id="passwordRegister" type="password" placeholder="fyll i ett lösenord.."> <br>
        <br>
        <label for="repeatRegister">Upprepa Lösenord:</label> <br>
        <input id="repeatRegister" type="password" placeholder="fyll i lösenordet igen.."> <br>
        <br>
        <input id="sumbitRegister" type="button" class="button" value="Registrera">
    </form>
</div>

<?php include 'include\views\_footer.php'; ?>