<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomerGroup;

use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerGroupDraft extends JsonObject
{
    public const FIELD_KEY = 'key';
    public const FIELD_GROUP_NAME = 'groupName';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>User-defined unique identifier for the Customer Group.
     * Keys can only contain alphanumeric characters, underscores, and hyphens.</p>
     *
     * @return null|string
     */
    public function getKey();

    /**
     * <p>Unique value which must be different from any value used for <code>name</code> in <a href="ctp:api:type:CustomerGroup">CustomerGroup</a> in the Project.
     * If not, a <code>DuplicateField</code> <a href="/../api/errors#400-bad-request-1">error</a> is thrown.</p>
     *
     * @return null|string
     */
    public function getGroupName();

    /**
     * <p>Custom Fields for the Customer Group.</p>
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?string $groupName
     */
    public function setGroupName(?string $groupName): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;
}
