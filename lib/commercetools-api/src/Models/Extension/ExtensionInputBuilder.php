<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;

/**
 * @implements Builder<ExtensionInput>
 */
final class ExtensionInputBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?ReferenceBuilder|Reference
     */
    protected $resource;
    
    /**
     * @var ?string
     */
    protected $action;

    /**
     *
     * @return Reference|null
     */
    final public function getResource()
    {
       return ($this->resource instanceof ReferenceBuilder ? $this->resource->build() : $this->resource);
    }
    
    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       return $this->action;
    }
    /**
     * @return $this
     */
    final public function withResource(?Reference $resource)
    {
        $this->resource = $resource;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAction(?string $action)
    {
        $this->action = $action;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withResourceBuilder(?ReferenceBuilder $resource)
    {
        $this->resource = $resource;
        
        return $this;
    }
    
    public function build(): ExtensionInput {
        return new ExtensionInputModel(
            ($this->resource instanceof ReferenceBuilder ? $this->resource->build() : $this->resource),
            $this->action
        );
    }
    
    public static function of(): ExtensionInputBuilder
    {
        return new self();
    }
}