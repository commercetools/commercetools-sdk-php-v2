<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductTypeChangeEnumKeyActionModel extends JsonObjectModel implements ProductTypeChangeEnumKeyAction
{
    public const DISCRIMINATOR_VALUE = 'changeEnumKey';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $attributeName;

    /**
     * @var ?string
     */
    protected $key;

    /**
     * @var ?string
     */
    protected $newKey;


    public function __construct(
        string $attributeName = null,
        string $key = null,
        string $newKey = null
    ) {
        $this->attributeName = $attributeName;
        $this->key = $key;
        $this->newKey = $newKey;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductTypeUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|string
     */
    public function getAttributeName()
    {
        if (is_null($this->attributeName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductTypeChangeEnumKeyAction::FIELD_ATTRIBUTE_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->attributeName = (string) $data;
        }

        return $this->attributeName;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductTypeChangeEnumKeyAction::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * @return null|string
     */
    public function getNewKey()
    {
        if (is_null($this->newKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductTypeChangeEnumKeyAction::FIELD_NEW_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->newKey = (string) $data;
        }

        return $this->newKey;
    }

    public function setAttributeName(?string $attributeName): void
    {
        $this->attributeName = $attributeName;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    public function setNewKey(?string $newKey): void
    {
        $this->newKey = $newKey;
    }
}
