<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\PaymentMethod;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifier;
use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifierModel;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifier;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifierModel;
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
final class PaymentMethodDraftModel extends JsonObjectModel implements PaymentMethodDraft
{
    /**
     *
     * @var ?string
     */
    protected $key;

    /**
     *
     * @var ?LocalizedString
     */
    protected $name;

    /**
     *
     * @var ?CustomerResourceIdentifier
     */
    protected $customer;

    /**
     *
     * @var ?BusinessUnitResourceIdentifier
     */
    protected $businessUnit;

    /**
     *
     * @var ?string
     */
    protected $method;

    /**
     *
     * @var ?string
     */
    protected $paymentInterface;

    /**
     *
     * @var ?string
     */
    protected $interfaceAccount;

    /**
     *
     * @var ?PaymentMethodToken
     */
    protected $token;

    /**
     *
     * @var ?string
     */
    protected $paymentMethodStatus;

    /**
     *
     * @var ?bool
     */
    protected $default;

    /**
     *
     * @var ?CustomFieldsDraft
     */
    protected $custom;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $key = null,
        ?LocalizedString $name = null,
        ?CustomerResourceIdentifier $customer = null,
        ?BusinessUnitResourceIdentifier $businessUnit = null,
        ?string $method = null,
        ?string $paymentInterface = null,
        ?string $interfaceAccount = null,
        ?PaymentMethodToken $token = null,
        ?string $paymentMethodStatus = null,
        ?bool $default = null,
        ?CustomFieldsDraft $custom = null
    ) {
        $this->key = $key;
        $this->name = $name;
        $this->customer = $customer;
        $this->businessUnit = $businessUnit;
        $this->method = $method;
        $this->paymentInterface = $paymentInterface;
        $this->interfaceAccount = $interfaceAccount;
        $this->token = $token;
        $this->paymentMethodStatus = $paymentMethodStatus;
        $this->default = $default;
        $this->custom = $custom;
    }

    /**
     * <p>User-defined unique identifier for the PaymentMethod.</p>
     *
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * <p>Name of the PaymentMethod.</p>
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
     * <p>Reference to a Customer the PaymentMethod should belong to.</p>
     * <p>If <code>businessUnit</code> is set, the Customer must be an <a href="ctp:api:type:Associate">Associate</a> of the Business Unit.</p>
     *
     *
     * @return null|CustomerResourceIdentifier
     */
    public function getCustomer()
    {
        if (is_null($this->customer)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOMER);
            if (is_null($data)) {
                return null;
            }

            $this->customer = CustomerResourceIdentifierModel::of($data);
        }

        return $this->customer;
    }

    /**
     * <p>Reference to a BusinessUnit the PaymentMethod should belong to.</p>
     * <p>Only available for <a href="/../offering/composable-commerce#composable-commerce-for-b2b">B2B</a>-enabled Projects.</p>
     *
     *
     * @return null|BusinessUnitResourceIdentifier
     */
    public function getBusinessUnit()
    {
        if (is_null($this->businessUnit)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_BUSINESS_UNIT);
            if (is_null($data)) {
                return null;
            }

            $this->businessUnit = BusinessUnitResourceIdentifierModel::of($data);
        }

        return $this->businessUnit;
    }

    /**
     * <p>Payment method to use for the Payment—for example, a credit card or cash advance.</p>
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
     * <p>Payment service that processes the Payment—for example, a PSP.</p>
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
     * <p>Tokenized representation of the PaymentMethod used by the payment interface.</p>
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
     * <p>Status of the PaymentMethod.</p>
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
     * <p>Set to <code>true</code> if the PaymentMethod should be the default.</p>
     * <p>The default applies per Customer, Business Unit, or the combination of both (Associate).</p>
     *
     *
     * @return null|bool
     */
    public function getDefault()
    {
        if (is_null($this->default)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_DEFAULT);
            if (is_null($data)) {
                return null;
            }
            $this->default = (bool) $data;
        }

        return $this->default;
    }

    /**
     * <p>Custom Fields for the PaymentMethod.</p>
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
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?CustomerResourceIdentifier $customer
     */
    public function setCustomer(?CustomerResourceIdentifier $customer): void
    {
        $this->customer = $customer;
    }

    /**
     * @param ?BusinessUnitResourceIdentifier $businessUnit
     */
    public function setBusinessUnit(?BusinessUnitResourceIdentifier $businessUnit): void
    {
        $this->businessUnit = $businessUnit;
    }

    /**
     * @param ?string $method
     */
    public function setMethod(?string $method): void
    {
        $this->method = $method;
    }

    /**
     * @param ?string $paymentInterface
     */
    public function setPaymentInterface(?string $paymentInterface): void
    {
        $this->paymentInterface = $paymentInterface;
    }

    /**
     * @param ?string $interfaceAccount
     */
    public function setInterfaceAccount(?string $interfaceAccount): void
    {
        $this->interfaceAccount = $interfaceAccount;
    }

    /**
     * @param ?PaymentMethodToken $token
     */
    public function setToken(?PaymentMethodToken $token): void
    {
        $this->token = $token;
    }

    /**
     * @param ?string $paymentMethodStatus
     */
    public function setPaymentMethodStatus(?string $paymentMethodStatus): void
    {
        $this->paymentMethodStatus = $paymentMethodStatus;
    }

    /**
     * @param ?bool $default
     */
    public function setDefault(?bool $default): void
    {
        $this->default = $default;
    }

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }
}
