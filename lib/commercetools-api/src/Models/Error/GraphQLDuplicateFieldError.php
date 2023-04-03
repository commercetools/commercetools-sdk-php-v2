<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface GraphQLDuplicateFieldError extends GraphQLErrorObject
{
    public const FIELD_FIELD = 'field';
    public const FIELD_DUPLICATE_VALUE = 'duplicateValue';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p>Name of the conflicting field.</p>
     *

     * @return null|string
     */
    public function getField();

    /**
     * <p>Conflicting duplicate value.</p>
     *

     * @return null|mixed
     */
    public function getDuplicateValue();

    /**
     * @param ?string $field
     */
    public function setField(?string $field): void;

    /**
     * @param mixed $duplicateValue
     */
    public function setDuplicateValue($duplicateValue): void;
}
