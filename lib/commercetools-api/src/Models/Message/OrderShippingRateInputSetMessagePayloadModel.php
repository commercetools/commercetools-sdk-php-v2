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

use Commercetools\Api\Models\Cart\ShippingRateInput;
use Commercetools\Api\Models\Cart\ShippingRateInputModel;

final class OrderShippingRateInputSetMessagePayloadModel extends JsonObjectModel implements OrderShippingRateInputSetMessagePayload
{
    const DISCRIMINATOR_VALUE = 'OrderShippingRateInputSet';
    public function __construct(
        string $type = null,
        ShippingRateInput $shippingRateInput = null,
        ShippingRateInput $oldShippingRateInput = null
    ) {
        $this->type = $type;
        $this->shippingRateInput = $shippingRateInput;
        $this->oldShippingRateInput = $oldShippingRateInput;
        
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?ShippingRateInput
     */
    protected $shippingRateInput;
    
    /**
     * @var ?ShippingRateInput
     */
    protected $oldShippingRateInput;

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
     * @return ShippingRateInput|null
     */
    final public function getShippingRateInput()
    {
       if (is_null($this->shippingRateInput)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(OrderShippingRateInputSetMessagePayload::FIELD_SHIPPING_RATE_INPUT);
           if (is_null($data)) {
               return null;
           }
           $className = ShippingRateInputModel::resolveDiscriminatorClass($data);
           $this->shippingRateInput = $className::of($data);
       }
       return $this->shippingRateInput;
    }
    
    /**
     *
     * @return ShippingRateInput|null
     */
    final public function getOldShippingRateInput()
    {
       if (is_null($this->oldShippingRateInput)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(OrderShippingRateInputSetMessagePayload::FIELD_OLD_SHIPPING_RATE_INPUT);
           if (is_null($data)) {
               return null;
           }
           $className = ShippingRateInputModel::resolveDiscriminatorClass($data);
           $this->oldShippingRateInput = $className::of($data);
       }
       return $this->oldShippingRateInput;
    }
    final public function setType(?string $type): void
    {
        $this->type = $type;
    }
    
    final public function setShippingRateInput(?ShippingRateInput $shippingRateInput): void
    {
        $this->shippingRateInput = $shippingRateInput;
    }
    
    final public function setOldShippingRateInput(?ShippingRateInput $oldShippingRateInput): void
    {
        $this->oldShippingRateInput = $oldShippingRateInput;
    }
    
}