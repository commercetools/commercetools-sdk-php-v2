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
use Commercetools\Types\Customer\Customer;
use Commercetools\Builder\CustomerUpdateBuilder;

use Commercetools\Types\Customer\CustomerDraft;


class ResourceByProjectKeyCustomers extends Resource
{
    /**
     * @return ResourceByProjectKeyCustomersPasswordTokenByPasswordToken
     */
    public function withPasswordToken($passwordToken = null): ResourceByProjectKeyCustomersPasswordTokenByPasswordToken {
        $args = array_merge($this->getArgs(), array_filter(['passwordToken' => $passwordToken], function($value) { return !is_null($value); }));
        return new ResourceByProjectKeyCustomersPasswordTokenByPasswordToken($this->getUri() . '/password-token={passwordToken}', $args, $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyCustomersEmailTokenByEmailToken
     */
    public function withEmailToken($emailToken = null): ResourceByProjectKeyCustomersEmailTokenByEmailToken {
        $args = array_merge($this->getArgs(), array_filter(['emailToken' => $emailToken], function($value) { return !is_null($value); }));
        return new ResourceByProjectKeyCustomersEmailTokenByEmailToken($this->getUri() . '/email-token={emailToken}', $args, $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyCustomersEmailToken
     */
    public function emailToken(): ResourceByProjectKeyCustomersEmailToken {
        return new ResourceByProjectKeyCustomersEmailToken($this->getUri() . '/email-token', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyCustomersEmail
     */
    public function email(): ResourceByProjectKeyCustomersEmail {
        return new ResourceByProjectKeyCustomersEmail($this->getUri() . '/email', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyCustomersPassword
     */
    public function password(): ResourceByProjectKeyCustomersPassword {
        return new ResourceByProjectKeyCustomersPassword($this->getUri() . '/password', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyCustomersPasswordToken
     */
    public function passwordToken(): ResourceByProjectKeyCustomersPasswordToken {
        return new ResourceByProjectKeyCustomersPasswordToken($this->getUri() . '/password-token', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyCustomersByID
     */
    public function withId($ID = null): ResourceByProjectKeyCustomersByID {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new ResourceByProjectKeyCustomersByID($this->getUri() . '/{ID}', $args, $this->getMapper());
    }


    /**
     * @return ByProjectKeyCustomersGet
     */
    public function get(): ByProjectKeyCustomersGet {
        $args = $this->getArgs();
        return new ByProjectKeyCustomersGet($args['projectKey']);
    }
    /**
     * @param CustomerDraft $body
     * @return ByProjectKeyCustomersPost
     */
    public function post(CustomerDraft $body = null): ByProjectKeyCustomersPost {
        $args = $this->getArgs();
        return new ByProjectKeyCustomersPost($args['projectKey'], $body);
    }


    /**
     * @param Customer $customer
     * @return CustomerUpdateBuilder
     */
    public function update(Customer $customer): CustomerUpdateBuilder
    {
        $builder = new CustomerUpdateBuilder(function(CustomerUpdateBuilder $builder) { return $this->withId($builder->getResource()->getId())->post($builder->build()); });
        $builder->with($customer);
        if ($customer instanceof MapperAware) {
            $builder->setMapper($customer->getMapper());
        }
        return $builder;
    }

    /**
     * @param Customer $customer
     * @return ByProjectKeyCustomersByIDDelete
     */
    public function delete(Customer $customer): ByProjectKeyCustomersByIDDelete
    {
        return $this->withId($customer->getId())->delete()->withVersion($customer->getVersion());
    }

    /**
     * @param CustomerDraft|callable $customerDraft builder function <code>
     *   function(CustomerDraft $customerDraft): CustomerDraft {
     *     // modify $draft as needed
     *     return $customerDraft;
     *   }
     *   </code>
     * @throws InvalidArgumentException
     * @return ByProjectKeyCustomersPost
     */
    public function create($customerDraft): ByProjectKeyCustomersPost
    {
        if (is_callable($customerDraft)) {
            $callback = $customerDraft;
            $emptyDraft = $this->mapData(CustomerDraft::class, null);
            $customerDraft = $callback($emptyDraft);
        }
        if (!$customerDraft instanceof CustomerDraft) {
            throw new InvalidArgumentException();
        }
        return $this->post($customerDraft);
    }
}
