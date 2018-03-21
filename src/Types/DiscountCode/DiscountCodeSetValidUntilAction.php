<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

interface DiscountCodeSetValidUntilAction extends DiscountCodeUpdateAction {
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
