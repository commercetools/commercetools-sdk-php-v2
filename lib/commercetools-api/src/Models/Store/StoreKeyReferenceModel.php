<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Api\Models\Common\KeyReference;
use Commercetools\Base\JsonObjectModel;

final class StoreKeyReferenceModel extends JsonObjectModel implements StoreKeyReference
{
    const DISCRIMINATOR_VALUE = 'store';
    /**
     * @var ?string
     */
    protected $typeId;

    /**
     * @var ?string
     */
    protected $key;

    public function __construct(
        string $key = null
    ) {
        $this->key = $key;
        $this->typeId = static::DISCRIMINATOR_VALUE;
    }

    /**
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

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }
}
