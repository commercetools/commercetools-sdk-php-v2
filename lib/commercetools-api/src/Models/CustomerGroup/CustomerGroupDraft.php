<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\CustomerGroup;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Type\CustomFields;

interface CustomerGroupDraft extends JsonObject
{
    
    const FIELD_KEY = 'key';
    const FIELD_GROUP_NAME = 'groupName';
    const FIELD_CUSTOM = 'custom';

    /**
     *
     * @return string|null
     */
    public function getKey();
    
    /**
     *
     * @return string|null
     */
    public function getGroupName();
    
    /**
     *
     * @return CustomFields|null
     */
    public function getCustom();
    public function setKey(?string $key): void;
    
    public function setGroupName(?string $groupName): void;
    
    public function setCustom(?CustomFields $custom): void;
}