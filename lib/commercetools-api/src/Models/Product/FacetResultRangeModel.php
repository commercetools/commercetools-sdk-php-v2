<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObjectModel;

final class FacetResultRangeModel extends JsonObjectModel implements FacetResultRange
{
    /**
     * @var ?string
     */
    protected $toStr;

    /**
     * @var ?int
     */
    protected $total;

    /**
     * @var ?int
     */
    protected $min;

    /**
     * @var ?string
     */
    protected $fromStr;

    /**
     * @var ?int
     */
    protected $max;

    /**
     * @var ?int
     */
    protected $mean;

    /**
     * @var ?int
     */
    protected $count;

    /**
     * @var ?int
     */
    protected $from;

    /**
     * @var ?int
     */
    protected $to;

    /**
     * @var ?int
     */
    protected $productCount;

    public function __construct(
        string $toStr = null,
        int $total = null,
        int $min = null,
        string $fromStr = null,
        int $max = null,
        int $mean = null,
        int $count = null,
        int $from = null,
        int $to = null,
        int $productCount = null
    ) {
        $this->toStr = $toStr;
        $this->total = $total;
        $this->min = $min;
        $this->fromStr = $fromStr;
        $this->max = $max;
        $this->mean = $mean;
        $this->count = $count;
        $this->from = $from;
        $this->to = $to;
        $this->productCount = $productCount;
    }

    /**
     * @return null|string
     */
    public function getToStr()
    {
        if (is_null($this->toStr)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(FacetResultRange::FIELD_TO_STR);
            if (is_null($data)) {
                return null;
            }
            $this->toStr = (string) $data;
        }

        return $this->toStr;
    }

    /**
     * @return null|int
     */
    public function getTotal()
    {
        if (is_null($this->total)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(FacetResultRange::FIELD_TOTAL);
            if (is_null($data)) {
                return null;
            }
            $this->total = (int) $data;
        }

        return $this->total;
    }

    /**
     * @return null|int
     */
    public function getMin()
    {
        if (is_null($this->min)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(FacetResultRange::FIELD_MIN);
            if (is_null($data)) {
                return null;
            }
            $this->min = (int) $data;
        }

        return $this->min;
    }

    /**
     * @return null|string
     */
    public function getFromStr()
    {
        if (is_null($this->fromStr)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(FacetResultRange::FIELD_FROM_STR);
            if (is_null($data)) {
                return null;
            }
            $this->fromStr = (string) $data;
        }

        return $this->fromStr;
    }

    /**
     * @return null|int
     */
    public function getMax()
    {
        if (is_null($this->max)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(FacetResultRange::FIELD_MAX);
            if (is_null($data)) {
                return null;
            }
            $this->max = (int) $data;
        }

        return $this->max;
    }

    /**
     * @return null|int
     */
    public function getMean()
    {
        if (is_null($this->mean)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(FacetResultRange::FIELD_MEAN);
            if (is_null($data)) {
                return null;
            }
            $this->mean = (int) $data;
        }

        return $this->mean;
    }

    /**
     * @return null|int
     */
    public function getCount()
    {
        if (is_null($this->count)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(FacetResultRange::FIELD_COUNT);
            if (is_null($data)) {
                return null;
            }
            $this->count = (int) $data;
        }

        return $this->count;
    }

    /**
     * @return null|int
     */
    public function getFrom()
    {
        if (is_null($this->from)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(FacetResultRange::FIELD_FROM);
            if (is_null($data)) {
                return null;
            }
            $this->from = (int) $data;
        }

        return $this->from;
    }

    /**
     * @return null|int
     */
    public function getTo()
    {
        if (is_null($this->to)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(FacetResultRange::FIELD_TO);
            if (is_null($data)) {
                return null;
            }
            $this->to = (int) $data;
        }

        return $this->to;
    }

    /**
     * @return null|int
     */
    public function getProductCount()
    {
        if (is_null($this->productCount)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(FacetResultRange::FIELD_PRODUCT_COUNT);
            if (is_null($data)) {
                return null;
            }
            $this->productCount = (int) $data;
        }

        return $this->productCount;
    }

    public function setToStr(?string $toStr): void
    {
        $this->toStr = $toStr;
    }

    public function setTotal(?int $total): void
    {
        $this->total = $total;
    }

    public function setMin(?int $min): void
    {
        $this->min = $min;
    }

    public function setFromStr(?string $fromStr): void
    {
        $this->fromStr = $fromStr;
    }

    public function setMax(?int $max): void
    {
        $this->max = $max;
    }

    public function setMean(?int $mean): void
    {
        $this->mean = $mean;
    }

    public function setCount(?int $count): void
    {
        $this->count = $count;
    }

    public function setFrom(?int $from): void
    {
        $this->from = $from;
    }

    public function setTo(?int $to): void
    {
        $this->to = $to;
    }

    public function setProductCount(?int $productCount): void
    {
        $this->productCount = $productCount;
    }
}
