<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Product\ProductUpdateActionModel;

class ProductSetCategoryOrderHintActionModel extends ProductUpdateActionModel implements ProductSetCategoryOrderHintAction {
    const DISCRIMINATOR_VALUE = 'setCategoryOrderHint';

    /**
     * @var string
     */
    protected $categoryId;
    /**
     * @var string
     */
    protected $orderHint;
    /**
     * @var mixed
     */
    protected $staged;

    /**
     * @return string
     */
    public function getCategoryId()
    {
        if (is_null($this->categoryId)) {
            $value = $this->raw(ProductSetCategoryOrderHintAction::FIELD_CATEGORY_ID);
            $value = (string)$value;
            $this->categoryId = $value;
        }
        return $this->categoryId;
    }
    /**
     * @return string
     */
    public function getOrderHint()
    {
        if (is_null($this->orderHint)) {
            $value = $this->raw(ProductSetCategoryOrderHintAction::FIELD_ORDER_HINT);
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
            $value = $this->raw(ProductSetCategoryOrderHintAction::FIELD_STAGED);
            $this->staged = $value;
        }
        return $this->staged;
    }

    /**
     * @param string $categoryId
     * @return $this
     */
    public function setCategoryId(string $categoryId)
    {
        $this->categoryId = (string)$categoryId;

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
