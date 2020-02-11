<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface TypeChangeFieldDefinitionOrderAction extends TypeUpdateAction
{

    public const FIELD_FIELD_NAMES = 'fieldNames';

    /**
     * @return null|array
     */
    public function getFieldNames();

    public function setFieldNames(?array $fieldNames): void;
}
