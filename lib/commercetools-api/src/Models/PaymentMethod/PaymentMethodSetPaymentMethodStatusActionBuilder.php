<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\PaymentMethod;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<PaymentMethodSetPaymentMethodStatusAction>
 */
final class PaymentMethodSetPaymentMethodStatusActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $paymentMethodStatus;

    /**
     * <p>Value to set.</p>
     *

     * @return null|string
     */
    public function getPaymentMethodStatus()
    {
        return $this->paymentMethodStatus;
    }

    /**
     * @param ?string $paymentMethodStatus
     * @return $this
     */
    public function withPaymentMethodStatus(?string $paymentMethodStatus)
    {
        $this->paymentMethodStatus = $paymentMethodStatus;

        return $this;
    }


    public function build(): PaymentMethodSetPaymentMethodStatusAction
    {
        return new PaymentMethodSetPaymentMethodStatusActionModel(
            $this->paymentMethodStatus
        );
    }

    public static function of(): PaymentMethodSetPaymentMethodStatusActionBuilder
    {
        return new self();
    }
}
