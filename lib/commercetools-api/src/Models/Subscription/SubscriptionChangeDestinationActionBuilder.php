<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<SubscriptionChangeDestinationAction>
 */
final class SubscriptionChangeDestinationActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?DestinationBuilder|Destination
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
     * @return Destination|null
     */
    final public function getDestination()
    {
       return ($this->destination instanceof DestinationBuilder ? $this->destination->build() : $this->destination);
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
    final public function withDestination(?Destination $destination)
    {
        $this->destination = $destination;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withDestinationBuilder(?DestinationBuilder $destination)
    {
        $this->destination = $destination;
        
        return $this;
    }
    
    public function build(): SubscriptionChangeDestinationAction {
        return new SubscriptionChangeDestinationActionModel(
            $this->action,
            ($this->destination instanceof DestinationBuilder ? $this->destination->build() : $this->destination)
        );
    }
    
    public static function of(): SubscriptionChangeDestinationActionBuilder
    {
        return new self();
    }
}