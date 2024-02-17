
<?php
require '../page.php';
$pg = new page();
$pg->docTypeEtal('Sticky', ' 
            html{
                overflow-x:scroll; /* to allow for scrollbars */
                }
        body {
                font-family: Arial, sans-serif;
            }
            #t1{
                border-collapse:collapse;
                background-color:white;
            }
            #t1 td,#t1 th{
                border:solid 1px black;
            }
            #t1 th{
                background-color:#f3f3f3;
                vertical-align:bottom;
            }
            #t1 td{
                background-color:white;
            }');
$pg->meta("<meta name='description' content='Javascript to make table header and left columns sticky, using CSS property positon:sticky only for"
        . " table cells involved, taking care of spaning columns  ' >");
$pg->header('Sticky header');
$pg->renderOut(false);
?>

<div class='container' id='content'>
    <h3> The table </h3>
    <table class='table' id='t1'>
        <thead>
            <tr>
                <th colspan='4' style='position:sticky;left:0;text-align:center'> 111 </th> 
            <tr>
                <th>Name<br>Lastname</th>
                <th>Email</th>
                <th>Phone</th> <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>John Doe</td>
                <td>john@example.com</td>
                <td>123-456-7890</td> <td>123-456-7890</td>
            </tr>
            <tr>
                <td>John Doe</td>
                <td>john@example.com</td>
                <td>123-456-7890</td>  <td>123-456-7890</td>
            </tr>
            <tr>
                <td>John Doe</td>
                <td>john@example.com</td>
                <td>123-456-7890</td>  <td>123-456-7890</td>
            </tr>
            <tr>
                <td>John Doe</td>
                <td>john@example.com</td>
                <td>123-456-7890</td>  <td>123-456-7890</td>
            </tr>
            <tr>
                <td>John Doe</td>
                <td>john@example.com</td>
                <td>123-456-7890</td> <td>123-456-7890</td>
            </tr>
            <tr>
                <td>John Doe</td>
                <td>john@example.com</td>
                <td>123-456-7890</td>  <td>123-456-7890</td>
            </tr>
            <tr>
                <td>John Doe</td>
                <td>john@example.com</td>
                <td>123-456-7890</td>  <td>123-456-7890</td>
            </tr>
            <tr>
                <td>John Doe</td>
                <td>john@example.com</td>
                <td>123-456-7890</td>  <td>123-456-7890</td>
            </tr>

            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>
<?php
$pg->footer();
$pg->renderOut(false);
?>
<div style='height:2000px;width:4000px'></div>
<script src='stickyCSS.js'></script>
<script>
    window.addEventListener('load', userStart, false);
    function userStart() {
        makeSticky('t1', {col: 1, loff: 0, toff: 'pghead'});
    }
</script>
</body>
</html>
