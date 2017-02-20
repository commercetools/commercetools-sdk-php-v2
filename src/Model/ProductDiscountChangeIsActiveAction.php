<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ProductDiscountChangeIsActiveAction extends ProductDiscountUpdateAction {
    protected $isActive;
    const DISCRIMINATOR_VALUE = 'changeIsActive';

    /**
     * @return bool
     */
    public function getIsActive(): bool
    {
        if (is_null($this->isActive)) {
            $value = $this->raw('isActive');
            if (!is_null($value)) {
                $this->isActive = (bool)$value;
            } else {
                return false;
            }
        }
        return $this->isActive;
    }
                
}
