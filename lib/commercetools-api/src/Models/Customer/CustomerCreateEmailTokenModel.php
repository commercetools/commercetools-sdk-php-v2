<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\JsonObjectModel;

final class CustomerCreateEmailTokenModel extends JsonObjectModel implements CustomerCreateEmailToken
{
    /**
     * @var ?int
     */
    protected $ttlMinutes;

    /**
     * @var ?string
     */
    protected $id;

    /**
     * @var ?int
     */
    protected $version;

    public function __construct(
        int $ttlMinutes = null,
        string $id = null,
        int $version = null
    ) {
        $this->ttlMinutes = $ttlMinutes;
        $this->id = $id;
        $this->version = $version;
    }

    /**
     * @return null|int
     */
    public function getTtlMinutes()
    {
        if (is_null($this->ttlMinutes)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(CustomerCreateEmailToken::FIELD_TTL_MINUTES);
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
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CustomerCreateEmailToken::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(CustomerCreateEmailToken::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    public function setTtlMinutes(?int $ttlMinutes): void
    {
        $this->ttlMinutes = $ttlMinutes;
    }

    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }
}
