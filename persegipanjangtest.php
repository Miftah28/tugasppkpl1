<?php

use PHPUnit\Framework\TestCase;

require_once "PersegiPanjang.php";

class PersegiPanjangTest extends TestCase
{

    public static function setUpBeforeClass(): void
    {
        echo "Eksekusi sebleum pengjujian \n";
    }

    public function testHitungkeliling()
    {
        $persegipanjang = new PersegiPanjang(8, 9);

        $result = $persegipanjang->hitungKeliling();
        $expected = 34;

        $this->assertEquals($expected, $result);
    }

    public function testHitungkelilingKosong()
    {
        $persegipanjang = new PersegiPanjang("", "");

        $result = $persegipanjang->hitungKeliling();
        $expected = "Tidak Boleh kosong!";

        $this->assertEquals($expected, $result);
    }

    public function testHitungLuas()
    {
        $persegipanjang = new PersegiPanjang(20, 7);

        $result = $persegipanjang->hitungLuas();
        $expected = 140;

        $this->assertEquals($expected, $result);
    }

    public function testHitungLuasKosong()
    {
        $persegipanjang = new PersegiPanjang("", "");

        $result = $persegipanjang->hitungLuas();
        $expected = "Tidak Boleh kosong!";

        $this->assertEquals($expected, $result);
    }

    public static function tearDownAfterClass(): void
    {
        echo "\nEksekusi setelah pengjujian \n";
    }
}
