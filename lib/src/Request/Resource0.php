<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Base\MapperAware;
use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Project\Project;
use Commercetools\Builder\ProjectUpdateBuilder;

use Commercetools\Types\Project\ProjectUpdate;


class Resource0 extends Resource
{
    /**
     * @return Resource1
     */
    public function categories(): Resource1 {
        return new Resource1($this->getUri() . '/categories', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return Resource4
     */
    public function carts(): Resource4 {
        return new Resource4($this->getUri() . '/carts', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return Resource6
     */
    public function cartDiscounts(): Resource6 {
        return new Resource6($this->getUri() . '/cart-discounts', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return Resource8
     */
    public function channels(): Resource8 {
        return new Resource8($this->getUri() . '/channels', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return Resource10
     */
    public function customers(): Resource10 {
        return new Resource10($this->getUri() . '/customers', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return Resource20
     */
    public function customerGroups(): Resource20 {
        return new Resource20($this->getUri() . '/customer-groups', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return Resource23
     */
    public function customObjects(): Resource23 {
        return new Resource23($this->getUri() . '/custom-objects', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return Resource26
     */
    public function discountCodes(): Resource26 {
        return new Resource26($this->getUri() . '/discount-codes', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return Resource28
     */
    public function graphql(): Resource28 {
        return new Resource28($this->getUri() . '/graphql', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return Resource29
     */
    public function inventory(): Resource29 {
        return new Resource29($this->getUri() . '/inventory', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return Resource31
     */
    public function login(): Resource31 {
        return new Resource31($this->getUri() . '/login', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return Resource32
     */
    public function messages(): Resource32 {
        return new Resource32($this->getUri() . '/messages', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return Resource34
     */
    public function orders(): Resource34 {
        return new Resource34($this->getUri() . '/orders', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return Resource38
     */
    public function payments(): Resource38 {
        return new Resource38($this->getUri() . '/payments', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return Resource41
     */
    public function products(): Resource41 {
        return new Resource41($this->getUri() . '/products', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return Resource45
     */
    public function productDiscounts(): Resource45 {
        return new Resource45($this->getUri() . '/product-discounts', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return Resource48
     */
    public function productProjections(): Resource48 {
        return new Resource48($this->getUri() . '/product-projections', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return Resource53
     */
    public function productTypes(): Resource53 {
        return new Resource53($this->getUri() . '/product-types', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return Resource56
     */
    public function reviews(): Resource56 {
        return new Resource56($this->getUri() . '/reviews', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return Resource59
     */
    public function shippingMethods(): Resource59 {
        return new Resource59($this->getUri() . '/shipping-methods', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return Resource62
     */
    public function shoppingLists(): Resource62 {
        return new Resource62($this->getUri() . '/shopping-lists', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return Resource65
     */
    public function states(): Resource65 {
        return new Resource65($this->getUri() . '/states', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return Resource67
     */
    public function subscriptions(): Resource67 {
        return new Resource67($this->getUri() . '/subscriptions', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return Resource70
     */
    public function taxCategories(): Resource70 {
        return new Resource70($this->getUri() . '/tax-categories', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return Resource72
     */
    public function types(): Resource72 {
        return new Resource72($this->getUri() . '/types', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return Resource75
     */
    public function zones(): Resource75 {
        return new Resource75($this->getUri() . '/zones', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return Resource77
     */
    public function me(): Resource77 {
        return new Resource77($this->getUri() . '/me', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return Resource89
     */
    public function extensions(): Resource89 {
        return new Resource89($this->getUri() . '/extensions', $this->getArgs(), $this->getMapper());
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
    public function post(ProjectUpdate $body = null): ByProjectKeyPost {
        $args = $this->getArgs();
        return new ByProjectKeyPost($args['projectKey'], $body);
    }


    /**
     * @param Project $project
     * @return ProjectUpdateBuilder
     */
    public function update(Project $project): ProjectUpdateBuilder
    {
        $builder = new ProjectUpdateBuilder(function(ProjectUpdateBuilder $builder) { return $this->post($builder->build()); });
        $builder->with($project);
        if ($project instanceof MapperAware) {
            $builder->setMapper($project->getMapper());
        }
        return $builder;
    }
}
