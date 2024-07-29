<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerAddressCustomTypeSetMessage extends Message
{
    public const FIELD_CUSTOM_FIELDS = 'customFields';
    public const FIELD_PREVIOUS_TYPE_ID = 'previousTypeId';
    public const FIELD_ADDRESS_ID = 'addressId';

    /**
     * <p>The Custom Fields that have been set.</p>
     *

     * @return null|CustomFields
     */
    public function getCustomFields();

    /**
     * <p><code>id</code> of the previous <a href="ctp:api:type:Type">Custom Type</a>. Absent if there was no previous Custom Type present.</p>
     *

     * @return null|string
     */
    public function getPreviousTypeId();

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:Address">Address</a> on which the Custom Field was set.</p>
     *

     * @return null|string
     */
    public function getAddressId();

    /**
     * @param ?CustomFields $customFields
     */
    public function setCustomFields(?CustomFields $customFields): void;

    /**
     * @param ?string $previousTypeId
     */
    public function setPreviousTypeId(?string $previousTypeId): void;

    /**
     * @param ?string $addressId
     */
    public function setAddressId(?string $addressId): void;
}
