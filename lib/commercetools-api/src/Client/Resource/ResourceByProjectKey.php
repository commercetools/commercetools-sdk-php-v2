<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;
use Commercetools\Api\Models\Project\ProjectUpdate;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKey extends ApiResource
{
   /**
    */
   public function categories(): ResourceByProjectKeyCategories {
      $args = $this->getArgs();
      
      return new ResourceByProjectKeyCategories($this->getUri() . '/categories', $args, $this->getClient());
   }
   /**
    */
   public function carts(): ResourceByProjectKeyCarts {
      $args = $this->getArgs();
      
      return new ResourceByProjectKeyCarts($this->getUri() . '/carts', $args, $this->getClient());
   }
   /**
    */
   public function cartDiscounts(): ResourceByProjectKeyCartDiscounts {
      $args = $this->getArgs();
      
      return new ResourceByProjectKeyCartDiscounts($this->getUri() . '/cart-discounts', $args, $this->getClient());
   }
   /**
    */
   public function channels(): ResourceByProjectKeyChannels {
      $args = $this->getArgs();
      
      return new ResourceByProjectKeyChannels($this->getUri() . '/channels', $args, $this->getClient());
   }
   /**
    */
   public function customers(): ResourceByProjectKeyCustomers {
      $args = $this->getArgs();
      
      return new ResourceByProjectKeyCustomers($this->getUri() . '/customers', $args, $this->getClient());
   }
   /**
    */
   public function customerGroups(): ResourceByProjectKeyCustomerGroups {
      $args = $this->getArgs();
      
      return new ResourceByProjectKeyCustomerGroups($this->getUri() . '/customer-groups', $args, $this->getClient());
   }
   /**
    */
   public function customObjects(): ResourceByProjectKeyCustomObjects {
      $args = $this->getArgs();
      
      return new ResourceByProjectKeyCustomObjects($this->getUri() . '/custom-objects', $args, $this->getClient());
   }
   /**
    */
   public function discountCodes(): ResourceByProjectKeyDiscountCodes {
      $args = $this->getArgs();
      
      return new ResourceByProjectKeyDiscountCodes($this->getUri() . '/discount-codes', $args, $this->getClient());
   }
   /**
    */
   public function graphql(): ResourceByProjectKeyGraphql {
      $args = $this->getArgs();
      
      return new ResourceByProjectKeyGraphql($this->getUri() . '/graphql', $args, $this->getClient());
   }
   /**
    */
   public function inventory(): ResourceByProjectKeyInventory {
      $args = $this->getArgs();
      
      return new ResourceByProjectKeyInventory($this->getUri() . '/inventory', $args, $this->getClient());
   }
   /**
    */
   public function login(): ResourceByProjectKeyLogin {
      $args = $this->getArgs();
      
      return new ResourceByProjectKeyLogin($this->getUri() . '/login', $args, $this->getClient());
   }
   /**
    */
   public function messages(): ResourceByProjectKeyMessages {
      $args = $this->getArgs();
      
      return new ResourceByProjectKeyMessages($this->getUri() . '/messages', $args, $this->getClient());
   }
   /**
    */
   public function orders(): ResourceByProjectKeyOrders {
      $args = $this->getArgs();
      
      return new ResourceByProjectKeyOrders($this->getUri() . '/orders', $args, $this->getClient());
   }
   /**
    */
   public function payments(): ResourceByProjectKeyPayments {
      $args = $this->getArgs();
      
      return new ResourceByProjectKeyPayments($this->getUri() . '/payments', $args, $this->getClient());
   }
   /**
    */
   public function products(): ResourceByProjectKeyProducts {
      $args = $this->getArgs();
      
      return new ResourceByProjectKeyProducts($this->getUri() . '/products', $args, $this->getClient());
   }
   /**
    */
   public function productDiscounts(): ResourceByProjectKeyProductDiscounts {
      $args = $this->getArgs();
      
      return new ResourceByProjectKeyProductDiscounts($this->getUri() . '/product-discounts', $args, $this->getClient());
   }
   /**
    */
   public function productProjections(): ResourceByProjectKeyProductProjections {
      $args = $this->getArgs();
      
      return new ResourceByProjectKeyProductProjections($this->getUri() . '/product-projections', $args, $this->getClient());
   }
   /**
    */
   public function productTypes(): ResourceByProjectKeyProductTypes {
      $args = $this->getArgs();
      
      return new ResourceByProjectKeyProductTypes($this->getUri() . '/product-types', $args, $this->getClient());
   }
   /**
    */
   public function reviews(): ResourceByProjectKeyReviews {
      $args = $this->getArgs();
      
      return new ResourceByProjectKeyReviews($this->getUri() . '/reviews', $args, $this->getClient());
   }
   /**
    */
   public function shippingMethods(): ResourceByProjectKeyShippingMethods {
      $args = $this->getArgs();
      
      return new ResourceByProjectKeyShippingMethods($this->getUri() . '/shipping-methods', $args, $this->getClient());
   }
   /**
    */
   public function shoppingLists(): ResourceByProjectKeyShoppingLists {
      $args = $this->getArgs();
      
      return new ResourceByProjectKeyShoppingLists($this->getUri() . '/shopping-lists', $args, $this->getClient());
   }
   /**
    */
   public function states(): ResourceByProjectKeyStates {
      $args = $this->getArgs();
      
      return new ResourceByProjectKeyStates($this->getUri() . '/states', $args, $this->getClient());
   }
   /**
    */
   public function subscriptions(): ResourceByProjectKeySubscriptions {
      $args = $this->getArgs();
      
      return new ResourceByProjectKeySubscriptions($this->getUri() . '/subscriptions', $args, $this->getClient());
   }
   /**
    */
   public function taxCategories(): ResourceByProjectKeyTaxCategories {
      $args = $this->getArgs();
      
      return new ResourceByProjectKeyTaxCategories($this->getUri() . '/tax-categories', $args, $this->getClient());
   }
   /**
    */
   public function types(): ResourceByProjectKeyTypes {
      $args = $this->getArgs();
      
      return new ResourceByProjectKeyTypes($this->getUri() . '/types', $args, $this->getClient());
   }
   /**
    */
   public function zones(): ResourceByProjectKeyZones {
      $args = $this->getArgs();
      
      return new ResourceByProjectKeyZones($this->getUri() . '/zones', $args, $this->getClient());
   }
   /**
    */
   public function me(): ResourceByProjectKeyMe {
      $args = $this->getArgs();
      
      return new ResourceByProjectKeyMe($this->getUri() . '/me', $args, $this->getClient());
   }
   /**
    */
   public function extensions(): ResourceByProjectKeyExtensions {
      $args = $this->getArgs();
      
      return new ResourceByProjectKeyExtensions($this->getUri() . '/extensions', $args, $this->getClient());
   }
   /**
    */
   public function apiClients(): ResourceByProjectKeyApiClients {
      $args = $this->getArgs();
      
      return new ResourceByProjectKeyApiClients($this->getUri() . '/api-clients', $args, $this->getClient());
   }
   /**
    */
   public function stores(): ResourceByProjectKeyStores {
      $args = $this->getArgs();
      
      return new ResourceByProjectKeyStores($this->getUri() . '/stores', $args, $this->getClient());
   }
   /**
    * @psalm-param scalar $storeKey
    */
   public function inStoreKeyWithStoreKeyValue($storeKey = null): ResourceByProjectKeyInStoreKeyByStoreKey {
      $args = $this->getArgs();
      if (!is_null($storeKey)) { $args['storeKey'] = $storeKey; }
      return new ResourceByProjectKeyInStoreKeyByStoreKey($this->getUri() . '/in-store/key={storeKey}', $args, $this->getClient());
   }
   
   /**
    * @psalm-param ?object $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function get($body = null, array $headers = []): ByProjectKeyGet {
      $args = $this->getArgs();
      return new ByProjectKeyGet($args['projectKey'], $body, $headers, $this->getClient());
   }
   /**
    * @psalm-param ?ProjectUpdate $body
    * @psalm-param array<string, scalar|scalar[]> $headers
    */
   public function post(?ProjectUpdate $body = null, array $headers = []): ByProjectKeyPost {
      $args = $this->getArgs();
      return new ByProjectKeyPost($args['projectKey'], $body, $headers, $this->getClient());
   }
   
}