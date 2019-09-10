<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Zone\ZoneReference;
use Commercetools\Api\Models\Zone\ZoneReferenceModel;

final class ZoneRateModel extends JsonObjectModel implements ZoneRate
{
    
    public function __construct(
        ZoneReference $zone = null,
        ShippingRateCollection $shippingRates = null
    ) {
        $this->zone = $zone;
        $this->shippingRates = $shippingRates;
        
    }

    /**
     * @var ?ZoneReference
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
       if (is_null($this->zone)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ZoneRate::FIELD_ZONE);
           if (is_null($data)) {
               return null;
           }
           
           $this->zone = ZoneReferenceModel::of($data);
       }
       return $this->zone;
    }
    
    /**
     *
     * @return ShippingRateCollection|null
     */
    final public function getShippingRates()
    {
       if (is_null($this->shippingRates)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(ZoneRate::FIELD_SHIPPING_RATES);
           if (is_null($data)) {
               return null;
           }
           $this->shippingRates = ShippingRateCollection::fromArray($data);
       }
       return $this->shippingRates;
    }
    final public function setZone(?ZoneReference $zone): void
    {
        $this->zone = $zone;
    }
    
    final public function setShippingRates(?ShippingRateCollection $shippingRates): void
    {
        $this->shippingRates = $shippingRates;
    }
    
}