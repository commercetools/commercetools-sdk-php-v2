<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<SearchIndexingConfigurationValues>
 */
final class SearchIndexingConfigurationValuesBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $status;

    /**
     * @var ?DateTimeImmutable
     */
    private $lastModifiedAt;

    /**
     * @var ?string
     */
    private $lastModifiedBy;

    /**
     * <p>Current status of resource indexing. Present on Projects from 1 February 2019.</p>
     *
     * @return null|string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * <p>Date and time (UTC) the Project was last updated.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        return $this->lastModifiedAt;
    }

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/../api/client-logging#events-tracked">events not tracked</a>.</p>
     *
     * @return null|string
     */
    public function getLastModifiedBy()
    {
        return $this->lastModifiedBy;
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
     * @param ?DateTimeImmutable $lastModifiedAt
     * @return $this
     */
    public function withLastModifiedAt(?DateTimeImmutable $lastModifiedAt)
    {
        $this->lastModifiedAt = $lastModifiedAt;

        return $this;
    }

    /**
     * @param ?string $lastModifiedBy
     * @return $this
     */
    public function withLastModifiedBy(?string $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;

        return $this;
    }


    public function build(): SearchIndexingConfigurationValues
    {
        return new SearchIndexingConfigurationValuesModel(
            $this->status,
            $this->lastModifiedAt,
            $this->lastModifiedBy
        );
    }

    public static function of(): SearchIndexingConfigurationValuesBuilder
    {
        return new self();
    }
}
