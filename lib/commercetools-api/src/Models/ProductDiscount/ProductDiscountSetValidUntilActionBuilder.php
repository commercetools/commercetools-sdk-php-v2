<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\Builder;
use DateTimeImmutable;

/**
 * @implements Builder<ProductDiscountSetValidUntilAction>
 */
final class ProductDiscountSetValidUntilActionBuilder implements Builder
{
    /**
     * @var ?DateTimeImmutable
     */
    private $validUntil;

    /**
     * <p>The time from which the discount should be ineffective.
     * Please take Eventual Consistency into account for calculated undiscounted values.</p>.
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

    public function build(): ProductDiscountSetValidUntilAction
    {
        return new ProductDiscountSetValidUntilActionModel(
            $this->validUntil
        );
    }

    public static function of(): ProductDiscountSetValidUntilActionBuilder
    {
        return new self();
    }
}
