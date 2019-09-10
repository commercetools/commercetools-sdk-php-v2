<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Order\Parcel;
use Commercetools\Api\Models\Order\ParcelBuilder;

/**
 * @implements Builder<ParcelRemovedFromDeliveryMessagePayload>
 */
final class ParcelRemovedFromDeliveryMessagePayloadBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?ParcelBuilder|Parcel
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
       return $this->type;
    }
    
    /**
     *
     * @return Parcel|null
     */
    final public function getParcel()
    {
       return ($this->parcel instanceof ParcelBuilder ? $this->parcel->build() : $this->parcel);
    }
    
    /**
     *
     * @return string|null
     */
    final public function getDeliveryId()
    {
       return $this->deliveryId;
    }
    /**
     * @return $this
     */
    final public function withType(?string $type)
    {
        $this->type = $type;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withParcel(?Parcel $parcel)
    {
        $this->parcel = $parcel;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withDeliveryId(?string $deliveryId)
    {
        $this->deliveryId = $deliveryId;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withParcelBuilder(?ParcelBuilder $parcel)
    {
        $this->parcel = $parcel;
        
        return $this;
    }
    
    public function build(): ParcelRemovedFromDeliveryMessagePayload {
        return new ParcelRemovedFromDeliveryMessagePayloadModel(
            $this->type,
            ($this->parcel instanceof ParcelBuilder ? $this->parcel->build() : $this->parcel),
            $this->deliveryId
        );
    }
    
    public static function of(): ParcelRemovedFromDeliveryMessagePayloadBuilder
    {
        return new self();
    }
}