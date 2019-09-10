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


final class OrderStateChangedMessagePayloadModel extends JsonObjectModel implements OrderStateChangedMessagePayload
{
    const DISCRIMINATOR_VALUE = 'OrderStateChanged';
    public function __construct(
        string $type = null,
        string $oldOrderState = null,
        string $orderState = null
    ) {
        $this->type = $type;
        $this->oldOrderState = $oldOrderState;
        $this->orderState = $orderState;
        
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?string
     */
    protected $oldOrderState;
    
    /**
     * @var ?string
     */
    protected $orderState;

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
     * @return string|null
     */
    final public function getOldOrderState()
    {
       if (is_null($this->oldOrderState)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(OrderStateChangedMessagePayload::FIELD_OLD_ORDER_STATE);
           if (is_null($data)) {
               return null;
           }
           $this->oldOrderState = (string)$data;
       }
       return $this->oldOrderState;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getOrderState()
    {
       if (is_null($this->orderState)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(OrderStateChangedMessagePayload::FIELD_ORDER_STATE);
           if (is_null($data)) {
               return null;
           }
           $this->orderState = (string)$data;
       }
       return $this->orderState;
    }
    final public function setType(?string $type): void
    {
        $this->type = $type;
    }
    
    final public function setOldOrderState(?string $oldOrderState): void
    {
        $this->oldOrderState = $oldOrderState;
    }
    
    final public function setOrderState(?string $orderState): void
    {
        $this->orderState = $orderState;
    }
    
}