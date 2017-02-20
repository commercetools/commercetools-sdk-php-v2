<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ProductDiscountChangeSortOrderAction extends ProductDiscountUpdateAction {
    protected $sortOrder;
    const DISCRIMINATOR_VALUE = 'sortOrder';

    /**
     * @return string
     */
    public function getSortOrder(): string
    {
        if (is_null($this->sortOrder)) {
            $value = $this->raw('sortOrder');
            if (!is_null($value)) {
                $this->sortOrder = (string)$value;
            } else {
                return '';
            }
        }
        return $this->sortOrder;
    }
                
}
