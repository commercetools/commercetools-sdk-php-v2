<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class BestDealModel extends JsonObjectModel implements BestDeal
{
    public const DISCRIMINATOR_VALUE = 'BestDeal';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $chosenDiscountType;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $chosenDiscountType = null,
        ?string $type = null
    ) {
        $this->chosenDiscountType = $chosenDiscountType;
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
     * <p>Discount type that offers the best deal; the value can be <code>ProductDiscount</code> or <code>CartDiscount</code>.</p>
     *
     *
     * @return null|string
     */
    public function getChosenDiscountType()
    {
        if (is_null($this->chosenDiscountType)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CHOSEN_DISCOUNT_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->chosenDiscountType = (string) $data;
        }

        return $this->chosenDiscountType;
    }


    /**
     * @param ?string $chosenDiscountType
     */
    public function setChosenDiscountType(?string $chosenDiscountType): void
    {
        $this->chosenDiscountType = $chosenDiscountType;
    }
}
