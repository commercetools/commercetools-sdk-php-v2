<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\JsonObject;

interface ProductDiscountChangePredicateAction extends ProductDiscountUpdateAction
{
    
    const FIELD_PREDICATE = 'predicate';

    /**
     *
     * @return string|null
     */
    public function getPredicate();
    public function setPredicate(?string $predicate): void;
}