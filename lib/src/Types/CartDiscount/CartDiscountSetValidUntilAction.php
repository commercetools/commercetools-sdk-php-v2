<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

interface CartDiscountSetValidUntilAction extends CartDiscountUpdateAction
{
    const FIELD_VALID_UNTIL = 'validUntil';

    /**
     * @return \DateTimeImmutable
     */
    public function getValidUntil();

    /**
     * @param \DateTimeImmutable $validUntil
     * @return $this
     */
    public function setValidUntil($validUntil);

}
