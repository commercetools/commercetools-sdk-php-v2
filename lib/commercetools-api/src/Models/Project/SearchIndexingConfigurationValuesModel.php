<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class SearchIndexingConfigurationValuesModel extends JsonObjectModel implements SearchIndexingConfigurationValues
{
    /**
     *
     * @var ?string
     */
    protected $status;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;

    /**
     *
     * @var ?LastModifiedBy
     */
    protected $lastModifiedBy;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $status = null,
        ?DateTimeImmutable $lastModifiedAt = null,
        ?LastModifiedBy $lastModifiedBy = null
    ) {
        $this->status = $status;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->lastModifiedBy = $lastModifiedBy;
    }

    /**
     * <p>Current status of resource indexing. Present on Projects from 1 February 2019.</p>
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
     * <p>Date and time (UTC) the Project was last updated. Only present on Projects last modified after 1 February 2019.</p>
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
     * <p>Present on resources created after 1 February 2019 except for <a href="/../api/general-concepts#events-tracked">events not tracked</a>.</p>
     *
     *
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        if (is_null($this->lastModifiedBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_LAST_MODIFIED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->lastModifiedBy = LastModifiedByModel::of($data);
        }

        return $this->lastModifiedBy;
    }


    /**
     * @param ?string $status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void
    {
        $this->lastModifiedAt = $lastModifiedAt;
    }

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     */
    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void
    {
        $this->lastModifiedBy = $lastModifiedBy;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[SearchIndexingConfigurationValues::FIELD_LAST_MODIFIED_AT]) && $data[SearchIndexingConfigurationValues::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[SearchIndexingConfigurationValues::FIELD_LAST_MODIFIED_AT] = $data[SearchIndexingConfigurationValues::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
