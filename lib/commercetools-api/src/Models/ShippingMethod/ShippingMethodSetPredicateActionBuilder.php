<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

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
     * <p>A valid Cart predicate.
     * If <code>predicate</code> is absent or <code>null</code>, it is removed if it exists.</p>
     *
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
