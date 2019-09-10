<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Zone\ZoneResourceIdentifier;
use Commercetools\Api\Models\Zone\ZoneResourceIdentifierBuilder;

/**
 * @implements Builder<ShippingMethodRemoveShippingRateAction>
 */
final class ShippingMethodRemoveShippingRateActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?ShippingRateDraftBuilder|ShippingRateDraft
     */
    protected $shippingRate;
    
    /**
     * @var ?ZoneResourceIdentifierBuilder|ZoneResourceIdentifier
     */
    protected $zone;

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
     * @return ShippingRateDraft|null
     */
    final public function getShippingRate()
    {
       return ($this->shippingRate instanceof ShippingRateDraftBuilder ? $this->shippingRate->build() : $this->shippingRate);
    }
    
    /**
     *
     * @return ZoneResourceIdentifier|null
     */
    final public function getZone()
    {
       return ($this->zone instanceof ZoneResourceIdentifierBuilder ? $this->zone->build() : $this->zone);
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
    final public function withShippingRate(?ShippingRateDraft $shippingRate)
    {
        $this->shippingRate = $shippingRate;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withZone(?ZoneResourceIdentifier $zone)
    {
        $this->zone = $zone;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withShippingRateBuilder(?ShippingRateDraftBuilder $shippingRate)
    {
        $this->shippingRate = $shippingRate;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withZoneBuilder(?ZoneResourceIdentifierBuilder $zone)
    {
        $this->zone = $zone;
        
        return $this;
    }
    
    public function build(): ShippingMethodRemoveShippingRateAction {
        return new ShippingMethodRemoveShippingRateActionModel(
            $this->action,
            ($this->shippingRate instanceof ShippingRateDraftBuilder ? $this->shippingRate->build() : $this->shippingRate),
            ($this->zone instanceof ZoneResourceIdentifierBuilder ? $this->zone->build() : $this->zone)
        );
    }
    
    public static function of(): ShippingMethodRemoveShippingRateActionBuilder
    {
        return new self();
    }
}