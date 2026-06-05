<?php

/**
 * Fungsi XOR Cipher Sederhana
 * * @param string $text (Bisa berupa plain text atau cipher text)
 * @param string $key (Kunci rahasia untuk enkripsi/dekripsi)
 * @return string
 */
function simpleXorCipher($text, $key)
{
    $keyLength = strlen($key);
    $textLength = strlen($text);
    $output = '';

    // Perulangan untuk setiap karakter pada teks
    for ($i = 0; $i < $textLength; $i++) {
        // Operasi XOR antara karakter teks dengan karakter kunci (berputar jika kunci lebih pendek)
        $output .= $text[$i] ^ $key[$i % $keyLength];
    }

    return $output;
}

// --- CONTOH PENGGUNAAN ---

$pesanAsli = "Rahasia Negara: Besok kita makan-makan!";
$kunciRahasia = "KODERAHASIA123";

echo "=== PROSES ENKRIPSI ===\n";
echo "<br />";
echo "Pesan Asli : " . $pesanAsli . "\n";

// 1. Enkripsi pesan
$pesanTerekripsi = simpleXorCipher($pesanAsli, $kunciRahasia);

// Karena hasilnya berupa karakter biner/aneh, kita gunakan base64_encode agar aman dikirim/ditampilkan
$pesanAman = base64_encode($pesanTerekripsi);
echo "Hasil Enkripsi (Base64): " . $pesanAman . "\n\n";
echo "<br />";


echo "=== PROSES DEKRIPSI ===\n";
echo "<br />";
// 2. Dekripsi pesan (kembalikan dulu dari base64, lalu masukkan ke fungsi yang sama)
$pesanDiubahKembali = base64_decode($pesanAman);
$pesanAsliLagi = simpleXorCipher($pesanDiubahKembali, $kunciRahasia);

echo "Hasil Dekripsi: " . $pesanAsliLagi . "\n";
?>