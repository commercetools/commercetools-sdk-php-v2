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
use Commercetools\Api\Models\Zone\ZoneReference;
use Commercetools\Api\Models\Zone\ZoneReferenceBuilder;

/**
 * @implements Builder<ZoneRate>
 */
final class ZoneRateBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?ZoneReferenceBuilder|ZoneReference
     */
    protected $zone;
    
    /**
     * @var ?ShippingRateCollection
     */
    protected $shippingRates;

    /**
     *
     * @return ZoneReference|null
     */
    final public function getZone()
    {
       return ($this->zone instanceof ZoneReferenceBuilder ? $this->zone->build() : $this->zone);
    }
    
    /**
     *
     * @return ShippingRateCollection|null
     */
    final public function getShippingRates()
    {
       return $this->shippingRates;
    }
    /**
     * @return $this
     */
    final public function withZone(?ZoneReference $zone)
    {
        $this->zone = $zone;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withShippingRates(?ShippingRateCollection $shippingRates)
    {
        $this->shippingRates = $shippingRates;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withZoneBuilder(?ZoneReferenceBuilder $zone)
    {
        $this->zone = $zone;
        
        return $this;
    }
    
    public function build(): ZoneRate {
        return new ZoneRateModel(
            ($this->zone instanceof ZoneReferenceBuilder ? $this->zone->build() : $this->zone),
            $this->shippingRates
        );
    }
    
    public static function of(): ZoneRateBuilder
    {
        return new self();
    }
}