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
     * <p>A Reference represents a loose reference to another resource in the same commercetools Project identified by its <code>id</code>. The <code>typeId</code> indicates the type of the referenced resource. Each resource type has its corresponding Reference type, like <a href="ctp:api:type:ChannelReference">ChannelReference</a>.  A referenced resource can be embedded through <a href="/general-concepts#reference-expansion">Reference Expansion</a>. The expanded reference is the value of an additional <code>obj</code> field then.</p>
     *
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
