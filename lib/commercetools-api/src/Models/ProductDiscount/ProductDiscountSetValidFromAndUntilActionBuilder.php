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
 * @implements Builder<ProductDiscountSetValidFromAndUntilAction>
 */
final class ProductDiscountSetValidFromAndUntilActionBuilder implements Builder
{
    /**
     * @var ?DateTimeImmutable
     */
    private $validUntil;

    /**
     * @var ?DateTimeImmutable
     */
    private $validFrom;

    /**
     * @return null|DateTimeImmutable
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * @return $this
     */
    public function withValidUntil(?DateTimeImmutable $validUntil)
    {
        $this->validUntil = $validUntil;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValidFrom(?DateTimeImmutable $validFrom)
    {
        $this->validFrom = $validFrom;

        return $this;
    }

    public function build(): ProductDiscountSetValidFromAndUntilAction
    {
        return new ProductDiscountSetValidFromAndUntilActionModel(
            $this->validUntil,
            $this->validFrom
        );
    }

    public static function of(): ProductDiscountSetValidFromAndUntilActionBuilder
    {
        return new self();
    }
}
