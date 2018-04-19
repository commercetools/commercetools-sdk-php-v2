<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

interface ProductSetCategoryOrderHintAction extends ProductUpdateAction
{
    const FIELD_CATEGORY_ID = 'categoryId';
    const FIELD_ORDER_HINT = 'orderHint';
    const FIELD_STAGED = 'staged';

    /**
     * @return string
     */
    public function getCategoryId();

    /**
     * @return string
     */
    public function getOrderHint();

    /**
     * @return mixed
     */
    public function getStaged();

    /**
     * @param string $categoryId
     * @return $this
     */
    public function setCategoryId(string $categoryId);

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
