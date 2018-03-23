<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

interface TypeChangeFieldDefinitionOrderAction extends TypeUpdateAction {
    const FIELD_FIELD_NAMES = 'fieldNames';

    /**
     * @return array
     */
    public function getFieldNames();

    /**
     * @param array $fieldNames
     * @return $this
     */
    public function setFieldNames($fieldNames);

}
