<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface FieldDefinition extends JsonObject
{
    public const FIELD_TYPE = 'type';
    public const FIELD_NAME = 'name';
    public const FIELD_LABEL = 'label';
    public const FIELD_REQUIRED = 'required';
    public const FIELD_INPUT_HINT = 'inputHint';

    /**
     * <p>Data type of the Custom Field to define.</p>
     *

     * @return null|FieldType
     */
    public function getType();

    /**
     * <p>Name of the Custom Field to define.
     * Must be unique for a given <a href="ctp:api:type:ResourceTypeId">ResourceTypeId</a>.
     * In case there is a FieldDefinition with the same <code>name</code> in another <a href="ctp:api:type:Type">Type</a>, both FieldDefinitions must have the same <code>type</code>.</p>
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
     * <p>Defines whether the field is required to have a value.</p>
     *

     * @return null|bool
     */
    public function getRequired();

    /**
     * <p>Must be either <code>SingleLine</code> or <code>MultiLine</code>.
     * Defines the visual representation of the field in user interfaces like the Merchant Center.
     * It is only relevant for string-based <a href="ctp:api:type:FieldType">FieldTypes</a> like <a href="ctp:api:type:CustomFieldStringType">CustomFieldStringType</a> and <a href="ctp:api:type:CustomFieldLocalizedStringType">CustomFieldLocalizedStringType</a>.</p>
     *

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
     * @param ?bool $required
     */
    public function setRequired(?bool $required): void;

    /**
     * @param ?string $inputHint
     */
    public function setInputHint(?string $inputHint): void;
}
