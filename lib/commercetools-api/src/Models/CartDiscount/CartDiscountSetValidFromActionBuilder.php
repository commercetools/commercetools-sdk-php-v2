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
 * @implements Builder<CartDiscountSetValidFromAction>
 */
final class CartDiscountSetValidFromActionBuilder implements Builder
{
    /**
     * @var ?DateTimeImmutable
     */
    private $validFrom;

    /**
     * <p>Value to set.
     * If empty, any existing value will be removed.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * @param ?DateTimeImmutable $validFrom
     * @return $this
     */
    public function withValidFrom(?DateTimeImmutable $validFrom)
    {
        $this->validFrom = $validFrom;

        return $this;
    }


    public function build(): CartDiscountSetValidFromAction
    {
        return new CartDiscountSetValidFromActionModel(
            $this->validFrom
        );
    }

    public static function of(): CartDiscountSetValidFromActionBuilder
    {
        return new self();
    }
}
