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
 * @implements Builder<CartDiscountChangeStackingModeAction>
 */
final class CartDiscountChangeStackingModeActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $stackingMode;

    /**
     * <p>New value to set.</p>
     *

     * @return null|string
     */
    public function getStackingMode()
    {
        return $this->stackingMode;
    }

    /**
     * @param ?string $stackingMode
     * @return $this
     */
    public function withStackingMode(?string $stackingMode)
    {
        $this->stackingMode = $stackingMode;

        return $this;
    }


    public function build(): CartDiscountChangeStackingModeAction
    {
        return new CartDiscountChangeStackingModeActionModel(
            $this->stackingMode
        );
    }

    public static function of(): CartDiscountChangeStackingModeActionBuilder
    {
        return new self();
    }
}
