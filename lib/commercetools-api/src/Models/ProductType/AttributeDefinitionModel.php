<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;

final class AttributeDefinitionModel extends JsonObjectModel implements AttributeDefinition
{

    /**
     * @var ?AttributeType
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $name;

    /**
     * @var ?LocalizedString
     */
    protected $label;

    /**
     * @var ?bool
     */
    protected $isRequired;

    /**
     * @var ?string
     */
    protected $attributeConstraint;

    /**
     * @var ?LocalizedString
     */
    protected $inputTip;

    /**
     * @var ?string
     */
    protected $inputHint;

    /**
     * @var ?bool
     */
    protected $isSearchable;


    public function __construct(
        AttributeType $type = null,
        string $name = null,
        LocalizedString $label = null,
        bool $isRequired = null,
        string $attributeConstraint = null,
        LocalizedString $inputTip = null,
        string $inputHint = null,
        bool $isSearchable = null
    ) {
        $this->type = $type;
        $this->name = $name;
        $this->label = $label;
        $this->isRequired = $isRequired;
        $this->attributeConstraint = $attributeConstraint;
        $this->inputTip = $inputTip;
        $this->inputHint = $inputHint;
        $this->isSearchable = $isSearchable;

    }

    /**
     * <p>Describes the type of the attribute.</p>
     *
     * @return null|AttributeType
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(AttributeDefinition::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }

            $this->type = AttributeTypeModel::of($data);
        }

        return $this->type;
    }

    /**
     * <p>The unique name of the attribute used in the API.
     * The name must be between two and 256 characters long and can contain the ASCII letters A to Z in lowercase or uppercase, digits, underscores (<code>_</code>) and the hyphen-minus (<code>-</code>).
     * When using the same <code>name</code> for an attribute in two or more product types all fields of the AttributeDefinition of this attribute need to be the same across the product types, otherwise an AttributeDefinitionAlreadyExists error code will be returned.
     * An exception to this are the values of an <code>enum</code> or <code>lenum</code> type and sets thereof.</p>
     *
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(AttributeDefinition::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * <p>A human-readable label for the attribute.</p>
     *
     * @return null|LocalizedString
     */
    public function getLabel()
    {
        if (is_null($this->label)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(AttributeDefinition::FIELD_LABEL);
            if (is_null($data)) {
                return null;
            }

            $this->label = LocalizedStringModel::of($data);
        }

        return $this->label;
    }

    /**
     * <p>Whether the attribute is required to have a value.</p>
     *
     * @return null|bool
     */
    public function getIsRequired()
    {
        if (is_null($this->isRequired)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(AttributeDefinition::FIELD_IS_REQUIRED);
            if (is_null($data)) {
                return null;
            }
            $this->isRequired = (bool) $data;
        }

        return $this->isRequired;
    }

    /**
     * <p>Describes how an attribute or a set of attributes should be validated across all variants of a product.</p>
     *
     * @return null|string
     */
    public function getAttributeConstraint()
    {
        if (is_null($this->attributeConstraint)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(AttributeDefinition::FIELD_ATTRIBUTE_CONSTRAINT);
            if (is_null($data)) {
                return null;
            }
            $this->attributeConstraint = (string) $data;
        }

        return $this->attributeConstraint;
    }

    /**
     * <p>Additional information about the attribute that aids content managers when setting product details.</p>
     *
     * @return null|LocalizedString
     */
    public function getInputTip()
    {
        if (is_null($this->inputTip)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(AttributeDefinition::FIELD_INPUT_TIP);
            if (is_null($data)) {
                return null;
            }

            $this->inputTip = LocalizedStringModel::of($data);
        }

        return $this->inputTip;
    }

    /**
     * <p>Provides a visual representation type for this attribute.
     * only relevant for text-based attribute types
     * like TextType and LocalizableTextType.</p>
     *
     * @return null|string
     */
    public function getInputHint()
    {
        if (is_null($this->inputHint)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(AttributeDefinition::FIELD_INPUT_HINT);
            if (is_null($data)) {
                return null;
            }
            $this->inputHint = (string) $data;
        }

        return $this->inputHint;
    }

    /**
     * <p>Whether the attribute's values should generally be enabled in product search.
     * This determines whether the value is stored in products for matching terms in the context of full-text search queries  and can be used in facets &amp; filters as part of product search queries.
     * The exact features that are enabled/disabled with this flag depend on the concrete attribute type and are described there.
     * The max size of a searchable field is <strong>restricted to 10922 characters</strong>.
     * This constraint is enforced at both product creation and product update.
     * If the length of the input exceeds the maximum size an InvalidField error is returned.</p>
     *
     * @return null|bool
     */
    public function getIsSearchable()
    {
        if (is_null($this->isSearchable)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(AttributeDefinition::FIELD_IS_SEARCHABLE);
            if (is_null($data)) {
                return null;
            }
            $this->isSearchable = (bool) $data;
        }

        return $this->isSearchable;
    }

    public function setType(?AttributeType $type): void
    {
        $this->type = $type;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function setLabel(?LocalizedString $label): void
    {
        $this->label = $label;
    }

    public function setIsRequired(?bool $isRequired): void
    {
        $this->isRequired = $isRequired;
    }

    public function setAttributeConstraint(?string $attributeConstraint): void
    {
        $this->attributeConstraint = $attributeConstraint;
    }

    public function setInputTip(?LocalizedString $inputTip): void
    {
        $this->inputTip = $inputTip;
    }

    public function setInputHint(?string $inputHint): void
    {
        $this->inputHint = $inputHint;
    }

    public function setIsSearchable(?bool $isSearchable): void
    {
        $this->isSearchable = $isSearchable;
    }



}
