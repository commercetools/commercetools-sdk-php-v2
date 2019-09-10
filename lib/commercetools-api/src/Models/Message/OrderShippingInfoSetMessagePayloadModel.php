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

use Commercetools\Api\Models\Cart\ShippingInfo;
use Commercetools\Api\Models\Cart\ShippingInfoModel;

final class OrderShippingInfoSetMessagePayloadModel extends JsonObjectModel implements OrderShippingInfoSetMessagePayload
{
    const DISCRIMINATOR_VALUE = 'OrderShippingInfoSet';
    public function __construct(
        string $type = null,
        ShippingInfo $shippingInfo = null,
        ShippingInfo $oldShippingInfo = null
    ) {
        $this->type = $type;
        $this->shippingInfo = $shippingInfo;
        $this->oldShippingInfo = $oldShippingInfo;
        
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?ShippingInfo
     */
    protected $shippingInfo;
    
    /**
     * @var ?ShippingInfo
     */
    protected $oldShippingInfo;

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
     * @return ShippingInfo|null
     */
    final public function getShippingInfo()
    {
       if (is_null($this->shippingInfo)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(OrderShippingInfoSetMessagePayload::FIELD_SHIPPING_INFO);
           if (is_null($data)) {
               return null;
           }
           
           $this->shippingInfo = ShippingInfoModel::of($data);
       }
       return $this->shippingInfo;
    }
    
    /**
     *
     * @return ShippingInfo|null
     */
    final public function getOldShippingInfo()
    {
       if (is_null($this->oldShippingInfo)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(OrderShippingInfoSetMessagePayload::FIELD_OLD_SHIPPING_INFO);
           if (is_null($data)) {
               return null;
           }
           
           $this->oldShippingInfo = ShippingInfoModel::of($data);
       }
       return $this->oldShippingInfo;
    }
    final public function setType(?string $type): void
    {
        $this->type = $type;
    }
    
    final public function setShippingInfo(?ShippingInfo $shippingInfo): void
    {
        $this->shippingInfo = $shippingInfo;
    }
    
    final public function setOldShippingInfo(?ShippingInfo $oldShippingInfo): void
    {
        $this->oldShippingInfo = $oldShippingInfo;
    }
    
}