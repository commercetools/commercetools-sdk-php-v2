<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Product\ProductUpdateActionModel;

use Commercetools\Types\Category\CategoryReference;

class ProductAddToCategoryActionModel extends ProductUpdateActionModel implements ProductAddToCategoryAction {
    const DISCRIMINATOR_VALUE = 'addToCategory';

    /**
     * @var CategoryReference
     */
    protected $category;
    /**
     * @var string
     */
    protected $orderHint;
    /**
     * @var mixed
     */
    protected $staged;

    /**
     * @return CategoryReference
     */
    public function getCategory()
    {
        if (is_null($this->category)) {
            $value = $this->raw(ProductAddToCategoryAction::FIELD_CATEGORY);
            if (is_null($value)) {
                return $this->mapData(CategoryReference::class, null);
            }
            $value = $this->mapData(CategoryReference::class, $value);

            $this->category = $value;
        }
        return $this->category;
    }
    /**
     * @return string
     */
    public function getOrderHint()
    {
        if (is_null($this->orderHint)) {
            $value = $this->raw(ProductAddToCategoryAction::FIELD_ORDER_HINT);
            $value = (string)$value;
            $this->orderHint = $value;
        }
        return $this->orderHint;
    }
    /**
     * @return mixed
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            $value = $this->raw(ProductAddToCategoryAction::FIELD_STAGED);
            $this->staged = $value;
        }
        return $this->staged;
    }

    /**
     * @param CategoryReference $category
     * @return $this
     */
    public function setCategory(CategoryReference $category)
    {
        $this->category = $category;

        return $this;
    }
    /**
     * @param string $orderHint
     * @return $this
     */
    public function setOrderHint(string $orderHint)
    {
        $this->orderHint = (string)$orderHint;

        return $this;
    }
    /**
     * @param $staged
     * @return $this
     */
    public function setStaged($staged)
    {
        $this->staged = $staged;

        return $this;
    }

}
