<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface GoogleCloudFunctionDestination extends ExtensionDestination
{
    public const FIELD_URL = 'url';

    /**
     * <p>URL to the target function.</p>
     *

     * @return null|string
     */
    public function getUrl();

    /**
     * @param ?string $url
     */
    public function setUrl(?string $url): void;
}
