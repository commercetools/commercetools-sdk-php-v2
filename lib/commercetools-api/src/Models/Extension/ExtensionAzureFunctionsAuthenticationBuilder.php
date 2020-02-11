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
 * @implements Builder<ExtensionAzureFunctionsAuthentication>
 */
final class ExtensionAzureFunctionsAuthenticationBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $key;

    /**
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }


    public function build(): ExtensionAzureFunctionsAuthentication
    {
        return new ExtensionAzureFunctionsAuthenticationModel(
            $this->key
        );
    }

    public static function of(): ExtensionAzureFunctionsAuthenticationBuilder
    {
        return new self();
    }
}
