<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ProductTypeChangeAttributeOrderActionModel extends JsonObjectModel implements ProductTypeChangeAttributeOrderAction
{
    const DISCRIMINATOR_VALUE = 'changeAttributeOrder';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?AttributeDefinitionCollection
     */
    protected $attributes;

    public function __construct(
        string $action = null,
        AttributeDefinitionCollection $attributes = null
    ) {
        $this->action = $action;
        $this->attributes = $attributes;
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
     * @return null|AttributeDefinitionCollection
     */
    public function getAttributes()
    {
        if (is_null($this->attributes)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ProductTypeChangeAttributeOrderAction::FIELD_ATTRIBUTES);
            if (is_null($data)) {
                return null;
            }
            $this->attributes = AttributeDefinitionCollection::fromArray($data);
        }

        return $this->attributes;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setAttributes(?AttributeDefinitionCollection $attributes): void
    {
        $this->attributes = $attributes;
    }
}
