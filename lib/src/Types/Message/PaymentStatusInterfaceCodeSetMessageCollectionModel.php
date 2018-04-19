<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class PaymentStatusInterfaceCodeSetMessageCollectionModel extends MessageCollectionModel implements PaymentStatusInterfaceCodeSetMessageCollection
{

    /**
     * @param PaymentStatusInterfaceCodeSetMessage $value
     * @return PaymentStatusInterfaceCodeSetMessageCollection
     */
    public function add($value) {
        if (!$value instanceof PaymentStatusInterfaceCodeSetMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return PaymentStatusInterfaceCodeSetMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof PaymentStatusInterfaceCodeSetMessage) {
            $data = $this->mapData(PaymentStatusInterfaceCodeSetMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
