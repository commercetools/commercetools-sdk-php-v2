<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Type\FieldContainer;
use Commercetools\Api\Models\Type\FieldContainerModel;
use Commercetools\Api\Models\Type\TypeResourceIdentifier;
use Commercetools\Api\Models\Type\TypeResourceIdentifierModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ProductSetProductPriceCustomTypeActionModel extends JsonObjectModel implements ProductSetProductPriceCustomTypeAction
{
    const DISCRIMINATOR_VALUE = 'setProductPriceCustomType';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?bool
     */
    protected $staged;

    /**
     * @var ?FieldContainer
     */
    protected $fields;

    /**
     * @var ?TypeResourceIdentifier
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $priceId;

    public function __construct(
        string $action = null,
        bool $staged = null,
        FieldContainer $fields = null,
        TypeResourceIdentifier $type = null,
        string $priceId = null
    ) {
        $this->action = $action;
        $this->staged = $staged;
        $this->fields = $fields;
        $this->type = $type;
        $this->priceId = $priceId;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|bool
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(ProductSetProductPriceCustomTypeAction::FIELD_STAGED);
            if (is_null($data)) {
                return null;
            }
            $this->staged = (bool) $data;
        }

        return $this->staged;
    }

    /**
     * @return null|FieldContainer
     */
    public function getFields()
    {
        if (is_null($this->fields)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductSetProductPriceCustomTypeAction::FIELD_FIELDS);
            if (is_null($data)) {
                return null;
            }

            $this->fields = FieldContainerModel::of($data);
        }

        return $this->fields;
    }

    /**
     * @return null|TypeResourceIdentifier
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductSetProductPriceCustomTypeAction::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }

            $this->type = TypeResourceIdentifierModel::of($data);
        }

        return $this->type;
    }

    /**
     * @return null|string
     */
    public function getPriceId()
    {
        if (is_null($this->priceId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductSetProductPriceCustomTypeAction::FIELD_PRICE_ID);
            if (is_null($data)) {
                return null;
            }
            $this->priceId = (string) $data;
        }

        return $this->priceId;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }

    public function setFields(?FieldContainer $fields): void
    {
        $this->fields = $fields;
    }

    public function setType(?TypeResourceIdentifier $type): void
    {
        $this->type = $type;
    }

    public function setPriceId(?string $priceId): void
    {
        $this->priceId = $priceId;
    }
}
