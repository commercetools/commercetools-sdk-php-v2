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
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<CartDiscountSetValidUntilAction>
 */
final class CartDiscountSetValidUntilActionBuilder implements Builder
{
    /**

     * @var ?DateTimeImmutable
     */
    private $validUntil;

    /**
     * <p>Value to set.
     * If empty, any existing value will be removed.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }

    /**
     * @param ?DateTimeImmutable $validUntil
     * @return $this
     */
    public function withValidUntil(?DateTimeImmutable $validUntil)
    {
        $this->validUntil = $validUntil;

        return $this;
    }


    public function build(): CartDiscountSetValidUntilAction
    {
        return new CartDiscountSetValidUntilActionModel(
            $this->validUntil
        );
    }

    public static function of(): CartDiscountSetValidUntilActionBuilder
    {
        return new self();
    }
}
