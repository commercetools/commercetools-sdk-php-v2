<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\PaymentMethod;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifier;
use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifierBuilder;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifier;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifierBuilder;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<PaymentMethodDraft>
 */
final class PaymentMethodDraftBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $name;

    /**

     * @var null|CustomerResourceIdentifier|CustomerResourceIdentifierBuilder
     */
    private $customer;

    /**

     * @var null|BusinessUnitResourceIdentifier|BusinessUnitResourceIdentifierBuilder
     */
    private $businessUnit;

    /**

     * @var ?string
     */
    private $method;

    /**

     * @var ?string
     */
    private $paymentInterface;

    /**

     * @var ?string
     */
    private $interfaceAccount;

    /**

     * @var null|PaymentMethodToken|PaymentMethodTokenBuilder
     */
    private $token;

    /**

     * @var ?string
     */
    private $paymentMethodStatus;

    /**

     * @var ?bool
     */
    private $default;

    /**

     * @var null|CustomFieldsDraft|CustomFieldsDraftBuilder
     */
    private $custom;

    /**
     * <p>User-defined unique identifier for the PaymentMethod.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Name of the PaymentMethod.</p>
     *

     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
    }

    /**
     * <p>Reference to a Customer the PaymentMethod should belong to.</p>
     * <p>If <code>businessUnit</code> is set, the Customer must be an <a href="ctp:api:type:Associate">Associate</a> of the Business Unit.</p>
     *

     * @return null|CustomerResourceIdentifier
     */
    public function getCustomer()
    {
        return $this->customer instanceof CustomerResourceIdentifierBuilder ? $this->customer->build() : $this->customer;
    }

    /**
     * <p>Reference to a BusinessUnit the PaymentMethod should belong to.</p>
     * <p>Only available for <a href="/../offering/composable-commerce#composable-commerce-for-b2b">B2B</a>-enabled Projects.</p>
     *

     * @return null|BusinessUnitResourceIdentifier
     */
    public function getBusinessUnit()
    {
        return $this->businessUnit instanceof BusinessUnitResourceIdentifierBuilder ? $this->businessUnit->build() : $this->businessUnit;
    }

    /**
     * <p>Payment method to use for the Payment—for example, a credit card or cash advance.</p>
     *

     * @return null|string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * <p>Payment service that processes the Payment—for example, a PSP.</p>
     *

     * @return null|string
     */
    public function getPaymentInterface()
    {
        return $this->paymentInterface;
    }

    /**
     * <p>Account or instance of the payment interface when multiple accounts are used (per interface).</p>
     *

     * @return null|string
     */
    public function getInterfaceAccount()
    {
        return $this->interfaceAccount;
    }

    /**
     * <p>Tokenized representation of the PaymentMethod used by the payment interface.</p>
     *

     * @return null|PaymentMethodToken
     */
    public function getToken()
    {
        return $this->token instanceof PaymentMethodTokenBuilder ? $this->token->build() : $this->token;
    }

    /**
     * <p>Status of the PaymentMethod.</p>
     *

     * @return null|string
     */
    public function getPaymentMethodStatus()
    {
        return $this->paymentMethodStatus;
    }

    /**
     * <p>Set to <code>true</code> if the PaymentMethod should be the default.</p>
     * <p>The default applies per Customer, Business Unit, or the combination of both (Associate).</p>
     *

     * @return null|bool
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * <p>Custom Fields for the PaymentMethod.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?LocalizedString $name
     * @return $this
     */
    public function withName(?LocalizedString $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param ?CustomerResourceIdentifier $customer
     * @return $this
     */
    public function withCustomer(?CustomerResourceIdentifier $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @param ?BusinessUnitResourceIdentifier $businessUnit
     * @return $this
     */
    public function withBusinessUnit(?BusinessUnitResourceIdentifier $businessUnit)
    {
        $this->businessUnit = $businessUnit;

        return $this;
    }

    /**
     * @param ?string $method
     * @return $this
     */
    public function withMethod(?string $method)
    {
        $this->method = $method;

        return $this;
    }

    /**
     * @param ?string $paymentInterface
     * @return $this
     */
    public function withPaymentInterface(?string $paymentInterface)
    {
        $this->paymentInterface = $paymentInterface;

        return $this;
    }

    /**
     * @param ?string $interfaceAccount
     * @return $this
     */
    public function withInterfaceAccount(?string $interfaceAccount)
    {
        $this->interfaceAccount = $interfaceAccount;

        return $this;
    }

    /**
     * @param ?PaymentMethodToken $token
     * @return $this
     */
    public function withToken(?PaymentMethodToken $token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * @param ?string $paymentMethodStatus
     * @return $this
     */
    public function withPaymentMethodStatus(?string $paymentMethodStatus)
    {
        $this->paymentMethodStatus = $paymentMethodStatus;

        return $this;
    }

    /**
     * @param ?bool $default
     * @return $this
     */
    public function withDefault(?bool $default)
    {
        $this->default = $default;

        return $this;
    }

    /**
     * @param ?CustomFieldsDraft $custom
     * @return $this
     */
    public function withCustom(?CustomFieldsDraft $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @deprecated use withName() instead
     * @return $this
     */
    public function withNameBuilder(?LocalizedStringBuilder $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @deprecated use withCustomer() instead
     * @return $this
     */
    public function withCustomerBuilder(?CustomerResourceIdentifierBuilder $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @deprecated use withBusinessUnit() instead
     * @return $this
     */
    public function withBusinessUnitBuilder(?BusinessUnitResourceIdentifierBuilder $businessUnit)
    {
        $this->businessUnit = $businessUnit;

        return $this;
    }

    /**
     * @deprecated use withToken() instead
     * @return $this
     */
    public function withTokenBuilder(?PaymentMethodTokenBuilder $token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * @deprecated use withCustom() instead
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsDraftBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    public function build(): PaymentMethodDraft
    {
        return new PaymentMethodDraftModel(
            $this->key,
            $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name,
            $this->customer instanceof CustomerResourceIdentifierBuilder ? $this->customer->build() : $this->customer,
            $this->businessUnit instanceof BusinessUnitResourceIdentifierBuilder ? $this->businessUnit->build() : $this->businessUnit,
            $this->method,
            $this->paymentInterface,
            $this->interfaceAccount,
            $this->token instanceof PaymentMethodTokenBuilder ? $this->token->build() : $this->token,
            $this->paymentMethodStatus,
            $this->default,
            $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom
        );
    }

    public static function of(): PaymentMethodDraftBuilder
    {
        return new self();
    }
}
