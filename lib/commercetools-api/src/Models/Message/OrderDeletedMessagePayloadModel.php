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

use Commercetools\Api\Models\Order\Order;
use Commercetools\Api\Models\Order\OrderModel;

final class OrderDeletedMessagePayloadModel extends JsonObjectModel implements OrderDeletedMessagePayload
{
    const DISCRIMINATOR_VALUE = 'OrderDeleted';
    public function __construct(
        string $type = null,
        Order $order = null
    ) {
        $this->type = $type;
        $this->order = $order;
        
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?Order
     */
    protected $order;

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
     * @return Order|null
     */
    final public function getOrder()
    {
       if (is_null($this->order)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(OrderDeletedMessagePayload::FIELD_ORDER);
           if (is_null($data)) {
               return null;
           }
           
           $this->order = OrderModel::of($data);
       }
       return $this->order;
    }
    final public function setType(?string $type): void
    {
        $this->type = $type;
    }
    
    final public function setOrder(?Order $order): void
    {
        $this->order = $order;
    }
    
}