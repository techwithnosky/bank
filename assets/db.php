<?php 
    $con = new mysqli(' sql8.freemysqlhosting.net','sql8752065',' AYIDqliP8I','sql8752065');
    define('bankName', 'MCB Bank');
    $ar = $con->query("select * from userAccounts,branch where id = '$_SESSION[userId]' AND userAccounts.branch = branch.branchId");
    $userData = $ar->fetch_assoc();
?>
<script type="text/javascript">
	$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>