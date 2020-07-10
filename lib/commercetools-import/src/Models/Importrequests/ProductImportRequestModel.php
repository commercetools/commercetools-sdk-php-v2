<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Importrequests;

use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
use stdClass;

use Models\Products\ProductImportCollection;

/**
 * @internal
 */
final class ProductImportRequestModel extends JsonObjectModel implements ProductImportRequest
{
    public const DISCRIMINATOR_VALUE = 'product';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?ProductImportCollection
     */
    protected $resources;


    public function __construct(
        ProductImportCollection $resources = null
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
            $data = $this->raw(ImportRequest::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>The product import resources of this request.</p>
     *
     * @return null|ProductImportCollection
     */
    public function getResources()
    {
        if (is_null($this->resources)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ProductImportRequest::FIELD_RESOURCES);
            if (is_null($data)) {
                return null;
            }
            $this->resources = ProductImportCollection::fromArray($data);
        }

        return $this->resources;
    }

    public function setResources(?ProductImportCollection $resources): void
    {
        $this->resources = $resources;
    }



}
