<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Common\LocalizedString;

interface FieldDefinition extends JsonObject
{

    public const FIELD_TYPE = 'type';
    public const FIELD_NAME = 'name';
    public const FIELD_LABEL = 'label';
    public const FIELD_REQUIRED = 'required';
    public const FIELD_INPUT_HINT = 'inputHint';

    /**
     * <p>Describes the type of the field.</p>
     *
     * @return null|FieldType
     */
    public function getType();

    /**
     * <p>The name of the field.
     * The name must be between two and 36 characters long and can contain the ASCII letters A to Z in lowercase or uppercase, digits, underscores (<code>_</code>) and the hyphen-minus (<code>-</code>).
     * The name must be unique for a given resource type ID.
     * In case there is a field with the same name in another type it has to have the same FieldType also.</p>
     *
     * @return null|string
     */
    public function getName();

    /**
     * <p>A human-readable label for the field.</p>
     *
     * @return null|LocalizedString
     */
    public function getLabel();

    /**
     * <p>Whether the field is required to have a value.</p>
     *
     * @return null|bool
     */
    public function getRequired();

    /**
     * <p>Provides a visual representation type for this field.
     * It is only relevant for string-based field types like StringType and LocalizedStringType.</p>
     *
     * @return null|string
     */
    public function getInputHint();

    public function setType(?FieldType $type): void;

    public function setName(?string $name): void;

    public function setLabel(?LocalizedString $label): void;

    public function setRequired(?bool $required): void;

    public function setInputHint(?string $inputHint): void;
}
