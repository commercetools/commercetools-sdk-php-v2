<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\PaymentMethod\PaymentMethod;
use Commercetools\Api\Models\PaymentMethod\PaymentMethodBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<PaymentMethodDeletedMessagePayload>
 */
final class PaymentMethodDeletedMessagePayloadBuilder implements Builder
{
    /**

     * @var null|PaymentMethod|PaymentMethodBuilder
     */
    private $paymentMethod;

    /**
     * <p>The <a href="ctp:api:type:PaymentMethod">PaymentMethod</a> that was deleted.</p>
     *

     * @return null|PaymentMethod
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod instanceof PaymentMethodBuilder ? $this->paymentMethod->build() : $this->paymentMethod;
    }

    /**
     * @param ?PaymentMethod $paymentMethod
     * @return $this
     */
    public function withPaymentMethod(?PaymentMethod $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    /**
     * @deprecated use withPaymentMethod() instead
     * @return $this
     */
    public function withPaymentMethodBuilder(?PaymentMethodBuilder $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    public function build(): PaymentMethodDeletedMessagePayload
    {
        return new PaymentMethodDeletedMessagePayloadModel(
            $this->paymentMethod instanceof PaymentMethodBuilder ? $this->paymentMethod->build() : $this->paymentMethod
        );
    }

    public static function of(): PaymentMethodDeletedMessagePayloadBuilder
    {
        return new self();
    }
}
