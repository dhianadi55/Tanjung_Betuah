<?php
include 'database.php';

$sql = "SELECT nama, pbi, pkh, bpnt FROM penerima";
$result = $conn->query($sql);

// Menampilkan data dalam tabel
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['nama']) . "</td>";
        echo "<td>" . htmlspecialchars($row['pbi']) . "</td>";
        echo "<td>" . htmlspecialchars($row['pkh']) . "</td>";
        echo "<td>" . htmlspecialchars($row['bpnt']) . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>Tidak ada data</td></tr>";
}

// Tutup koneksi
$conn->close();
?>
