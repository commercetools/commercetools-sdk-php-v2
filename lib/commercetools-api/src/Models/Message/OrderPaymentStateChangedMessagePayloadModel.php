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

     * @var ?string
     */
    protected $type;

    /**

     * @var ?string
     */
    protected $paymentState;

    /**

     * @var ?string
     */
    protected $oldPaymentState;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $paymentState = null,
        ?string $oldPaymentState = null
    ) {
        $this->paymentState = $paymentState;
        $this->oldPaymentState = $oldPaymentState;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**

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
