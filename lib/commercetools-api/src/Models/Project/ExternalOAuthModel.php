<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ExternalOAuthModel extends JsonObjectModel implements ExternalOAuth
{
    /**
     *
     * @var ?string
     */
    protected $url;

    /**
     *
     * @var ?string
     */
    protected $authorizationHeader;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $url = null,
        ?string $authorizationHeader = null
    ) {
        $this->url = $url;
        $this->authorizationHeader = $authorizationHeader;
    }

    /**
     * <p>URL with authorization header.</p>
     *
     *
     * @return null|string
     */
    public function getUrl()
    {
        if (is_null($this->url)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_URL);
            if (is_null($data)) {
                return null;
            }
            $this->url = (string) $data;
        }

        return $this->url;
    }

    /**
     * <p>Must not contain any leading or trailing whitespaces. Partially hidden on retrieval.</p>
     *
     *
     * @return null|string
     */
    public function getAuthorizationHeader()
    {
        if (is_null($this->authorizationHeader)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_AUTHORIZATION_HEADER);
            if (is_null($data)) {
                return null;
            }
            $this->authorizationHeader = (string) $data;
        }

        return $this->authorizationHeader;
    }


    /**
     * @param ?string $url
     */
    public function setUrl(?string $url): void
    {
        $this->url = $url;
    }

    /**
     * @param ?string $authorizationHeader
     */
    public function setAuthorizationHeader(?string $authorizationHeader): void
    {
        $this->authorizationHeader = $authorizationHeader;
    }
}
