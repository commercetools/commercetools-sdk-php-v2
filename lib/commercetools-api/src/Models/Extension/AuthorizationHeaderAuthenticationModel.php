<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class AuthorizationHeaderAuthenticationModel extends JsonObjectModel implements AuthorizationHeaderAuthentication
{
    public const DISCRIMINATOR_VALUE = 'AuthorizationHeader';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $headerValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $headerValue = null
    ) {
        $this->headerValue = $headerValue;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>Partially hidden on retrieval for security reasons.</p>
     *
     * @return null|string
     */
    public function getHeaderValue()
    {
        if (is_null($this->headerValue)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_HEADER_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->headerValue = (string) $data;
        }

        return $this->headerValue;
    }


    /**
     * @param ?string $headerValue
     */
    public function setHeaderValue(?string $headerValue): void
    {
        $this->headerValue = $headerValue;
    }
}
