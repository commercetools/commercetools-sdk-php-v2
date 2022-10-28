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
final class ProductTypeRemoveEnumValuesActionModel extends JsonObjectModel implements ProductTypeRemoveEnumValuesAction
{
    public const DISCRIMINATOR_VALUE = 'removeEnumValues';
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
     * @var ?array
     */
    protected $keys;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $attributeName = null,
        ?array $keys = null,
        ?string $action = null
    ) {
        $this->attributeName = $attributeName;
        $this->keys = $keys;
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
     * <p>Keys of <a href="ctp:api:type:AttributeEnumType">AttributeEnumType</a> or <a href="ctp:api:type:AttributeLocalizedEnumType">AttributeLocalizedEnumType</a> to remove.</p>
     *
     *
     * @return null|array
     */
    public function getKeys()
    {
        if (is_null($this->keys)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_KEYS);
            if (is_null($data)) {
                return null;
            }
            $this->keys = $data;
        }

        return $this->keys;
    }


    /**
     * @param ?string $attributeName
     */
    public function setAttributeName(?string $attributeName): void
    {
        $this->attributeName = $attributeName;
    }

    /**
     * @param ?array $keys
     */
    public function setKeys(?array $keys): void
    {
        $this->keys = $keys;
    }
}
