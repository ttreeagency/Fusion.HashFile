<?php
namespace Ttree\Fusion\HashFile;

use Neos\Flow\ResourceManagement\ResourceManager;
use Neos\Fusion\FusionObjects\AbstractFusionObject;
use Neos\Flow\Annotations as Flow;

class HashFileImplementation extends AbstractFusionObject
{
    /**
     * @var ResourceManager
     * @Flow\Inject
     */
    protected $resourceManager;
    public function evaluate(): string
    {
        return \hash_file($this->fusionValue('algo'), $this->fusionValue('resource'));
    }
}
