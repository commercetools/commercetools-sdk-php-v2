<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

class OrderFromCartDraftModel extends JsonObjectModel implements OrderFromCartDraft
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var int
     */
    protected $version;
    /**
     * @var string
     */
    protected $orderNumber;
    /**
     * @var string
     */
    protected $paymentState;

    /**
     * @return string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            $value = $this->raw(OrderFromCartDraft::FIELD_ID);
            $value = (string)$value;
            $this->id = $value;
        }
        return $this->id;
    }
    /**
     * @return int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            $value = $this->raw(OrderFromCartDraft::FIELD_VERSION);
            $value = (int)$value;
            $this->version = $value;
        }
        return $this->version;
    }
    /**
     * @return string
     */
    public function getOrderNumber()
    {
        if (is_null($this->orderNumber)) {
            $value = $this->raw(OrderFromCartDraft::FIELD_ORDER_NUMBER);
            $value = (string)$value;
            $this->orderNumber = $value;
        }
        return $this->orderNumber;
    }
    /**
     * @return string
     */
    public function getPaymentState()
    {
        if (is_null($this->paymentState)) {
            $value = $this->raw(OrderFromCartDraft::FIELD_PAYMENT_STATE);
            $value = (string)$value;
            $this->paymentState = $value;
        }
        return $this->paymentState;
    }

    /**
     * @param string $id
     * @return $this
     */
    public function setId(string $id)
    {
        $this->id = (string)$id;

        return $this;
    }
    /**
     * @param int $version
     * @return $this
     */
    public function setVersion(int $version)
    {
        $this->version = (int)$version;

        return $this;
    }
    /**
     * @param string $orderNumber
     * @return $this
     */
    public function setOrderNumber(string $orderNumber)
    {
        $this->orderNumber = (string)$orderNumber;

        return $this;
    }
    /**
     * @param string $paymentState
     * @return $this
     */
    public function setPaymentState(string $paymentState)
    {
        $this->paymentState = (string)$paymentState;

        return $this;
    }

}
