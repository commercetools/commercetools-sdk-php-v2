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

interface DuplicateFieldWithConflictingResourceError extends ErrorObject
{
    public const FIELD_FIELD = 'field';
    public const FIELD_DUPLICATE_VALUE = 'duplicateValue';
    public const FIELD_CONFLICTING_RESOURCE = 'conflictingResource';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p><code>&quot;A duplicate value $duplicateValue exists for field $field on $conflictingResource.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage();

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
     * <p>Reference to the resource that has the conflicting value.</p>
     *

     * @return null|Reference
     */
    public function getConflictingResource();

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;

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
