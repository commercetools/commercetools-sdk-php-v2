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
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?PaymentReference
     */
    protected $paymentRef;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?PaymentReference $paymentRef = null,
        ?string $type = null
    ) {
        $this->paymentRef = $paymentRef;
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
     * <p><a href="ctp:api:type:Payment">Payment</a> that was added to the <a href="ctp:api:type:Order">Order</a>.</p>
     *
     *
     * @return null|PaymentReference
     */
    public function getPaymentRef()
    {
        if (is_null($this->paymentRef)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PAYMENT_REF);
            if (is_null($data)) {
                return null;
            }

            $this->paymentRef = PaymentReferenceModel::of($data);
        }

        return $this->paymentRef;
    }


    /**
     * @param ?PaymentReference $paymentRef
     */
    public function setPaymentRef(?PaymentReference $paymentRef): void
    {
        $this->paymentRef = $paymentRef;
    }
}
