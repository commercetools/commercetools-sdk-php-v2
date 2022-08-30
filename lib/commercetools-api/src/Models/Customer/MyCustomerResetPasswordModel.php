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
final class MyCustomerResetPasswordModel extends JsonObjectModel implements MyCustomerResetPassword
{
    /**
     *
     * @var ?string
     */
    protected $tokenValue;

    /**
     *
     * @var ?string
     */
    protected $newPassword;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $tokenValue = null,
        ?string $newPassword = null
    ) {
        $this->tokenValue = $tokenValue;
        $this->newPassword = $newPassword;
    }

    /**
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
     *
     * @return null|string
     */
    public function getNewPassword()
    {
        if (is_null($this->newPassword)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_NEW_PASSWORD);
            if (is_null($data)) {
                return null;
            }
            $this->newPassword = (string) $data;
        }

        return $this->newPassword;
    }


    /**
     * @param ?string $tokenValue
     */
    public function setTokenValue(?string $tokenValue): void
    {
        $this->tokenValue = $tokenValue;
    }

    /**
     * @param ?string $newPassword
     */
    public function setNewPassword(?string $newPassword): void
    {
        $this->newPassword = $newPassword;
    }
}
