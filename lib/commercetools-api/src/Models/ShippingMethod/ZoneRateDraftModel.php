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

use Commercetools\Api\Models\Zone\ZoneResourceIdentifier;
use Commercetools\Api\Models\Zone\ZoneResourceIdentifierModel;

final class ZoneRateDraftModel extends JsonObjectModel implements ZoneRateDraft
{
    
    public function __construct(
        ZoneResourceIdentifier $zone = null,
        ShippingRateDraftCollection $shippingRates = null
    ) {
        $this->zone = $zone;
        $this->shippingRates = $shippingRates;
        
    }

    /**
     * @var ?ZoneResourceIdentifier
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
       if (is_null($this->zone)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ZoneRateDraft::FIELD_ZONE);
           if (is_null($data)) {
               return null;
           }
           
           $this->zone = ZoneResourceIdentifierModel::of($data);
       }
       return $this->zone;
    }
    
    /**
     *
     * @return ShippingRateDraftCollection|null
     */
    final public function getShippingRates()
    {
       if (is_null($this->shippingRates)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(ZoneRateDraft::FIELD_SHIPPING_RATES);
           if (is_null($data)) {
               return null;
           }
           $this->shippingRates = ShippingRateDraftCollection::fromArray($data);
       }
       return $this->shippingRates;
    }
    final public function setZone(?ZoneResourceIdentifier $zone): void
    {
        $this->zone = $zone;
    }
    
    final public function setShippingRates(?ShippingRateDraftCollection $shippingRates): void
    {
        $this->shippingRates = $shippingRates;
    }
    
}