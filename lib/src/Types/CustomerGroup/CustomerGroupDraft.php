<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CustomerGroup;

use Commercetools\Base\JsonObject;

use Commercetools\Types\Type\CustomFields;

interface CustomerGroupDraft extends JsonObject
{
    const FIELD_KEY = 'key';
    const FIELD_GROUP_NAME = 'groupName';
    const FIELD_CUSTOM = 'custom';

    /**
     * @return string
     */
    public function getKey();

    /**
     * @return string
     */
    public function getGroupName();

    /**
     * @return CustomFields
     */
    public function getCustom();

    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key);

    /**
     * @param string $groupName
     * @return $this
     */
    public function setGroupName(string $groupName);

    /**
     * @param CustomFields $custom
     * @return $this
     */
    public function setCustom(CustomFields $custom);

}
