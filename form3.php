<h1>HTML Forms</h1>
<form method="POST">
    <p><label for="input">User input</label>
        <input type="text" name="other" size="40">
    </p>
    <input type="submit">
</form>
<pre>
$_POST:
<?php
print_r($_POST);
?>
$_GET:
<?php
print_r($_GET);
?>
</pre>