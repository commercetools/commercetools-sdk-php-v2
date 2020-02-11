<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

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

    public function setUrl(?string $url): void;

    public function setAuthorizationHeader(?string $authorizationHeader): void;
}
