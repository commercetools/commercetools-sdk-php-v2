<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class FacetRangeModel extends JsonObjectModel implements FacetRange
{
    /**
     *
     * @var ?float
     */
    protected $from;

    /**
     *
     * @var ?string
     */
    protected $fromStr;

    /**
     *
     * @var ?float
     */
    protected $to;

    /**
     *
     * @var ?string
     */
    protected $toStr;

    /**
     *
     * @var ?int
     */
    protected $count;

    /**
     *
     * @var ?int
     */
    protected $productCount;

    /**
     *
     * @var ?float
     */
    protected $total;

    /**
     *
     * @var ?float
     */
    protected $min;

    /**
     *
     * @var ?float
     */
    protected $max;

    /**
     *
     * @var ?float
     */
    protected $mean;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?float $from = null,
        ?string $fromStr = null,
        ?float $to = null,
        ?string $toStr = null,
        ?int $count = null,
        ?int $productCount = null,
        ?float $total = null,
        ?float $min = null,
        ?float $max = null,
        ?float $mean = null
    ) {
        $this->from = $from;
        $this->fromStr = $fromStr;
        $this->to = $to;
        $this->toStr = $toStr;
        $this->count = $count;
        $this->productCount = $productCount;
        $this->total = $total;
        $this->min = $min;
        $this->max = $max;
        $this->mean = $mean;
    }

    /**
     *
     * @return null|float
     */
    public function getFrom()
    {
        if (is_null($this->from)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_FROM);
            if (is_null($data)) {
                return null;
            }
            $this->from = (float) $data;
        }

        return $this->from;
    }

    /**
     *
     * @return null|string
     */
    public function getFromStr()
    {
        if (is_null($this->fromStr)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_FROM_STR);
            if (is_null($data)) {
                return null;
            }
            $this->fromStr = (string) $data;
        }

        return $this->fromStr;
    }

    /**
     *
     * @return null|float
     */
    public function getTo()
    {
        if (is_null($this->to)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_TO);
            if (is_null($data)) {
                return null;
            }
            $this->to = (float) $data;
        }

        return $this->to;
    }

    /**
     *
     * @return null|string
     */
    public function getToStr()
    {
        if (is_null($this->toStr)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TO_STR);
            if (is_null($data)) {
                return null;
            }
            $this->toStr = (string) $data;
        }

        return $this->toStr;
    }

    /**
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
     *
     * @return null|int
     */
    public function getProductCount()
    {
        if (is_null($this->productCount)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_PRODUCT_COUNT);
            if (is_null($data)) {
                return null;
            }
            $this->productCount = (int) $data;
        }

        return $this->productCount;
    }

    /**
     *
     * @return null|float
     */
    public function getTotal()
    {
        if (is_null($this->total)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_TOTAL);
            if (is_null($data)) {
                return null;
            }
            $this->total = (float) $data;
        }

        return $this->total;
    }

    /**
     *
     * @return null|float
     */
    public function getMin()
    {
        if (is_null($this->min)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_MIN);
            if (is_null($data)) {
                return null;
            }
            $this->min = (float) $data;
        }

        return $this->min;
    }

    /**
     *
     * @return null|float
     */
    public function getMax()
    {
        if (is_null($this->max)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_MAX);
            if (is_null($data)) {
                return null;
            }
            $this->max = (float) $data;
        }

        return $this->max;
    }

    /**
     *
     * @return null|float
     */
    public function getMean()
    {
        if (is_null($this->mean)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_MEAN);
            if (is_null($data)) {
                return null;
            }
            $this->mean = (float) $data;
        }

        return $this->mean;
    }


    /**
     * @param ?float $from
     */
    public function setFrom(?float $from): void
    {
        $this->from = $from;
    }

    /**
     * @param ?string $fromStr
     */
    public function setFromStr(?string $fromStr): void
    {
        $this->fromStr = $fromStr;
    }

    /**
     * @param ?float $to
     */
    public function setTo(?float $to): void
    {
        $this->to = $to;
    }

    /**
     * @param ?string $toStr
     */
    public function setToStr(?string $toStr): void
    {
        $this->toStr = $toStr;
    }

    /**
     * @param ?int $count
     */
    public function setCount(?int $count): void
    {
        $this->count = $count;
    }

    /**
     * @param ?int $productCount
     */
    public function setProductCount(?int $productCount): void
    {
        $this->productCount = $productCount;
    }

    /**
     * @param ?float $total
     */
    public function setTotal(?float $total): void
    {
        $this->total = $total;
    }

    /**
     * @param ?float $min
     */
    public function setMin(?float $min): void
    {
        $this->min = $min;
    }

    /**
     * @param ?float $max
     */
    public function setMax(?float $max): void
    {
        $this->max = $max;
    }

    /**
     * @param ?float $mean
     */
    public function setMean(?float $mean): void
    {
        $this->mean = $mean;
    }
}
