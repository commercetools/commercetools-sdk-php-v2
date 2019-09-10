<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Payment\PaymentReferenceCollection;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class PaymentInfoModel extends JsonObjectModel implements PaymentInfo
{
    /**
     * @var ?PaymentReferenceCollection
     */
    protected $payments;

    public function __construct(
        PaymentReferenceCollection $payments = null
    ) {
        $this->payments = $payments;
    }

    /**
     * @return null|PaymentReferenceCollection
     */
    public function getPayments()
    {
        if (is_null($this->payments)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(PaymentInfo::FIELD_PAYMENTS);
            if (is_null($data)) {
                return null;
            }
            $this->payments = PaymentReferenceCollection::fromArray($data);
        }

        return $this->payments;
    }

    public function setPayments(?PaymentReferenceCollection $payments): void
    {
        $this->payments = $payments;
    }
}
