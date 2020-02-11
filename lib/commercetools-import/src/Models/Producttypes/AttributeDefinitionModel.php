<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Producttypes;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\LocalizedString;

use Commercetools\Import\Models\Common\LocalizedStringModel;
use stdClass;

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
