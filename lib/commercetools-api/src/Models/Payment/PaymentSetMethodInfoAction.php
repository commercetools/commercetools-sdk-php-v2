<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\PaymentMethod\PaymentMethodToken;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PaymentSetMethodInfoAction extends PaymentUpdateAction
{
    public const FIELD_PAYMENT_INTERFACE = 'paymentInterface';
    public const FIELD_METHOD = 'method';
    public const FIELD_NAME = 'name';
    public const FIELD_TOKEN = 'token';
    public const FIELD_INTERFACE_ACCOUNT = 'interfaceAccount';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>Payment service that processes the Payment—for example, a PSP.
     * The combination of <code>paymentInterface</code> and the <code>interfaceId</code> of a Payment must be unique.
     * The value cannot be modified after it is set.</p>
     * <p>Setting this field is equivalent to the <code>setMethodInfoInterface</code> action and will generate the <a href="ctp:api:type:PaymentMethodInfoInterfaceSetMessage">PaymentMethodInfoInterfaceSet</a> Message.</p>
     *

     * @return null|string
     */
    public function getPaymentInterface();

    /**
     * <p>Payment method to use—for example, a credit card or direct debit.
     * If empty, any existing value will be removed.</p>
     * <p>Setting this field is equivalent to the <code>setMethodInfoMethod</code> action and will generate the <a href="ctp:api:type:PaymentMethodInfoMethodSetMessage">PaymentMethodInfoMethodSet</a> Message.</p>
     *

     * @return null|string
     */
    public function getMethod();

    /**
     * <p>Name of the Payment Method.
     * If empty, any existing value will be removed.</p>
     * <p>Setting this field is equivalent to the <code>setMethodInfoName</code> action and will generate the <a href="ctp:api:type:PaymentMethodInfoNameSetMessage">PaymentMethodInfoNameSet</a> Message.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>Tokenized payment method information of the Payment Method.
     * If empty, any existing value will be removed.</p>
     * <p>Setting this field is equivalent to the <code>setMethodInfoToken</code> action and will generate the <a href="ctp:api:type:PaymentMethodInfoTokenSetMessage">PaymentMethodInfoTokenSet</a> Message.</p>
     *

     * @return null|PaymentMethodToken
     */
    public function getToken();

    /**
     * <p>Account or instance of the payment interface when multiple accounts are used (per interface).
     * If empty, any existing value will be removed.</p>
     * <p>Setting this field is equivalent to the <code>setMethodInfoInterfaceAccount</code> action and will generate the <a href="ctp:api:type:PaymentMethodInfoInterfaceAccountSetMessage">PaymentMethodInfoInterfaceAccountSet</a> Message.</p>
     *

     * @return null|string
     */
    public function getInterfaceAccount();

    /**
     * <p>Custom Fields for the PaymentMethodInfo.
     * If not provided, any existing Custom Fields will be removed, including the Custom Type.</p>
     * <p>Setting this field is equivalent to the <code>setMethodInfoCustomType</code> and <code>setMethodInfoCustomField</code> actions, and will generate the following Messages:</p>
     * <ul>
     * <li>Adding or updating a Custom Type on a Payment Method Info generates the <a href="ctp:api:type:PaymentMethodInfoCustomTypeSetMessage">PaymentMethodInfoCustomTypeSet</a> Message, removing one generates the <a href="ctp:api:type:PaymentMethodInfoCustomTypeRemovedMessage">PaymentMethodInfoCustomTypeRemoved</a> Message.</li>
     * <li>Adding a Custom Field to a Payment generates the <a href="ctp:api:type:PaymentMethodInfoCustomFieldAddedMessage">PaymentMethodInfoCustomFieldAdded</a> Message, removing one generates the <a href="ctp:api:type:PaymentMethodInfoCustomFieldRemovedMessage">PaymentMethodInfoCustomFieldRemoved</a> Message, and updating an existing one generates the <a href="ctp:api:type:PaymentMethodInfoCustomFieldChangedMessage">PaymentMethodInfoCustomFieldChanged</a> Message.</li>
     * </ul>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @param ?string $paymentInterface
     */
    public function setPaymentInterface(?string $paymentInterface): void;

    /**
     * @param ?string $method
     */
    public function setMethod(?string $method): void;

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?PaymentMethodToken $token
     */
    public function setToken(?PaymentMethodToken $token): void;

    /**
     * @param ?string $interfaceAccount
     */
    public function setInterfaceAccount(?string $interfaceAccount): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;
}
