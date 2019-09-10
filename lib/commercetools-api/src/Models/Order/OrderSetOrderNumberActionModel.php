<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class OrderSetOrderNumberActionModel extends JsonObjectModel implements OrderSetOrderNumberAction
{
    const DISCRIMINATOR_VALUE = 'setOrderNumber';
    public function __construct(
        string $action = null,
        string $orderNumber = null
    ) {
        $this->action = $action;
        $this->orderNumber = $orderNumber;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $orderNumber;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(OrderUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getOrderNumber()
    {
       if (is_null($this->orderNumber)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(OrderSetOrderNumberAction::FIELD_ORDER_NUMBER);
           if (is_null($data)) {
               return null;
           }
           $this->orderNumber = (string)$data;
       }
       return $this->orderNumber;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setOrderNumber(?string $orderNumber): void
    {
        $this->orderNumber = $orderNumber;
    }
    
}