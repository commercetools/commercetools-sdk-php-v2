<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Payment\PaymentReference;
use Commercetools\Api\Models\Payment\PaymentReferenceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class OrderPaymentAddedMessagePayloadModel extends JsonObjectModel implements OrderPaymentAddedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'OrderPaymentAdded';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?PaymentReference
     */
    protected $payment;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?PaymentReference $payment = null
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
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|PaymentReference
     */
    public function getPayment()
    {
        if (is_null($this->payment)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PAYMENT);
            if (is_null($data)) {
                return null;
            }

            $this->payment = PaymentReferenceModel::of($data);
        }

        return $this->payment;
    }


    /**
     * @param ?PaymentReference $payment
     */
    public function setPayment(?PaymentReference $payment): void
    {
        $this->payment = $payment;
    }
}
