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
 * @implements Builder<MessageSubscription>
 */
final class MessageSubscriptionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?array
     */
    protected $types;
    
    /**
     * @var ?string
     */
    protected $resourceTypeId;

    /**
     *
     * @return array|null
     */
    final public function getTypes()
    {
       return $this->types;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getResourceTypeId()
    {
       return $this->resourceTypeId;
    }
    /**
     * @return $this
     */
    final public function withTypes(?array $types)
    {
        $this->types = $types;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withResourceTypeId(?string $resourceTypeId)
    {
        $this->resourceTypeId = $resourceTypeId;
        
        return $this;
    }
    
    public function build(): MessageSubscription {
        return new MessageSubscriptionModel(
            $this->types,
            $this->resourceTypeId
        );
    }
    
    public static function of(): MessageSubscriptionBuilder
    {
        return new self();
    }
}