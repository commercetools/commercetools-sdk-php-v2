<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ProductDiscountChangePredicateAction extends ProductDiscountUpdateAction
{

    public const FIELD_PREDICATE = 'predicate';

    /**
     * <p>A valid ProductDiscount Predicate.</p>
     *
     * @return null|string
     */
    public function getPredicate();

    public function setPredicate(?string $predicate): void;
}
