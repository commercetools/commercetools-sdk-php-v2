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
    public function getCode();

    /**
     * <p><code>&quot;The $attributeName attribute definition already contains an enum value with the key $enumKey.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * <p>Conflicting enum key.</p>
     *

     * @return null|string
     */
    public function getConflictingEnumKey();

    /**
     * <p>Name of the conflicting Attribute.</p>
     *

     * @return null|string
     */
    public function getConflictingAttributeName();

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;

    /**
     * @param ?string $conflictingEnumKey
     */
    public function setConflictingEnumKey(?string $conflictingEnumKey): void;

    /**
     * @param ?string $conflictingAttributeName
     */
    public function setConflictingAttributeName(?string $conflictingAttributeName): void;
}
