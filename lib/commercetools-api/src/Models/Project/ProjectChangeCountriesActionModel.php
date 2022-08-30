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

/**
 * @internal
 */
final class ProjectChangeCountriesActionModel extends JsonObjectModel implements ProjectChangeCountriesAction
{
    public const DISCRIMINATOR_VALUE = 'changeCountries';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?array
     */
    protected $countries;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?array $countries = null,
        ?string $action = null
    ) {
        $this->countries = $countries;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>New value to set. Must not be empty.</p>
     *
     *
     * @return null|array
     */
    public function getCountries()
    {
        if (is_null($this->countries)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_COUNTRIES);
            if (is_null($data)) {
                return null;
            }
            $this->countries = $data;
        }

        return $this->countries;
    }


    /**
     * @param ?array $countries
     */
    public function setCountries(?array $countries): void
    {
        $this->countries = $countries;
    }
}
