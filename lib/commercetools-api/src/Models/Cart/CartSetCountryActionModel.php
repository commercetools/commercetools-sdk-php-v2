<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CartSetCountryActionModel extends JsonObjectModel implements CartSetCountryAction
{
    public const DISCRIMINATOR_VALUE = 'setCountry';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $country;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $country = null,
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
     * <p>Value to set.
     * If empty, any existing value is removed.</p>
     * <p>If the Cart is bound to a <code>store</code>, the provided value must be included in the <a href="ctp:api:type:Store">Store's</a> <code>countries</code>.
     * Otherwise a <a href="ctp:api:type:CountryNotConfiguredInStoreError">CountryNotConfiguredInStore</a> error is returned.</p>
     *
     *
     * @return null|string
     */
    public function getCountry()
    {
        if (is_null($this->country)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_COUNTRY);
            if (is_null($data)) {
                return null;
            }
            $this->country = (string) $data;
        }

        return $this->country;
    }


    /**
     * @param ?string $country
     */
    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }
}
