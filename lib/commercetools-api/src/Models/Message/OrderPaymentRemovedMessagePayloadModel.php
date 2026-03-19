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
final class OrderPaymentRemovedMessagePayloadModel extends JsonObjectModel implements OrderPaymentRemovedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'OrderPaymentRemoved';
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
     *
     * @var ?bool
     */
    protected $removedPaymentInfo;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?PaymentReference $paymentRef = null,
        ?bool $removedPaymentInfo = null,
        ?string $type = null
    ) {
        $this->paymentRef = $paymentRef;
        $this->removedPaymentInfo = $removedPaymentInfo;
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
     * <p><a href="ctp:api:type:Payment">Payment</a> that was removed from the <a href="ctp:api:type:Order">Order</a>.</p>
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
     * <p>Indicates whether the removal of the Payment resulted in no Payments remaining on the Order. The value is <code>true</code> if all Payments have been removed (none remain), and <code>false</code> if there are still Payments associated with the Order after the removal.</p>
     *
     *
     * @return null|bool
     */
    public function getRemovedPaymentInfo()
    {
        if (is_null($this->removedPaymentInfo)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_REMOVED_PAYMENT_INFO);
            if (is_null($data)) {
                return null;
            }
            $this->removedPaymentInfo = (bool) $data;
        }

        return $this->removedPaymentInfo;
    }


    /**
     * @param ?PaymentReference $paymentRef
     */
    public function setPaymentRef(?PaymentReference $paymentRef): void
    {
        $this->paymentRef = $paymentRef;
    }

    /**
     * @param ?bool $removedPaymentInfo
     */
    public function setRemovedPaymentInfo(?bool $removedPaymentInfo): void
    {
        $this->removedPaymentInfo = $removedPaymentInfo;
    }
}
