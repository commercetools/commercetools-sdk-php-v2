<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface DiscountCodeSetValidUntilAction extends DiscountCodeUpdateAction
{
    
    const FIELD_VALID_UNTIL = 'validUntil';

    /**
     *
     * @return DateTimeImmutable|null
     */
    public function getValidUntil();
    public function setValidUntil(?DateTimeImmutable $validUntil): void;
}