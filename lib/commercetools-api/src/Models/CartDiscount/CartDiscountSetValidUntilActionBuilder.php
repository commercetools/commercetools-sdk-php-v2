<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\Builder;
use DateTimeImmutable;

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
     * <p>If absent, the field with the value is removed in case a value was set before.</p>.
     *
     * @return null|DateTimeImmutable
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }

    /**
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
