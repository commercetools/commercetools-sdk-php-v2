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
final class ProductTypeChangeIsSearchableActionModel extends JsonObjectModel implements ProductTypeChangeIsSearchableAction
{
    public const DISCRIMINATOR_VALUE = 'changeIsSearchable';
    /**

     * @var ?string
     */
    protected $action;

    /**

     * @var ?string
     */
    protected $attributeName;

    /**

     * @var ?bool
     */
    protected $isSearchable;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $attributeName = null,
        ?bool $isSearchable = null
    ) {
        $this->attributeName = $attributeName;
        $this->isSearchable = $isSearchable;
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
     * <p>Determines whether the Attribute's values can be used in full-text search queries, filters, and facets. See <a href="ctp:api:type:AttributeDefinition">AttributeDefinition</a> for details.</p>
     *

     * @return null|bool
     */
    public function getIsSearchable()
    {
        if (is_null($this->isSearchable)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_IS_SEARCHABLE);
            if (is_null($data)) {
                return null;
            }
            $this->isSearchable = (bool) $data;
        }

        return $this->isSearchable;
    }


    /**
     * @param ?string $attributeName
     */
    public function setAttributeName(?string $attributeName): void
    {
        $this->attributeName = $attributeName;
    }

    /**
     * @param ?bool $isSearchable
     */
    public function setIsSearchable(?bool $isSearchable): void
    {
        $this->isSearchable = $isSearchable;
    }
}
