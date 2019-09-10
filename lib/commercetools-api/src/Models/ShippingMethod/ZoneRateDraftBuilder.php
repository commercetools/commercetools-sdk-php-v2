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
 * @implements Builder<ZoneRateDraft>
 */
final class ZoneRateDraftBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?ZoneResourceIdentifierBuilder|ZoneResourceIdentifier
     */
    protected $zone;
    
    /**
     * @var ?ShippingRateDraftCollection
     */
    protected $shippingRates;

    /**
     *
     * @return ZoneResourceIdentifier|null
     */
    final public function getZone()
    {
       return ($this->zone instanceof ZoneResourceIdentifierBuilder ? $this->zone->build() : $this->zone);
    }
    
    /**
     *
     * @return ShippingRateDraftCollection|null
     */
    final public function getShippingRates()
    {
       return $this->shippingRates;
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
    final public function withShippingRates(?ShippingRateDraftCollection $shippingRates)
    {
        $this->shippingRates = $shippingRates;
        
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
    
    public function build(): ZoneRateDraft {
        return new ZoneRateDraftModel(
            ($this->zone instanceof ZoneResourceIdentifierBuilder ? $this->zone->build() : $this->zone),
            $this->shippingRates
        );
    }
    
    public static function of(): ZoneRateDraftBuilder
    {
        return new self();
    }
}