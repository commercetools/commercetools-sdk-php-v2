<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DuplicateEnumValuesError extends ErrorObject
{
    public const FIELD_DUPLICATES = 'duplicates';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p><code>&quot;The enum values contain duplicate keys: $listOfDuplicateKeys.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * <p>Duplicate keys.</p>
     *

     * @return null|array
     */
    public function getDuplicates();

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;

    /**
     * @param ?array $duplicates
     */
    public function setDuplicates(?array $duplicates): void;
}
