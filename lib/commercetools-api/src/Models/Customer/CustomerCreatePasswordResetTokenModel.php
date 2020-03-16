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
     * @var ?string
     */
    protected $email;

    /**
     * @var ?int
     */
    protected $ttlMinutes;


    public function __construct(
        string $email = null,
        int $ttlMinutes = null
    ) {
        $this->email = $email;
        $this->ttlMinutes = $ttlMinutes;
    }

    /**
     * @return null|string
     */
    public function getEmail()
    {
        if (is_null($this->email)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CustomerCreatePasswordResetToken::FIELD_EMAIL);
            if (is_null($data)) {
                return null;
            }
            $this->email = (string) $data;
        }

        return $this->email;
    }

    /**
     * @return null|int
     */
    public function getTtlMinutes()
    {
        if (is_null($this->ttlMinutes)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(CustomerCreatePasswordResetToken::FIELD_TTL_MINUTES);
            if (is_null($data)) {
                return null;
            }
            $this->ttlMinutes = (int) $data;
        }

        return $this->ttlMinutes;
    }

    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    public function setTtlMinutes(?int $ttlMinutes): void
    {
        $this->ttlMinutes = $ttlMinutes;
    }
}
