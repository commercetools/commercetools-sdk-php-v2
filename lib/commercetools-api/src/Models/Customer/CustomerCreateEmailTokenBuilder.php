<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CustomerCreateEmailToken>
 */
final class CustomerCreateEmailTokenBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $ttlMinutes;

    /**
     * @var ?string
     */
    private $id;

    /**
     * @var ?int
     */
    private $version;

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
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
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
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    public function build(): CustomerCreateEmailToken
    {
        return new CustomerCreateEmailTokenModel(
            $this->ttlMinutes,
            $this->id,
            $this->version
        );
    }

    public static function of(): CustomerCreateEmailTokenBuilder
    {
        return new self();
    }
}
