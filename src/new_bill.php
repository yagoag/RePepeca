<?php
    include_once "config.php";

    // Set up MySQL connection
    $db_handler = mysql_connect($mysql_server, $mysql_username, $mysql_password);
    $db_found = mysql_select_db($mysql_db, $db_handler);
?>
<script language="javascript">
    function toggle(source) {
    checkboxes = document.getElementsByName('members[]');
        for (var i = 0, n = checkboxes.length; i < n; i++) {
            checkboxes[i].checked = source.checked;
        }
    }
</script>
<div class="title">New Bill</div>
<form id="new_bill" name="new_bill" method="post" action="action/create_bill.php">
    <p><input type="text" name="name" placeholder="Name" /></p>
    <p><input type="text" name="value" placeholder="Value" /></p>
    <br />
    <div class="member_list">
        <p><input type="checkbox" onClick="toggle(this)" /> <strong>Select all members</strong></p>
        <?php
            $db_info = mysql_query("SELECT * FROM members");
            while ($member = mysql_fetch_array($db_info))
                echo '<p><input type="checkbox" name="members[]" value="' . $member['id'] . '" /> ' . $member['name'] . '</p>';
        ?>
    </div>
    <br />
    <p><input type="submit" name="new_bill" value="Create Bill" /></p>
</form>