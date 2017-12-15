<link rel="stylesheet" href="Views/css/rentCss.css">

<!-- multistep form -->
<form id="msform">
    <!-- progressbar -->
    <ul id="progressbar">
        <li class="active">Vos Information</li>
        <li>Payment</li>
        <li>Confirmation</li>
    </ul>
    <!-- fieldsets -->
    <fieldset>
        <h2 class="fs-title">Verifier vos informations</h2>
        <label for="Name">Name</label>
        <input type="text" name="name" value="<?= $updateUsers[0]['name'] ?>" placeholder="name">
        <label for="lastName">Last Name</label>
        <input type="text" name="lastName" value="<?= $updateUsers[0]['last_name'] ?>" placeholder="lastName">
        <label for="mail">Mail</label>
        <input type="email" name="mail" value="<?= $updateUsers[0]['mail'] ?>" placeholder="email">
        <label for="street">Street</label>
        <input type="text" name="street" value="<?= $updateUsers[0]['street'] ?>" placeholder="Street">
        <label for="zip_code">Zip Code</label>
        <input type="text" name="zip_code" value="<?= $updateUsers[0]['zip_code'] ?>" placeholder="zip_code">
        <label for="city">City</label>
        <input type="text" name="city" value="<?= $updateUsers[0]['city'] ?>" placeholder="city">
        <label for="country">Country</label>
        <input type="text" name="country" value="<?= $updateUsers[0]['country'] ?>" placeholder="country">
        <label for="phone">Phone</label>
        <input type="text" name="phone" value="<?= $updateUsers[0]['phone'] ?>" placeholder="phone">
        <input type="button" name="next" class="next action-button" value="Next" />


    </fieldset>
    <fieldset>
        <h2 class="fs-title">Payment</h2>
        <a href="index.php?p=paymentPage&id=<?echo $_GET['id']?>"><input type="button" name="next" class="next action-button" value="Payer" /></a>
    </fieldset>
    <fieldset>
        <h2 class="fs-title">Confirmation</h2>

    </fieldset>
</form>


<script src="Views/vendor/jquery/jquery.js"></script>
<script src="Views/vendor/bootstrap/js/bootstrap.bundle.js"></script>

<!-- Plugin JavaScript -->
<script src="Views/vendor/jquery-easing/jquery.easing.min.js"></script>


<script src="Views/js/progress.js"></script>
<script src="Views/js/payment.js"></script>

</body>

</html>
