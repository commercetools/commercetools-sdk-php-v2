<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\JsonObjectModel;

final class ProjectChangeCountriesActionModel extends JsonObjectModel implements ProjectChangeCountriesAction
{
    const DISCRIMINATOR_VALUE = 'changeCountries';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?array
     */
    protected $countries;

    public function __construct(
        string $action = null,
        array $countries = null
    ) {
        $this->action = $action;
        $this->countries = $countries;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProjectUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|array
     */
    public function getCountries()
    {
        if (is_null($this->countries)) {
            /** @psalm-var ?array<int, mixed> $data */
            $data = $this->raw(ProjectChangeCountriesAction::FIELD_COUNTRIES);
            if (is_null($data)) {
                return null;
            }
            $this->countries = $data;
        }

        return $this->countries;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setCountries(?array $countries): void
    {
        $this->countries = $countries;
    }
}
