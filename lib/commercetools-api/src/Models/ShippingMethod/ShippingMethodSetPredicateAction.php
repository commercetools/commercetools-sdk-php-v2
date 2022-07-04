<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ShippingMethodSetPredicateAction extends ShippingMethodUpdateAction
{
    public const FIELD_PREDICATE = 'predicate';

    /**
     * <p>A valid <a href="/projects/predicates#cart-predicates">Cart predicate</a>. If <code>predicate</code> is absent or <code>null</code>, it is removed if it exists.</p>
     *
     * @return null|string
     */
    public function getPredicate();

    /**
     * @param ?string $predicate
     */
    public function setPredicate(?string $predicate): void;
}
