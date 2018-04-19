<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Base\JsonObject;

use Commercetools\Types\Common\LocalizedString;

interface AttributeDefinitionDraft extends JsonObject
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
     * @return mixed
     */
    public function getType();

    /**
     * @return string
     */
    public function getName();

    /**
     * @return LocalizedString
     */
    public function getLabel();

    /**
     * @return mixed
     */
    public function getIsRequired();

    /**
     * @return string
     */
    public function getAttributeConstraint();

    /**
     * @return LocalizedString
     */
    public function getInputTip();

    /**
     * @return string
     */
    public function getInputHint();

    /**
     * @return mixed
     */
    public function getIsSearchable();

    /**
     * @param mixed $type
     * @return $this
     */
    public function setType($type);

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name);

    /**
     * @param LocalizedString $label
     * @return $this
     */
    public function setLabel(LocalizedString $label);

    /**
     * @param mixed $isRequired
     * @return $this
     */
    public function setIsRequired($isRequired);

    /**
     * @param string $attributeConstraint
     * @return $this
     */
    public function setAttributeConstraint(string $attributeConstraint);

    /**
     * @param LocalizedString $inputTip
     * @return $this
     */
    public function setInputTip(LocalizedString $inputTip);

    /**
     * @param string $inputHint
     * @return $this
     */
    public function setInputHint(string $inputHint);

    /**
     * @param mixed $isSearchable
     * @return $this
     */
    public function setIsSearchable($isSearchable);

    /**
     * @return AttributeType
     */
    public function getTypeAsAttributeType();

    /**
     * @return AttributeBooleanType
     */
    public function getTypeAsAttributeBooleanType();

    /**
     * @return AttributeDateTimeType
     */
    public function getTypeAsAttributeDateTimeType();

    /**
     * @return AttributeDateType
     */
    public function getTypeAsAttributeDateType();

    /**
     * @return AttributeTimeType
     */
    public function getTypeAsAttributeTimeType();

    /**
     * @return AttributeEnumType
     */
    public function getTypeAsAttributeEnumType();

    /**
     * @return AttributeLocalizedEnumType
     */
    public function getTypeAsAttributeLocalizedEnumType();

    /**
     * @return AttributeMoneyType
     */
    public function getTypeAsAttributeMoneyType();

    /**
     * @return AttributeNestedType
     */
    public function getTypeAsAttributeNestedType();

    /**
     * @return AttributeNumberType
     */
    public function getTypeAsAttributeNumberType();

    /**
     * @return AttributeReferenceType
     */
    public function getTypeAsAttributeReferenceType();

    /**
     * @return AttributeSetType
     */
    public function getTypeAsAttributeSetType();

    /**
     * @return AttributeTextType
     */
    public function getTypeAsAttributeTextType();

}
