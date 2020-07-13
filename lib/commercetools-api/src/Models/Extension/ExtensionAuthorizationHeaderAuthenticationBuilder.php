<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ExtensionAuthorizationHeaderAuthentication>
 */
final class ExtensionAuthorizationHeaderAuthenticationBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $headerValue;

    /**
     * @return null|string
     */
    public function getHeaderValue()
    {
        return $this->headerValue;
    }

    /**
     * @param ?string $headerValue
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
            $this->headerValue
        );
    }

    public static function of(): ExtensionAuthorizationHeaderAuthenticationBuilder
    {
        return new self();
    }
}
