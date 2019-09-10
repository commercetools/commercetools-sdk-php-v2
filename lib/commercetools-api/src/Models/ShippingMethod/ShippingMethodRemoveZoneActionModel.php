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

final class ShippingMethodRemoveZoneActionModel extends JsonObjectModel implements ShippingMethodRemoveZoneAction
{
    const DISCRIMINATOR_VALUE = 'removeZone';
    public function __construct(
        string $action = null,
        ZoneResourceIdentifier $zone = null
    ) {
        $this->action = $action;
        $this->zone = $zone;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?ZoneResourceIdentifier
     */
    protected $zone;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ShippingMethodUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return ZoneResourceIdentifier|null
     */
    final public function getZone()
    {
       if (is_null($this->zone)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ShippingMethodRemoveZoneAction::FIELD_ZONE);
           if (is_null($data)) {
               return null;
           }
           
           $this->zone = ZoneResourceIdentifierModel::of($data);
       }
       return $this->zone;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setZone(?ZoneResourceIdentifier $zone): void
    {
        $this->zone = $zone;
    }
    
}