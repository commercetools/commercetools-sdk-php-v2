<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProjectChangeCurrenciesAction>
 */
final class ProjectChangeCurrenciesActionBuilder implements Builder
{
    /**
     * @var ?array
     */
    private $currencies;

    /**
     * @return null|array
     */
    public function getCurrencies()
    {
        return $this->currencies;
    }

    /**
     * @return $this
     */
    public function withCurrencies(?array $currencies)
    {
        $this->currencies = $currencies;

        return $this;
    }

    public function build(): ProjectChangeCurrenciesAction
    {
        return new ProjectChangeCurrenciesActionModel(
            $this->currencies
        );
    }

    public static function of(): ProjectChangeCurrenciesActionBuilder
    {
        return new self();
    }
}
