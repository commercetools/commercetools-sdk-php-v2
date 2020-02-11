<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface ProductDiscountSetValidFromAndUntilAction extends ProductDiscountUpdateAction
{
    public const FIELD_VALID_FROM = 'validFrom';
    public const FIELD_VALID_UNTIL = 'validUntil';

    /**
     * @return null|DateTimeImmutable
     */
    public function getValidFrom();

    /**
     * <p>The timeframe for which the discount should be effective.
     * Please take Eventual Consistency into account for calculated undiscounted values.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getValidUntil();

    public function setValidFrom(?DateTimeImmutable $validFrom): void;

    public function setValidUntil(?DateTimeImmutable $validUntil): void;
}
