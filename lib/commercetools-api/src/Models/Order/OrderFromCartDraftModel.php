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


final class OrderFromCartDraftModel extends JsonObjectModel implements OrderFromCartDraft
{
    
    public function __construct(
        string $orderNumber = null,
        string $id = null,
        string $paymentState = null,
        int $version = null
    ) {
        $this->orderNumber = $orderNumber;
        $this->id = $id;
        $this->paymentState = $paymentState;
        $this->version = $version;
        
    }

    /**
     * @var ?string
     */
    protected $orderNumber;
    
    /**
     * @var ?string
     */
    protected $id;
    
    /**
     * @var ?string
     */
    protected $paymentState;
    
    /**
     * @var ?int
     */
    protected $version;

    /**
     *
     * @return string|null
     */
    final public function getOrderNumber()
    {
       if (is_null($this->orderNumber)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(OrderFromCartDraft::FIELD_ORDER_NUMBER);
           if (is_null($data)) {
               return null;
           }
           $this->orderNumber = (string)$data;
       }
       return $this->orderNumber;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getId()
    {
       if (is_null($this->id)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(OrderFromCartDraft::FIELD_ID);
           if (is_null($data)) {
               return null;
           }
           $this->id = (string)$data;
       }
       return $this->id;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getPaymentState()
    {
       if (is_null($this->paymentState)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(OrderFromCartDraft::FIELD_PAYMENT_STATE);
           if (is_null($data)) {
               return null;
           }
           $this->paymentState = (string)$data;
       }
       return $this->paymentState;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getVersion()
    {
       if (is_null($this->version)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(OrderFromCartDraft::FIELD_VERSION);
           if (is_null($data)) {
               return null;
           }
           $this->version = (int)$data;
       }
       return $this->version;
    }
    final public function setOrderNumber(?string $orderNumber): void
    {
        $this->orderNumber = $orderNumber;
    }
    
    final public function setId(?string $id): void
    {
        $this->id = $id;
    }
    
    final public function setPaymentState(?string $paymentState): void
    {
        $this->paymentState = $paymentState;
    }
    
    final public function setVersion(?int $version): void
    {
        $this->version = $version;
    }
    
}