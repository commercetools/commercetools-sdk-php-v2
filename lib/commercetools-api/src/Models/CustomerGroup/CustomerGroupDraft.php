<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomerGroup;

use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\JsonObject;

interface CustomerGroupDraft extends JsonObject
{
    const FIELD_KEY = 'key';
    const FIELD_GROUP_NAME = 'groupName';
    const FIELD_CUSTOM = 'custom';

    /**
     * <p>User-specific unique identifier for the customer group.</p>.
     *
     * @return null|string
     */
    public function getKey();

    /**
     * @return null|string
     */
    public function getGroupName();

    /**
     * @return null|CustomFields
     */
    public function getCustom();

    public function setKey(?string $key): void;

    public function setGroupName(?string $groupName): void;

    public function setCustom(?CustomFields $custom): void;
}
