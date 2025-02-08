<?php

namespace App\Tests\Repository;

use App\Entity\Marques;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class testRepositoryMarques extends KernelTestCase
{
    public function testCount(): void
    {
        self::bootKernel();
        $container = static::getContainer();
        $entityManager = $container->get('doctrine.orm.entity_manager');
        $marques = new Marques();
        $marques->setNom('Nike');
        $entityManager->persist($marques);
        $entityManager->flush();
        $marquesRepository = $entityManager->getRepository(Marques::class);
        $savedMarques = $marquesRepository->find($marques->getId());
        $this->assertNotNull($savedMarques);
        $this->assertEquals('Nike', $savedMarques->getNom());
    }
}
