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
final class PaymentMethodSetPaymentInterfaceActionModel extends JsonObjectModel implements PaymentMethodSetPaymentInterfaceAction
{
    public const DISCRIMINATOR_VALUE = 'setPaymentInterface';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $paymentInterface;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $paymentInterface = null,
        ?string $action = null
    ) {
        $this->paymentInterface = $paymentInterface;
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
     * <p>New payment service that processes the Payment—for example, a PSP.
     * If empty, any existing value will be removed.</p>
     *
     *
     * @return null|string
     */
    public function getPaymentInterface()
    {
        if (is_null($this->paymentInterface)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PAYMENT_INTERFACE);
            if (is_null($data)) {
                return null;
            }
            $this->paymentInterface = (string) $data;
        }

        return $this->paymentInterface;
    }


    /**
     * @param ?string $paymentInterface
     */
    public function setPaymentInterface(?string $paymentInterface): void
    {
        $this->paymentInterface = $paymentInterface;
    }
}
