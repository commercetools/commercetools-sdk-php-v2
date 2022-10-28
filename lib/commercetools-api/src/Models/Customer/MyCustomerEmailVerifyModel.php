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
final class MyCustomerEmailVerifyModel extends JsonObjectModel implements MyCustomerEmailVerify
{
    /**
     *
     * @var ?string
     */
    protected $tokenValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $tokenValue = null
    ) {
        $this->tokenValue = $tokenValue;
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
     * @param ?string $tokenValue
     */
    public function setTokenValue(?string $tokenValue): void
    {
        $this->tokenValue = $tokenValue;
    }
}
