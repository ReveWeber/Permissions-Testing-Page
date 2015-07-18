<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="ajax-loader.js"></script>

    <title>Testing Minimum Viable File Permissions</title>
</head>

<body style="margin:2em 3em;">
    <h1>Testing Minimum Viable File Permissions</h1>

    <div>
        <h2>Linked Stylesheet</h2>
        <p>If the stylesheet has linked successfully, the page will be green instead of white.</p>
    </div>
    <div>
        <h2>Included PHP</h2>
        <?php include( 'included.php'); ?>
    </div>

    <div>
        <h2>Images</h2>
        <img src="test-image.jpg" alt="test image here">
    </div>

    <div>
        <h2>Linked JavaScript and Data Pulled by AJAX</h2>
        <button id="ajax-test-button">Load Data</button>
        <div id="js-success"></div>
        <div id="ajax-success"></div>
    </div>

</body>

</html>
