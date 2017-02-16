<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class FacetResultRange extends JsonObject {
    protected $from;
    protected $fromStr;
    protected $to;
    protected $toStr;
    protected $count;
    protected $productCount;
    protected $total;
    protected $min;
    protected $max;
    protected $mean;

    /**
     * @return float
     */
    public function getFrom(): float
    {
        if (is_null($this->from)) {
            $value = $this->raw('from');
            if (!is_null($value)) {
                $this->from = (float)$value;
            } else {
                return 0;
            }
        }
        return $this->from;
    }
                

    /**
     * @return string
     */
    public function getFromStr(): string
    {
        if (is_null($this->fromStr)) {
            $value = $this->raw('fromStr');
            if (!is_null($value)) {
                $this->fromStr = (string)$value;
            } else {
                return '';
            }
        }
        return $this->fromStr;
    }
                

    /**
     * @return float
     */
    public function getTo(): float
    {
        if (is_null($this->to)) {
            $value = $this->raw('to');
            if (!is_null($value)) {
                $this->to = (float)$value;
            } else {
                return 0;
            }
        }
        return $this->to;
    }
                

    /**
     * @return string
     */
    public function getToStr(): string
    {
        if (is_null($this->toStr)) {
            $value = $this->raw('toStr');
            if (!is_null($value)) {
                $this->toStr = (string)$value;
            } else {
                return '';
            }
        }
        return $this->toStr;
    }
                

    /**
     * @return int
     */
    public function getCount(): int
    {
        if (is_null($this->count)) {
            $value = $this->raw('count');
            if (!is_null($value)) {
                $this->count = (int)$value;
            } else {
                return 0;
            }
        }
        return $this->count;
    }
                

    /**
     * @return int
     */
    public function getProductCount(): int
    {
        if (is_null($this->productCount)) {
            $value = $this->raw('productCount');
            if (!is_null($value)) {
                $this->productCount = (int)$value;
            } else {
                return 0;
            }
        }
        return $this->productCount;
    }
                

    /**
     * @return int
     */
    public function getTotal(): int
    {
        if (is_null($this->total)) {
            $value = $this->raw('total');
            if (!is_null($value)) {
                $this->total = (int)$value;
            } else {
                return 0;
            }
        }
        return $this->total;
    }
                

    /**
     * @return float
     */
    public function getMin(): float
    {
        if (is_null($this->min)) {
            $value = $this->raw('min');
            if (!is_null($value)) {
                $this->min = (float)$value;
            } else {
                return 0;
            }
        }
        return $this->min;
    }
                

    /**
     * @return float
     */
    public function getMax(): float
    {
        if (is_null($this->max)) {
            $value = $this->raw('max');
            if (!is_null($value)) {
                $this->max = (float)$value;
            } else {
                return 0;
            }
        }
        return $this->max;
    }
                

    /**
     * @return float
     */
    public function getMean(): float
    {
        if (is_null($this->mean)) {
            $value = $this->raw('mean');
            if (!is_null($value)) {
                $this->mean = (float)$value;
            } else {
                return 0;
            }
        }
        return $this->mean;
    }
                
}
