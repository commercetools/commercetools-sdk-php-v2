<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class AttributeDefinitionModel extends JsonObjectModel implements AttributeDefinition
{
    /**
     *
     * @var ?AttributeType
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $name;

    /**
     *
     * @var ?LocalizedString
     */
    protected $label;

    /**
     *
     * @var ?bool
     */
    protected $isRequired;

    /**
     *
     * @var ?string
     */
    protected $level;

    /**
     *
     * @var ?string
     */
    protected $attributeConstraint;

    /**
     *
     * @var ?LocalizedString
     */
    protected $inputTip;

    /**
     *
     * @var ?string
     */
    protected $inputHint;

    /**
     *
     * @var ?bool
     */
    protected $isSearchable;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?AttributeType $type = null,
        ?string $name = null,
        ?LocalizedString $label = null,
        ?bool $isRequired = null,
        ?string $level = null,
        ?string $attributeConstraint = null,
        ?LocalizedString $inputTip = null,
        ?string $inputHint = null,
        ?bool $isSearchable = null
    ) {
        $this->type = $type;
        $this->name = $name;
        $this->label = $label;
        $this->isRequired = $isRequired;
        $this->level = $level;
        $this->attributeConstraint = $attributeConstraint;
        $this->inputTip = $inputTip;
        $this->inputHint = $inputHint;
        $this->isSearchable = $isSearchable;
    }

    /**
     * <p>Describes the Type of the Attribute.</p>
     *
     *
     * @return null|AttributeType
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $className = AttributeTypeModel::resolveDiscriminatorClass($data);
            $this->type = $className::of($data);
        }

        return $this->type;
    }

    /**
     * <p>User-defined name of the Attribute that is unique within the <a href="ctp:api:type:Project">Project</a>.</p>
     *
     *
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * <p>Human-readable label for the Attribute.</p>
     *
     *
     * @return null|LocalizedString
     */
    public function getLabel()
    {
        if (is_null($this->label)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_LABEL);
            if (is_null($data)) {
                return null;
            }

            $this->label = LocalizedStringModel::of($data);
        }

        return $this->label;
    }

    /**
     * <p>If <code>true</code>, the Attribute must have a value on a <a href="ctp:api:type:ProductVariant">ProductVariant</a>.</p>
     *
     *
     * @return null|bool
     */
    public function getIsRequired()
    {
        if (is_null($this->isRequired)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_IS_REQUIRED);
            if (is_null($data)) {
                return null;
            }
            $this->isRequired = (bool) $data;
        }

        return $this->isRequired;
    }

    /**
     * <p>Specifies whether the Attribute is defined at the Product or Variant level.</p>
     *
     *
     * @return null|string
     */
    public function getLevel()
    {
        if (is_null($this->level)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LEVEL);
            if (is_null($data)) {
                return null;
            }
            $this->level = (string) $data;
        }

        return $this->level;
    }

    /**
     * <p>Specifies how Attributes are validated across all variants of a Product.</p>
     *
     *
     * @return null|string
     */
    public function getAttributeConstraint()
    {
        if (is_null($this->attributeConstraint)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ATTRIBUTE_CONSTRAINT);
            if (is_null($data)) {
                return null;
            }
            $this->attributeConstraint = (string) $data;
        }

        return $this->attributeConstraint;
    }

    /**
     * <p>Provides additional Attribute information to aid content managers configure Product details.</p>
     *
     *
     * @return null|LocalizedString
     */
    public function getInputTip()
    {
        if (is_null($this->inputTip)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_INPUT_TIP);
            if (is_null($data)) {
                return null;
            }

            $this->inputTip = LocalizedStringModel::of($data);
        }

        return $this->inputTip;
    }

    /**
     * <p>Provides a visual representation directive for values of this Attribute (only relevant for <a href="ctp:api:type:AttributeTextType">AttributeTextType</a> and <a href="ctp:api:type:AttributeLocalizableTextType">AttributeLocalizableTextType</a>).</p>
     *
     *
     * @return null|string
     */
    public function getInputHint()
    {
        if (is_null($this->inputHint)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_INPUT_HINT);
            if (is_null($data)) {
                return null;
            }
            $this->inputHint = (string) $data;
        }

        return $this->inputHint;
    }

    /**
     * <p>If <code>true</code>, the Attribute's values are available in the <a href="/../api/projects/product-search">Product Search</a> or the <a href="/../api/projects/product-projection-search">Product Projection Search</a> API for use in full-text search queries, filters, and facets.
     * However, if an Attribute's <code>level</code> is set as <code>Product</code>, then Product Projection Search does <strong>not support</strong> the Attribute.</p>
     * <p>The exact features that are available with this flag depend on the specific <a href="ctp:api:type:AttributeType">AttributeType</a>.
     * The maximum size of a searchable field is <strong>restricted</strong> by the <a href="/../api/limits#field-content-size">Field content size limit</a>.
     * This constraint is enforced at both <a href="ctp:api:endpoint:/{projectKey}/products:POST">Product creation</a> and <a href="/../api/projects/products#update-product">Product update</a>.
     * If the length of the input exceeds the maximum size, an <a href="ctp:api:type:InvalidFieldError">InvalidField</a> error is returned.</p>
     *
     *
     * @return null|bool
     */
    public function getIsSearchable()
    {
        if (is_null($this->isSearchable)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_IS_SEARCHABLE);
            if (is_null($data)) {
                return null;
            }
            $this->isSearchable = (bool) $data;
        }

        return $this->isSearchable;
    }


    /**
     * @param ?AttributeType $type
     */
    public function setType(?AttributeType $type): void
    {
        $this->type = $type;
    }

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?LocalizedString $label
     */
    public function setLabel(?LocalizedString $label): void
    {
        $this->label = $label;
    }

    /**
     * @param ?bool $isRequired
     */
    public function setIsRequired(?bool $isRequired): void
    {
        $this->isRequired = $isRequired;
    }

    /**
     * @param ?string $level
     */
    public function setLevel(?string $level): void
    {
        $this->level = $level;
    }

    /**
     * @param ?string $attributeConstraint
     */
    public function setAttributeConstraint(?string $attributeConstraint): void
    {
        $this->attributeConstraint = $attributeConstraint;
    }

    /**
     * @param ?LocalizedString $inputTip
     */
    public function setInputTip(?LocalizedString $inputTip): void
    {
        $this->inputTip = $inputTip;
    }

    /**
     * @param ?string $inputHint
     */
    public function setInputHint(?string $inputHint): void
    {
        $this->inputHint = $inputHint;
    }

    /**
     * @param ?bool $isSearchable
     */
    public function setIsSearchable(?bool $isSearchable): void
    {
        $this->isSearchable = $isSearchable;
    }
}
