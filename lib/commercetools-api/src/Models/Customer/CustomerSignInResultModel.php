<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class CustomerSignInResultModel extends JsonObjectModel implements CustomerSignInResult
{
    /**
     * @var ?JsonObject
     */
    protected $cart;

    /**
     * @var ?Customer
     */
    protected $customer;

    public function __construct(
        JsonObject $cart = null,
        Customer $customer = null
    ) {
        $this->cart = $cart;
        $this->customer = $customer;
    }

    /**
     * @return null|JsonObject
     */
    public function getCart()
    {
        if (is_null($this->cart)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CustomerSignInResult::FIELD_CART);
            if (is_null($data)) {
                return null;
            }
            $this->cart = JsonObjectModel::of($data);
        }

        return $this->cart;
    }

    /**
     * @return null|Customer
     */
    public function getCustomer()
    {
        if (is_null($this->customer)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CustomerSignInResult::FIELD_CUSTOMER);
            if (is_null($data)) {
                return null;
            }

            $this->customer = CustomerModel::of($data);
        }

        return $this->customer;
    }

    public function setCart(?JsonObject $cart): void
    {
        $this->cart = $cart;
    }

    public function setCustomer(?Customer $customer): void
    {
        $this->customer = $customer;
    }
}
