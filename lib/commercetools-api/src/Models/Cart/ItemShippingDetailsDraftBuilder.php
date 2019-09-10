<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ItemShippingDetailsDraft>
 */
final class ItemShippingDetailsDraftBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?ItemShippingTargetCollection
     */
    protected $targets;

    /**
     *
     * @return ItemShippingTargetCollection|null
     */
    final public function getTargets()
    {
       return $this->targets;
    }
    /**
     * @return $this
     */
    final public function withTargets(?ItemShippingTargetCollection $targets)
    {
        $this->targets = $targets;
        
        return $this;
    }
    
    public function build(): ItemShippingDetailsDraft {
        return new ItemShippingDetailsDraftModel(
            $this->targets
        );
    }
    
    public static function of(): ItemShippingDetailsDraftBuilder
    {
        return new self();
    }
}