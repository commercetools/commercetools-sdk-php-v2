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
use stdClass;

/**
 * @internal
 */
final class BusinessUnitIndexingProgressModel extends JsonObjectModel implements BusinessUnitIndexingProgress
{
    /**
     *
     * @var ?int
     */
    protected $indexed;

    /**
     *
     * @var ?int
     */
    protected $failed;

    /**
     *
     * @var ?int
     */
    protected $estimatedTotal;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $indexed = null,
        ?int $failed = null,
        ?int $estimatedTotal = null
    ) {
        $this->indexed = $indexed;
        $this->failed = $failed;
        $this->estimatedTotal = $estimatedTotal;
    }

    /**
     * <p>The number of Business Units successfully indexed.</p>
     *
     *
     * @return null|int
     */
    public function getIndexed()
    {
        if (is_null($this->indexed)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_INDEXED);
            if (is_null($data)) {
                return null;
            }
            $this->indexed = (int) $data;
        }

        return $this->indexed;
    }

    /**
     * <p>The number of Business Units that failed to be indexed.</p>
     *
     *
     * @return null|int
     */
    public function getFailed()
    {
        if (is_null($this->failed)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_FAILED);
            if (is_null($data)) {
                return null;
            }
            $this->failed = (int) $data;
        }

        return $this->failed;
    }

    /**
     * <p>The estimated total number of Business Units to be indexed.</p>
     *
     *
     * @return null|int
     */
    public function getEstimatedTotal()
    {
        if (is_null($this->estimatedTotal)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_ESTIMATED_TOTAL);
            if (is_null($data)) {
                return null;
            }
            $this->estimatedTotal = (int) $data;
        }

        return $this->estimatedTotal;
    }


    /**
     * @param ?int $indexed
     */
    public function setIndexed(?int $indexed): void
    {
        $this->indexed = $indexed;
    }

    /**
     * @param ?int $failed
     */
    public function setFailed(?int $failed): void
    {
        $this->failed = $failed;
    }

    /**
     * @param ?int $estimatedTotal
     */
    public function setEstimatedTotal(?int $estimatedTotal): void
    {
        $this->estimatedTotal = $estimatedTotal;
    }
}
