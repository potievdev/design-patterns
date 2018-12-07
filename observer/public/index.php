<?php

require_once __DIR__ . '/../autoload.php';

if (isset($_POST['temperature'])) {
    $temperature = intval($_POST['temperature']);
    $app = new \app\App($temperature);
}

echo '<form method="post">
<input type="number" name="temperature" placeholder="temperature">
<button>Submit</button>
</form>';