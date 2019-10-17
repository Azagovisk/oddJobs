<?php
$conn = new mysqli("localhost", "root", "", "aposta");
            if($conn->connect_errno){
                echo "<p>Atenção, erro de conexão: ". $conn->connect_error. "</p>";
            }

            ?>