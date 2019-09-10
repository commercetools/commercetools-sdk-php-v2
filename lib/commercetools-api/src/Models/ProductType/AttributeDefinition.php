<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\LocalizedString;

interface AttributeDefinition extends JsonObject
{
    
    const FIELD_TYPE = 'type';
    const FIELD_NAME = 'name';
    const FIELD_LABEL = 'label';
    const FIELD_IS_REQUIRED = 'isRequired';
    const FIELD_ATTRIBUTE_CONSTRAINT = 'attributeConstraint';
    const FIELD_INPUT_TIP = 'inputTip';
    const FIELD_INPUT_HINT = 'inputHint';
    const FIELD_IS_SEARCHABLE = 'isSearchable';

    /**
     *
     * @return AttributeType|null
     */
    public function getType();
    
    /**
     *
     * @return string|null
     */
    public function getName();
    
    /**
     *
     * @return LocalizedString|null
     */
    public function getLabel();
    
    /**
     *
     * @return bool|null
     */
    public function getIsRequired();
    
    /**
     *
     * @return string|null
     */
    public function getAttributeConstraint();
    
    /**
     *
     * @return LocalizedString|null
     */
    public function getInputTip();
    
    /**
     *
     * @return string|null
     */
    public function getInputHint();
    
    /**
     *
     * @return bool|null
     */
    public function getIsSearchable();
    public function setType(?AttributeType $type): void;
    
    public function setName(?string $name): void;
    
    public function setLabel(?LocalizedString $label): void;
    
    public function setIsRequired(?bool $isRequired): void;
    
    public function setAttributeConstraint(?string $attributeConstraint): void;
    
    public function setInputTip(?LocalizedString $inputTip): void;
    
    public function setInputHint(?string $inputHint): void;
    
    public function setIsSearchable(?bool $isSearchable): void;
}