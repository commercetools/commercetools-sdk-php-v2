<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomerCreatePasswordResetToken>
 */
final class CustomerCreatePasswordResetTokenBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $email;

    /**
     * @var ?int
     */
    private $ttlMinutes;

    /**
     * @return null|string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return null|int
     */
    public function getTtlMinutes()
    {
        return $this->ttlMinutes;
    }

    /**
     * @param ?string $email
     * @return $this
     */
    public function withEmail(?string $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @param ?int $ttlMinutes
     * @return $this
     */
    public function withTtlMinutes(?int $ttlMinutes)
    {
        $this->ttlMinutes = $ttlMinutes;

        return $this;
    }


    public function build(): CustomerCreatePasswordResetToken
    {
        return new CustomerCreatePasswordResetTokenModel(
            $this->email,
            $this->ttlMinutes
        );
    }

    public static function of(): CustomerCreatePasswordResetTokenBuilder
    {
        return new self();
    }
}
