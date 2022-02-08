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
 * @implements Builder<HttpDestination>
 */
final class HttpDestinationBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $url;

    /**
     * @var null|HttpDestinationAuthentication|HttpDestinationAuthenticationBuilder
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
     * @return null|HttpDestinationAuthentication
     */
    public function getAuthentication()
    {
        return $this->authentication instanceof HttpDestinationAuthenticationBuilder ? $this->authentication->build() : $this->authentication;
    }

    /**
     * @param ?string $url
     * @return $this
     */
    public function withUrl(?string $url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @param ?HttpDestinationAuthentication $authentication
     * @return $this
     */
    public function withAuthentication(?HttpDestinationAuthentication $authentication)
    {
        $this->authentication = $authentication;

        return $this;
    }

    /**
     * @deprecated use withAuthentication() instead
     * @return $this
     */
    public function withAuthenticationBuilder(?HttpDestinationAuthenticationBuilder $authentication)
    {
        $this->authentication = $authentication;

        return $this;
    }

    public function build(): HttpDestination
    {
        return new HttpDestinationModel(
            $this->url,
            $this->authentication instanceof HttpDestinationAuthenticationBuilder ? $this->authentication->build() : $this->authentication
        );
    }

    public static function of(): HttpDestinationBuilder
    {
        return new self();
    }
}
