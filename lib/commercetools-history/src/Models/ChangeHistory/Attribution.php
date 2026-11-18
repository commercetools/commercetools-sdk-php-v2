<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeHistory;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface Attribution extends JsonObject
{

    public const FIELD_CLIENT_ID = 'clientId';
    public const FIELD_SOURCE = 'source';

    /**
     * <p><a href="/general-concepts#identifier">ID</a> of the <a href="ctp:api:type:ApiClient">API Client</a> that made the change.</p>
     *

     * @return null|string
     */
    public function getClientId();

    /**
     * <p>Method used to initiate the change.</p>
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
