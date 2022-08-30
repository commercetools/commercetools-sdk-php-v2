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
final class ProductTypeChangeAttributeOrderByNameActionModel extends JsonObjectModel implements ProductTypeChangeAttributeOrderByNameAction
{
    public const DISCRIMINATOR_VALUE = 'changeAttributeOrderByName';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?array
     */
    protected $attributeNames;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?array $attributeNames = null,
        ?string $action = null
    ) {
        $this->attributeNames = $attributeNames;
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
     * <p>Names of Attributes to reorder. This array must include all Attributes currently present on a ProductType in a different order.</p>
     *
     *
     * @return null|array
     */
    public function getAttributeNames()
    {
        if (is_null($this->attributeNames)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_ATTRIBUTE_NAMES);
            if (is_null($data)) {
                return null;
            }
            $this->attributeNames = $data;
        }

        return $this->attributeNames;
    }


    /**
     * @param ?array $attributeNames
     */
    public function setAttributeNames(?array $attributeNames): void
    {
        $this->attributeNames = $attributeNames;
    }
}
