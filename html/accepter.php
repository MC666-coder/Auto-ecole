<?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_demande'])) {
    $id_demande = $_POST['id_demande'];
    $stmt = $conn->prepare("UPDATE demande SET status= 'accepte' WHERE id_demande = ?");
    if ($stmt->execute([$id_demande])) {
        echo "<script>alert('Demande acceptée avec succès.'); window.location.href='mes_demandes.php';</script>";
    } else {
        echo "<script>alert('une Erreur s'est produite.');</script>";
    }
}
?>
