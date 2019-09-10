<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Type;

use Commercetools\Base\JsonObject;

interface TypeChangeFieldDefinitionOrderAction extends TypeUpdateAction
{
    
    const FIELD_FIELD_NAMES = 'fieldNames';

    /**
     *
     * @return array|null
     */
    public function getFieldNames();
    public function setFieldNames(?array $fieldNames): void;
}