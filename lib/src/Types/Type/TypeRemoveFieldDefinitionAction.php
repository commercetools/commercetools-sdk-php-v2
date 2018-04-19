<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

interface TypeRemoveFieldDefinitionAction extends TypeUpdateAction
{
    const FIELD_FIELD_NAME = 'fieldName';

    /**
     * @return string
     */
    public function getFieldName();

    /**
     * @param string $fieldName
     * @return $this
     */
    public function setFieldName(string $fieldName);

}
