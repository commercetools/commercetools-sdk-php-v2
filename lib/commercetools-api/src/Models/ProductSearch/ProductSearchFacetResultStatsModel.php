<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductSearchFacetResultStatsModel extends JsonObjectModel implements ProductSearchFacetResultStats
{
    /**
     *
     * @var ?string
     */
    protected $name;

    /**
     *
     * @var ?mixed
     */
    protected $min;

    /**
     *
     * @var ?mixed
     */
    protected $max;

    /**
     *
     * @var ?mixed
     */
    protected $mean;

    /**
     *
     * @var ?mixed
     */
    protected $sum;

    /**
     *
     * @var ?int
     */
    protected $count;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $name = null,
        $min = null,
        $max = null,
        $mean = null,
        $sum = null,
        ?int $count = null
    ) {
        $this->name = $name;
        $this->min = $min;
        $this->max = $max;
        $this->mean = $mean;
        $this->sum = $sum;
        $this->count = $count;
    }

    /**
     * <p>Name of the facet.</p>
     *
     *
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * <p>The minimum value of the field, scoped to the faceted results.</p>
     *
     *
     * @return null|mixed
     */
    public function getMin()
    {
        if (is_null($this->min)) {
            /** @psalm-var mixed $data */
            $data = $this->raw(self::FIELD_MIN);
            if (is_null($data)) {
                return null;
            }
            $this->min = $data;
        }

        return $this->min;
    }

    /**
     * <p>The maximum value of the field, scoped to the faceted results.</p>
     *
     *
     * @return null|mixed
     */
    public function getMax()
    {
        if (is_null($this->max)) {
            /** @psalm-var mixed $data */
            $data = $this->raw(self::FIELD_MAX);
            if (is_null($data)) {
                return null;
            }
            $this->max = $data;
        }

        return $this->max;
    }

    /**
     * <p>The average value of the field calculated as <code>sum</code> / <code>count</code>.</p>
     * <p>Only returned for number fields.</p>
     *
     *
     * @return null|mixed
     */
    public function getMean()
    {
        if (is_null($this->mean)) {
            /** @psalm-var mixed $data */
            $data = $this->raw(self::FIELD_MEAN);
            if (is_null($data)) {
                return null;
            }
            $this->mean = $data;
        }

        return $this->mean;
    }

    /**
     * <p>The sum of values of the field that match the <a href="ctp:api:type:ProductSearchFacetStatsExpression">facet expression</a>.</p>
     * <p>Only returned for number fields.</p>
     *
     *
     * @return null|mixed
     */
    public function getSum()
    {
        if (is_null($this->sum)) {
            /** @psalm-var mixed $data */
            $data = $this->raw(self::FIELD_SUM);
            if (is_null($data)) {
                return null;
            }
            $this->sum = $data;
        }

        return $this->sum;
    }

    /**
     * <p>The total number of values counted that match the facet expression.</p>
     *
     *
     * @return null|int
     */
    public function getCount()
    {
        if (is_null($this->count)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_COUNT);
            if (is_null($data)) {
                return null;
            }
            $this->count = (int) $data;
        }

        return $this->count;
    }


    /**
     * @param ?string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param mixed $min
     */
    public function setMin($min): void
    {
        $this->min = $min;
    }

    /**
     * @param mixed $max
     */
    public function setMax($max): void
    {
        $this->max = $max;
    }

    /**
     * @param mixed $mean
     */
    public function setMean($mean): void
    {
        $this->mean = $mean;
    }

    /**
     * @param mixed $sum
     */
    public function setSum($sum): void
    {
        $this->sum = $sum;
    }

    /**
     * @param ?int $count
     */
    public function setCount(?int $count): void
    {
        $this->count = $count;
    }
}
