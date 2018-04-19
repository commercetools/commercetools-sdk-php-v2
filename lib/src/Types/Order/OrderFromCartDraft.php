<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\JsonObject;

interface OrderFromCartDraft extends JsonObject
{
    const FIELD_ID = 'id';
    const FIELD_VERSION = 'version';
    const FIELD_ORDER_NUMBER = 'orderNumber';
    const FIELD_PAYMENT_STATE = 'paymentState';

    /**
     * @return string
     */
    public function getId();

    /**
     * @return int
     */
    public function getVersion();

    /**
     * @return string
     */
    public function getOrderNumber();

    /**
     * @return string
     */
    public function getPaymentState();

    /**
     * @param string $id
     * @return $this
     */
    public function setId(string $id);

    /**
     * @param int $version
     * @return $this
     */
    public function setVersion(int $version);

    /**
     * @param string $orderNumber
     * @return $this
     */
    public function setOrderNumber(string $orderNumber);

    /**
     * @param string $paymentState
     * @return $this
     */
    public function setPaymentState(string $paymentState);

}
