<!DOCTYPE html>
<html>
<head>
    <title>Fix My Cycle</title>
    <a href="neeru.css"></a>
    <!-- Add your CSS, JavaScript, etc. here -->
</head>

<body>
<footer class="footer">
              <!--Footer Section Start-->
<div class="bg_dark px-5 py-5 text-white">
    <h3 class="fw-bolder md-5"> CONTACT US</h3>
    <table class="table ">
        <tr>
            <td>
                Reach Us At
            </td>
            <td>
                <h6 class="text_org">support@fixmycycle.com</h6>
            </td>
        </tr>
        <tr>
            <td>
                Contact Number
            </td>
            <td>
                <h6 class="text_org">+358 XX XX XXX</h6>
            </td>
        </tr>
        <tr>
            <td>
                Connect With Us
            </td>
            <td>
                <a href="https://www.facebook.com/" target="_blank"><i
                        class="fa-brands fa-2x fa-facebook"></i></a>
                <a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-2x fa-twitter"></i></a>
                <a href="https://www.youtube.com/" target="_blank"><i
                        class="fa-brands fa-2x fa-youtube"></i></a>
                <a href="https://www.instagram.com/" target="_blank"> <i
                        class="fa-brands fa-2x fa-instagram"></i></a>
            </td>
        </tr>
    </table>
    <center>
        <hr>
        <span class="text-white"><em>@2024 FixMyCycle. All Rights Reserved.</em></span>
        <?php
    $filename = basename($_SERVER['PHP_SELF']);
    $lastModified = filemtime($_SERVER['SCRIPT_FILENAME']);
    echo "<p> $filename was Last modified: " . date("F d Y H:i:s.", $lastModified) . "</p>";
    ?>
    </center>

</div>
</footer>
</body>
</html>