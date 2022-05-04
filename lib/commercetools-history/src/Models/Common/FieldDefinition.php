<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface FieldDefinition extends JsonObject
{

    public const FIELD_TYPE = 'type';
    public const FIELD_NAME = 'name';
    public const FIELD_LABEL = 'label';
    public const FIELD_INPUT_HINT = 'inputHint';

    /**
     * @return null|FieldType
     */
    public function getType();

    /**
     * <p>The name of the field. The name must be between two and 36 characters long and can contain the ASCII letters A to Z in lowercase or uppercase, digits, underscores (<code>_</code>) and the hyphen-minus (<code>-</code>). The name must be unique for a given resource type ID. In case there is a field with the same name in another type it has to have the same FieldType also.</p>
     *
     * @return null|string
     */
    public function getName();

    /**
     * @return null|LocalizedString
     */
    public function getLabel();

    /**
     * @return null|string
     */
    public function getInputHint();

    /**
     * @param ?FieldType $type
     */
    public function setType(?FieldType $type): void;

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param ?LocalizedString $label
     */
    public function setLabel(?LocalizedString $label): void;

    /**
     * @param ?string $inputHint
     */
    public function setInputHint(?string $inputHint): void;
}
