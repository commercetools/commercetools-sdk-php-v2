<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Producttypes;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\LocalizedString;

interface AttributeDefinition extends JsonObject
{
    public const FIELD_TYPE = 'type';
    public const FIELD_NAME = 'name';
    public const FIELD_LABEL = 'label';
    public const FIELD_IS_REQUIRED = 'isRequired';
    public const FIELD_ATTRIBUTE_CONSTRAINT = 'attributeConstraint';
    public const FIELD_INPUT_TIP = 'inputTip';
    public const FIELD_INPUT_HINT = 'inputHint';
    public const FIELD_IS_SEARCHABLE = 'isSearchable';

    /**
     * @return null|AttributeType
     */
    public function getType();

    /**
     * @return null|string
     */
    public function getName();

    /**
     * @return null|LocalizedString
     */
    public function getLabel();

    /**
     * @return null|bool
     */
    public function getIsRequired();

    /**
     * @return null|string
     */
    public function getAttributeConstraint();

    /**
     * @return null|LocalizedString
     */
    public function getInputTip();

    /**
     * @return null|string
     */
    public function getInputHint();

    /**
     * @return null|bool
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
