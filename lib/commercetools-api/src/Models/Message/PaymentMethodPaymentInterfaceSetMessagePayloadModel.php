<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class PaymentMethodPaymentInterfaceSetMessagePayloadModel extends JsonObjectModel implements PaymentMethodPaymentInterfaceSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'PaymentMethodPaymentInterfaceSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $paymentInterface;

    /**
     *
     * @var ?string
     */
    protected $oldPaymentInterface;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $paymentInterface = null,
        ?string $oldPaymentInterface = null,
        ?string $type = null
    ) {
        $this->paymentInterface = $paymentInterface;
        $this->oldPaymentInterface = $oldPaymentInterface;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>Payment interface of the Payment Method after the <a href="ctp:api:type:PaymentMethodSetPaymentInterfaceAction">Set PaymentInterface</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getPaymentInterface()
    {
        if (is_null($this->paymentInterface)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PAYMENT_INTERFACE);
            if (is_null($data)) {
                return null;
            }
            $this->paymentInterface = (string) $data;
        }

        return $this->paymentInterface;
    }

    /**
     * <p>Payment interface of the Payment Method before the <a href="ctp:api:type:PaymentMethodSetPaymentInterfaceAction">Set PaymentInterface</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getOldPaymentInterface()
    {
        if (is_null($this->oldPaymentInterface)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_OLD_PAYMENT_INTERFACE);
            if (is_null($data)) {
                return null;
            }
            $this->oldPaymentInterface = (string) $data;
        }

        return $this->oldPaymentInterface;
    }


    /**
     * @param ?string $paymentInterface
     */
    public function setPaymentInterface(?string $paymentInterface): void
    {
        $this->paymentInterface = $paymentInterface;
    }

    /**
     * @param ?string $oldPaymentInterface
     */
    public function setOldPaymentInterface(?string $oldPaymentInterface): void
    {
        $this->oldPaymentInterface = $oldPaymentInterface;
    }
}
