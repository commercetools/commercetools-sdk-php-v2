<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\JsonObjectModel;

final class ExternalOAuthModel extends JsonObjectModel implements ExternalOAuth
{
    /**
     * @var ?string
     */
    protected $authorizationHeader;

    /**
     * @var ?string
     */
    protected $url;

    public function __construct(
        string $authorizationHeader = null,
        string $url = null
    ) {
        $this->authorizationHeader = $authorizationHeader;
        $this->url = $url;
    }

    /**
     * @return null|string
     */
    public function getAuthorizationHeader()
    {
        if (is_null($this->authorizationHeader)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ExternalOAuth::FIELD_AUTHORIZATION_HEADER);
            if (is_null($data)) {
                return null;
            }
            $this->authorizationHeader = (string) $data;
        }

        return $this->authorizationHeader;
    }

    /**
     * @return null|string
     */
    public function getUrl()
    {
        if (is_null($this->url)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ExternalOAuth::FIELD_URL);
            if (is_null($data)) {
                return null;
            }
            $this->url = (string) $data;
        }

        return $this->url;
    }

    public function setAuthorizationHeader(?string $authorizationHeader): void
    {
        $this->authorizationHeader = $authorizationHeader;
    }

    public function setUrl(?string $url): void
    {
        $this->url = $url;
    }
}
