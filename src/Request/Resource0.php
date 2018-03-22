<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Base\MapperAware;
use Commercetools\Types\Project\Project;
use Commercetools\Builder\ProjectUpdateBuilder;

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
     * @return Resource38
     */
    public function payments(): Resource38 {
        return new Resource38($this->getUri() . '/payments', $this->getArgs());
    }
    /**
     * @return Resource41
     */
    public function products(): Resource41 {
        return new Resource41($this->getUri() . '/products', $this->getArgs());
    }
    /**
     * @return Resource45
     */
    public function productDiscounts(): Resource45 {
        return new Resource45($this->getUri() . '/product-discounts', $this->getArgs());
    }
    /**
     * @return Resource47
     */
    public function productProjections(): Resource47 {
        return new Resource47($this->getUri() . '/product-projections', $this->getArgs());
    }
    /**
     * @return Resource52
     */
    public function productTypes(): Resource52 {
        return new Resource52($this->getUri() . '/product-types', $this->getArgs());
    }
    /**
     * @return Resource55
     */
    public function reviews(): Resource55 {
        return new Resource55($this->getUri() . '/reviews', $this->getArgs());
    }
    /**
     * @return Resource58
     */
    public function shippingMethods(): Resource58 {
        return new Resource58($this->getUri() . '/shipping-methods', $this->getArgs());
    }
    /**
     * @return Resource61
     */
    public function shoppingLists(): Resource61 {
        return new Resource61($this->getUri() . '/shopping-lists', $this->getArgs());
    }
    /**
     * @return Resource64
     */
    public function states(): Resource64 {
        return new Resource64($this->getUri() . '/states', $this->getArgs());
    }
    /**
     * @return Resource66
     */
    public function subscriptions(): Resource66 {
        return new Resource66($this->getUri() . '/subscriptions', $this->getArgs());
    }
    /**
     * @return Resource69
     */
    public function taxCategories(): Resource69 {
        return new Resource69($this->getUri() . '/tax-categories', $this->getArgs());
    }
    /**
     * @return Resource71
     */
    public function types(): Resource71 {
        return new Resource71($this->getUri() . '/types', $this->getArgs());
    }
    /**
     * @return Resource74
     */
    public function zones(): Resource74 {
        return new Resource74($this->getUri() . '/zones', $this->getArgs());
    }
    /**
     * @return Resource76
     */
    public function me(): Resource76 {
        return new Resource76($this->getUri() . '/me', $this->getArgs());
    }
    /**
     * @return Resource88
     */
    public function extensions(): Resource88 {
        return new Resource88($this->getUri() . '/extensions', $this->getArgs());
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


    public function update(Project $resource)
    {
        $builder = new ProjectUpdateBuilder(function (ProjectUpdateBuilder $builder) { return $this->post($builder->build()); });
        $builder->with($resource);
        if ($resource instanceof MapperAware) {
            $builder->setMapper($resource->getMapper());
        }
        return $builder;
    }
}
