<?php
$result = $stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id" => $user_id));

while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $street = $row['street'];
    $housenumber = $row['housenumber'];
    $zipcode = $row['zipcode'];
    $city = $row['city'];
    $country = $row['country'];
}
if ($street == "" || $housenumber == "" || $zipcode == "" || $city == "" || $country == "") { ?>
    <span class="mdl-chip mdl-chip--contact">
    <span class="mdl-chip__contact mdl-color--red mdl-color-text--white">!</span>
    <span class="mdl-chip__text" style="text-align: center">Let op: We hebben nog niet alle informatie over je gekregen! Om het systeem volledig te kunnen gebruiken verzoeken wij je de benodigde informatie <a
                href='settings.php'>hier</a> in te vullen</span>
    </span>
    <?php
}
?>