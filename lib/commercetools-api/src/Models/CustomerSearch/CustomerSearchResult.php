<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomerSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerSearchResult extends JsonObject
{
    public const FIELD_ID = 'id';
    public const FIELD_RELEVANCE = 'relevance';

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:Customer">Customer</a> matching the search query.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>How closely this customer matches the search query.</p>
     *

     * @return null|float
     */
    public function getRelevance();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?float $relevance
     */
    public function setRelevance(?float $relevance): void;
}
