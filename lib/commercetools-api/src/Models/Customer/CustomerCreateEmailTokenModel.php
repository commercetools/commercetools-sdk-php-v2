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
final class CustomerCreateEmailTokenModel extends JsonObjectModel implements CustomerCreateEmailToken
{
    /**
     *
     * @var ?string
     */
    protected $id;

    /**
     *
     * @var ?int
     */
    protected $version;

    /**
     *
     * @var ?int
     */
    protected $ttlMinutes;

    /**
     *
     * @var ?bool
     */
    protected $invalidateOlderTokens;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?int $version = null,
        ?int $ttlMinutes = null,
        ?bool $invalidateOlderTokens = null
    ) {
        $this->id = $id;
        $this->version = $version;
        $this->ttlMinutes = $ttlMinutes;
        $this->invalidateOlderTokens = $invalidateOlderTokens;
    }

    /**
     * <p>Unique identifier of the Customer.</p>
     *
     *
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
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
     * <p>If set to <code>true</code>, all email tokens issued previously for the Customer will be invalidated.</p>
     *
     *
     * @return null|bool
     */
    public function getInvalidateOlderTokens()
    {
        if (is_null($this->invalidateOlderTokens)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_INVALIDATE_OLDER_TOKENS);
            if (is_null($data)) {
                return null;
            }
            $this->invalidateOlderTokens = (bool) $data;
        }

        return $this->invalidateOlderTokens;
    }


    /**
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    /**
     * @param ?int $ttlMinutes
     */
    public function setTtlMinutes(?int $ttlMinutes): void
    {
        $this->ttlMinutes = $ttlMinutes;
    }

    /**
     * @param ?bool $invalidateOlderTokens
     */
    public function setInvalidateOlderTokens(?bool $invalidateOlderTokens): void
    {
        $this->invalidateOlderTokens = $invalidateOlderTokens;
    }
}
