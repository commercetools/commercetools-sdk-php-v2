<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CustomerCreatePasswordResetToken>
 */
final class CustomerCreatePasswordResetTokenBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $ttlMinutes;

    /**
     * @var ?string
     */
    private $email;

    public function __construct()
    {
    }

    /**
     * @return null|int
     */
    public function getTtlMinutes()
    {
        return $this->ttlMinutes;
    }

    /**
     * @return null|string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return $this
     */
    public function withTtlMinutes(?int $ttlMinutes)
    {
        $this->ttlMinutes = $ttlMinutes;

        return $this;
    }

    /**
     * @return $this
     */
    public function withEmail(?string $email)
    {
        $this->email = $email;

        return $this;
    }

    public function build(): CustomerCreatePasswordResetToken
    {
        return new CustomerCreatePasswordResetTokenModel(
            $this->ttlMinutes,
            $this->email
        );
    }

    public static function of(): CustomerCreatePasswordResetTokenBuilder
    {
        return new self();
    }
}
