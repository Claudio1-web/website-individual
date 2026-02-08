<?php
include 'DB/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulu     = $_POST['titulu'];
    $sub_titulu = $_POST['sub_titulu'];
    $konteudu   = $_POST['deskripsi']; // naran tenke hanesan ho 'name' iha form HTML

    // 1. Prosesu Upload Foto uluk
    $foto_naran = $_FILES['foto']['name'];
    $foto_temp  = $_FILES['foto']['tmp_name'];
    $target_dir = "uploads/";
    
    // Kria naran foun ba file atu la duplika (ezemplu uza timestamp)
    $file_extension = pathinfo($foto_naran, PATHINFO_EXTENSION);
    $naran_foun     = time() . '_' . uniqid() . '.' . $file_extension;
    $target_file    = $target_dir . $naran_foun;

    // Check se folder uploads iha ka lae, se lae kria foun
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    if (move_uploaded_file($foto_temp, $target_file)) {
        // 2. Se upload susesu, foin Insert ba Database
        try {
            $sql = "INSERT INTO tbl_media (titulu, sub_titulu, foto, konteudu) 
                    VALUES (:titulu, :sub_titulu, :foto, :konteudu)";
            
            $inserta = $pdo->prepare($sql);
            
            // Bind parameters
            $inserta->bindParam(':titulu', $titulu);
            $inserta->bindParam(':sub_titulu', $sub_titulu);
            $inserta->bindParam(':foto', $naran_foun); // Rai naran file de'it iha DB
            $inserta->bindParam(':konteudu', $konteudu);

            if ($inserta->execute()) {
                header('Location: index1.php?status=success');
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