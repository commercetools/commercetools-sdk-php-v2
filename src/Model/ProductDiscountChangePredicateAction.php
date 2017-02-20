<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ProductDiscountChangePredicateAction extends ProductDiscountUpdateAction {
    protected $predicate;
    const DISCRIMINATOR_VALUE = 'changePredicate';

    /**
     * @return string
     */
    public function getPredicate(): string
    {
        if (is_null($this->predicate)) {
            $value = $this->raw('predicate');
            if (!is_null($value)) {
                $this->predicate = (string)$value;
            } else {
                return '';
            }
        }
        return $this->predicate;
    }
                
}
