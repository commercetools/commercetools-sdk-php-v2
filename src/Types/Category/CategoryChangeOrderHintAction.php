<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

interface CategoryChangeOrderHintAction extends CategoryUpdateAction {
    const FIELD_ORDER_HINT = 'orderHint';

    /**
     * @return string
     */
    public function getOrderHint();

    /**
     * @param string $orderHint
     * @return $this
     */
    public function setOrderHint(string $orderHint);

}
