<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\PaymentMethod;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class PaymentMethodSetPaymentMethodStatusActionModel extends JsonObjectModel implements PaymentMethodSetPaymentMethodStatusAction
{
    public const DISCRIMINATOR_VALUE = 'setPaymentMethodStatus';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $paymentMethodStatus;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $paymentMethodStatus = null,
        ?string $action = null
    ) {
        $this->paymentMethodStatus = $paymentMethodStatus;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>Value to set.</p>
     *
     *
     * @return null|string
     */
    public function getPaymentMethodStatus()
    {
        if (is_null($this->paymentMethodStatus)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PAYMENT_METHOD_STATUS);
            if (is_null($data)) {
                return null;
            }
            $this->paymentMethodStatus = (string) $data;
        }

        return $this->paymentMethodStatus;
    }


    /**
     * @param ?string $paymentMethodStatus
     */
    public function setPaymentMethodStatus(?string $paymentMethodStatus): void
    {
        $this->paymentMethodStatus = $paymentMethodStatus;
    }
}
