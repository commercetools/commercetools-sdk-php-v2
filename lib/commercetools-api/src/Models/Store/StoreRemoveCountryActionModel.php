<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Api\Models\StoreCountry\StoreCountry;
use Commercetools\Api\Models\StoreCountry\StoreCountryModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StoreRemoveCountryActionModel extends JsonObjectModel implements StoreRemoveCountryAction
{
    public const DISCRIMINATOR_VALUE = 'removeCountry';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?StoreCountry
     */
    protected $country;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?StoreCountry $country = null,
        ?string $action = null
    ) {
        $this->country = $country;
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
     * <p>Value to remove from <code>countries</code>.</p>
     *
     *
     * @return null|StoreCountry
     */
    public function getCountry()
    {
        if (is_null($this->country)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_COUNTRY);
            if (is_null($data)) {
                return null;
            }

            $this->country = StoreCountryModel::of($data);
        }

        return $this->country;
    }


    /**
     * @param ?StoreCountry $country
     */
    public function setCountry(?StoreCountry $country): void
    {
        $this->country = $country;
    }
}
