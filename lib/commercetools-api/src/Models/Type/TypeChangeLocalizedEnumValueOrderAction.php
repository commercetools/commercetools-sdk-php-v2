<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Type;

use Commercetools\Base\JsonObject;

interface TypeChangeLocalizedEnumValueOrderAction extends TypeUpdateAction
{
    
    const FIELD_FIELD_NAME = 'fieldName';
    const FIELD_KEYS = 'keys';

    /**
     *
     * @return string|null
     */
    public function getFieldName();
    
    /**
     *
     * @return array|null
     */
    public function getKeys();
    public function setFieldName(?string $fieldName): void;
    
    public function setKeys(?array $keys): void;
}