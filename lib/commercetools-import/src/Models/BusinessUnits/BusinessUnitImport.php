<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\BusinessUnits;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\AddressCollection;
use Commercetools\Import\Models\Common\StoreKeyReferenceCollection;
use Commercetools\Import\Models\Customfields\Custom;

interface BusinessUnitImport extends JsonObject
{
    public const DISCRIMINATOR_FIELD = 'unitType';
    public const FIELD_UNIT_TYPE = 'unitType';
    public const FIELD_KEY = 'key';
    public const FIELD_NAME = 'name';
    public const FIELD_STATUS = 'status';
    public const FIELD_CONTACT_EMAIL = 'contactEmail';
    public const FIELD_ASSOCIATES = 'associates';
    public const FIELD_ADDRESSES = 'addresses';
    public const FIELD_SHIPPING_ADDRESSES = 'shippingAddresses';
    public const FIELD_DEFAULT_SHIPPING_ADDRESS = 'defaultShippingAddress';
    public const FIELD_BILLING_ADDRESSES = 'billingAddresses';
    public const FIELD_DEFAULT_BILLING_ADDRESS = 'defaultBillingAddress';
    public const FIELD_STORES = 'stores';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>The type of Business Unit.</p>
     *

     * @return null|string
     */
    public function getUnitType();

    /**
     * <p>User-defined unique identifier. If a <a href="ctp:api:type:BusinessUnit">BusinessUnit</a> with this <code>key</code> exists, it is updated with the imported data.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>The name of the Business Unit.</p>
     *

     * @return null|string
     */
    public function getName();

    /**
     * <p>The status of the Business Unit.</p>
     *

     * @return null|string
     */
    public function getStatus();

    /**
     * <p>The contact email address for the Business Unit.</p>
     *

     * @return null|string
     */
    public function getContactEmail();

    /**
     * <p>List of Associates to be assigned to the Business Unit.</p>
     *

     * @return null|AssociateDraftCollection
     */
    public function getAssociates();

    /**
     * <p>The addresses for the Business Unit.</p>
     *

     * @return null|AddressCollection
     */
    public function getAddresses();

    /**
     * <p>The indices of the shipping addresses in the <code>addresses</code> array.</p>
     *

     * @return null|array
     */
    public function getShippingAddresses();

    /**
     * <p>The index of the default shipping address in the <code>addresses</code> array.</p>
     *

     * @return null|int
     */
    public function getDefaultShippingAddress();

    /**
     * <p>The indices of the billing addresses in the <code>addresses</code> array.</p>
     *

     * @return null|array
     */
    public function getBillingAddresses();

    /**
     * <p>The index of the default billing address in the <code>addresses</code> array.</p>
     *

     * @return null|int
     */
    public function getDefaultBillingAddress();

    /**
     * <p>The Stores of the Business Unit.</p>
     *

     * @return null|StoreKeyReferenceCollection
     */
    public function getStores();

    /**
     * <p>Custom fields for the Business Unit.</p>
     *

     * @return null|Custom
     */
    public function getCustom();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param ?string $status
     */
    public function setStatus(?string $status): void;

    /**
     * @param ?string $contactEmail
     */
    public function setContactEmail(?string $contactEmail): void;

    /**
     * @param ?AssociateDraftCollection $associates
     */
    public function setAssociates(?AssociateDraftCollection $associates): void;

    /**
     * @param ?AddressCollection $addresses
     */
    public function setAddresses(?AddressCollection $addresses): void;

    /**
     * @param ?array $shippingAddresses
     */
    public function setShippingAddresses(?array $shippingAddresses): void;

    /**
     * @param ?int $defaultShippingAddress
     */
    public function setDefaultShippingAddress(?int $defaultShippingAddress): void;

    /**
     * @param ?array $billingAddresses
     */
    public function setBillingAddresses(?array $billingAddresses): void;

    /**
     * @param ?int $defaultBillingAddress
     */
    public function setDefaultBillingAddress(?int $defaultBillingAddress): void;

    /**
     * @param ?StoreKeyReferenceCollection $stores
     */
    public function setStores(?StoreKeyReferenceCollection $stores): void;

    /**
     * @param ?Custom $custom
     */
    public function setCustom(?Custom $custom): void;
}
