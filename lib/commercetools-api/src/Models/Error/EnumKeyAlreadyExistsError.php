<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface EnumKeyAlreadyExistsError extends ErrorObject
{
    public const FIELD_CONFLICTING_ENUM_KEY = 'conflictingEnumKey';
    public const FIELD_CONFLICTING_ATTRIBUTE_NAME = 'conflictingAttributeName';

    /**
     * @return null|string
     */
    public function getConflictingEnumKey();

    /**
     * @return null|string
     */
    public function getConflictingAttributeName();

    /**
     * @param ?string $conflictingEnumKey
     */
    public function setConflictingEnumKey(?string $conflictingEnumKey): void;

    /**
     * @param ?string $conflictingAttributeName
     */
    public function setConflictingAttributeName(?string $conflictingAttributeName): void;
}
