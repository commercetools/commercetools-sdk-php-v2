<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface HttpDestination extends ExtensionDestination
{
    public const FIELD_URL = 'url';
    public const FIELD_AUTHENTICATION = 'authentication';

    /**
     * <p>URL to the target destination.</p>
     *

     * @return null|string
     */
    public function getUrl();

    /**
     * <p>Authentication methods (such as <code>Basic</code> or <code>Bearer</code>).</p>
     *

     * @return null|HttpDestinationAuthentication
     */
    public function getAuthentication();

    /**
     * @param ?string $url
     */
    public function setUrl(?string $url): void;

    /**
     * @param ?HttpDestinationAuthentication $authentication
     */
    public function setAuthentication(?HttpDestinationAuthentication $authentication): void;
}
