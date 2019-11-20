<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProjectChangeCountriesAction>
 */
final class ProjectChangeCountriesActionBuilder implements Builder
{
    /**
     * @var ?array
     */
    private $countries;

    /**
     * @return null|array
     */
    public function getCountries()
    {
        return $this->countries;
    }

    /**
     * @return $this
     */
    public function withCountries(?array $countries)
    {
        $this->countries = $countries;

        return $this;
    }

    public function build(): ProjectChangeCountriesAction
    {
        return new ProjectChangeCountriesActionModel(
            $this->countries
        );
    }

    public static function of(): ProjectChangeCountriesActionBuilder
    {
        return new self();
    }
}
