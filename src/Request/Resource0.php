<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Project\ProjectUpdate;


class Resource0 extends Resource
{
    /**
     * @return Resource1
     */
    public function categories(): Resource1 {
        return new Resource1($this->getUri() . '/categories', $this->getArgs());
    }
    /**
     * @return Resource4
     */
    public function carts(): Resource4 {
        return new Resource4($this->getUri() . '/carts', $this->getArgs());
    }
    /**
     * @return Resource6
     */
    public function cartDiscounts(): Resource6 {
        return new Resource6($this->getUri() . '/cart-discounts', $this->getArgs());
    }
    /**
     * @return Resource8
     */
    public function channels(): Resource8 {
        return new Resource8($this->getUri() . '/channels', $this->getArgs());
    }
    /**
     * @return Resource10
     */
    public function customers(): Resource10 {
        return new Resource10($this->getUri() . '/customers', $this->getArgs());
    }
    /**
     * @return Resource20
     */
    public function customerGroups(): Resource20 {
        return new Resource20($this->getUri() . '/customer-groups', $this->getArgs());
    }
    /**
     * @return Resource23
     */
    public function customObjects(): Resource23 {
        return new Resource23($this->getUri() . '/custom-objects', $this->getArgs());
    }
    /**
     * @return Resource26
     */
    public function discountCodes(): Resource26 {
        return new Resource26($this->getUri() . '/discount-codes', $this->getArgs());
    }
    /**
     * @return Resource28
     */
    public function graphql(): Resource28 {
        return new Resource28($this->getUri() . '/graphql', $this->getArgs());
    }
    /**
     * @return Resource29
     */
    public function inventory(): Resource29 {
        return new Resource29($this->getUri() . '/inventory', $this->getArgs());
    }
    /**
     * @return Resource31
     */
    public function login(): Resource31 {
        return new Resource31($this->getUri() . '/login', $this->getArgs());
    }
    /**
     * @return Resource32
     */
    public function messages(): Resource32 {
        return new Resource32($this->getUri() . '/messages', $this->getArgs());
    }
    /**
     * @return Resource34
     */
    public function orders(): Resource34 {
        return new Resource34($this->getUri() . '/orders', $this->getArgs());
    }
    /**
     * @return Resource37
     */
    public function payments(): Resource37 {
        return new Resource37($this->getUri() . '/payments', $this->getArgs());
    }
    /**
     * @return Resource40
     */
    public function products(): Resource40 {
        return new Resource40($this->getUri() . '/products', $this->getArgs());
    }
    /**
     * @return Resource44
     */
    public function productDiscounts(): Resource44 {
        return new Resource44($this->getUri() . '/product-discounts', $this->getArgs());
    }
    /**
     * @return Resource46
     */
    public function productProjections(): Resource46 {
        return new Resource46($this->getUri() . '/product-projections', $this->getArgs());
    }
    /**
     * @return Resource51
     */
    public function productTypes(): Resource51 {
        return new Resource51($this->getUri() . '/product-types', $this->getArgs());
    }
    /**
     * @return Resource54
     */
    public function reviews(): Resource54 {
        return new Resource54($this->getUri() . '/reviews', $this->getArgs());
    }
    /**
     * @return Resource57
     */
    public function shippingMethods(): Resource57 {
        return new Resource57($this->getUri() . '/shipping-methods', $this->getArgs());
    }
    /**
     * @return Resource60
     */
    public function shoppingLists(): Resource60 {
        return new Resource60($this->getUri() . '/shopping-lists', $this->getArgs());
    }
    /**
     * @return Resource63
     */
    public function states(): Resource63 {
        return new Resource63($this->getUri() . '/states', $this->getArgs());
    }
    /**
     * @return Resource65
     */
    public function subscriptions(): Resource65 {
        return new Resource65($this->getUri() . '/subscriptions', $this->getArgs());
    }
    /**
     * @return Resource68
     */
    public function taxCategories(): Resource68 {
        return new Resource68($this->getUri() . '/tax-categories', $this->getArgs());
    }
    /**
     * @return Resource70
     */
    public function types(): Resource70 {
        return new Resource70($this->getUri() . '/types', $this->getArgs());
    }
    /**
     * @return Resource73
     */
    public function zones(): Resource73 {
        return new Resource73($this->getUri() . '/zones', $this->getArgs());
    }
    /**
     * @return Resource75
     */
    public function me(): Resource75 {
        return new Resource75($this->getUri() . '/me', $this->getArgs());
    }
    /**
     * @return Resource87
     */
    public function extensions(): Resource87 {
        return new Resource87($this->getUri() . '/extensions', $this->getArgs());
    }


    /**
     * @return ByProjectKeyGet
     */
    public function get(): ByProjectKeyGet {
        $args = $this->getArgs();
        return new ByProjectKeyGet($args['projectKey']);
    }
    /**
     * @param ProjectUpdate $body
     * @return ByProjectKeyPost
     */
    public function post(ProjectUpdate $body): ByProjectKeyPost {
        $args = $this->getArgs();
        return new ByProjectKeyPost($args['projectKey'], $body);
    }

}
