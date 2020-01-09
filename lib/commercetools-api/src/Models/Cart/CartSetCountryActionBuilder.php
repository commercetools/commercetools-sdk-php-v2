<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CartSetCountryAction>
 */
final class CartSetCountryActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $country;

    /**
     * <p>A two-digit country code as per <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>.</p>
     *
     * @return null|string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @return $this
     */
    public function withCountry(?string $country)
    {
        $this->country = $country;

        return $this;
    }

    public function build(): CartSetCountryAction
    {
        return new CartSetCountryActionModel(
            $this->country
        );
    }

    public static function of(): CartSetCountryActionBuilder
    {
        return new self();
    }
}
