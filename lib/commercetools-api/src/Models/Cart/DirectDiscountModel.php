<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\CartDiscount\CartDiscountTarget;
use Commercetools\Api\Models\CartDiscount\CartDiscountTargetModel;
use Commercetools\Api\Models\CartDiscount\CartDiscountValue;
use Commercetools\Api\Models\CartDiscount\CartDiscountValueModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class DirectDiscountModel extends JsonObjectModel implements DirectDiscount
{
    /**
     *
     * @var ?string
     */
    protected $id;

    /**
     *
     * @var ?CartDiscountValue
     */
    protected $value;

    /**
     *
     * @var ?CartDiscountTarget
     */
    protected $target;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?CartDiscountValue $value = null,
        ?CartDiscountTarget $target = null
    ) {
        $this->id = $id;
        $this->value = $value;
        $this->target = $target;
    }

    /**
     * <p>Unique identifier of the Direct Discount.</p>
     *
     *
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * <p>Effect of the Discount on the Cart.</p>
     *
     *
     * @return null|CartDiscountValue
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $className = CartDiscountValueModel::resolveDiscriminatorClass($data);
            $this->value = $className::of($data);
        }

        return $this->value;
    }

    /**
     * <p>Segment of the Cart that is discounted.</p>
     * <p>Empty when the <code>value</code> is set to <code>giftLineItem</code>.</p>
     *
     *
     * @return null|CartDiscountTarget
     */
    public function getTarget()
    {
        if (is_null($this->target)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TARGET);
            if (is_null($data)) {
                return null;
            }
            $className = CartDiscountTargetModel::resolveDiscriminatorClass($data);
            $this->target = $className::of($data);
        }

        return $this->target;
    }


    /**
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param ?CartDiscountValue $value
     */
    public function setValue(?CartDiscountValue $value): void
    {
        $this->value = $value;
    }

    /**
     * @param ?CartDiscountTarget $target
     */
    public function setTarget(?CartDiscountTarget $target): void
    {
        $this->target = $target;
    }
}
