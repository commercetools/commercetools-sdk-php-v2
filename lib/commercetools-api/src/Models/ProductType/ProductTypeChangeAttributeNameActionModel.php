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
final class ProductTypeChangeAttributeNameActionModel extends JsonObjectModel implements ProductTypeChangeAttributeNameAction
{
    public const DISCRIMINATOR_VALUE = 'changeAttributeName';
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
     * @var ?string
     */
    protected $newAttributeName;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $attributeName = null,
        ?string $newAttributeName = null,
        ?string $action = null
    ) {
        $this->attributeName = $attributeName;
        $this->newAttributeName = $newAttributeName;
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
     * <p>New user-defined name of the Attribute that is unique with the <a href="ctp:api:type:Project">Project</a>.
     * When using the same <code>name</code> for an Attribute in two or more ProductTypes all fields of the AttributeDefinition of this Attribute need to be the same across the ProductTypes, otherwise an <a href="ctp:api:type:AttributeDefinitionAlreadyExistsError">AttributeDefinitionAlreadyExistsError</a> will be returned.
     * An exception to this are the values of an <code>enum</code> or <code>lenum</code> type and sets thereof.</p>
     *
     *
     * @return null|string
     */
    public function getNewAttributeName()
    {
        if (is_null($this->newAttributeName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_NEW_ATTRIBUTE_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->newAttributeName = (string) $data;
        }

        return $this->newAttributeName;
    }


    /**
     * @param ?string $attributeName
     */
    public function setAttributeName(?string $attributeName): void
    {
        $this->attributeName = $attributeName;
    }

    /**
     * @param ?string $newAttributeName
     */
    public function setNewAttributeName(?string $newAttributeName): void
    {
        $this->newAttributeName = $newAttributeName;
    }
}
