<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

interface ShippingMethodSetPredicateAction extends ShippingMethodUpdateAction
{
    const FIELD_PREDICATE = 'predicate';

    /**
     * @return string
     */
    public function getPredicate();

    /**
     * @param string $predicate
     * @return $this
     */
    public function setPredicate(string $predicate);

}
