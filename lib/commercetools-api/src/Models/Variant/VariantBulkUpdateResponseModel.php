<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class VariantBulkUpdateResponseModel extends JsonObjectModel implements VariantBulkUpdateResponse
{
    /**
     *
     * @var ?int
     */
    protected $successCount;

    /**
     *
     * @var ?int
     */
    protected $failureCount;

    /**
     *
     * @var ?VariantBulkUpdateResultCollection
     */
    protected $results;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $successCount = null,
        ?int $failureCount = null,
        ?VariantBulkUpdateResultCollection $results = null
    ) {
        $this->successCount = $successCount;
        $this->failureCount = $failureCount;
        $this->results = $results;
    }

    /**
     * <p>Number of Variants that were successfully updated.</p>
     *
     *
     * @return null|int
     */
    public function getSuccessCount()
    {
        if (is_null($this->successCount)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_SUCCESS_COUNT);
            if (is_null($data)) {
                return null;
            }
            $this->successCount = (int) $data;
        }

        return $this->successCount;
    }

    /**
     * <p>Number of Variants that failed to update.</p>
     *
     *
     * @return null|int
     */
    public function getFailureCount()
    {
        if (is_null($this->failureCount)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_FAILURE_COUNT);
            if (is_null($data)) {
                return null;
            }
            $this->failureCount = (int) $data;
        }

        return $this->failureCount;
    }

    /**
     * <p>Results for each Variant in the request, in the same order as the <code>items</code> in the request body.</p>
     *
     *
     * @return null|VariantBulkUpdateResultCollection
     */
    public function getResults()
    {
        if (is_null($this->results)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_RESULTS);
            if (is_null($data)) {
                return null;
            }
            $this->results = VariantBulkUpdateResultCollection::fromArray($data);
        }

        return $this->results;
    }


    /**
     * @param ?int $successCount
     */
    public function setSuccessCount(?int $successCount): void
    {
        $this->successCount = $successCount;
    }

    /**
     * @param ?int $failureCount
     */
    public function setFailureCount(?int $failureCount): void
    {
        $this->failureCount = $failureCount;
    }

    /**
     * @param ?VariantBulkUpdateResultCollection $results
     */
    public function setResults(?VariantBulkUpdateResultCollection $results): void
    {
        $this->results = $results;
    }
}
