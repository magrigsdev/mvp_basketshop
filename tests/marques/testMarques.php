<?php 

namespace App\Tests\Entity;

use App\Entity\Marques;
use PHPUnit\Framework\TestCase;


class testMarques extends TestCase
{
    public function testAddEntityName():void
    {
        $marques = new Marques();
        $marques->setNom('Nike');
        $this->assertEquals('Nike', $marques->getNom());
    }
}