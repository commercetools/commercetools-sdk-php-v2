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
     * <p>User-defined unique identifier for the CustomerGroup.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Unique value which must be different from any value used for <code>name</code> in <a href="ctp:api:type:CustomerGroup">CustomerGroup</a> in the Project.
     * If not, a <a href="ctp:api:type:DuplicateFieldError">DuplicateField</a> error is returned.</p>
     *

     * @return null|string
     */
    public function getGroupName();

    /**
     * <p>Custom Fields for the CustomerGroup.</p>
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
