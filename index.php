<?php
echo "Hello World"; //String
echo 12345678; //Integer
echo true; // Boolean
echo "<br /><br />";  //HTML - String
echo 123.456; // Float
echo "<br /><br />";  //HTML - String
echo "<pre>";
print_r(["Hello", "World"]); // Array
echo "</pre>";
echo "<p>Nama Saya Moch Diki Widianto</p>";

class Mahasiswa
{
    public $nama;
    public $nim;
    public function membayarUpp($semester, $nominal)
    {
        return "Mahasiswa $this->nama, Semester $semester telah dibayar sebesar $nominal";
    }
}
$mhs = new Mahasiswa();
$mhs->nama = "Moch Diki Widianto";
echo $mhs->membayarUpp(1, 500000);
?>