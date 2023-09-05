<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Payment\PaymentReferenceCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<PaymentInfo>
 */
final class PaymentInfoBuilder implements Builder
{
    /**

     * @var ?PaymentReferenceCollection
     */
    private $payments;

    /**
     * <p><a href="ctp:api:type:Reference">References</a> to the Payments associated with the Order.</p>
     *

     * @return null|PaymentReferenceCollection
     */
    public function getPayments()
    {
        return $this->payments;
    }

    /**
     * @param ?PaymentReferenceCollection $payments
     * @return $this
     */
    public function withPayments(?PaymentReferenceCollection $payments)
    {
        $this->payments = $payments;

        return $this;
    }


    public function build(): PaymentInfo
    {
        return new PaymentInfoModel(
            $this->payments
        );
    }

    public static function of(): PaymentInfoBuilder
    {
        return new self();
    }
}
