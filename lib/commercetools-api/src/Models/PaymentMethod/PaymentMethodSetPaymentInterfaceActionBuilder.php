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
 * @implements Builder<PaymentMethodSetPaymentInterfaceAction>
 */
final class PaymentMethodSetPaymentInterfaceActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $paymentInterface;

    /**
     * <p>New payment service that processes the Payment—for example, a PSP.
     * If empty, any existing value will be removed.</p>
     *

     * @return null|string
     */
    public function getPaymentInterface()
    {
        return $this->paymentInterface;
    }

    /**
     * @param ?string $paymentInterface
     * @return $this
     */
    public function withPaymentInterface(?string $paymentInterface)
    {
        $this->paymentInterface = $paymentInterface;

        return $this;
    }


    public function build(): PaymentMethodSetPaymentInterfaceAction
    {
        return new PaymentMethodSetPaymentInterfaceActionModel(
            $this->paymentInterface
        );
    }

    public static function of(): PaymentMethodSetPaymentInterfaceActionBuilder
    {
        return new self();
    }
}
