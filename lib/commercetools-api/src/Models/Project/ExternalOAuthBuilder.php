<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

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
     * <p>URL with authorization header. If the Project is hosted in the China (AWS, Ningxia) Region, verify that the URL is not blocked due to firewall restrictions.</p>
     *

     * @return null|string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * <p>Must not contain any leading or trailing whitespaces. Partially hidden on retrieval.</p>
     *

     * @return null|string
     */
    public function getAuthorizationHeader()
    {
        return $this->authorizationHeader;
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
     * @param ?string $authorizationHeader
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
