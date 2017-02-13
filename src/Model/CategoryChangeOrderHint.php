<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class CategoryChangeOrderHint extends CategoryUpdateAction {
    protected $orderHint;
    const DISCRIMINATOR_VALUE = 'changeOrderHint';

    /**
     * @return string
     */
    public function getOrderHint(): string
    {
        if (is_null($this->orderHint)) {
            $value = $this->raw('orderHint');
            if (!is_null($value)) {
                $this->orderHint = (string)$value;
            } else {
                return '';
            }
        }
        return $this->orderHint;
    }
                
}
