<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CustomerGroup;

use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\Type\CustomFields;

class CustomerGroupDraftModel extends JsonObjectModel implements CustomerGroupDraft {
    /**
     * @var string
     */
    protected $key;
    /**
     * @var string
     */
    protected $groupName;
    /**
     * @var CustomFields
     */
    protected $custom;

    /**
     * @return string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            $value = $this->raw(CustomerGroupDraft::FIELD_KEY);
            $value = (string)$value;
            $this->key = $value;
        }
        return $this->key;
    }
    /**
     * @return string
     */
    public function getGroupName()
    {
        if (is_null($this->groupName)) {
            $value = $this->raw(CustomerGroupDraft::FIELD_GROUP_NAME);
            $value = (string)$value;
            $this->groupName = $value;
        }
        return $this->groupName;
    }
    /**
     * @return CustomFields
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            $value = $this->raw(CustomerGroupDraft::FIELD_CUSTOM);
            if (is_null($value)) {
                return $this->mapData(CustomFields::class, null);
            }
            $value = $this->mapData(CustomFields::class, $value);

            $this->custom = $value;
        }
        return $this->custom;
    }

    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key)
    {
        $this->key = (string)$key;

        return $this;
    }
    /**
     * @param string $groupName
     * @return $this
     */
    public function setGroupName(string $groupName)
    {
        $this->groupName = (string)$groupName;

        return $this;
    }
    /**
     * @param CustomFields $custom
     * @return $this
     */
    public function setCustom(CustomFields $custom)
    {
        $this->custom = $custom;

        return $this;
    }

}
