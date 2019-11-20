<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\Builder;

/**
 * @implements Builder<StagedOrderSetLocaleAction>
 */
final class StagedOrderSetLocaleActionBuilder implements Builder
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

    public function build(): StagedOrderSetLocaleAction
    {
        return new StagedOrderSetLocaleActionModel(
            $this->locale
        );
    }

    public static function of(): StagedOrderSetLocaleActionBuilder
    {
        return new self();
    }
}
