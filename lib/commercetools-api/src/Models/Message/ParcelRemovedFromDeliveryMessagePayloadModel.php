<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Order\Parcel;
use Commercetools\Api\Models\Order\ParcelModel;

final class ParcelRemovedFromDeliveryMessagePayloadModel extends JsonObjectModel implements ParcelRemovedFromDeliveryMessagePayload
{
    const DISCRIMINATOR_VALUE = 'ParcelRemovedFromDelivery';
    public function __construct(
        string $type = null,
        Parcel $parcel = null,
        string $deliveryId = null
    ) {
        $this->type = $type;
        $this->parcel = $parcel;
        $this->deliveryId = $deliveryId;
        
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?Parcel
     */
    protected $parcel;
    
    /**
     * @var ?string
     */
    protected $deliveryId;

    /**
     *
     * @return string|null
     */
    final public function getType()
    {
       if (is_null($this->type)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(MessagePayload::FIELD_TYPE);
           if (is_null($data)) {
               return null;
           }
           $this->type = (string)$data;
       }
       return $this->type;
    }
    
    /**
     *
     * @return Parcel|null
     */
    final public function getParcel()
    {
       if (is_null($this->parcel)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ParcelRemovedFromDeliveryMessagePayload::FIELD_PARCEL);
           if (is_null($data)) {
               return null;
           }
           
           $this->parcel = ParcelModel::of($data);
       }
       return $this->parcel;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getDeliveryId()
    {
       if (is_null($this->deliveryId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ParcelRemovedFromDeliveryMessagePayload::FIELD_DELIVERY_ID);
           if (is_null($data)) {
               return null;
           }
           $this->deliveryId = (string)$data;
       }
       return $this->deliveryId;
    }
    final public function setType(?string $type): void
    {
        $this->type = $type;
    }
    
    final public function setParcel(?Parcel $parcel): void
    {
        $this->parcel = $parcel;
    }
    
    final public function setDeliveryId(?string $deliveryId): void
    {
        $this->deliveryId = $deliveryId;
    }
    
}