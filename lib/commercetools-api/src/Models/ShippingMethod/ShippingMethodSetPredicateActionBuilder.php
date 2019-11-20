<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ShippingMethodSetPredicateAction>
 */
final class ShippingMethodSetPredicateActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $predicate;

    /**
     * @return null|string
     */
    public function getPredicate()
    {
        return $this->predicate;
    }

    /**
     * @return $this
     */
    public function withPredicate(?string $predicate)
    {
        $this->predicate = $predicate;

        return $this;
    }

    public function build(): ShippingMethodSetPredicateAction
    {
        return new ShippingMethodSetPredicateActionModel(
            $this->predicate
        );
    }

    public static function of(): ShippingMethodSetPredicateActionBuilder
    {
        return new self();
    }
}
