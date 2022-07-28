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
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductSetProductPriceCustomTypeActionModel extends JsonObjectModel implements ProductSetProductPriceCustomTypeAction
{
    public const DISCRIMINATOR_VALUE = 'setProductPriceCustomType';
    /**

     * @var ?string
     */
    protected $action;

    /**

     * @var ?string
     */
    protected $priceId;

    /**

     * @var ?bool
     */
    protected $staged;

    /**

     * @var ?TypeResourceIdentifier
     */
    protected $type;

    /**

     * @var ?FieldContainer
     */
    protected $fields;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $priceId = null,
        ?bool $staged = null,
        ?TypeResourceIdentifier $type = null,
        ?FieldContainer $fields = null
    ) {
        $this->priceId = $priceId;
        $this->staged = $staged;
        $this->type = $type;
        $this->fields = $fields;
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
     * <p>The <code>id</code> of the Embedded Price to update.</p>
     *

     * @return null|string
     */
    public function getPriceId()
    {
        if (is_null($this->priceId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PRICE_ID);
            if (is_null($data)) {
                return null;
            }
            $this->priceId = (string) $data;
        }

        return $this->priceId;
    }

    /**
     * <p>If <code>true</code>, only the staged Embedded Price is updated. If <code>false</code>, both the current and staged Embedded Price is updated.</p>
     *

     * @return null|bool
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_STAGED);
            if (is_null($data)) {
                return null;
            }
            $this->staged = (bool) $data;
        }

        return $this->staged;
    }

    /**
     * <p>Defines the <a href="ctp:api:type:Type">Type</a> that extends the Price with <a href="/../api/projects/custom-fields">Custom Fields</a>.
     * If absent, any existing Type and Custom Fields are removed from the Embedded Price.</p>
     *

     * @return null|TypeResourceIdentifier
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }

            $this->type = TypeResourceIdentifierModel::of($data);
        }

        return $this->type;
    }

    /**
     * <p>Sets the <a href="/../api/projects/custom-fields">Custom Fields</a> fields for the Embedded Price.</p>
     *

     * @return null|FieldContainer
     */
    public function getFields()
    {
        if (is_null($this->fields)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_FIELDS);
            if (is_null($data)) {
                return null;
            }

            $this->fields = FieldContainerModel::of($data);
        }

        return $this->fields;
    }


    /**
     * @param ?string $priceId
     */
    public function setPriceId(?string $priceId): void
    {
        $this->priceId = $priceId;
    }

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }

    /**
     * @param ?TypeResourceIdentifier $type
     */
    public function setType(?TypeResourceIdentifier $type): void
    {
        $this->type = $type;
    }

    /**
     * @param ?FieldContainer $fields
     */
    public function setFields(?FieldContainer $fields): void
    {
        $this->fields = $fields;
    }
}
