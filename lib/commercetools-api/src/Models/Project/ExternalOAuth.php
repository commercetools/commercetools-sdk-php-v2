<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ExternalOAuth extends JsonObject
{
    public const FIELD_URL = 'url';
    public const FIELD_AUTHORIZATION_HEADER = 'authorizationHeader';

    /**
     * @return null|string
     */
    public function getUrl();

    /**
     * @return null|string
     */
    public function getAuthorizationHeader();

    /**
     * @param ?string $url
     */
    public function setUrl(?string $url): void;

    /**
     * @param ?string $authorizationHeader
     */
    public function setAuthorizationHeader(?string $authorizationHeader): void;
}
