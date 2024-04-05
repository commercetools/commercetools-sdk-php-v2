<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface Attribution extends JsonObject
{
    public const FIELD_CLIENT_ID = 'clientId';
    public const FIELD_SOURCE = 'source';

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:ApiClient">API Client</a> that created or modified the resource.</p>
     *

     * @return null|string
     */
    public function getClientId();

    /**
     * <p>Method used to initiate the creation or modification of the resource.</p>
     *

     * @return null|string
     */
    public function getSource();

    /**
     * @param ?string $clientId
     */
    public function setClientId(?string $clientId): void;

    /**
     * @param ?string $source
     */
    public function setSource(?string $source): void;
}
