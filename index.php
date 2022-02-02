<?php

include './Classes/Email.php';

$email = new Email("vanou01@gmail.com", "vanessa.nectoux@gmail.com", "Message test de php", "Un amil contient des lettres");
$email ->send();