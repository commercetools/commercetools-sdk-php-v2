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
 * @implements Builder<CustomerCreateEmailToken>
 */
final class CustomerCreateEmailTokenBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**

     * @var ?int
     */
    private $version;

    /**

     * @var ?int
     */
    private $ttlMinutes;

    /**

     * @var ?bool
     */
    private $invalidateOlderTokens;

    /**
     * <p>Unique identifier of the Customer.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Expected version of the Customer.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
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
     * <p>If set to <code>true</code>, all email tokens issued previously for the Customer will be invalidated.</p>
     *

     * @return null|bool
     */
    public function getInvalidateOlderTokens()
    {
        return $this->invalidateOlderTokens;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?int $version
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

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


    public function build(): CustomerCreateEmailToken
    {
        return new CustomerCreateEmailTokenModel(
            $this->id,
            $this->version,
            $this->ttlMinutes,
            $this->invalidateOlderTokens
        );
    }

    public static function of(): CustomerCreateEmailTokenBuilder
    {
        return new self();
    }
}
