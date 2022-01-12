<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<Hit>
 */
final class HitBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $id;

    /**
     * @var ?int
     */
    private $version;

    /**
     * @var ?float
     */
    private $relevance;

    /**
     * <p>Unique ID of the Order.</p>
     *
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Current version of the Order.</p>
     *
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>The higher the value is, the more relevant the hit is for the search request.</p>
     *
     * @return null|float
     */
    public function getRelevance()
    {
        return $this->relevance;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?int $version
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @param ?float $relevance
     * @return $this
     */
    public function withRelevance(?float $relevance)
    {
        $this->relevance = $relevance;

        return $this;
    }


    public function build(): Hit
    {
        return new HitModel(
            $this->id,
            $this->version,
            $this->relevance
        );
    }

    public static function of(): HitBuilder
    {
        return new self();
    }
}
