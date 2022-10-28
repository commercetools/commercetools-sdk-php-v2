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
final class OrderPaymentStateChangedMessagePayloadModel extends JsonObjectModel implements OrderPaymentStateChangedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'OrderPaymentStateChanged';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $paymentState;

    /**
     *
     * @var ?string
     */
    protected $oldPaymentState;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $paymentState = null,
        ?string $oldPaymentState = null,
        ?string $type = null
    ) {
        $this->paymentState = $paymentState;
        $this->oldPaymentState = $oldPaymentState;
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
     * <p><a href="ctp:api:type:PaymentState">PaymentState</a> after the <a href="ctp:api:type:OrderChangePaymentStateAction">Change Payment State</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getPaymentState()
    {
        if (is_null($this->paymentState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PAYMENT_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->paymentState = (string) $data;
        }

        return $this->paymentState;
    }

    /**
     * <p><a href="ctp:api:type:PaymentState">PaymentState</a> before the <a href="ctp:api:type:OrderChangePaymentStateAction">Change Payment State</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getOldPaymentState()
    {
        if (is_null($this->oldPaymentState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_OLD_PAYMENT_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->oldPaymentState = (string) $data;
        }

        return $this->oldPaymentState;
    }


    /**
     * @param ?string $paymentState
     */
    public function setPaymentState(?string $paymentState): void
    {
        $this->paymentState = $paymentState;
    }

    /**
     * @param ?string $oldPaymentState
     */
    public function setOldPaymentState(?string $oldPaymentState): void
    {
        $this->oldPaymentState = $oldPaymentState;
    }
}
