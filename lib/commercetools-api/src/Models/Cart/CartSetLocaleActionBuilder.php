<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartSetLocaleAction>
 */
final class CartSetLocaleActionBuilder implements Builder
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
     * @param ?string $locale
     * @return $this
     */
    public function withLocale(?string $locale)
    {
        $this->locale = $locale;

        return $this;
    }


    public function build(): CartSetLocaleAction
    {
        return new CartSetLocaleActionModel(
            $this->locale
        );
    }

    public static function of(): CartSetLocaleActionBuilder
    {
        return new self();
    }
}
