<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\CustomerGroup;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\LoggedResource;
use Commercetools\Api\Models\Type\CustomFields;

interface CustomerGroup extends LoggedResource
{
    
    const FIELD_KEY = 'key';
    const FIELD_NAME = 'name';
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
    public function getName();
    
    /**
     *
     * @return CustomFields|null
     */
    public function getCustom();
    public function setKey(?string $key): void;
    
    public function setName(?string $name): void;
    
    public function setCustom(?CustomFields $custom): void;
}