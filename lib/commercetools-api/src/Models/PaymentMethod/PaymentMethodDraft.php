<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\PaymentMethod;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifier;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifier;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PaymentMethodDraft extends JsonObject
{
    public const FIELD_KEY = 'key';
    public const FIELD_NAME = 'name';
    public const FIELD_CUSTOMER = 'customer';
    public const FIELD_BUSINESS_UNIT = 'businessUnit';
    public const FIELD_METHOD = 'method';
    public const FIELD_PAYMENT_INTERFACE = 'paymentInterface';
    public const FIELD_INTERFACE_ACCOUNT = 'interfaceAccount';
    public const FIELD_TOKEN = 'token';
    public const FIELD_PAYMENT_METHOD_STATUS = 'paymentMethodStatus';
    public const FIELD_DEFAULT = 'default';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>User-defined unique identifier for the PaymentMethod.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Name of the PaymentMethod.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>Reference to a Customer the PaymentMethod should belong to.</p>
     * <p>If <code>businessUnit</code> is set, the Customer must be an <a href="ctp:api:type:Associate">Associate</a> of the Business Unit.</p>
     *

     * @return null|CustomerResourceIdentifier
     */
    public function getCustomer();

    /**
     * <p>Reference to a BusinessUnit the PaymentMethod should belong to.</p>
     * <p>Only available for <a href="/../offering/composable-commerce#composable-commerce-for-b2b">B2B</a>-enabled Projects.</p>
     *

     * @return null|BusinessUnitResourceIdentifier
     */
    public function getBusinessUnit();

    /**
     * <p>Payment method to use for the Payment—for example, a credit card or cash advance.</p>
     *

     * @return null|string
     */
    public function getMethod();

    /**
     * <p>Payment service that processes the Payment—for example, a PSP.</p>
     *

     * @return null|string
     */
    public function getPaymentInterface();

    /**
     * <p>Account or instance of the payment interface when multiple accounts are used (per interface).</p>
     *

     * @return null|string
     */
    public function getInterfaceAccount();

    /**
     * <p>Tokenized representation of the PaymentMethod used by the payment interface.</p>
     *

     * @return null|PaymentMethodToken
     */
    public function getToken();

    /**
     * <p>Status of the PaymentMethod.</p>
     *

     * @return null|string
     */
    public function getPaymentMethodStatus();

    /**
     * <p>Set to <code>true</code> if the PaymentMethod should be the default.</p>
     * <p>The default applies per Customer, Business Unit, or the combination of both (Associate).</p>
     *

     * @return null|bool
     */
    public function getDefault();

    /**
     * <p>Custom Fields for the PaymentMethod.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?CustomerResourceIdentifier $customer
     */
    public function setCustomer(?CustomerResourceIdentifier $customer): void;

    /**
     * @param ?BusinessUnitResourceIdentifier $businessUnit
     */
    public function setBusinessUnit(?BusinessUnitResourceIdentifier $businessUnit): void;

    /**
     * @param ?string $method
     */
    public function setMethod(?string $method): void;

    /**
     * @param ?string $paymentInterface
     */
    public function setPaymentInterface(?string $paymentInterface): void;

    /**
     * @param ?string $interfaceAccount
     */
    public function setInterfaceAccount(?string $interfaceAccount): void;

    /**
     * @param ?PaymentMethodToken $token
     */
    public function setToken(?PaymentMethodToken $token): void;

    /**
     * @param ?string $paymentMethodStatus
     */
    public function setPaymentMethodStatus(?string $paymentMethodStatus): void;

    /**
     * @param ?bool $default
     */
    public function setDefault(?bool $default): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;
}
