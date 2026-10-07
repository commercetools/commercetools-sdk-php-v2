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
final class ProductTypeSetSavedToLineItemActionModel extends JsonObjectModel implements ProductTypeSetSavedToLineItemAction
{
    public const DISCRIMINATOR_VALUE = 'setSavedToLineItem';
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
     * @var ?bool
     */
    protected $savedToLineItem;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $attributeName = null,
        ?bool $savedToLineItem = null,
        ?string $action = null
    ) {
        $this->attributeName = $attributeName;
        $this->savedToLineItem = $savedToLineItem;
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
     * <p>Whether the Attribute value is copied onto a <a href="ctp:api:type:LineItem">LineItem</a> when the Product is added to a Cart.
     * See <a href="ctp:api:type:AttributeDefinition">AttributeDefinition</a> for details.</p>
     * <p>It has no effect if the Attribute already has the given value.</p>
     *
     *
     * @return null|bool
     */
    public function getSavedToLineItem()
    {
        if (is_null($this->savedToLineItem)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_SAVED_TO_LINE_ITEM);
            if (is_null($data)) {
                return null;
            }
            $this->savedToLineItem = (bool) $data;
        }

        return $this->savedToLineItem;
    }


    /**
     * @param ?string $attributeName
     */
    public function setAttributeName(?string $attributeName): void
    {
        $this->attributeName = $attributeName;
    }

    /**
     * @param ?bool $savedToLineItem
     */
    public function setSavedToLineItem(?bool $savedToLineItem): void
    {
        $this->savedToLineItem = $savedToLineItem;
    }
}
