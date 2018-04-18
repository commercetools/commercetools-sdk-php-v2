<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Payment\PaymentUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class PaymentAddInterfaceInteractionActionCollectionModel extends PaymentUpdateActionCollectionModel implements PaymentAddInterfaceInteractionActionCollection {

    /**
     * @param PaymentAddInterfaceInteractionAction $value
     * @return PaymentAddInterfaceInteractionActionCollection
     */
    public function add($value) {
        if (!$value instanceof PaymentAddInterfaceInteractionAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return PaymentAddInterfaceInteractionAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof PaymentAddInterfaceInteractionAction) {
            $data = $this->mapData(PaymentAddInterfaceInteractionAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
