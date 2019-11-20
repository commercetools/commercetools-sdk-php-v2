<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ExtensionHttpDestination>
 */
final class ExtensionHttpDestinationBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $url;

    /**
     * @var ExtensionHttpDestinationAuthentication|?ExtensionHttpDestinationAuthenticationBuilder
     */
    private $authentication;

    /**
     * @return null|string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return null|ExtensionHttpDestinationAuthentication
     */
    public function getAuthentication()
    {
        return $this->authentication instanceof ExtensionHttpDestinationAuthenticationBuilder ? $this->authentication->build() : $this->authentication;
    }

    /**
     * @return $this
     */
    public function withUrl(?string $url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAuthentication(?ExtensionHttpDestinationAuthentication $authentication)
    {
        $this->authentication = $authentication;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAuthenticationBuilder(?ExtensionHttpDestinationAuthenticationBuilder $authentication)
    {
        $this->authentication = $authentication;

        return $this;
    }

    public function build(): ExtensionHttpDestination
    {
        return new ExtensionHttpDestinationModel(
            $this->url,
            ($this->authentication instanceof ExtensionHttpDestinationAuthenticationBuilder ? $this->authentication->build() : $this->authentication)
        );
    }

    public static function of(): ExtensionHttpDestinationBuilder
    {
        return new self();
    }
}
