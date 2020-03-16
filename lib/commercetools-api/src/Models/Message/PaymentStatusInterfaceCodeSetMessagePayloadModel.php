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
final class PaymentStatusInterfaceCodeSetMessagePayloadModel extends JsonObjectModel implements PaymentStatusInterfaceCodeSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'PaymentStatusInterfaceCodeSet';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $paymentId;

    /**
     * @var ?string
     */
    protected $interfaceCode;


    public function __construct(
        string $paymentId = null,
        string $interfaceCode = null
    ) {
        $this->paymentId = $paymentId;
        $this->interfaceCode = $interfaceCode;
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
     * @return null|string
     */
    public function getPaymentId()
    {
        if (is_null($this->paymentId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(PaymentStatusInterfaceCodeSetMessagePayload::FIELD_PAYMENT_ID);
            if (is_null($data)) {
                return null;
            }
            $this->paymentId = (string) $data;
        }

        return $this->paymentId;
    }

    /**
     * @return null|string
     */
    public function getInterfaceCode()
    {
        if (is_null($this->interfaceCode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(PaymentStatusInterfaceCodeSetMessagePayload::FIELD_INTERFACE_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->interfaceCode = (string) $data;
        }

        return $this->interfaceCode;
    }

    public function setPaymentId(?string $paymentId): void
    {
        $this->paymentId = $paymentId;
    }

    public function setInterfaceCode(?string $interfaceCode): void
    {
        $this->interfaceCode = $interfaceCode;
    }
}
