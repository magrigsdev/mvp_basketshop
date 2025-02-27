<?php 

namespace App\Services;

use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\Filesystem\Exception\FileNotFoundException;
use App\Messages\Errors;
use Symfony\Component\HttpKernel\Exception\HttpException;

class ImportsService
{
    private Errors $errors;
    private $projectDir;
    public function __construct(#[Autowire('%kernel.project_dir%')] string $projectDir, Errors $errors)
    {
        $this->projectDir = $projectDir;
        $this->errors = $errors;
    }

    public function getBrandsFromJson(): array
    {
        $filePath = $this->projectDir . "/public/Files/brands.json";
        if (!file_exists($filePath)) {
            throw new FileNotFoundException( $this->errors::ERROR_FILE_NOT_FOUND. $filePath);
        }
        $jsonContent = file_get_contents($filePath);
        try {
            return json_decode($jsonContent, true, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            throw new HttpException(400, $this->errors::ERROR_JSON_DECODE . $e->getMessage());
        }
    }
}
