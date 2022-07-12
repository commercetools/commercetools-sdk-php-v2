<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AttributeDefinitionDraft>
 */
final class AttributeDefinitionDraftBuilder implements Builder
{
    /**

     * @var null|AttributeType|AttributeTypeBuilder
     */
    private $type;

    /**

     * @var ?string
     */
    private $name;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $label;

    /**

     * @var ?bool
     */
    private $isRequired;

    /**

     * @var ?string
     */
    private $attributeConstraint;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $inputTip;

    /**

     * @var ?string
     */
    private $inputHint;

    /**

     * @var ?bool
     */
    private $isSearchable;

    /**
     * <p>Describes the Type of the Attribute.</p>
     *

     * @return null|AttributeType
     */
    public function getType()
    {
        return $this->type instanceof AttributeTypeBuilder ? $this->type->build() : $this->type;
    }

    /**
     * <p>User-defined name of the Attribute that is unique with the <a href="ctp:api:type:Project">Project</a>.
     * When using the same <code>name</code> for an Attribute in multiple ProductTypes, all fields of the AttributeDefinition of this Attribute must be the same across the ProductTypes. Otherwise an <a href="ctp:api:type:AttributeDefinitionAlreadyExistsError">AttributeDefinitionAlreadyExistsError</a> will be returned.
     * An exception to this are the values of an <code>enum</code> or <code>lenum</code> Type and sets thereof.</p>
     *

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p>Human-readable label for the Attribute.</p>
     *

     * @return null|LocalizedString
     */
    public function getLabel()
    {
        return $this->label instanceof LocalizedStringBuilder ? $this->label->build() : $this->label;
    }

    /**
     * <p>Set to <code>true</code> if the Attribute is required to have a value on a <a href="ctp:api:type:ProductVariant">ProductVariant</a>.</p>
     *

     * @return null|bool
     */
    public function getIsRequired()
    {
        return $this->isRequired;
    }

    /**
     * <p>Specifies how an Attribute or a combination of Attributes should be validated across all variants of a Product.</p>
     *

     * @return null|string
     */
    public function getAttributeConstraint()
    {
        return $this->attributeConstraint;
    }

    /**
     * <p>Provides additional information about the Attribute that aids content managers when setting Product details.</p>
     *

     * @return null|LocalizedString
     */
    public function getInputTip()
    {
        return $this->inputTip instanceof LocalizedStringBuilder ? $this->inputTip->build() : $this->inputTip;
    }

    /**
     * <p>Provides a visual representation directive for values of this Attribute (only relevant for <a href="ctp:api:type:AttributeTextType">AttributeTextType</a> and <a href="ctp:api:type:AttributeLocalizableTextType">AttributeLocalizableTextType</a>).</p>
     *

     * @return null|string
     */
    public function getInputHint()
    {
        return $this->inputHint;
    }

    /**
     * <p>Set to <code>true</code> if the Attribute's values should be available in the <a href="/../api/projects/products-search">Product Projections Search API</a> and can be used in full-text search queries, filters, and facets.
     * Which exact features are available with this flag depends on the specific <a href="ctp:api:type:AttributeType">AttributeType</a>.
     * The maximum size of a searchable field is <strong>restricted</strong> by the <a href="/../api/limits#field-content-size">Field content size limit</a>.
     * This constraint is enforced at both Product creation and Product update.
     * If the length of the input exceeds the maximum size, an InvalidField error is returned.</p>
     *

     * @return null|bool
     */
    public function getIsSearchable()
    {
        return $this->isSearchable;
    }

    /**
     * @param ?AttributeType $type
     * @return $this
     */
    public function withType(?AttributeType $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param ?string $name
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param ?LocalizedString $label
     * @return $this
     */
    public function withLabel(?LocalizedString $label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @param ?bool $isRequired
     * @return $this
     */
    public function withIsRequired(?bool $isRequired)
    {
        $this->isRequired = $isRequired;

        return $this;
    }

    /**
     * @param ?string $attributeConstraint
     * @return $this
     */
    public function withAttributeConstraint(?string $attributeConstraint)
    {
        $this->attributeConstraint = $attributeConstraint;

        return $this;
    }

    /**
     * @param ?LocalizedString $inputTip
     * @return $this
     */
    public function withInputTip(?LocalizedString $inputTip)
    {
        $this->inputTip = $inputTip;

        return $this;
    }

    /**
     * @param ?string $inputHint
     * @return $this
     */
    public function withInputHint(?string $inputHint)
    {
        $this->inputHint = $inputHint;

        return $this;
    }

    /**
     * @param ?bool $isSearchable
     * @return $this
     */
    public function withIsSearchable(?bool $isSearchable)
    {
        $this->isSearchable = $isSearchable;

        return $this;
    }

    /**
     * @deprecated use withType() instead
     * @return $this
     */
    public function withTypeBuilder(?AttributeTypeBuilder $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @deprecated use withLabel() instead
     * @return $this
     */
    public function withLabelBuilder(?LocalizedStringBuilder $label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @deprecated use withInputTip() instead
     * @return $this
     */
    public function withInputTipBuilder(?LocalizedStringBuilder $inputTip)
    {
        $this->inputTip = $inputTip;

        return $this;
    }

    public function build(): AttributeDefinitionDraft
    {
        return new AttributeDefinitionDraftModel(
            $this->type instanceof AttributeTypeBuilder ? $this->type->build() : $this->type,
            $this->name,
            $this->label instanceof LocalizedStringBuilder ? $this->label->build() : $this->label,
            $this->isRequired,
            $this->attributeConstraint,
            $this->inputTip instanceof LocalizedStringBuilder ? $this->inputTip->build() : $this->inputTip,
            $this->inputHint,
            $this->isSearchable
        );
    }

    public static function of(): AttributeDefinitionDraftBuilder
    {
        return new self();
    }
}
