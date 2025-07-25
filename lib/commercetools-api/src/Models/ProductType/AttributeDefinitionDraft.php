<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AttributeDefinitionDraft extends JsonObject
{
    public const FIELD_TYPE = 'type';
    public const FIELD_NAME = 'name';
    public const FIELD_LABEL = 'label';
    public const FIELD_IS_REQUIRED = 'isRequired';
    public const FIELD_LEVEL = 'level';
    public const FIELD_ATTRIBUTE_CONSTRAINT = 'attributeConstraint';
    public const FIELD_INPUT_TIP = 'inputTip';
    public const FIELD_INPUT_HINT = 'inputHint';
    public const FIELD_IS_SEARCHABLE = 'isSearchable';

    /**
     * <p>Describes the Type of the Attribute.</p>
     * <p>When the <code>type</code> is different for an AttributeDefinition using the same name in multiple ProductTypes, an <a href="ctp:api:type:AttributeDefinitionTypeConflictError">AttributeDefinitionTypeConflict</a> error is returned.</p>
     *

     * @return null|AttributeType
     */
    public function getType();

    /**
     * <p>User-defined name of the Attribute that is unique to the <a href="ctp:api:type:Project">Project</a>.</p>
     * <p>When using the same <code>name</code> for an Attribute in multiple ProductTypes, all fields of the AttributeDefinition of this Attribute must be the same across the ProductTypes, else an <a href="ctp:api:type:AttributeDefinitionAlreadyExistsError">AttributeDefinitionAlreadyExists</a> error is returned.
     * An exception to this are the values of an <code>enum</code> or <code>lenum</code> Type and sets thereof.</p>
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
     * <p>Set to <code>true</code> if the Attribute is required to have a value on a <a href="ctp:api:type:ProductVariant">ProductVariant</a>.</p>
     *

     * @return null|bool
     */
    public function getIsRequired();

    /**
     * <p>Specifies whether the Attribute is defined at the Product or Variant level.</p>
     *

     * @return null|string
     */
    public function getLevel();

    /**
     * <p>Specifies how an Attribute or a combination of Attributes should be validated across all variants of a Product.
     * If the Attribute is defined at Product level, then <code>attributeConstraint</code> must be <code>None</code>. Otherwise, an <a href="ctp:api:type:InvalidOperationError">InvalidOperation</a> error is returned.</p>
     *

     * @return null|string
     */
    public function getAttributeConstraint();

    /**
     * <p>Provides additional information about the Attribute that aids content managers when setting Product details.</p>
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
     * <p>Set as <code>true</code> if you want the Attribute's values to be available in the <a href="/../api/projects/product-search">Product Search</a> or the <a href="/../api/projects/product-projection-search">Product Projection Search</a> API and can be used in full-text search queries, filters, and facets.
     * If an Attribute's <code>level</code> is set as <code>Product</code>, then Product Projection Search does <strong>not support</strong> the Attribute.</p>
     * <p>Which exact features are available with this flag depends on the specific <a href="ctp:api:type:AttributeType">AttributeType</a>.
     * The maximum size of a searchable field is <strong>restricted</strong> by the <a href="/../api/limits#field-content-size">Field content size limit</a>.
     * This constraint is enforced at both Product creation and Product update.
     * If the length of the input exceeds the maximum size, an <a href="ctp:api:type:InvalidFieldError">InvalidField</a> error is returned.</p>
     *

     * @return null|bool
     */
    public function getIsSearchable();

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
     * @param ?string $level
     */
    public function setLevel(?string $level): void;

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
}
