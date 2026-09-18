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
final class CartSetDirectDiscountsIgnoreCartDiscountsActionModel extends JsonObjectModel implements CartSetDirectDiscountsIgnoreCartDiscountsAction
{
    public const DISCRIMINATOR_VALUE = 'setDirectDiscountsIgnoreCartDiscounts';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?bool
     */
    protected $directDiscountsIgnoreCartDiscounts;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?bool $directDiscountsIgnoreCartDiscounts = null,
        ?string $action = null
    ) {
        $this->directDiscountsIgnoreCartDiscounts = $directDiscountsIgnoreCartDiscounts;
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
     * <ul>
     * <li>If <code>true</code>, only <a href="ctp:api:type:DirectDiscount">Direct Discounts</a> apply to the Cart. Matching <a href="ctp:api:type:CartDiscount">Cart Discounts</a> are ignored, and Discount Codes cannot be added.</li>
     * </ul>
     * <p>The value can be set to <code>true</code> only if the Cart does not have both <code>discountCodes</code> and <code>directDiscounts</code>.</p>
     * <ul>
     * <li>If <code>false</code>, Cart Discounts, Discount Codes, and Direct Discounts apply to the Cart.</li>
     * </ul>
     *
     *
     * @return null|bool
     */
    public function getDirectDiscountsIgnoreCartDiscounts()
    {
        if (is_null($this->directDiscountsIgnoreCartDiscounts)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_DIRECT_DISCOUNTS_IGNORE_CART_DISCOUNTS);
            if (is_null($data)) {
                return null;
            }
            $this->directDiscountsIgnoreCartDiscounts = (bool) $data;
        }

        return $this->directDiscountsIgnoreCartDiscounts;
    }


    /**
     * @param ?bool $directDiscountsIgnoreCartDiscounts
     */
    public function setDirectDiscountsIgnoreCartDiscounts(?bool $directDiscountsIgnoreCartDiscounts): void
    {
        $this->directDiscountsIgnoreCartDiscounts = $directDiscountsIgnoreCartDiscounts;
    }
}
