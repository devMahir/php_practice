<?php
if (isset($_POST['submit'])) {
    echo htmlspecialchars($_POST['name'];)
    echo htmlspecialchars($_POST['email'];)
    echo htmlspecialchars($_POST['number'];)

    // htmlspecialchars => convert javascript to html [ for change the javascript code to send to the server from form]
}

?>