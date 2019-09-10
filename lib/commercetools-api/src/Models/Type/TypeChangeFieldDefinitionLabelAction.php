<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Type;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\LocalizedString;

interface TypeChangeFieldDefinitionLabelAction extends TypeUpdateAction
{
    
    const FIELD_FIELD_NAME = 'fieldName';
    const FIELD_LABEL = 'label';

    /**
     *
     * @return string|null
     */
    public function getFieldName();
    
    /**
     *
     * @return LocalizedString|null
     */
    public function getLabel();
    public function setFieldName(?string $fieldName): void;
    
    public function setLabel(?LocalizedString $label): void;
}