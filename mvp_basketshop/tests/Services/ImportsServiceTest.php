<?php 

namespace App\Tests\Services;
use App\Services\ImportsService;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class ImportsServiceTest extends KernelTestCase
{
    private string $projectDir;
    private ImportsService $importsService;

    protected function setUp(): void
    {
        parent::setUp();
        self::bootKernel();
        $this->importsService = self::$kernel->getContainer()->get(ImportsService::class);
    }

    public function testBrandsFromJsonFile()
    {        
        $brands = $this->importsService->getBrandsFromJson();
        // Vérifications des résultats
        $this->assertIsArray($brands, "brands must be an array");
        $this->assertNotEmpty($brands, "brands must not be empty");
    }
    
}