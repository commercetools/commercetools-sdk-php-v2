<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Product\FacetResultModel;

class FilteredFacetResultModel extends FacetResultModel implements FilteredFacetResult {
    const DISCRIMINATOR_VALUE = 'filter';

    /**
     * @var int
     */
    protected $count;
    /**
     * @var int
     */
    protected $productCount;

    /**
     * @return int
     */
    public function getCount()
    {
        if (is_null($this->count)) {
            $value = $this->raw(FilteredFacetResult::FIELD_COUNT);
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
            $value = $this->raw(FilteredFacetResult::FIELD_PRODUCT_COUNT);
            $value = (int)$value;
            $this->productCount = $value;
        }
        return $this->productCount;
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
