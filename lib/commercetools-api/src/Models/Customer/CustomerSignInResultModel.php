<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Api\Models\Cart\Cart;
use Commercetools\Api\Models\Cart\CartModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CustomerSignInResultModel extends JsonObjectModel implements CustomerSignInResult
{
    /**
     *
     * @var ?Customer
     */
    protected $customer;

    /**
     *
     * @var ?Cart
     */
    protected $cart;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?Customer $customer = null,
        ?Cart $cart = null
    ) {
        $this->customer = $customer;
        $this->cart = $cart;
    }

    /**
     * <p>Customer <a href="ctp:api:endpoint:/{projectKey}/customers:POST">signed up</a> or <a href="ctp:api:endpoint:/{projectKey}/login:POST">signed in</a> after authentication.</p>
     *
     *
     * @return null|Customer
     */
    public function getCustomer()
    {
        if (is_null($this->customer)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOMER);
            if (is_null($data)) {
                return null;
            }

            $this->customer = CustomerModel::of($data);
        }

        return $this->customer;
    }

    /**
     * <p>Cart associated with the Customer.</p>
     * <p>The Cart is recalculated to remove invalid Line Items and apply the latest prices, taxes, and discounts.
     * During these updates, the following errors can be returned: <a href="ctp:api:type:MatchingPriceNotFoundError">MatchingPriceNotFound</a> and <a href="ctp:api:type:MissingTaxRateForCountryError">MissingTaxRateForCountry</a>.</p>
     * <p>For more information, see <a href="/../api/carts-orders-overview#update-a-cart">Cart updates</a>.</p>
     *
     *
     * @return null|Cart
     */
    public function getCart()
    {
        if (is_null($this->cart)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CART);
            if (is_null($data)) {
                return null;
            }

            $this->cart = CartModel::of($data);
        }

        return $this->cart;
    }


    /**
     * @param ?Customer $customer
     */
    public function setCustomer(?Customer $customer): void
    {
        $this->customer = $customer;
    }

    /**
     * @param ?Cart $cart
     */
    public function setCart(?Cart $cart): void
    {
        $this->cart = $cart;
    }
}
