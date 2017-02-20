<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class CustomerSignInResult extends JsonObject {
    protected $customer;
    protected $cart;

    /**
     * @return Customer
     */
    public function getCustomer(): Customer
    {
        if (is_null($this->customer)) {
            $value = $this->raw('customer');
            if (!is_null($value)) {
                $this->customer = Mapper::map($value, Customer::class);
            } else {
                return Mapper::map([], Customer::class);
            }
        }
        return $this->customer;
    }
                

    /**
     * @return array
     */
    public function getCart(): array
    {
        if (is_null($this->cart)) {
            $value = $this->raw('cart');
            if (!is_null($value)) {
                $this->cart = $value;
            } else {
                return [];
            }
        }
        return $this->cart;
    }
                
}
