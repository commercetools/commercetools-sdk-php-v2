<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class HitModel extends JsonObjectModel implements Hit
{
    /**
     * @var ?string
     */
    protected $id;

    /**
     * @var ?int
     */
    protected $version;

    /**
     * @var ?float
     */
    protected $relevance;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?int $version = null,
        ?float $relevance = null
    ) {
        $this->id = $id;
        $this->version = $version;
        $this->relevance = $relevance;
    }

    /**
     * <p>Unique ID of the Order.</p>
     *
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * <p>Current version of the Order.</p>
     *
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * <p>The higher the value is, the more relevant the hit is for the search request.</p>
     *
     * @return null|float
     */
    public function getRelevance()
    {
        if (is_null($this->relevance)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_RELEVANCE);
            if (is_null($data)) {
                return null;
            }
            $this->relevance = (float) $data;
        }

        return $this->relevance;
    }


    /**
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    /**
     * @param ?float $relevance
     */
    public function setRelevance(?float $relevance): void
    {
        $this->relevance = $relevance;
    }
}
