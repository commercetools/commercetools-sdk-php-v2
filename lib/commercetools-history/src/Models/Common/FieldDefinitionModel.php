<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

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
     * @var ?mixed
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
     * @var ?string
     */
    protected $inputHint;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?JsonObject $type = null,
        ?string $name = null,
        ?LocalizedString $label = null,
        ?string $inputHint = null
    ) {
        $this->type = $type;
        $this->name = $name;
        $this->label = $label;
        $this->inputHint = $inputHint;

    }

    /**
     * <p>Describes the type of the field.</p>
     *
     * @return null|mixed
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type =  JsonObjectModel::of($data);
        }

        return $this->type;
    }

    /**
     * <p>The name of the field. The name must be between two and 36 characters long and can contain the ASCII letters A to Z in lowercase or uppercase, digits, underscores (<code>_</code>) and the hyphen-minus (<code>-</code>). The name must be unique for a given resource type ID. In case there is a field with the same name in another type it has to have the same FieldType also.</p>
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
            $this->name =  (string) $data;
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
            $data = $this->raw(self::FIELD_LABEL);
            if (is_null($data)) {
                return null;
            }

            $this->label =  LocalizedStringModel::of($data);
        }

        return $this->label;
    }

    /**
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
            $this->inputHint =  (string) $data;
        }

        return $this->inputHint;
    }


    /**
     * @param ?JsonObject $type
     */
    public function setType(?JsonObject $type): void
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
     * @param ?string $inputHint
     */
    public function setInputHint(?string $inputHint): void
    {
        $this->inputHint = $inputHint;
    }



}
