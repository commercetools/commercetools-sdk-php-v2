<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObjectModel;

final class OrderPaymentStateChangedMessagePayloadModel extends JsonObjectModel implements OrderPaymentStateChangedMessagePayload
{
    const DISCRIMINATOR_VALUE = 'OrderPaymentStateChanged';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $oldPaymentState;

    /**
     * @var ?string
     */
    protected $paymentState;

    public function __construct(
        string $type = null,
        string $oldPaymentState = null,
        string $paymentState = null
    ) {
        $this->type = $type;
        $this->oldPaymentState = $oldPaymentState;
        $this->paymentState = $paymentState;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MessagePayload::FIELD_TYPE);
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
    public function getOldPaymentState()
    {
        if (is_null($this->oldPaymentState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderPaymentStateChangedMessagePayload::FIELD_OLD_PAYMENT_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->oldPaymentState = (string) $data;
        }

        return $this->oldPaymentState;
    }

    /**
     * @return null|string
     */
    public function getPaymentState()
    {
        if (is_null($this->paymentState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderPaymentStateChangedMessagePayload::FIELD_PAYMENT_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->paymentState = (string) $data;
        }

        return $this->paymentState;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function setOldPaymentState(?string $oldPaymentState): void
    {
        $this->oldPaymentState = $oldPaymentState;
    }

    public function setPaymentState(?string $paymentState): void
    {
        $this->paymentState = $paymentState;
    }
}
