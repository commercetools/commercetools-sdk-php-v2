<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\CartDiscount\CartDiscount;
use Commercetools\Api\Models\CartDiscount\CartDiscountModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CartDiscountCreatedMessagePayloadModel extends JsonObjectModel implements CartDiscountCreatedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'CartDiscountCreated';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?CartDiscount
     */
    protected $cartDiscount;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?CartDiscount $cartDiscount = null,
        ?string $type = null
    ) {
        $this->cartDiscount = $cartDiscount;
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
     * <p>The <a href="ctp:api:type:CartDiscount">Cart Discount</a> that was created.</p>
     *
     *
     * @return null|CartDiscount
     */
    public function getCartDiscount()
    {
        if (is_null($this->cartDiscount)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CART_DISCOUNT);
            if (is_null($data)) {
                return null;
            }

            $this->cartDiscount = CartDiscountModel::of($data);
        }

        return $this->cartDiscount;
    }


    /**
     * @param ?CartDiscount $cartDiscount
     */
    public function setCartDiscount(?CartDiscount $cartDiscount): void
    {
        $this->cartDiscount = $cartDiscount;
    }
}
