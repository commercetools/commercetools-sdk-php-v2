<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\JsonObjectModel;

final class ProductVariantKeyReferenceModel extends JsonObjectModel implements ProductVariantKeyReference
{
    const DISCRIMINATOR_VALUE = 'product-variant';

    /**
     * @var ?string
     */
    protected $typeId;

    /**
     * @var ?string
     */
    protected $key;

    public function __construct(
        string $typeId = null,
        string $key = null
    ) {
        $this->typeId = $typeId;
        $this->key = $key;
    }

    /**
     * <p>The type of the referenced resource.</p>.
     *
     * @return null|string
     */
    public function getTypeId()
    {
        if (is_null($this->typeId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(KeyReference::FIELD_TYPE_ID);
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
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(KeyReference::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    public function setTypeId(?string $typeId): void
    {
        $this->typeId = $typeId;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }
}
