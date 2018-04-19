<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\Payment\PaymentReference;
use Commercetools\Types\Payment\PaymentReferenceCollection;

class PaymentInfoModel extends JsonObjectModel implements PaymentInfo
{
    /**
     * @var PaymentReferenceCollection
     */
    protected $payments;

    /**
     * @return PaymentReferenceCollection
     */
    public function getPayments()
    {
        if (is_null($this->payments)) {
            $value = $this->raw(PaymentInfo::FIELD_PAYMENTS);
            if (is_null($value)) {
                return $this->mapData(PaymentReferenceCollection::class, null);
            }
            $value = $this->mapData(PaymentReferenceCollection::class, $value);
            $this->payments = $value;
        }
        return $this->payments;
    }

    /**
     * @param PaymentReferenceCollection $payments
     * @return $this
     */
    public function setPayments(PaymentReferenceCollection $payments)
    {
        $this->payments = $payments;

        return $this;
    }

}
