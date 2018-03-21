<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Common\ReferenceModel;

use Commercetools\Types\Common\Reference;

class PaymentReferenceModel extends ReferenceModel implements PaymentReference {
    const DISCRIMINATOR_VALUE = 'payment';

    /**
     * @var Payment
     */
    protected $obj;

    /**
     * @return Payment
     */
    public function getObj()
    {
        if (is_null($this->obj)) {
            $value = $this->raw(PaymentReference::FIELD_OBJ);
            if (is_null($value)) {
                return $this->mapData(Payment::class, null);
            }
            $value = $this->mapData(Payment::class, $value);

            $this->obj = $value;
        }
        return $this->obj;
    }

    /**
     * @param Payment $obj
     * @return $this
     */
    public function setObj(Payment $obj)
    {
        $this->obj = $obj;

        return $this;
    }

}
