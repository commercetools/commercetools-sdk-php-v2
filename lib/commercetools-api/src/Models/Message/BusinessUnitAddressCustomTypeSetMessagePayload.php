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

interface BusinessUnitAddressCustomTypeSetMessagePayload extends MessagePayload
{
    public const FIELD_CUSTOM_FIELDS = 'customFields';
    public const FIELD_OLD_TYPE_ID = 'oldTypeId';
    public const FIELD_ADDRESS_ID = 'addressId';

    /**
     * <p>The Custom Fields that were set.</p>
     *

     * @return null|CustomFields
     */
    public function getCustomFields();

    /**
     * <p><code>id</code> of the previous <a href="ctp:api:type:Type">Custom Type</a>. Absent if there was no previous Custom Type present.</p>
     *

     * @return null|string
     */
    public function getOldTypeId();

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
     * @param ?string $oldTypeId
     */
    public function setOldTypeId(?string $oldTypeId): void;

    /**
     * @param ?string $addressId
     */
    public function setAddressId(?string $addressId): void;
}
