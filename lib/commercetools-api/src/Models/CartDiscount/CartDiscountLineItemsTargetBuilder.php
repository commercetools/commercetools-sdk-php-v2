<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartDiscountLineItemsTarget>
 */
final class CartDiscountLineItemsTargetBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $predicate;

    /**
     * <p>Valid <a href="/../api/projects/predicates#lineitem-field-identifiers">LineItem target predicate</a>.</p>
     *

     * @return null|string
     */
    public function getPredicate()
    {
        return $this->predicate;
    }

    /**
     * @param ?string $predicate
     * @return $this
     */
    public function withPredicate(?string $predicate)
    {
        $this->predicate = $predicate;

        return $this;
    }


    public function build(): CartDiscountLineItemsTarget
    {
        return new CartDiscountLineItemsTargetModel(
            $this->predicate
        );
    }

    public static function of(): CartDiscountLineItemsTargetBuilder
    {
        return new self();
    }
}
