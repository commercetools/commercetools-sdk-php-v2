<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\PaymentMethod;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitKeyReference;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface PaymentMethod extends BaseResource
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
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_CREATED_BY = 'createdBy';

    /**
     * <p>Unique identifier of the PaymentMethod.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Current version of the PaymentMethod.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>User-defined unique identifier of the PaymentMethod.</p>
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
     * <p>Reference to a Customer associated with the PaymentMethod.</p>
     * <p>If <code>businessUnit</code> is set, the Customer is an <a href="ctp:api:type:Associate">Associate</a> of the Business Unit.</p>
     *

     * @return null|CustomerReference
     */
    public function getCustomer();

    /**
     * <p>Reference to a BusinessUnit associated with the PaymentMethod.</p>
     * <p>Only available for <a href="/../offering/composable-commerce#composable-commerce-for-b2b">B2B</a>-enabled Projects.</p>
     *

     * @return null|BusinessUnitKeyReference
     */
    public function getBusinessUnit();

    /**
     * <p>Payment Method used for the Payment—for example, a credit card or cash advance.</p>
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
     * <p>Indicates if the PaymentMethod is the default.</p>
     * <p>The default applies per Customer, Business Unit, or the combination of both (Associate).</p>
     *

     * @return null|bool
     */
    public function getDefault();

    /**
     * <p>Custom Fields of the PaymentMethod.</p>
     *

     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * <p>Date and time (UTC) the PaymentMethod was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>Date and time (UTC) the PaymentMethod was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>IDs and references that last modified the PaymentMethod.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>IDs and references that created the PaymentMethod.</p>
     *

     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?CustomerReference $customer
     */
    public function setCustomer(?CustomerReference $customer): void;

    /**
     * @param ?BusinessUnitKeyReference $businessUnit
     */
    public function setBusinessUnit(?BusinessUnitKeyReference $businessUnit): void;

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
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void;

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     */
    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;

    /**
     * @param ?CreatedBy $createdBy
     */
    public function setCreatedBy(?CreatedBy $createdBy): void;
}
