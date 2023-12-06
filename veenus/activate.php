<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $boxId = $_POST["box_id"];
    $action = $_POST["action"];

    $boxId = htmlspecialchars($boxId);

    // Perform the activation or deactivation logic
    $result = ($action === "activate") ? activateSetTopBox($boxId) : deactivateSetTopBox($boxId);

    // Display the result
    echo "<p>Set-Top Box $action Status: $result</p>";
} else {
    header("Location: index.html");
    exit();
}

function activateSetTopBox($boxId) {
    // Simulate activation success (replace this with your actual activation logic)
    return "Activated successfully!";
}

function deactivateSetTopBox($boxId) {
    // Simulate deactivation success (replace this with your actual deactivation logic)
    return "Deactivated successfully!";
}
?>
