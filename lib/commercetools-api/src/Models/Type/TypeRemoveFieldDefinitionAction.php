<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Type;

use Commercetools\Base\JsonObject;

interface TypeRemoveFieldDefinitionAction extends TypeUpdateAction
{
    
    const FIELD_FIELD_NAME = 'fieldName';

    /**
     *
     * @return string|null
     */
    public function getFieldName();
    public function setFieldName(?string $fieldName): void;
}