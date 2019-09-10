<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\JsonObjectModel;

final class CustomerCreatePasswordResetTokenModel extends JsonObjectModel implements CustomerCreatePasswordResetToken
{
    /**
     * @var ?int
     */
    protected $ttlMinutes;

    /**
     * @var ?string
     */
    protected $email;

    public function __construct(
        int $ttlMinutes = null,
        string $email = null
    ) {
        $this->ttlMinutes = $ttlMinutes;
        $this->email = $email;
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

    public function setTtlMinutes(?int $ttlMinutes): void
    {
        $this->ttlMinutes = $ttlMinutes;
    }

    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }
}
