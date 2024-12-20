<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnitSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class BusinessUnitSearchIndexingStatusResponseModel extends JsonObjectModel implements BusinessUnitSearchIndexingStatusResponse
{
    /**
     *
     * @var ?string
     */
    protected $status;

    /**
     *
     * @var ?BusinessUnitIndexingProgress
     */
    protected $states;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $startedAt;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;

    /**
     *
     * @var ?int
     */
    protected $retryCount;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $status = null,
        ?BusinessUnitIndexingProgress $states = null,
        ?DateTimeImmutable $startedAt = null,
        ?DateTimeImmutable $lastModifiedAt = null,
        ?int $retryCount = null
    ) {
        $this->status = $status;
        $this->states = $states;
        $this->startedAt = $startedAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->retryCount = $retryCount;
    }

    /**
     * <p>Current status of indexing the Business Unit Search.</p>
     *
     *
     * @return null|string
     */
    public function getStatus()
    {
        if (is_null($this->status)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_STATUS);
            if (is_null($data)) {
                return null;
            }
            $this->status = (string) $data;
        }

        return $this->status;
    }

    /**
     * <p>Progress of indexing. Only available when indexing is in progress.</p>
     *
     *
     * @return null|BusinessUnitIndexingProgress
     */
    public function getStates()
    {
        if (is_null($this->states)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_STATES);
            if (is_null($data)) {
                return null;
            }

            $this->states = BusinessUnitIndexingProgressModel::of($data);
        }

        return $this->states;
    }

    /**
     * <p>Date and time (UTC) when the last indexing started.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getStartedAt()
    {
        if (is_null($this->startedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_STARTED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->startedAt = $data;
        }

        return $this->startedAt;
    }

    /**
     * <p>Time when the status was last modified.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        if (is_null($this->lastModifiedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LAST_MODIFIED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->lastModifiedAt = $data;
        }

        return $this->lastModifiedAt;
    }

    /**
     * <p>Indicates how many times the system tried to start indexing after failed attempts. The counter is set to null after an indexing finished successfully.</p>
     *
     *
     * @return null|int
     */
    public function getRetryCount()
    {
        if (is_null($this->retryCount)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_RETRY_COUNT);
            if (is_null($data)) {
                return null;
            }
            $this->retryCount = (int) $data;
        }

        return $this->retryCount;
    }


    /**
     * @param ?string $status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * @param ?BusinessUnitIndexingProgress $states
     */
    public function setStates(?BusinessUnitIndexingProgress $states): void
    {
        $this->states = $states;
    }

    /**
     * @param ?DateTimeImmutable $startedAt
     */
    public function setStartedAt(?DateTimeImmutable $startedAt): void
    {
        $this->startedAt = $startedAt;
    }

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void
    {
        $this->lastModifiedAt = $lastModifiedAt;
    }

    /**
     * @param ?int $retryCount
     */
    public function setRetryCount(?int $retryCount): void
    {
        $this->retryCount = $retryCount;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[BusinessUnitSearchIndexingStatusResponse::FIELD_STARTED_AT]) && $data[BusinessUnitSearchIndexingStatusResponse::FIELD_STARTED_AT] instanceof \DateTimeImmutable) {
            $data[BusinessUnitSearchIndexingStatusResponse::FIELD_STARTED_AT] = $data[BusinessUnitSearchIndexingStatusResponse::FIELD_STARTED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[BusinessUnitSearchIndexingStatusResponse::FIELD_LAST_MODIFIED_AT]) && $data[BusinessUnitSearchIndexingStatusResponse::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[BusinessUnitSearchIndexingStatusResponse::FIELD_LAST_MODIFIED_AT] = $data[BusinessUnitSearchIndexingStatusResponse::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
