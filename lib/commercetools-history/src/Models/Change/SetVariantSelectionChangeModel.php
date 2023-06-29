<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\Common\ProductVariantSelection;
use Commercetools\History\Models\Common\ProductVariantSelectionModel;
use Commercetools\History\Models\Common\Reference;
use Commercetools\History\Models\Common\ReferenceModel;

/**
 * @internal
 */
final class SetVariantSelectionChangeModel extends JsonObjectModel implements SetVariantSelectionChange
{

    public const DISCRIMINATOR_VALUE = 'SetVariantSelectionChange';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $change;

    /**
     *
     * @var ?ProductVariantSelection
     */
    protected $previousValue;

    /**
     *
     * @var ?ProductVariantSelection
     */
    protected $nextValue;

    /**
     *
     * @var ?Reference
     */
    protected $product;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?ProductVariantSelection $previousValue = null,
        ?ProductVariantSelection $nextValue = null,
        ?Reference $product = null,
        ?string $type = null
    ) {
        $this->change = $change;
        $this->previousValue = $previousValue;
        $this->nextValue = $nextValue;
        $this->product = $product;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     *
     * @return null|string
     */
    public function getChange()
    {
        if (is_null($this->change)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CHANGE);
            if (is_null($data)) {
                return null;
            }
            $this->change = (string) $data;
        }

        return $this->change;
    }

    /**
     * <p>Value before the change.</p>
     *
     *
     * @return null|ProductVariantSelection
     */
    public function getPreviousValue()
    {
        if (is_null($this->previousValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PREVIOUS_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->previousValue = ProductVariantSelectionModel::of($data);
        }

        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *
     *
     * @return null|ProductVariantSelection
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->nextValue = ProductVariantSelectionModel::of($data);
        }

        return $this->nextValue;
    }

    /**
     * <p>Reference to the updated <a href="ctp:api:type:Product">Product</a>.</p>
     *
     *
     * @return null|Reference
     */
    public function getProduct()
    {
        if (is_null($this->product)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRODUCT);
            if (is_null($data)) {
                return null;
            }

            $this->product = ReferenceModel::of($data);
        }

        return $this->product;
    }


    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void
    {
        $this->change = $change;
    }

    /**
     * @param ?ProductVariantSelection $previousValue
     */
    public function setPreviousValue(?ProductVariantSelection $previousValue): void
    {
        $this->previousValue = $previousValue;
    }

    /**
     * @param ?ProductVariantSelection $nextValue
     */
    public function setNextValue(?ProductVariantSelection $nextValue): void
    {
        $this->nextValue = $nextValue;
    }

    /**
     * @param ?Reference $product
     */
    public function setProduct(?Reference $product): void
    {
        $this->product = $product;
    }



}
