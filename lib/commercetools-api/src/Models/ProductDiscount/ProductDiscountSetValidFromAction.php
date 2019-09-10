<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use DateTimeImmutable;

interface ProductDiscountSetValidFromAction extends ProductDiscountUpdateAction
{
    const FIELD_VALID_FROM = 'validFrom';

    /**
     * @return null|DateTimeImmutable
     */
    public function getValidFrom();

    public function setValidFrom(?DateTimeImmutable $validFrom): void;
}
