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
 * @implements Builder<DiscountCodeChangeIsActiveAction>
 */
final class DiscountCodeChangeIsActiveActionBuilder implements Builder
{
    /**

     * @var ?bool
     */
    private $isActive;

    /**
     * <p>New value to set. Set to <code>true</code> to activate the DiscountCode for all matching Discounts.</p>
     *

     * @return null|bool
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @param ?bool $isActive
     * @return $this
     */
    public function withIsActive(?bool $isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }


    public function build(): DiscountCodeChangeIsActiveAction
    {
        return new DiscountCodeChangeIsActiveActionModel(
            $this->isActive
        );
    }

    public static function of(): DiscountCodeChangeIsActiveActionBuilder
    {
        return new self();
    }
}
