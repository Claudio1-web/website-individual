<?php
include 'DB/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $naran     = $_POST['naran'];
    $kategoria = $_POST['kategoria'];
    $konteudu   = $_POST['deskripsi']; // naran tenke hanesan ho 'name' iha form HTML


    if (move_uploaded_file($foto_temp, $target_file)) {
        // 2. Se upload susesu, foin Insert ba Database
        try {
            $sql = "INSERT INTO db_kategoria (naran, kategoria, konteudu) 
                    VALUES (:naran, :kategoria, :konteudu)";
            
            $inserta = $pdo->prepare($sql);
            
            // Bind parameters
            $inserta->bindParam(':naran', $naran);
            $inserta->bindParam(':kategoria', $kategoia
            $inserta->bindParam(':konteudu', $konteudu);

            if ($inserta->execute()) {
                header('Location: index3.php?status=success');
                exit();
            } else {
                echo "Erro: Labele rai dadus ba database.";
            }
        } catch (PDOException $e) {
            echo "Erro iha Database: " . $e->getMessage();
        }
    } else {
        echo "Erro: Upload foto la susesu.";
    }
}
?>