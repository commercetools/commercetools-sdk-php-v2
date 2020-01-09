<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\JsonObjectModel;

final class ProductTypeChangeAttributeNameActionModel extends JsonObjectModel implements ProductTypeChangeAttributeNameAction
{
    const DISCRIMINATOR_VALUE = 'changeAttributeName';
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
    protected $newAttributeName;

    public function __construct(
        string $attributeName = null,
        string $newAttributeName = null
    ) {
        $this->attributeName = $attributeName;
        $this->newAttributeName = $newAttributeName;
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
            $data = $this->raw(ProductTypeChangeAttributeNameAction::FIELD_ATTRIBUTE_NAME);
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
    public function getNewAttributeName()
    {
        if (is_null($this->newAttributeName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductTypeChangeAttributeNameAction::FIELD_NEW_ATTRIBUTE_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->newAttributeName = (string) $data;
        }

        return $this->newAttributeName;
    }

    public function setAttributeName(?string $attributeName): void
    {
        $this->attributeName = $attributeName;
    }

    public function setNewAttributeName(?string $newAttributeName): void
    {
        $this->newAttributeName = $newAttributeName;
    }
}
