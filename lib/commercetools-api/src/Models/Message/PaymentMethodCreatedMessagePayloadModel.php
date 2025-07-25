<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\PaymentMethod\PaymentMethod;
use Commercetools\Api\Models\PaymentMethod\PaymentMethodModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class PaymentMethodCreatedMessagePayloadModel extends JsonObjectModel implements PaymentMethodCreatedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'PaymentMethodCreated';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?PaymentMethod
     */
    protected $paymentMethod;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?PaymentMethod $paymentMethod = null,
        ?string $type = null
    ) {
        $this->paymentMethod = $paymentMethod;
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
     * <p><a href="ctp:api:type:PaymentMethod">PaymentMethod</a> that was created.</p>
     *
     *
     * @return null|PaymentMethod
     */
    public function getPaymentMethod()
    {
        if (is_null($this->paymentMethod)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PAYMENT_METHOD);
            if (is_null($data)) {
                return null;
            }

            $this->paymentMethod = PaymentMethodModel::of($data);
        }

        return $this->paymentMethod;
    }


    /**
     * @param ?PaymentMethod $paymentMethod
     */
    public function setPaymentMethod(?PaymentMethod $paymentMethod): void
    {
        $this->paymentMethod = $paymentMethod;
    }
}
