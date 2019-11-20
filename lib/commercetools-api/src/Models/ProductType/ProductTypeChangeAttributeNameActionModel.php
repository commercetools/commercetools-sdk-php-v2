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
    protected $newAttributeName;

    /**
     * @var ?string
     */
    protected $attributeName;

    public function __construct(
        string $newAttributeName = null,
        string $attributeName = null
    ) {
        $this->newAttributeName = $newAttributeName;
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

    public function setNewAttributeName(?string $newAttributeName): void
    {
        $this->newAttributeName = $newAttributeName;
    }

    public function setAttributeName(?string $attributeName): void
    {
        $this->attributeName = $attributeName;
    }
}
