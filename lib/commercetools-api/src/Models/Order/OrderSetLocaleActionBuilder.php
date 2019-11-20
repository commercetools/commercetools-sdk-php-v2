<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;

/**
 * @implements Builder<OrderSetLocaleAction>
 */
final class OrderSetLocaleActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $locale;

    /**
     * @return null|string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @return $this
     */
    public function withLocale(?string $locale)
    {
        $this->locale = $locale;

        return $this;
    }

    public function build(): OrderSetLocaleAction
    {
        return new OrderSetLocaleActionModel(
            $this->locale
        );
    }

    public static function of(): OrderSetLocaleActionBuilder
    {
        return new self();
    }
}
