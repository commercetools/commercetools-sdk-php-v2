<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ExtensionAuthorizationHeaderAuthentication>
 */
final class ExtensionAuthorizationHeaderAuthenticationBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $type;

    /**
     * @var ?string
     */
    private $headerValue;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return null|string
     */
    public function getHeaderValue()
    {
        return $this->headerValue;
    }

    /**
     * @return $this
     */
    public function withType(?string $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return $this
     */
    public function withHeaderValue(?string $headerValue)
    {
        $this->headerValue = $headerValue;

        return $this;
    }

    public function build(): ExtensionAuthorizationHeaderAuthentication
    {
        return new ExtensionAuthorizationHeaderAuthenticationModel(
            $this->type,
            $this->headerValue
        );
    }

    public static function of(): ExtensionAuthorizationHeaderAuthenticationBuilder
    {
        return new self();
    }
}
