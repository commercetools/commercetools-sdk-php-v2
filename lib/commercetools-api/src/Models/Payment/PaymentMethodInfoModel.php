<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class PaymentMethodInfoModel extends JsonObjectModel implements PaymentMethodInfo
{
    /**
     * @var ?string
     */
    protected $paymentInterface;

    /**
     * @var ?string
     */
    protected $method;

    /**
     * @var ?LocalizedString
     */
    protected $name;


    public function __construct(
        string $paymentInterface = null,
        string $method = null,
        LocalizedString $name = null
    ) {
        $this->paymentInterface = $paymentInterface;
        $this->method = $method;
        $this->name = $name;
    }

    /**
     * <p>The interface that handles the payment (usually a PSP).
     * Cannot be changed once it has been set.
     * The combination of Payment<code>interfaceId</code> and this field must be unique.</p>
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
     * <p>The payment method that is used, e.g.
     * e.g.
     * a conventional string representing Credit Card, Cash Advance etc.</p>
     *
     * @return null|string
     */
    public function getMethod()
    {
        if (is_null($this->method)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_METHOD);
            if (is_null($data)) {
                return null;
            }
            $this->method = (string) $data;
        }

        return $this->method;
    }

    /**
     * <p>A human-readable, localized name for the payment method, e.g.
     * 'Credit Card'.</p>
     *
     * @return null|LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }

            $this->name = LocalizedStringModel::of($data);
        }

        return $this->name;
    }


    public function setPaymentInterface(?string $paymentInterface): void
    {
        $this->paymentInterface = $paymentInterface;
    }

    public function setMethod(?string $method): void
    {
        $this->method = $method;
    }

    public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }
}
