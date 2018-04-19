<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

interface ProductDiscountSetValidFromAction extends ProductDiscountUpdateAction
{
    const FIELD_VALID_FROM = 'validFrom';

    /**
     * @return \DateTimeImmutable
     */
    public function getValidFrom();

    /**
     * @param \DateTimeImmutable $validFrom
     * @return $this
     */
    public function setValidFrom($validFrom);

}
