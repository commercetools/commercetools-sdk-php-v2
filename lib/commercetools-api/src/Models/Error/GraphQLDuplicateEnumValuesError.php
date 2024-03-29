<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface GraphQLDuplicateEnumValuesError extends GraphQLErrorObject
{
    public const FIELD_DUPLICATES = 'duplicates';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p>Duplicate keys.</p>
     *

     * @return null|array
     */
    public function getDuplicates();

    /**
     * @param ?array $duplicates
     */
    public function setDuplicates(?array $duplicates): void;
}
