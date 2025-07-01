<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Api\Models\PaymentMethod\PaymentMethodToken;
use Commercetools\Api\Models\PaymentMethod\PaymentMethodTokenModel;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class PaymentMethodInfoDraftModel extends JsonObjectModel implements PaymentMethodInfoDraft
{
    /**
     *
     * @var ?string
     */
    protected $paymentInterface;

    /**
     *
     * @var ?string
     */
    protected $method;

    /**
     *
     * @var ?LocalizedString
     */
    protected $name;

    /**
     *
     * @var ?PaymentMethodToken
     */
    protected $token;

    /**
     *
     * @var ?string
     */
    protected $interfaceAccount;

    /**
     *
     * @var ?CustomFieldsDraft
     */
    protected $custom;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $paymentInterface = null,
        ?string $method = null,
        ?LocalizedString $name = null,
        ?PaymentMethodToken $token = null,
        ?string $interfaceAccount = null,
        ?CustomFieldsDraft $custom = null
    ) {
        $this->paymentInterface = $paymentInterface;
        $this->method = $method;
        $this->name = $name;
        $this->token = $token;
        $this->interfaceAccount = $interfaceAccount;
        $this->custom = $custom;
    }

    /**
     * <p>Payment service that processes the Payment—for example, a PSP.
     * The combination of <code>paymentInterface</code> and the <code>interfaceId</code> of a Payment must be unique.</p>
     * <p>The value cannot be modified after it is set.</p>
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
     * <p>Payment method to use—for example, a credit card or cash advance.</p>
     *
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
     * <p>Name of the Payment Method.</p>
     *
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

    /**
     * <p>Tokenized representation of the Payment Method used by the payment interface.</p>
     *
     *
     * @return null|PaymentMethodToken
     */
    public function getToken()
    {
        if (is_null($this->token)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TOKEN);
            if (is_null($data)) {
                return null;
            }

            $this->token = PaymentMethodTokenModel::of($data);
        }

        return $this->token;
    }

    /**
     * <p>Account or instance of the payment interface when multiple accounts are used (per interface).</p>
     *
     *
     * @return null|string
     */
    public function getInterfaceAccount()
    {
        if (is_null($this->interfaceAccount)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_INTERFACE_ACCOUNT);
            if (is_null($data)) {
                return null;
            }
            $this->interfaceAccount = (string) $data;
        }

        return $this->interfaceAccount;
    }

    /**
     * <p>Custom fields for the PaymentMethodInfo.</p>
     *
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsDraftModel::of($data);
        }

        return $this->custom;
    }


    /**
     * @param ?string $paymentInterface
     */
    public function setPaymentInterface(?string $paymentInterface): void
    {
        $this->paymentInterface = $paymentInterface;
    }

    /**
     * @param ?string $method
     */
    public function setMethod(?string $method): void
    {
        $this->method = $method;
    }

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?PaymentMethodToken $token
     */
    public function setToken(?PaymentMethodToken $token): void
    {
        $this->token = $token;
    }

    /**
     * @param ?string $interfaceAccount
     */
    public function setInterfaceAccount(?string $interfaceAccount): void
    {
        $this->interfaceAccount = $interfaceAccount;
    }

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }
}
