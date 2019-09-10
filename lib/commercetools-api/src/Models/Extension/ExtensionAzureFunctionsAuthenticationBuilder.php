<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ExtensionAzureFunctionsAuthentication>
 */
final class ExtensionAzureFunctionsAuthenticationBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $type;

    /**
     * @var ?string
     */
    private $key;

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
    public function getKey()
    {
        return $this->key;
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
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    public function build(): ExtensionAzureFunctionsAuthentication
    {
        return new ExtensionAzureFunctionsAuthenticationModel(
            $this->type,
            $this->key
        );
    }

    public static function of(): ExtensionAzureFunctionsAuthenticationBuilder
    {
        return new self();
    }
}
