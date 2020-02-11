<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface TypeChangeInputHintAction extends TypeUpdateAction
{
    public const FIELD_FIELD_NAME = 'fieldName';
    public const FIELD_INPUT_HINT = 'inputHint';

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
