<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface Hit extends JsonObject
{
    public const FIELD_ID = 'id';
    public const FIELD_VERSION = 'version';
    public const FIELD_RELEVANCE = 'relevance';

    /**
     * <p>Unique ID of the Order.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * <p>Current version of the Order.</p>
     *
     * @return null|int
     */
    public function getVersion();

    /**
     * <p>The higher the value is, the more relevant the hit is for the search request.</p>
     *
     * @return null|float
     */
    public function getRelevance();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?float $relevance
     */
    public function setRelevance(?float $relevance): void;
}
