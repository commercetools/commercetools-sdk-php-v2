<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface VariantBulkUpdateResponse extends JsonObject
{
    public const FIELD_SUCCESS_COUNT = 'successCount';
    public const FIELD_FAILURE_COUNT = 'failureCount';
    public const FIELD_RESULTS = 'results';

    /**
     * <p>Number of Variants that were successfully updated.</p>
     *

     * @return null|int
     */
    public function getSuccessCount();

    /**
     * <p>Number of Variants that failed to update.</p>
     *

     * @return null|int
     */
    public function getFailureCount();

    /**
     * <p>Results for each Variant in the request, in the same order as the <code>items</code> in the request body.</p>
     *

     * @return null|VariantBulkUpdateResultCollection
     */
    public function getResults();

    /**
     * @param ?int $successCount
     */
    public function setSuccessCount(?int $successCount): void;

    /**
     * @param ?int $failureCount
     */
    public function setFailureCount(?int $failureCount): void;

    /**
     * @param ?VariantBulkUpdateResultCollection $results
     */
    public function setResults(?VariantBulkUpdateResultCollection $results): void;
}
