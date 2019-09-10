<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface ProductDiscountSetValidUntilAction extends ProductDiscountUpdateAction
{
    
    const FIELD_VALID_UNTIL = 'validUntil';

    /**
     *
     * @return DateTimeImmutable|null
     */
    public function getValidUntil();
    public function setValidUntil(?DateTimeImmutable $validUntil): void;
}