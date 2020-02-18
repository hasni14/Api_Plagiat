<html>
<body>
    <?php include 'header.php'?>
    <div id = "acceuil">
        <h3>Veuillez télécharger une image ..</h3>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="file">
            <input type="submit"/>
        </form>
    </div>

    <?php include 'footer.php'?>

</body>