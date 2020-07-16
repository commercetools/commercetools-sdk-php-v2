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
use Commercetools\Import\Models\Productvariants\ProductVariantImportCollection;
use stdClass;

/**
 * @internal
 */
final class ProductVariantImportRequestModel extends JsonObjectModel implements ProductVariantImportRequest
{
    public const DISCRIMINATOR_VALUE = 'product-variant';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?ProductVariantImportCollection
     */
    protected $resources;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductVariantImportCollection $resources = null
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
     * <p>The product variant import resources of this request.</p>
     *
     * @return null|ProductVariantImportCollection
     */
    public function getResources()
    {
        if (is_null($this->resources)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_RESOURCES);
            if (is_null($data)) {
                return null;
            }
            $this->resources = ProductVariantImportCollection::fromArray($data);
        }

        return $this->resources;
    }


    /**
     * @param ?ProductVariantImportCollection $resources
     */
    public function setResources(?ProductVariantImportCollection $resources): void
    {
        $this->resources = $resources;
    }
}
