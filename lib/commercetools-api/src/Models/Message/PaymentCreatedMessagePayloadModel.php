<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Payment\Payment;
use Commercetools\Api\Models\Payment\PaymentModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class PaymentCreatedMessagePayloadModel extends JsonObjectModel implements PaymentCreatedMessagePayload
{
    const DISCRIMINATOR_VALUE = 'PaymentCreated';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?Payment
     */
    protected $payment;

    public function __construct(
        Payment $payment = null
    ) {
        $this->payment = $payment;
        $this->type = static::DISCRIMINATOR_VALUE;
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
     * @return null|Payment
     */
    public function getPayment()
    {
        if (is_null($this->payment)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(PaymentCreatedMessagePayload::FIELD_PAYMENT);
            if (is_null($data)) {
                return null;
            }

            $this->payment = PaymentModel::of($data);
        }

        return $this->payment;
    }

    public function setPayment(?Payment $payment): void
    {
        $this->payment = $payment;
    }
}
