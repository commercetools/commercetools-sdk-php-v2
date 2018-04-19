<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Message\MessageModel;

use Commercetools\Types\Order\Delivery;

class DeliveryAddedMessageModel extends MessageModel implements DeliveryAddedMessage
{
    const DISCRIMINATOR_VALUE = 'DeliveryAdded';

    /**
     * @var Delivery
     */
    protected $delivery;

    /**
     * @return Delivery
     */
    public function getDelivery()
    {
        if (is_null($this->delivery)) {
            $value = $this->raw(DeliveryAddedMessage::FIELD_DELIVERY);
            if (is_null($value)) {
                return $this->mapData(Delivery::class, null);
            }
            $value = $this->mapData(Delivery::class, $value);

            $this->delivery = $value;
        }
        return $this->delivery;
    }

    /**
     * @param Delivery $delivery
     * @return $this
     */
    public function setDelivery(Delivery $delivery)
    {
        $this->delivery = $delivery;

        return $this;
    }

}
