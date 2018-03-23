<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

interface TypeAddFieldDefinitionAction extends TypeUpdateAction {
    const FIELD_FIELD_DEFINITION = 'fieldDefinition';

    /**
     * @return FieldDefinition
     */
    public function getFieldDefinition();

    /**
     * @param FieldDefinition $fieldDefinition
     * @return $this
     */
    public function setFieldDefinition(FieldDefinition $fieldDefinition);

}
