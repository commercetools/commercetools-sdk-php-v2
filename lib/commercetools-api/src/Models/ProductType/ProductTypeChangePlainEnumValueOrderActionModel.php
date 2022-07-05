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
final class ProductTypeChangePlainEnumValueOrderActionModel extends JsonObjectModel implements ProductTypeChangePlainEnumValueOrderAction
{
    public const DISCRIMINATOR_VALUE = 'changePlainEnumValueOrder';
    /**

     * @var ?string
     */
    protected $action;

    /**

     * @var ?string
     */
    protected $attributeName;

    /**

     * @var ?AttributePlainEnumValueCollection
     */
    protected $values;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $attributeName = null,
        ?AttributePlainEnumValueCollection $values = null
    ) {
        $this->attributeName = $attributeName;
        $this->values = $values;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**

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
     * <p>Values must be equal to the values of the Attribute enum values (except for the order). If not, an <a href="/errors#product-types-400-enum-values-must-match">EnumValuesMustMatch</a> error code will be returned.</p>
     *

     * @return null|AttributePlainEnumValueCollection
     */
    public function getValues()
    {
        if (is_null($this->values)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_VALUES);
            if (is_null($data)) {
                return null;
            }
            $this->values = AttributePlainEnumValueCollection::fromArray($data);
        }

        return $this->values;
    }


    /**
     * @param ?string $attributeName
     */
    public function setAttributeName(?string $attributeName): void
    {
        $this->attributeName = $attributeName;
    }

    /**
     * @param ?AttributePlainEnumValueCollection $values
     */
    public function setValues(?AttributePlainEnumValueCollection $values): void
    {
        $this->values = $values;
    }
}
