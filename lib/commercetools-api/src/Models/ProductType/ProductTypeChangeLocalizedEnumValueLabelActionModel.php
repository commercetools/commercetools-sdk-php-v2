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
final class ProductTypeChangeLocalizedEnumValueLabelActionModel extends JsonObjectModel implements ProductTypeChangeLocalizedEnumValueLabelAction
{
    public const DISCRIMINATOR_VALUE = 'changeLocalizedEnumValueLabel';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $attributeName;

    /**
     *
     * @var ?AttributeLocalizedEnumValue
     */
    protected $newValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $attributeName = null,
        ?AttributeLocalizedEnumValue $newValue = null,
        ?string $action = null
    ) {
        $this->attributeName = $attributeName;
        $this->newValue = $newValue;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>Name of the AttributeDefinition to update.</p>
     *
     *
     * @return null|string
     */
    public function getAttributeName()
    {
        if (is_null($this->attributeName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ATTRIBUTE_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->attributeName = (string) $data;
        }

        return $this->attributeName;
    }

    /**
     * <p>New value to set. Must be different from the existing value.</p>
     *
     *
     * @return null|AttributeLocalizedEnumValue
     */
    public function getNewValue()
    {
        if (is_null($this->newValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NEW_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->newValue = AttributeLocalizedEnumValueModel::of($data);
        }

        return $this->newValue;
    }


    /**
     * @param ?string $attributeName
     */
    public function setAttributeName(?string $attributeName): void
    {
        $this->attributeName = $attributeName;
    }

    /**
     * @param ?AttributeLocalizedEnumValue $newValue
     */
    public function setNewValue(?AttributeLocalizedEnumValue $newValue): void
    {
        $this->newValue = $newValue;
    }
}
