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
use Commercetools\Types\CustomerGroup\CustomerGroup;
use Commercetools\Builder\CustomerGroupUpdateBuilder;

use Commercetools\Types\CustomerGroup\CustomerGroupDraft;


class ResourceByProjectKeyCustomerGroups extends Resource
{
    /**
     * @return ResourceByProjectKeyCustomerGroupsKeyByKey
     */
    public function withKey($key = null): ResourceByProjectKeyCustomerGroupsKeyByKey {
        $args = array_merge($this->getArgs(), array_filter(['key' => $key], function($value) { return !is_null($value); }));
        return new ResourceByProjectKeyCustomerGroupsKeyByKey($this->getUri() . '/key={key}', $args, $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyCustomerGroupsByID
     */
    public function withId($ID = null): ResourceByProjectKeyCustomerGroupsByID {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new ResourceByProjectKeyCustomerGroupsByID($this->getUri() . '/{ID}', $args, $this->getMapper());
    }


    /**
     * @return ByProjectKeyCustomerGroupsGet
     */
    public function get(): ByProjectKeyCustomerGroupsGet {
        $args = $this->getArgs();
        return new ByProjectKeyCustomerGroupsGet($args['projectKey']);
    }
    /**
     * @param CustomerGroupDraft $body
     * @return ByProjectKeyCustomerGroupsPost
     */
    public function post(CustomerGroupDraft $body = null): ByProjectKeyCustomerGroupsPost {
        $args = $this->getArgs();
        return new ByProjectKeyCustomerGroupsPost($args['projectKey'], $body);
    }


    /**
     * @param CustomerGroup $customerGroup
     * @return CustomerGroupUpdateBuilder
     */
    public function update(CustomerGroup $customerGroup): CustomerGroupUpdateBuilder
    {
        $builder = new CustomerGroupUpdateBuilder(function(CustomerGroupUpdateBuilder $builder) { return $this->withId($builder->getResource()->getId())->post($builder->build()); });
        $builder->with($customerGroup);
        if ($customerGroup instanceof MapperAware) {
            $builder->setMapper($customerGroup->getMapper());
        }
        return $builder;
    }

    /**
     * @param CustomerGroup $customerGroup
     * @return ByProjectKeyCustomerGroupsByIDDelete
     */
    public function delete(CustomerGroup $customerGroup): ByProjectKeyCustomerGroupsByIDDelete
    {
        return $this->withId($customerGroup->getId())->delete()->withVersion($customerGroup->getVersion());
    }

    /**
     * @param CustomerGroupDraft|callable $customerGroupDraft builder function <code>
     *   function(CustomerGroupDraft $customerGroupDraft): CustomerGroupDraft {
     *     // modify $draft as needed
     *     return $customerGroupDraft;
     *   }
     *   </code>
     * @throws InvalidArgumentException
     * @return ByProjectKeyCustomerGroupsPost
     */
    public function create($customerGroupDraft): ByProjectKeyCustomerGroupsPost
    {
        if (is_callable($customerGroupDraft)) {
            $callback = $customerGroupDraft;
            $emptyDraft = $this->mapData(CustomerGroupDraft::class, null);
            $customerGroupDraft = $callback($emptyDraft);
        }
        if (!$customerGroupDraft instanceof CustomerGroupDraft) {
            throw new InvalidArgumentException();
        }
        return $this->post($customerGroupDraft);
    }
}
