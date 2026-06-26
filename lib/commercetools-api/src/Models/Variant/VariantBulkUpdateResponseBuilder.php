<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<VariantBulkUpdateResponse>
 */
final class VariantBulkUpdateResponseBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $successCount;

    /**

     * @var ?int
     */
    private $failureCount;

    /**

     * @var ?VariantBulkUpdateResultCollection
     */
    private $results;

    /**
     * <p>Number of Variants that were successfully updated.</p>
     *

     * @return null|int
     */
    public function getSuccessCount()
    {
        return $this->successCount;
    }

    /**
     * <p>Number of Variants that failed to update.</p>
     *

     * @return null|int
     */
    public function getFailureCount()
    {
        return $this->failureCount;
    }

    /**
     * <p>Results for each Variant in the request, in the same order as the <code>items</code> in the request body.</p>
     *

     * @return null|VariantBulkUpdateResultCollection
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @param ?int $successCount
     * @return $this
     */
    public function withSuccessCount(?int $successCount)
    {
        $this->successCount = $successCount;

        return $this;
    }

    /**
     * @param ?int $failureCount
     * @return $this
     */
    public function withFailureCount(?int $failureCount)
    {
        $this->failureCount = $failureCount;

        return $this;
    }

    /**
     * @param ?VariantBulkUpdateResultCollection $results
     * @return $this
     */
    public function withResults(?VariantBulkUpdateResultCollection $results)
    {
        $this->results = $results;

        return $this;
    }


    public function build(): VariantBulkUpdateResponse
    {
        return new VariantBulkUpdateResponseModel(
            $this->successCount,
            $this->failureCount,
            $this->results
        );
    }

    public static function of(): VariantBulkUpdateResponseBuilder
    {
        return new self();
    }
}
