<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

final class ProjectChangeCountriesActionModel extends JsonObjectModel implements ProjectChangeCountriesAction
{
    public const DISCRIMINATOR_VALUE = 'changeCountries';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?array
     */
    protected $countries;


    public function __construct(
        array $countries = null
    ) {
        $this->countries = $countries;
        $this->action = static::DISCRIMINATOR_VALUE;
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
     * <p>A two-digit country code as per country code.</p>
     *
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

    public function setCountries(?array $countries): void
    {
        $this->countries = $countries;
    }
}
