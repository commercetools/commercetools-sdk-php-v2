<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CustomerEmailVerifyModel extends JsonObjectModel implements CustomerEmailVerify
{
    /**
     *
     * @var ?int
     */
    protected $version;

    /**
     *
     * @var ?string
     */
    protected $tokenValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $version = null,
        ?string $tokenValue = null
    ) {
        $this->version = $version;
        $this->tokenValue = $tokenValue;
    }

    /**
     * <p>Expected version of the Customer.</p>
     *
     *
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * <p>Value of the token to verify Customer email.</p>
     *
     *
     * @return null|string
     */
    public function getTokenValue()
    {
        if (is_null($this->tokenValue)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TOKEN_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->tokenValue = (string) $data;
        }

        return $this->tokenValue;
    }


    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    /**
     * @param ?string $tokenValue
     */
    public function setTokenValue(?string $tokenValue): void
    {
        $this->tokenValue = $tokenValue;
    }
}
