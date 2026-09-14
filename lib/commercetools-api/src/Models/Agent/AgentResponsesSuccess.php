<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Agent;

use Commercetools\Api\Models\Warning\WarningObjectCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AgentResponsesSuccess extends JsonObject
{
    public const DISCRIMINATOR_FIELD = 'entityType';
    public const FIELD_ENTITY_TYPE = 'entityType';
    public const FIELD_WARNINGS = 'warnings';
    public const FIELD_THREAD_ID = 'threadId';

    /**
     * <p>The entity that was created. Determines the concrete response type.</p>
     *

     * @return null|string
     */
    public function getEntityType();

    /**
     * <p>Non-fatal issues encountered while processing the request. Present only when at least one warning is returned.</p>
     *

     * @return null|WarningObjectCollection
     */
    public function getWarnings();

    /**
     * <p>Identifier of the workflow run that produced this response.</p>
     *

     * @return null|string
     */
    public function getThreadId();

    /**
     * @param ?WarningObjectCollection $warnings
     */
    public function setWarnings(?WarningObjectCollection $warnings): void;

    /**
     * @param ?string $threadId
     */
    public function setThreadId(?string $threadId): void;
}
