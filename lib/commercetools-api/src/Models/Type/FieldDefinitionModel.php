<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class FieldDefinitionModel extends JsonObjectModel implements FieldDefinition
{
    /**
     * @var ?string
     */
    protected $name;

    /**
     * @var ?string
     */
    protected $inputHint;

    /**
     * @var ?LocalizedString
     */
    protected $label;

    /**
     * @var ?FieldType
     */
    protected $type;

    /**
     * @var ?bool
     */
    protected $required;

    public function __construct(
        string $name = null,
        string $inputHint = null,
        LocalizedString $label = null,
        FieldType $type = null,
        bool $required = null
    ) {
        $this->name = $name;
        $this->inputHint = $inputHint;
        $this->label = $label;
        $this->type = $type;
        $this->required = $required;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(FieldDefinition::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * @return null|string
     */
    public function getInputHint()
    {
        if (is_null($this->inputHint)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(FieldDefinition::FIELD_INPUT_HINT);
            if (is_null($data)) {
                return null;
            }
            $this->inputHint = (string) $data;
        }

        return $this->inputHint;
    }

    /**
     * @return null|LocalizedString
     */
    public function getLabel()
    {
        if (is_null($this->label)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(FieldDefinition::FIELD_LABEL);
            if (is_null($data)) {
                return null;
            }

            $this->label = LocalizedStringModel::of($data);
        }

        return $this->label;
    }

    /**
     * @return null|FieldType
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(FieldDefinition::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $className = FieldTypeModel::resolveDiscriminatorClass($data);
            $this->type = $className::of($data);
        }

        return $this->type;
    }

    /**
     * @return null|bool
     */
    public function getRequired()
    {
        if (is_null($this->required)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(FieldDefinition::FIELD_REQUIRED);
            if (is_null($data)) {
                return null;
            }
            $this->required = (bool) $data;
        }

        return $this->required;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function setInputHint(?string $inputHint): void
    {
        $this->inputHint = $inputHint;
    }

    public function setLabel(?LocalizedString $label): void
    {
        $this->label = $label;
    }

    public function setType(?FieldType $type): void
    {
        $this->type = $type;
    }

    public function setRequired(?bool $required): void
    {
        $this->required = $required;
    }
}
