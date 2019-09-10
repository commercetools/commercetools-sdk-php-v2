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

/**
 * @implements Builder<ExtensionTrigger>
 */
final class ExtensionTriggerBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $resourceTypeId;
    
    /**
     * @var ?array
     */
    protected $actions;

    /**
     *
     * @return string|null
     */
    final public function getResourceTypeId()
    {
       return $this->resourceTypeId;
    }
    
    /**
     *
     * @return array|null
     */
    final public function getActions()
    {
       return $this->actions;
    }
    /**
     * @return $this
     */
    final public function withResourceTypeId(?string $resourceTypeId)
    {
        $this->resourceTypeId = $resourceTypeId;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withActions(?array $actions)
    {
        $this->actions = $actions;
        
        return $this;
    }
    
    public function build(): ExtensionTrigger {
        return new ExtensionTriggerModel(
            $this->resourceTypeId,
            $this->actions
        );
    }
    
    public static function of(): ExtensionTriggerBuilder
    {
        return new self();
    }
}