<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DuplicateFieldError extends ErrorObject
{
    public const FIELD_FIELD = 'field';
    public const FIELD_DUPLICATE_VALUE = 'duplicateValue';
    public const FIELD_CONFLICTING_RESOURCE = 'conflictingResource';

    /**
     * @return null|string
     */
    public function getField();

    /**
     * @return null|mixed
     */
    public function getDuplicateValue();

    /**
     * @return null|Reference
     */
    public function getConflictingResource();

    /**
     * @param ?string $field
     */
    public function setField(?string $field): void;

    /**
     * @param mixed $duplicateValue
     */
    public function setDuplicateValue($duplicateValue): void;

    /**
     * @param ?Reference $conflictingResource
     */
    public function setConflictingResource(?Reference $conflictingResource): void;
}
