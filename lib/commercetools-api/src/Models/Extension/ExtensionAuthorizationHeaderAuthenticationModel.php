<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\JsonObjectModel;

final class ExtensionAuthorizationHeaderAuthenticationModel extends JsonObjectModel implements ExtensionAuthorizationHeaderAuthentication
{
    const DISCRIMINATOR_VALUE = 'AuthorizationHeader';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $headerValue;

    public function __construct(
        string $headerValue = null
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
            $data = $this->raw(ExtensionHttpDestinationAuthentication::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|string
     */
    public function getHeaderValue()
    {
        if (is_null($this->headerValue)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ExtensionAuthorizationHeaderAuthentication::FIELD_HEADER_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->headerValue = (string) $data;
        }

        return $this->headerValue;
    }

    public function setHeaderValue(?string $headerValue): void
    {
        $this->headerValue = $headerValue;
    }
}
