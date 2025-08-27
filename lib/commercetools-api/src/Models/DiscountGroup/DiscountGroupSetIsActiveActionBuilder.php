<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountGroup;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<DiscountGroupSetIsActiveAction>
 */
final class DiscountGroupSetIsActiveActionBuilder implements Builder
{
    /**

     * @var ?bool
     */
    private $isActive;

    /**
     * <p>New value to set.</p>
     * <p>A DiscountGroup must be active for its CartDiscounts to be considered during discount application.</p>
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


    public function build(): DiscountGroupSetIsActiveAction
    {
        return new DiscountGroupSetIsActiveActionModel(
            $this->isActive
        );
    }

    public static function of(): DiscountGroupSetIsActiveActionBuilder
    {
        return new self();
    }
}
