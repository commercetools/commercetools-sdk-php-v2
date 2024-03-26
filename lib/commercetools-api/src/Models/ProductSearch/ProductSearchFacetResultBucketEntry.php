<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSearchFacetResultBucketEntry extends JsonObject
{
    public const FIELD_KEY = 'key';
    public const FIELD_COUNT = 'count';

    /**
     * <p>Key of the bucket.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Number of values in the bucket.</p>
     *

     * @return null|int
     */
    public function getCount();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?int $count
     */
    public function setCount(?int $count): void;
}
