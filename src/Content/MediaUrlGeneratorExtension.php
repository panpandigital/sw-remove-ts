<?php declare(strict_types=1);

namespace Diy\RemoveTs\Content; 

use League\Flysystem\FilesystemOperator;
use Shopware\Core\Content\Media\Core\Application\AbstractMediaUrlGenerator;
use Shopware\Core\Framework\Log\Package;

class MediaUrlGeneratorExtension extends AbstractMediaUrlGenerator
{
    public function __construct(private readonly FilesystemOperator $filesystem)
    {
    }

    public function generate(array $paths): array
    {
        $urls = [];
        foreach ($paths as $key => $value) {
            // Dont add any query parameters for images
            $url = $this->filesystem->publicUrl($value->path);
            $urls[$key] = $url;
        }

        return $urls;
    }
}