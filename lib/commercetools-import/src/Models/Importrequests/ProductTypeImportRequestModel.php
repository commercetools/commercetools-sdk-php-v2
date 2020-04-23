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
use Commercetools\Import\Models\Producttypes\ProductTypeImportCollection;
use stdClass;

/**
 * @internal
 */
final class ProductTypeImportRequestModel extends JsonObjectModel implements ProductTypeImportRequest
{
    public const DISCRIMINATOR_VALUE = 'product-type';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?ProductTypeImportCollection
     */
    protected $resources;


    public function __construct(
        ProductTypeImportCollection $resources = null
    ) {
        $this->resources = $resources;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * <p>The type of the import resource.</p>
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
     * <p>The product type import resources of this request.</p>
     *
     * @return null|ProductTypeImportCollection
     */
    public function getResources()
    {
        if (is_null($this->resources)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(self::FIELD_RESOURCES);
            if (is_null($data)) {
                return null;
            }
            $this->resources = ProductTypeImportCollection::fromArray($data);
        }

        return $this->resources;
    }


    public function setResources(?ProductTypeImportCollection $resources): void
    {
        $this->resources = $resources;
    }
}
