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
 * @implements Builder<ItemShippingDetails>
 */
final class ItemShippingDetailsBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?bool
     */
    protected $valid;
    
    /**
     * @var ?ItemShippingTargetCollection
     */
    protected $targets;

    /**
     *
     * @return bool|null
     */
    final public function getValid()
    {
       return $this->valid;
    }
    
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
    final public function withValid(?bool $valid)
    {
        $this->valid = $valid;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTargets(?ItemShippingTargetCollection $targets)
    {
        $this->targets = $targets;
        
        return $this;
    }
    
    public function build(): ItemShippingDetails {
        return new ItemShippingDetailsModel(
            $this->valid,
            $this->targets
        );
    }
    
    public static function of(): ItemShippingDetailsBuilder
    {
        return new self();
    }
}