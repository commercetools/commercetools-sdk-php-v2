<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Type;

use Commercetools\Base\JsonObject;

interface CustomFields extends JsonObject
{
    
    const FIELD_TYPE = 'type';
    const FIELD_FIELDS = 'fields';

    /**
     *
     * @return TypeReference|null
     */
    public function getType();
    
    /**
     *
     * @return FieldContainer|null
     */
    public function getFields();
    public function setType(?TypeReference $type): void;
    
    public function setFields(?FieldContainer $fields): void;
}