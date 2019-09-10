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
     * @var ?string
     */
    private $action;

    /**
     * @var ?array
     */
    private $countries;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        return $this->action;
    }

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
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
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
            $this->action,
            $this->countries
        );
    }

    public static function of(): ProjectChangeCountriesActionBuilder
    {
        return new self();
    }
}
