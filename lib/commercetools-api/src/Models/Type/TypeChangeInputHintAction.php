<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

interface TypeChangeInputHintAction extends TypeUpdateAction
{
    const FIELD_FIELD_NAME = 'fieldName';
    const FIELD_INPUT_HINT = 'inputHint';

    /**
     * @return null|string
     */
    public function getFieldName();

    /**
     * @return null|string
     */
    public function getInputHint();

    public function setFieldName(?string $fieldName): void;

    public function setInputHint(?string $inputHint): void;
}
