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

     * @var ?bool
     */
    private $invalidateOlderTokens;

    /**
     * <p>Email address of the Customer treated as <a href="/../api/customers-overview#email-case-insensitivity">case-insensitive</a>.</p>
     *

     * @return null|string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * <p>Validity period of the generated token in minutes.</p>
     *

     * @return null|int
     */
    public function getTtlMinutes()
    {
        return $this->ttlMinutes;
    }

    /**
     * <p>If set to <code>true</code>, all password tokens issued previously for the Customer will be invalidated.</p>
     *

     * @return null|bool
     */
    public function getInvalidateOlderTokens()
    {
        return $this->invalidateOlderTokens;
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

    /**
     * @param ?bool $invalidateOlderTokens
     * @return $this
     */
    public function withInvalidateOlderTokens(?bool $invalidateOlderTokens)
    {
        $this->invalidateOlderTokens = $invalidateOlderTokens;

        return $this;
    }


    public function build(): CustomerCreatePasswordResetToken
    {
        return new CustomerCreatePasswordResetTokenModel(
            $this->email,
            $this->ttlMinutes,
            $this->invalidateOlderTokens
        );
    }

    public static function of(): CustomerCreatePasswordResetTokenBuilder
    {
        return new self();
    }
}
