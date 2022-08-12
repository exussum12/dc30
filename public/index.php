<html>
<head>

</head>
<?php
include '../badge.php';
if (!empty($_GET['badge'])) {
    $badge = new Badge($_GET['badge']);
    foreach($badge->listPhoneNumbers() as $person => $number) {
        echo $person . " - " . $number . "<br />";
    }

}
?>
<form>
    <label>Enter Badge ID shown <input name="badge"></label>
    <button>Submit</button>
</form>

<p>
    Thanks to @numinit for the original - <a href="https://replit.com/@numinit/DC30Keygen">https://replit.com/@numinit/DC30Keygen</a>
</p>
</html>