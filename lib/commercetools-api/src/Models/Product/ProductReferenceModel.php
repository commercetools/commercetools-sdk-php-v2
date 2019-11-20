<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ProductReferenceModel extends JsonObjectModel implements ProductReference
{
    const DISCRIMINATOR_VALUE = 'product';

    /**
     * @var ?string
     */
    protected $typeId;

    /**
     * @var ?string
     */
    protected $id;

    /**
     * @var ?Product
     */
    protected $obj;

    public function __construct(
        string $id = null,
        Product $obj = null
    ) {
        $this->id = $id;
        $this->obj = $obj;
        $this->typeId = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getTypeId()
    {
        if (is_null($this->typeId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Reference::FIELD_TYPE_ID);
            if (is_null($data)) {
                return null;
            }
            $this->typeId = (string) $data;
        }

        return $this->typeId;
    }

    /**
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Reference::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * @return null|Product
     */
    public function getObj()
    {
        if (is_null($this->obj)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductReference::FIELD_OBJ);
            if (is_null($data)) {
                return null;
            }

            $this->obj = ProductModel::of($data);
        }

        return $this->obj;
    }

    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    public function setObj(?Product $obj): void
    {
        $this->obj = $obj;
    }
}
