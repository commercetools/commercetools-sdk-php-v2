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
final class CustomerResetPasswordModel extends JsonObjectModel implements CustomerResetPassword
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
     *
     * @var ?int
     */
    protected $version;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $tokenValue = null,
        ?string $newPassword = null,
        ?int $version = null
    ) {
        $this->tokenValue = $tokenValue;
        $this->newPassword = $newPassword;
        $this->version = $version;
    }

    /**
     * <p>Value of the token to reset the Customer password.</p>
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
     * <p>New password to be set.</p>
     *
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

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }
}
