<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

class FacetResultTermModel extends JsonObjectModel implements FacetResultTerm {
    /**
     * @var mixed
     */
    protected $term;
    /**
     * @var int
     */
    protected $count;
    /**
     * @var int
     */
    protected $productCount;

    /**
     * @return mixed
     */
    public function getTerm()
    {
        if (is_null($this->term)) {
            $value = $this->raw(FacetResultTerm::FIELD_TERM);
            $this->term = $value;
        }
        return $this->term;
    }
    /**
     * @return int
     */
    public function getCount()
    {
        if (is_null($this->count)) {
            $value = $this->raw(FacetResultTerm::FIELD_COUNT);
            $value = (int)$value;
            $this->count = $value;
        }
        return $this->count;
    }
    /**
     * @return int
     */
    public function getProductCount()
    {
        if (is_null($this->productCount)) {
            $value = $this->raw(FacetResultTerm::FIELD_PRODUCT_COUNT);
            $value = (int)$value;
            $this->productCount = $value;
        }
        return $this->productCount;
    }

    /**
     * @param $term
     * @return $this
     */
    public function setTerm($term)
    {
        $this->term = $term;

        return $this;
    }
    /**
     * @param int $count
     * @return $this
     */
    public function setCount(int $count)
    {
        $this->count = (int)$count;

        return $this;
    }
    /**
     * @param int $productCount
     * @return $this
     */
    public function setProductCount(int $productCount)
    {
        $this->productCount = (int)$productCount;

        return $this;
    }

}
