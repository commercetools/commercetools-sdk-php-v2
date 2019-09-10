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
use Commercetools\Api\Models\Order\Delivery;
use Commercetools\Api\Models\Order\DeliveryBuilder;
use Commercetools\Api\Models\Order\Parcel;
use Commercetools\Api\Models\Order\ParcelBuilder;

/**
 * @implements Builder<ParcelAddedToDeliveryMessagePayload>
 */
final class ParcelAddedToDeliveryMessagePayloadBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?DeliveryBuilder|Delivery
     */
    protected $delivery;
    
    /**
     * @var ?ParcelBuilder|Parcel
     */
    protected $parcel;

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
     * @return Delivery|null
     */
    final public function getDelivery()
    {
       return ($this->delivery instanceof DeliveryBuilder ? $this->delivery->build() : $this->delivery);
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
    final public function withDelivery(?Delivery $delivery)
    {
        $this->delivery = $delivery;
        
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
    final public function withDeliveryBuilder(?DeliveryBuilder $delivery)
    {
        $this->delivery = $delivery;
        
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
    
    public function build(): ParcelAddedToDeliveryMessagePayload {
        return new ParcelAddedToDeliveryMessagePayloadModel(
            $this->type,
            ($this->delivery instanceof DeliveryBuilder ? $this->delivery->build() : $this->delivery),
            ($this->parcel instanceof ParcelBuilder ? $this->parcel->build() : $this->parcel)
        );
    }
    
    public static function of(): ParcelAddedToDeliveryMessagePayloadBuilder
    {
        return new self();
    }
}