<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Base\JsonObject;

interface FieldDefinition extends JsonObject
{
    const FIELD_TYPE = 'type';
    const FIELD_NAME = 'name';
    const FIELD_LABEL = 'label';
    const FIELD_REQUIRED = 'required';
    const FIELD_INPUT_HINT = 'inputHint';

    /**
     * @return null|JsonObject
     */
    public function getType();

    /**
     * @return null|string
     */
    public function getName();

    /**
     * @return null|LocalizedString
     */
    public function getLabel();

    /**
     * @return null|bool
     */
    public function getRequired();

    /**
     * @return null|string
     */
    public function getInputHint();

    public function setType(?JsonObject $type): void;

    public function setName(?string $name): void;

    public function setLabel(?LocalizedString $label): void;

    public function setRequired(?bool $required): void;

    public function setInputHint(?string $inputHint): void;
}
