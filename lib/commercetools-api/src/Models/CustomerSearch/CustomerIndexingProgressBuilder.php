<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomerSearch;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomerIndexingProgress>
 */
final class CustomerIndexingProgressBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $indexed;

    /**

     * @var ?int
     */
    private $failed;

    /**

     * @var ?int
     */
    private $estimatedTotal;

    /**
     * <p>The number of Customers successfully indexed.</p>
     *

     * @return null|int
     */
    public function getIndexed()
    {
        return $this->indexed;
    }

    /**
     * <p>The number of Customers that failed to be indexed.</p>
     *

     * @return null|int
     */
    public function getFailed()
    {
        return $this->failed;
    }

    /**
     * <p>The estimated total number of Customers to be indexed.</p>
     *

     * @return null|int
     */
    public function getEstimatedTotal()
    {
        return $this->estimatedTotal;
    }

    /**
     * @param ?int $indexed
     * @return $this
     */
    public function withIndexed(?int $indexed)
    {
        $this->indexed = $indexed;

        return $this;
    }

    /**
     * @param ?int $failed
     * @return $this
     */
    public function withFailed(?int $failed)
    {
        $this->failed = $failed;

        return $this;
    }

    /**
     * @param ?int $estimatedTotal
     * @return $this
     */
    public function withEstimatedTotal(?int $estimatedTotal)
    {
        $this->estimatedTotal = $estimatedTotal;

        return $this;
    }


    public function build(): CustomerIndexingProgress
    {
        return new CustomerIndexingProgressModel(
            $this->indexed,
            $this->failed,
            $this->estimatedTotal
        );
    }

    public static function of(): CustomerIndexingProgressBuilder
    {
        return new self();
    }
}
