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
    public const FIELD_LEVEL = 'level';

    /**
     * <p>Describes the Type of the Attribute.</p>
     *

     * @return null|AttributeType
     */
    public function getType();

    /**
     * <p>User-defined name of the Attribute that is unique within the <a href="ctp:api:type:Project">Project</a>.</p>
     *

     * @return null|string
     */
    public function getName();

    /**
     * <p>Human-readable label for the Attribute.</p>
     *

     * @return null|LocalizedString
     */
    public function getLabel();

    /**
     * <p>If <code>true</code>, the Attribute must have a value on a <a href="ctp:api:type:ProductVariant">ProductVariant</a>.</p>
     *

     * @return null|bool
     */
    public function getIsRequired();

    /**
     * <p>Specifies how Attributes are validated across all variants of a Product.</p>
     *

     * @return null|string
     */
    public function getAttributeConstraint();

    /**
     * <p>Provides additional Attribute information to aid content managers configure Product details.</p>
     *

     * @return null|LocalizedString
     */
    public function getInputTip();

    /**
     * <p>Provides a visual representation directive for values of this Attribute (only relevant for <a href="ctp:api:type:AttributeTextType">AttributeTextType</a> and <a href="ctp:api:type:AttributeLocalizableTextType">AttributeLocalizableTextType</a>).</p>
     *

     * @return null|string
     */
    public function getInputHint();

    /**
     * <p>If <code>true</code>, the Attribute's values are available in the <a href="/../api/projects/product-search">Product Search</a> or the <a href="/../api/projects/product-projection-search">Product Projection Search</a> API for use in full-text search queries, filters, and facets.</p>
     *

     * @return null|bool
     */
    public function getIsSearchable();

    /**

     * @return null|string
     */
    public function getLevel();

    /**
     * @param ?AttributeType $type
     */
    public function setType(?AttributeType $type): void;

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param ?LocalizedString $label
     */
    public function setLabel(?LocalizedString $label): void;

    /**
     * @param ?bool $isRequired
     */
    public function setIsRequired(?bool $isRequired): void;

    /**
     * @param ?string $attributeConstraint
     */
    public function setAttributeConstraint(?string $attributeConstraint): void;

    /**
     * @param ?LocalizedString $inputTip
     */
    public function setInputTip(?LocalizedString $inputTip): void;

    /**
     * @param ?string $inputHint
     */
    public function setInputHint(?string $inputHint): void;

    /**
     * @param ?bool $isSearchable
     */
    public function setIsSearchable(?bool $isSearchable): void;

    /**
     * @param ?string $level
     */
    public function setLevel(?string $level): void;
}
