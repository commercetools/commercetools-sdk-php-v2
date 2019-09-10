<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface CartDiscountSetValidFromAndUntilAction extends CartDiscountUpdateAction
{
    
    const FIELD_VALID_FROM = 'validFrom';
    const FIELD_VALID_UNTIL = 'validUntil';

    /**
     *
     * @return DateTimeImmutable|null
     */
    public function getValidFrom();
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    public function getValidUntil();
    public function setValidFrom(?DateTimeImmutable $validFrom): void;
    
    public function setValidUntil(?DateTimeImmutable $validUntil): void;
}