<html>
<?php include("theme/headtags.php"); ?>
    <body>
        <table>
            <tr>
                <th class="allparagraphstable">All Paragraphs</th>
            </tr>

    <?php
        include("system/connection.php");

        $id = $conn -> query("SELECT * FROM mainphp ORDER BY id DESC LIMIT 1");
        $outputs = $id->fetch_array();
        
            $maxnumber = $outputs["id"];
            $minnumber = 1;
        
        while($minnumber <= $maxnumber){
            $sorgu = $conn -> query("SELECT mainparagraph FROM mainphp WHERE id=$minnumber");    
            $output = $sorgu->fetch_array();
         
            echo "<tr>" . "<th class='datas'>" . $output["mainparagraph"] . "</th>" . "</tr>";
         
            $minnumber++;
        }
 ?>
        </table>
    </body>

</html>