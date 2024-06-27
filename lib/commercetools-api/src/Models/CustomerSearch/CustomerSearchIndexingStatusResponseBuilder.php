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
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<CustomerSearchIndexingStatusResponse>
 */
final class CustomerSearchIndexingStatusResponseBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $status;

    /**

     * @var null|CustomerIndexingProgress|CustomerIndexingProgressBuilder
     */
    private $states;

    /**

     * @var ?DateTimeImmutable
     */
    private $startedAt;

    /**

     * @var ?DateTimeImmutable
     */
    private $lastModifiedAt;

    /**

     * @var ?int
     */
    private $retryCount;

    /**
     * <p>Current status of indexing the Customer Search.</p>
     *

     * @return null|string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * <p>Progress of indexing. Only available when indexing is in progress.</p>
     *

     * @return null|CustomerIndexingProgress
     */
    public function getStates()
    {
        return $this->states instanceof CustomerIndexingProgressBuilder ? $this->states->build() : $this->states;
    }

    /**
     * <p>Date and time (UTC) when the last indexing started.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getStartedAt()
    {
        return $this->startedAt;
    }

    /**
     * <p>Time when the status was last modified.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        return $this->lastModifiedAt;
    }

    /**
     * <p>Indicates how many times the system tried to start indexing after failed attempts. The counter is set to null after an indexing finished successfully.</p>
     *

     * @return null|int
     */
    public function getRetryCount()
    {
        return $this->retryCount;
    }

    /**
     * @param ?string $status
     * @return $this
     */
    public function withStatus(?string $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @param ?CustomerIndexingProgress $states
     * @return $this
     */
    public function withStates(?CustomerIndexingProgress $states)
    {
        $this->states = $states;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $startedAt
     * @return $this
     */
    public function withStartedAt(?DateTimeImmutable $startedAt)
    {
        $this->startedAt = $startedAt;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     * @return $this
     */
    public function withLastModifiedAt(?DateTimeImmutable $lastModifiedAt)
    {
        $this->lastModifiedAt = $lastModifiedAt;

        return $this;
    }

    /**
     * @param ?int $retryCount
     * @return $this
     */
    public function withRetryCount(?int $retryCount)
    {
        $this->retryCount = $retryCount;

        return $this;
    }

    /**
     * @deprecated use withStates() instead
     * @return $this
     */
    public function withStatesBuilder(?CustomerIndexingProgressBuilder $states)
    {
        $this->states = $states;

        return $this;
    }

    public function build(): CustomerSearchIndexingStatusResponse
    {
        return new CustomerSearchIndexingStatusResponseModel(
            $this->status,
            $this->states instanceof CustomerIndexingProgressBuilder ? $this->states->build() : $this->states,
            $this->startedAt,
            $this->lastModifiedAt,
            $this->retryCount
        );
    }

    public static function of(): CustomerSearchIndexingStatusResponseBuilder
    {
        return new self();
    }
}
