<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ProductTypeAddPlainEnumValueActionModel extends JsonObjectModel implements ProductTypeAddPlainEnumValueAction
{
    const DISCRIMINATOR_VALUE = 'addPlainEnumValue';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $attributeName;

    /**
     * @var ?AttributePlainEnumValue
     */
    protected $value;

    public function __construct(
        string $action = null,
        string $attributeName = null,
        AttributePlainEnumValue $value = null
    ) {
        $this->action = $action;
        $this->attributeName = $attributeName;
        $this->value = $value;
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
            $data = $this->raw(ProductTypeAddPlainEnumValueAction::FIELD_ATTRIBUTE_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->attributeName = (string) $data;
        }

        return $this->attributeName;
    }

    /**
     * @return null|AttributePlainEnumValue
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductTypeAddPlainEnumValueAction::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->value = AttributePlainEnumValueModel::of($data);
        }

        return $this->value;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setAttributeName(?string $attributeName): void
    {
        $this->attributeName = $attributeName;
    }

    public function setValue(?AttributePlainEnumValue $value): void
    {
        $this->value = $value;
    }
}
