<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Base\MapperAware;
use Commercetools\Types\CustomerGroup\CustomerGroup;
use Commercetools\Builder\CustomerGroupUpdateBuilder;

use Commercetools\Types\CustomerGroup\CustomerGroupDraft;


class Resource20 extends Resource
{
    /**
     * @return Resource21
     */
    public function withKey($key = null): Resource21 {
        $args = array_merge($this->getArgs(), array_filter(['key' => $key], function($value) { return !is_null($value); }));
        return new Resource21($this->getUri() . '/key={key}', $args, $this->getMapper());
    }
    /**
     * @return Resource22
     */
    public function withId($ID = null): Resource22 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource22($this->getUri() . '/{ID}', $args, $this->getMapper());
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


    public function update(CustomerGroup $customerGroup)
    {
        $builder = new CustomerGroupUpdateBuilder(function(CustomerGroupUpdateBuilder $builder) { return $this->withId($builder->getResource()->getId())->post($builder->build()); });
        $builder->with($customerGroup);
        if ($customerGroup instanceof MapperAware) {
            $builder->setMapper($customerGroup->getMapper());
        }
        return $builder;
    }

    public function delete(CustomerGroup $customerGroup)
    {
        return $this->withId($customerGroup->getId())->delete()->withVersion($customerGroup->getVersion());
    }

    /**
     * @param CustomerGroupDraft|callable $customerGroupDraftDraft builder function <code>
     *   function(CustomerGroupDraft $customerGroupDraft): CustomerGroupDraft {
     *     // modify $draft as needed
     *     return $customerGroupDraft;
     *   }
     *   </code>
     */
    public function create($customerGroupDraft)
    {
        if (is_callable($customerGroupDraft)) {
            $callback = $customerGroupDraft;
            $emptyDraft = $this->mapData(CustomerGroupDraft::class, null);
            $customerGroupDraft = $callback($emptyDraft);
        }
        if (!$customerGroupDraft instanceof CustomerGroupDraft) {
            throw new \InvalidArgumentException();
        }
        return $this->post($customerGroupDraft);
    }
}
