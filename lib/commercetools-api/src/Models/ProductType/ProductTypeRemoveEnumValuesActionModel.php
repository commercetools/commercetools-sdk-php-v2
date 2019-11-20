<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\JsonObjectModel;

final class ProductTypeRemoveEnumValuesActionModel extends JsonObjectModel implements ProductTypeRemoveEnumValuesAction
{
    const DISCRIMINATOR_VALUE = 'removeEnumValues';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?array
     */
    protected $keys;

    /**
     * @var ?string
     */
    protected $attributeName;

    public function __construct(
        array $keys = null,
        string $attributeName = null
    ) {
        $this->keys = $keys;
        $this->attributeName = $attributeName;
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
     * @return null|array
     */
    public function getKeys()
    {
        if (is_null($this->keys)) {
            /** @psalm-var ?array<int, mixed> $data */
            $data = $this->raw(ProductTypeRemoveEnumValuesAction::FIELD_KEYS);
            if (is_null($data)) {
                return null;
            }
            $this->keys = $data;
        }

        return $this->keys;
    }

    /**
     * @return null|string
     */
    public function getAttributeName()
    {
        if (is_null($this->attributeName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductTypeRemoveEnumValuesAction::FIELD_ATTRIBUTE_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->attributeName = (string) $data;
        }

        return $this->attributeName;
    }

    public function setKeys(?array $keys): void
    {
        $this->keys = $keys;
    }

    public function setAttributeName(?string $attributeName): void
    {
        $this->attributeName = $attributeName;
    }
}
