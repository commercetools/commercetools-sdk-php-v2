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
 * @implements Builder<ExtensionChangeDestinationAction>
 */
final class ExtensionChangeDestinationActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?ExtensionDestinationBuilder|ExtensionDestination
     */
    protected $destination;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       return $this->action;
    }
    
    /**
     *
     * @return ExtensionDestination|null
     */
    final public function getDestination()
    {
       return ($this->destination instanceof ExtensionDestinationBuilder ? $this->destination->build() : $this->destination);
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
    final public function withDestination(?ExtensionDestination $destination)
    {
        $this->destination = $destination;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withDestinationBuilder(?ExtensionDestinationBuilder $destination)
    {
        $this->destination = $destination;
        
        return $this;
    }
    
    public function build(): ExtensionChangeDestinationAction {
        return new ExtensionChangeDestinationActionModel(
            $this->action,
            ($this->destination instanceof ExtensionDestinationBuilder ? $this->destination->build() : $this->destination)
        );
    }
    
    public static function of(): ExtensionChangeDestinationActionBuilder
    {
        return new self();
    }
}