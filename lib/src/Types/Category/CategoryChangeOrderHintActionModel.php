<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Category\CategoryUpdateActionModel;

class CategoryChangeOrderHintActionModel extends CategoryUpdateActionModel implements CategoryChangeOrderHintAction {
    const DISCRIMINATOR_VALUE = 'changeOrderHint';

    /**
     * @var string
     */
    protected $orderHint;

    /**
     * @return string
     */
    public function getOrderHint()
    {
        if (is_null($this->orderHint)) {
            $value = $this->raw(CategoryChangeOrderHintAction::FIELD_ORDER_HINT);
            $value = (string)$value;
            $this->orderHint = $value;
        }
        return $this->orderHint;
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

}
