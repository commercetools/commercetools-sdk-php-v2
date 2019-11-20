<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<CartDiscountSetDescriptionAction>
 */
final class CartDiscountSetDescriptionActionBuilder implements Builder
{
    /**
     * @var LocalizedString|?LocalizedStringBuilder
     */
    private $description;

    /**
     * @return null|LocalizedString
     */
    public function getDescription()
    {
        return $this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description;
    }

    /**
     * @return $this
     */
    public function withDescription(?LocalizedString $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDescriptionBuilder(?LocalizedStringBuilder $description)
    {
        $this->description = $description;

        return $this;
    }

    public function build(): CartDiscountSetDescriptionAction
    {
        return new CartDiscountSetDescriptionActionModel(
            ($this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description)
        );
    }

    public static function of(): CartDiscountSetDescriptionActionBuilder
    {
        return new self();
    }
}
