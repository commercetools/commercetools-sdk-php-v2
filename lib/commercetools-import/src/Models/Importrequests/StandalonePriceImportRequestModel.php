<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\StandalonePrices\StandalonePriceImportCollection;
use stdClass;

/**
 * @internal
 */
final class StandalonePriceImportRequestModel extends JsonObjectModel implements StandalonePriceImportRequest
{
    public const DISCRIMINATOR_VALUE = 'standalone-price';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?StandalonePriceImportCollection
     */
    protected $resources;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?StandalonePriceImportCollection $resources = null,
        ?string $type = null
    ) {
        $this->resources = $resources;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     * <p>The resource type that can be imported.</p>
     *
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>The Standalone Price import resources of this request.</p>
     *
     *
     * @return null|StandalonePriceImportCollection
     */
    public function getResources()
    {
        if (is_null($this->resources)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_RESOURCES);
            if (is_null($data)) {
                return null;
            }
            $this->resources = StandalonePriceImportCollection::fromArray($data);
        }

        return $this->resources;
    }


    /**
     * @param ?StandalonePriceImportCollection $resources
     */
    public function setResources(?StandalonePriceImportCollection $resources): void
    {
        $this->resources = $resources;
    }
}
