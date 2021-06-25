<?php
try {
                $db = new PDO('mysql:host=localhost;port=3307;dbname=hello','peter','World123');
                    if (isset($db)) printf("Connection Success");
                    } catch(PDOException $e) {
                    printf("Could not connect to the database: %s ",$e->getMessage());
}

?>