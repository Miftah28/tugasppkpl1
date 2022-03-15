<?php

use PHPUnit\Framework\TestCase;

require_once "Lingkaran.php";

class LingkaranTest extends TestCase
{

    public static function setUpBeforeClass(): void
    {
        echo "Eksekusi sebleum pengjujian \n";
    }

    public function testHitungkeliling()
    {
        $lingkaran = new Lingkaran(10);

        $result = $lingkaran->hitungKeliling();
        $expected = 62.2;

        $this->assertEquals($expected, $result); 
    }

    public function testHitungkelilingKosong()
    {        
        $lingkaran = new Lingkaran("");
        
        $result = $lingkaran->hitungKeliling();
        $expected = "Tidak Boleh kosong!";

        $this->assertEquals($expected, $result); 
    }

    public function testHitungLuas()
    {        
        $lingkaran = new Lingkaran(20);
        
        $result = $lingkaran->hitungLuas();
        $expected = 1256;

        $this->assertEquals($expected, $result); 
    }

    public function testHitungLuasKosong()
    {        
        $lingkaran = new Lingkaran("");
        
        $result = $lingkaran->hitungLuas();
        $expected = "Tidak Boleh kosong!";
        
        $this->assertEquals($expected, $result); 
    }

    public static function tearDownAfterClass(): void
    {
        echo "\nEksekusi setelah pengjujian \n";
    }

}