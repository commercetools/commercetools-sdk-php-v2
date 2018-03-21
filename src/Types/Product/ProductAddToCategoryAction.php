<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Category\CategoryReference;

interface ProductAddToCategoryAction extends ProductUpdateAction {
    const FIELD_CATEGORY = 'category';
    const FIELD_ORDER_HINT = 'orderHint';
    const FIELD_STAGED = 'staged';

    /**
     * @return CategoryReference
     */
    public function getCategory();

    /**
     * @return string
     */
    public function getOrderHint();

    /**
     * @return mixed
     */
    public function getStaged();

    /**
     * @param CategoryReference $category
     * @return $this
     */
    public function setCategory(CategoryReference $category);

    /**
     * @param string $orderHint
     * @return $this
     */
    public function setOrderHint(string $orderHint);

    /**
     * @param mixed $staged
     * @return $this
     */
    public function setStaged($staged);

}
