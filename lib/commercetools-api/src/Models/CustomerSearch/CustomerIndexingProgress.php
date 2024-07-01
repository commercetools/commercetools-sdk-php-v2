<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomerSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerIndexingProgress extends JsonObject
{
    public const FIELD_INDEXED = 'indexed';
    public const FIELD_FAILED = 'failed';
    public const FIELD_ESTIMATED_TOTAL = 'estimatedTotal';

    /**
     * <p>The number of Customers successfully indexed.</p>
     *

     * @return null|int
     */
    public function getIndexed();

    /**
     * <p>The number of Customers that failed to be indexed.</p>
     *

     * @return null|int
     */
    public function getFailed();

    /**
     * <p>The estimated total number of Customers to be indexed.</p>
     *

     * @return null|int
     */
    public function getEstimatedTotal();

    /**
     * @param ?int $indexed
     */
    public function setIndexed(?int $indexed): void;

    /**
     * @param ?int $failed
     */
    public function setFailed(?int $failed): void;

    /**
     * @param ?int $estimatedTotal
     */
    public function setEstimatedTotal(?int $estimatedTotal): void;
}
