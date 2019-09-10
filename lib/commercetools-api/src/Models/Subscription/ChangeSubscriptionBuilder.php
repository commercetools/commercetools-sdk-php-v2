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
 * @implements Builder<ChangeSubscription>
 */
final class ChangeSubscriptionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $resourceTypeId;

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
    final public function withResourceTypeId(?string $resourceTypeId)
    {
        $this->resourceTypeId = $resourceTypeId;
        
        return $this;
    }
    
    public function build(): ChangeSubscription {
        return new ChangeSubscriptionModel(
            $this->resourceTypeId
        );
    }
    
    public static function of(): ChangeSubscriptionBuilder
    {
        return new self();
    }
}