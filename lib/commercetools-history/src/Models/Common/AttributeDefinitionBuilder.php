<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AttributeDefinition>
 */
final class AttributeDefinitionBuilder implements Builder
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

     * @return null|AttributeType
     */
    public function getType()
    {
        return $this->type instanceof AttributeTypeBuilder ? $this->type->build() : $this->type;
    }

    /**
     * <p>The unique name of the attribute used in the API. The name must be between two and 256 characters long and can contain the ASCII letters A to Z in lowercase or uppercase, digits, underscores (<code>_</code>) and the hyphen-minus (<code>-</code>). When using the same <code>name</code> for an attribute in two or more product types all fields of the AttributeDefinition of this attribute need to be the same across the product types, otherwise an AttributeDefinitionAlreadyExists error code will be returned. An exception to this are the values of an <code>enum</code> or <code>lenum</code> type and sets thereof.</p>
     *

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**

     * @return null|LocalizedString
     */
    public function getLabel()
    {
        return $this->label instanceof LocalizedStringBuilder ? $this->label->build() : $this->label;
    }

    /**
     * <p>Whether the attribute is required to have a value.</p>
     *

     * @return null|bool
     */
    public function getIsRequired()
    {
        return $this->isRequired;
    }

    /**

     * @return null|string
     */
    public function getAttributeConstraint()
    {
        return $this->attributeConstraint;
    }

    /**

     * @return null|LocalizedString
     */
    public function getInputTip()
    {
        return $this->inputTip instanceof LocalizedStringBuilder ? $this->inputTip->build() : $this->inputTip;
    }

    /**

     * @return null|string
     */
    public function getInputHint()
    {
        return $this->inputHint;
    }

    /**
     * <p>Whether the attribute's values should generally be enabled in product search. This determines whether the value is stored in products for matching terms in the context of full-text search queries  and can be used in facets &amp; filters as part of product search queries. The exact features that are enabled/disabled with this flag depend on the concrete attribute type and are described there. The max size of a searchable field is <strong>restricted to 10922 characters</strong>. This constraint is enforced at both product creation and product update. If the length of the input exceeds the maximum size an InvalidField error is returned.</p>
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

    public function build(): AttributeDefinition
    {
        return new AttributeDefinitionModel(
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

    public static function of(): AttributeDefinitionBuilder
    {
        return new self();
    }
}
