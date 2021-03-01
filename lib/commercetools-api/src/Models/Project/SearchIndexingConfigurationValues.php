<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface SearchIndexingConfigurationValues extends JsonObject
{
    public const FIELD_STATUS = 'status';

    /**
     * <p>Can be one of the following or absent. &quot;Activated&quot; or absent means that the search and suggest endpoints for the specified resource type are active. &quot;Deactivated&quot; means that the search and suggest endpoints for the specified resource type cannot be used. &quot;Indexing&quot; indicates that the search and suggest endpoints can <em>temporally</em> not be used because the search index is being re-built.</p>
     *
     * @return null|string
     */
    public function getStatus();

    /**
     * @param ?string $status
     */
    public function setStatus(?string $status): void;
}
