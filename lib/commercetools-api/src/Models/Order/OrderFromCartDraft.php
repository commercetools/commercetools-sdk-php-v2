<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;

interface OrderFromCartDraft extends JsonObject
{
    
    const FIELD_ID = 'id';
    const FIELD_VERSION = 'version';
    const FIELD_ORDER_NUMBER = 'orderNumber';
    const FIELD_PAYMENT_STATE = 'paymentState';

    /**
     *
     * @return string|null
     */
    public function getId();
    
    /**
     *
     * @return int|null
     */
    public function getVersion();
    
    /**
     *
     * @return string|null
     */
    public function getOrderNumber();
    
    /**
     *
     * @return string|null
     */
    public function getPaymentState();
    public function setId(?string $id): void;
    
    public function setVersion(?int $version): void;
    
    public function setOrderNumber(?string $orderNumber): void;
    
    public function setPaymentState(?string $paymentState): void;
}