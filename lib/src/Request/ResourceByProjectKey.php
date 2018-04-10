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


class ResourceByProjectKey extends Resource
{
    /**
     * @return ResourceByProjectKeyCategories
     */
    public function categories(): ResourceByProjectKeyCategories {
        return new ResourceByProjectKeyCategories($this->getUri() . '/categories', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyCarts
     */
    public function carts(): ResourceByProjectKeyCarts {
        return new ResourceByProjectKeyCarts($this->getUri() . '/carts', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyCartDiscounts
     */
    public function cartDiscounts(): ResourceByProjectKeyCartDiscounts {
        return new ResourceByProjectKeyCartDiscounts($this->getUri() . '/cart-discounts', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyChannels
     */
    public function channels(): ResourceByProjectKeyChannels {
        return new ResourceByProjectKeyChannels($this->getUri() . '/channels', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyCustomers
     */
    public function customers(): ResourceByProjectKeyCustomers {
        return new ResourceByProjectKeyCustomers($this->getUri() . '/customers', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyCustomerGroups
     */
    public function customerGroups(): ResourceByProjectKeyCustomerGroups {
        return new ResourceByProjectKeyCustomerGroups($this->getUri() . '/customer-groups', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyCustomObjects
     */
    public function customObjects(): ResourceByProjectKeyCustomObjects {
        return new ResourceByProjectKeyCustomObjects($this->getUri() . '/custom-objects', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyDiscountCodes
     */
    public function discountCodes(): ResourceByProjectKeyDiscountCodes {
        return new ResourceByProjectKeyDiscountCodes($this->getUri() . '/discount-codes', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyGraphql
     */
    public function graphql(): ResourceByProjectKeyGraphql {
        return new ResourceByProjectKeyGraphql($this->getUri() . '/graphql', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyInventory
     */
    public function inventory(): ResourceByProjectKeyInventory {
        return new ResourceByProjectKeyInventory($this->getUri() . '/inventory', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyLogin
     */
    public function login(): ResourceByProjectKeyLogin {
        return new ResourceByProjectKeyLogin($this->getUri() . '/login', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyMessages
     */
    public function messages(): ResourceByProjectKeyMessages {
        return new ResourceByProjectKeyMessages($this->getUri() . '/messages', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyOrders
     */
    public function orders(): ResourceByProjectKeyOrders {
        return new ResourceByProjectKeyOrders($this->getUri() . '/orders', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyPayments
     */
    public function payments(): ResourceByProjectKeyPayments {
        return new ResourceByProjectKeyPayments($this->getUri() . '/payments', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyProducts
     */
    public function products(): ResourceByProjectKeyProducts {
        return new ResourceByProjectKeyProducts($this->getUri() . '/products', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyProductDiscounts
     */
    public function productDiscounts(): ResourceByProjectKeyProductDiscounts {
        return new ResourceByProjectKeyProductDiscounts($this->getUri() . '/product-discounts', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyProductProjections
     */
    public function productProjections(): ResourceByProjectKeyProductProjections {
        return new ResourceByProjectKeyProductProjections($this->getUri() . '/product-projections', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyProductTypes
     */
    public function productTypes(): ResourceByProjectKeyProductTypes {
        return new ResourceByProjectKeyProductTypes($this->getUri() . '/product-types', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyReviews
     */
    public function reviews(): ResourceByProjectKeyReviews {
        return new ResourceByProjectKeyReviews($this->getUri() . '/reviews', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyShippingMethods
     */
    public function shippingMethods(): ResourceByProjectKeyShippingMethods {
        return new ResourceByProjectKeyShippingMethods($this->getUri() . '/shipping-methods', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyShoppingLists
     */
    public function shoppingLists(): ResourceByProjectKeyShoppingLists {
        return new ResourceByProjectKeyShoppingLists($this->getUri() . '/shopping-lists', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyStates
     */
    public function states(): ResourceByProjectKeyStates {
        return new ResourceByProjectKeyStates($this->getUri() . '/states', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeySubscriptions
     */
    public function subscriptions(): ResourceByProjectKeySubscriptions {
        return new ResourceByProjectKeySubscriptions($this->getUri() . '/subscriptions', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyTaxCategories
     */
    public function taxCategories(): ResourceByProjectKeyTaxCategories {
        return new ResourceByProjectKeyTaxCategories($this->getUri() . '/tax-categories', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyTypes
     */
    public function types(): ResourceByProjectKeyTypes {
        return new ResourceByProjectKeyTypes($this->getUri() . '/types', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyZones
     */
    public function zones(): ResourceByProjectKeyZones {
        return new ResourceByProjectKeyZones($this->getUri() . '/zones', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyMe
     */
    public function me(): ResourceByProjectKeyMe {
        return new ResourceByProjectKeyMe($this->getUri() . '/me', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyExtensions
     */
    public function extensions(): ResourceByProjectKeyExtensions {
        return new ResourceByProjectKeyExtensions($this->getUri() . '/extensions', $this->getArgs(), $this->getMapper());
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
