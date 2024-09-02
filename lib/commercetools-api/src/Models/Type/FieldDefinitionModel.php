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
     *
     * @var ?FieldType
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
    protected $required;

    /**
     *
     * @var ?string
     */
    protected $inputHint;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?FieldType $type = null,
        ?string $name = null,
        ?LocalizedString $label = null,
        ?bool $required = null,
        ?string $inputHint = null
    ) {
        $this->type = $type;
        $this->name = $name;
        $this->label = $label;
        $this->required = $required;
        $this->inputHint = $inputHint;
    }

    /**
     * <p>Data type of the Custom Field to define.</p>
     *
     *
     * @return null|FieldType
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $className = FieldTypeModel::resolveDiscriminatorClass($data);
            $this->type = $className::of($data);
        }

        return $this->type;
    }

    /**
     * <p>Name of the Custom Field to define.
     * Must be unique for a given <a href="ctp:api:type:ResourceTypeId">ResourceTypeId</a>.
     * In case there is a FieldDefinition with the same <code>name</code> in another <a href="ctp:api:type:Type">Type</a>, both FieldDefinitions must have the same <code>type</code>.</p>
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
     * <p>A human-readable label for the field.</p>
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
     * <p>Defines whether the field is required to have a value.</p>
     *
     *
     * @return null|bool
     */
    public function getRequired()
    {
        if (is_null($this->required)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_REQUIRED);
            if (is_null($data)) {
                return null;
            }
            $this->required = (bool) $data;
        }

        return $this->required;
    }

    /**
     * <p>Defines the visual representation of the field in user interfaces like the Merchant Center.
     * It is only relevant for string-based <a href="ctp:api:type:FieldType">FieldTypes</a> like <a href="ctp:api:type:CustomFieldStringType">CustomFieldStringType</a> and <a href="ctp:api:type:CustomFieldLocalizedStringType">CustomFieldLocalizedStringType</a>.</p>
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
     * @param ?FieldType $type
     */
    public function setType(?FieldType $type): void
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
     * @param ?bool $required
     */
    public function setRequired(?bool $required): void
    {
        $this->required = $required;
    }

    /**
     * @param ?string $inputHint
     */
    public function setInputHint(?string $inputHint): void
    {
        $this->inputHint = $inputHint;
    }
}
