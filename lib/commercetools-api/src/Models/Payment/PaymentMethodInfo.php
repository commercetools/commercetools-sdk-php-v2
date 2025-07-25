<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\PaymentMethod\PaymentMethodToken;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PaymentMethodInfo extends JsonObject
{
    public const FIELD_PAYMENT_INTERFACE = 'paymentInterface';
    public const FIELD_METHOD = 'method';
    public const FIELD_NAME = 'name';
    public const FIELD_TOKEN = 'token';
    public const FIELD_INTERFACE_ACCOUNT = 'interfaceAccount';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>Payment service that processes the Payment—for example, a PSP.
     * The combination of <code>paymentInterface</code> and the <code>interfaceId</code> of a Payment is unique.</p>
     *

     * @return null|string
     */
    public function getPaymentInterface();

    /**
     * <p>Payment method used—for example, a credit card or direct debit.</p>
     *

     * @return null|string
     */
    public function getMethod();

    /**
     * <p>Name of the Payment Method.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>Tokenized representation of the Payment Method used by the payment interface.</p>
     *

     * @return null|PaymentMethodToken
     */
    public function getToken();

    /**
     * <p>Account or instance of the payment interface when multiple accounts are used (per interface).</p>
     *

     * @return null|string
     */
    public function getInterfaceAccount();

    /**
     * <p>Custom Fields of the PaymentMethodInfo.</p>
     *

     * @return null|CustomFields
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
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void;
}
