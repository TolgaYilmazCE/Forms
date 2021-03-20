<h1>HTML Forms</h1>
<form method="GET">
    <p><label for="input">User input</label>
        <input type="text" name="other" size="40">
    </p>
    <p><label for="input">Other input</label>
        <input type="text" name="otherinput" size="40">
    </p>
    <input type="submit">
</form>
<pre>
$_GET:
<?php
print_r($_GET);
?>
</pre>