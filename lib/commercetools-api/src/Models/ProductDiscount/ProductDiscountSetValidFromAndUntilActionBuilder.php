<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use DateTimeImmutable;

/**
 * @implements Builder<ProductDiscountSetValidFromAndUntilAction>
 */
final class ProductDiscountSetValidFromAndUntilActionBuilder implements Builder
{
    /**
     * @var ?DateTimeImmutable
     */
    private $validFrom;

    /**
     * @var ?DateTimeImmutable
     */
    private $validUntil;

    /**
     * @return null|DateTimeImmutable
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * <p>The timeframe for which the discount should be effective.
     * Please take Eventual Consistency into account for calculated undiscounted values.</p>
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
    public function withValidFrom(?DateTimeImmutable $validFrom)
    {
        $this->validFrom = $validFrom;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValidUntil(?DateTimeImmutable $validUntil)
    {
        $this->validUntil = $validUntil;

        return $this;
    }


    public function build(): ProductDiscountSetValidFromAndUntilAction
    {
        return new ProductDiscountSetValidFromAndUntilActionModel(
            $this->validFrom,
            $this->validUntil
        );
    }

    public static function of(): ProductDiscountSetValidFromAndUntilActionBuilder
    {
        return new self();
    }
}
