<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<PaymentMethodPaymentInterfaceSetMessagePayload>
 */
final class PaymentMethodPaymentInterfaceSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $paymentInterface;

    /**

     * @var ?string
     */
    private $oldPaymentInterface;

    /**
     * <p>Payment interface of the Payment Method after the <a href="ctp:api:type:PaymentMethodSetPaymentInterfaceAction">Set PaymentInterface</a> update action.</p>
     *

     * @return null|string
     */
    public function getPaymentInterface()
    {
        return $this->paymentInterface;
    }

    /**
     * <p>Payment interface of the Payment Method before the <a href="ctp:api:type:PaymentMethodSetPaymentInterfaceAction">Set PaymentInterface</a> update action.</p>
     *

     * @return null|string
     */
    public function getOldPaymentInterface()
    {
        return $this->oldPaymentInterface;
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

    /**
     * @param ?string $oldPaymentInterface
     * @return $this
     */
    public function withOldPaymentInterface(?string $oldPaymentInterface)
    {
        $this->oldPaymentInterface = $oldPaymentInterface;

        return $this;
    }


    public function build(): PaymentMethodPaymentInterfaceSetMessagePayload
    {
        return new PaymentMethodPaymentInterfaceSetMessagePayloadModel(
            $this->paymentInterface,
            $this->oldPaymentInterface
        );
    }

    public static function of(): PaymentMethodPaymentInterfaceSetMessagePayloadBuilder
    {
        return new self();
    }
}
