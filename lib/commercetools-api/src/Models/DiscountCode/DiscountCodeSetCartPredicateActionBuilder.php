<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<DiscountCodeSetCartPredicateAction>
 */
final class DiscountCodeSetCartPredicateActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $cartPredicate;

    /**
     * <p>Value to set. If empty, any existing value will be removed.</p>
     *

     * @return null|string
     */
    public function getCartPredicate()
    {
        return $this->cartPredicate;
    }

    /**
     * @param ?string $cartPredicate
     * @return $this
     */
    public function withCartPredicate(?string $cartPredicate)
    {
        $this->cartPredicate = $cartPredicate;

        return $this;
    }


    public function build(): DiscountCodeSetCartPredicateAction
    {
        return new DiscountCodeSetCartPredicateActionModel(
            $this->cartPredicate
        );
    }

    public static function of(): DiscountCodeSetCartPredicateActionBuilder
    {
        return new self();
    }
}
