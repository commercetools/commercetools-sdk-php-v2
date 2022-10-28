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
final class CustomerCreatePasswordResetTokenModel extends JsonObjectModel implements CustomerCreatePasswordResetToken
{
    /**
     *
     * @var ?string
     */
    protected $email;

    /**
     *
     * @var ?int
     */
    protected $ttlMinutes;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $email = null,
        ?int $ttlMinutes = null
    ) {
        $this->email = $email;
        $this->ttlMinutes = $ttlMinutes;
    }

    /**
     * <p>Email address of the Customer treated as <a href="/../api/customers-overview#email-case-insensitivity">case-insensitive</a>.</p>
     *
     *
     * @return null|string
     */
    public function getEmail()
    {
        if (is_null($this->email)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_EMAIL);
            if (is_null($data)) {
                return null;
            }
            $this->email = (string) $data;
        }

        return $this->email;
    }

    /**
     * <p>Validity period of the generated token in minutes.</p>
     *
     *
     * @return null|int
     */
    public function getTtlMinutes()
    {
        if (is_null($this->ttlMinutes)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_TTL_MINUTES);
            if (is_null($data)) {
                return null;
            }
            $this->ttlMinutes = (int) $data;
        }

        return $this->ttlMinutes;
    }


    /**
     * @param ?string $email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * @param ?int $ttlMinutes
     */
    public function setTtlMinutes(?int $ttlMinutes): void
    {
        $this->ttlMinutes = $ttlMinutes;
    }
}
