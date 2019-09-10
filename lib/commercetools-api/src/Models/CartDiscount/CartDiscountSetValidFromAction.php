<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface CartDiscountSetValidFromAction extends CartDiscountUpdateAction
{
    
    const FIELD_VALID_FROM = 'validFrom';

    /**
     *
     * @return DateTimeImmutable|null
     */
    public function getValidFrom();
    public function setValidFrom(?DateTimeImmutable $validFrom): void;
}