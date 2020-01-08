<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\JsonObjectModel;

final class CustomerEmailVerifyModel extends JsonObjectModel implements CustomerEmailVerify
{
    /**
     * @var ?int
     */
    protected $version;

    /**
     * @var ?string
     */
    protected $tokenValue;

    public function __construct(
        int $version = null,
        string $tokenValue = null
    ) {
        $this->version = $version;
        $this->tokenValue = $tokenValue;
    }

    /**
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(CustomerEmailVerify::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * @return null|string
     */
    public function getTokenValue()
    {
        if (is_null($this->tokenValue)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CustomerEmailVerify::FIELD_TOKEN_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->tokenValue = (string) $data;
        }

        return $this->tokenValue;
    }

    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    public function setTokenValue(?string $tokenValue): void
    {
        $this->tokenValue = $tokenValue;
    }
}
