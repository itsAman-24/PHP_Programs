<!DOCTYPE html>
<html lang="en">
<head>
    <title>Text Editor</title>
    <style>
        textarea {
            width: 400px;
            height: 200px;
        }
    </style>
</head>
<body>

<?php

//if else condition is checked with the help of tertiary operators

$text = isset($_POST['text']) ? $_POST['text'] : '';
$bold = isset($_POST['bold']) ? 'font-weight: bold;' : '';
$italic = isset($_POST['italic']) ? 'font-style: italic;' : '';
$uppercase = isset($_POST['uppercase']) ? 'text-transform: uppercase;' : '';
$lowercase = isset($_POST['lowercase']) ? 'text-transform: lowercase;' : '';
?>

<form method="post">
    <label for="text">Enter Text:</label>
    <textarea name="text"><?php echo htmlspecialchars($text); ?></textarea>

    <p>
        <input type="checkbox" name="bold" <?php echo $bold; ?>> Bold
        <input type="checkbox" name="italic" <?php echo $italic; ?>> Italic
        <input type="checkbox" name="uppercase" <?php echo $uppercase; ?>> Uppercase
        <input type="checkbox" name="lowercase" <?php echo $lowercase; ?>> Lowercase
    </p>

    <input type="submit" value="Apply Changes">
</form>



</body>
</html>