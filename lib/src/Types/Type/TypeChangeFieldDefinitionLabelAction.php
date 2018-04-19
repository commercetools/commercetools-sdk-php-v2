<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Common\LocalizedString;

interface TypeChangeFieldDefinitionLabelAction extends TypeUpdateAction
{
    const FIELD_FIELD_NAME = 'fieldName';
    const FIELD_LABEL = 'label';

    /**
     * @return string
     */
    public function getFieldName();

    /**
     * @return LocalizedString
     */
    public function getLabel();

    /**
     * @param string $fieldName
     * @return $this
     */
    public function setFieldName(string $fieldName);

    /**
     * @param LocalizedString $label
     * @return $this
     */
    public function setLabel(LocalizedString $label);

}
