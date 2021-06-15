<?php

// if ($_SERVER['REQUEST_METHOD'] == 'GET') {
//     echo 'Se enviaron los datos via GET';
// } else {
//     echo 'Se enviaron los datos via POST';

// }

<?php

if (isset($_POST['submit'])) {
    echo 'Se enviaron los datos correctamente';
} else {
    echo 'Los datos no han sido enviados';
}