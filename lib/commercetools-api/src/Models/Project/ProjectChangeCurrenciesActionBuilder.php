<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

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
     * <p>A three-digit currency code as per currency code.</p>
     *
     * @return null|array
     */
    public function getCurrencies()
    {
        return $this->currencies;
    }

    /**
     * @param ?array $currencies
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
