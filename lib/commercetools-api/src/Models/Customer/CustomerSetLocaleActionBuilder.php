<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CustomerSetLocaleAction>
 */
final class CustomerSetLocaleActionBuilder implements Builder
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

    public function build(): CustomerSetLocaleAction
    {
        return new CustomerSetLocaleActionModel(
            $this->locale
        );
    }

    public static function of(): CustomerSetLocaleActionBuilder
    {
        return new self();
    }
}
