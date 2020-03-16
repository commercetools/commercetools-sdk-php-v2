<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

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
final class FieldDefinitionModel extends JsonObjectModel implements FieldDefinition
{
    /**
     * @var ?FieldType
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
    protected $required;

    /**
     * @var ?string
     */
    protected $inputHint;


    public function __construct(
        FieldType $type = null,
        string $name = null,
        LocalizedString $label = null,
        bool $required = null,
        string $inputHint = null
    ) {
        $this->type = $type;
        $this->name = $name;
        $this->label = $label;
        $this->required = $required;
        $this->inputHint = $inputHint;
    }

    /**
     * <p>Describes the type of the field.</p>
     *
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

            $this->type = FieldTypeModel::of($data);
        }

        return $this->type;
    }

    /**
     * <p>The name of the field.
     * The name must be between two and 36 characters long and can contain the ASCII letters A to Z in lowercase or uppercase, digits, underscores (<code>_</code>) and the hyphen-minus (<code>-</code>).
     * The name must be unique for a given resource type ID.
     * In case there is a field with the same name in another type it has to have the same FieldType also.</p>
     *
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
     * <p>A human-readable label for the field.</p>
     *
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
     * <p>Whether the field is required to have a value.</p>
     *
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

    /**
     * <p>Provides a visual representation type for this field.
     * It is only relevant for string-based field types like StringType and LocalizedStringType.</p>
     *
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

    public function setType(?FieldType $type): void
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

    public function setRequired(?bool $required): void
    {
        $this->required = $required;
    }

    public function setInputHint(?string $inputHint): void
    {
        $this->inputHint = $inputHint;
    }
}
