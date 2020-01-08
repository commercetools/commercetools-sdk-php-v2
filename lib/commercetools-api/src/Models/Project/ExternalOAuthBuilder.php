<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ExternalOAuth>
 */
final class ExternalOAuthBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $url;

    /**
     * @var ?string
     */
    private $authorizationHeader;

    /**
     * @return null|string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return null|string
     */
    public function getAuthorizationHeader()
    {
        return $this->authorizationHeader;
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
    public function withAuthorizationHeader(?string $authorizationHeader)
    {
        $this->authorizationHeader = $authorizationHeader;

        return $this;
    }

    public function build(): ExternalOAuth
    {
        return new ExternalOAuthModel(
            $this->url,
            $this->authorizationHeader
        );
    }

    public static function of(): ExternalOAuthBuilder
    {
        return new self();
    }
}
