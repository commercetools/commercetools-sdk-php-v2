<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Base\MapperAware;
use Commercetools\Types\State\State;
use Commercetools\Builder\StateUpdateBuilder;

use Commercetools\Types\State\StateDraft;


class Resource64 extends Resource
{
    /**
     * @return Resource65
     */
    public function withIDValue($ID = null): Resource65 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource65($this->getUri() . '/{ID}', $args);
    }


    /**
     * @return ByProjectKeyStatesGet
     */
    public function get(): ByProjectKeyStatesGet {
        $args = $this->getArgs();
        return new ByProjectKeyStatesGet($args['projectKey']);
    }
    /**
     * @param StateDraft $body
     * @return ByProjectKeyStatesPost
     */
    public function post(StateDraft $body): ByProjectKeyStatesPost {
        $args = $this->getArgs();
        return new ByProjectKeyStatesPost($args['projectKey'], $body);
    }


    public function update(State $resource)
    {
        $builder = new StateUpdateBuilder(function (StateUpdateBuilder $builder) { return $this->withIDValue($builder->getResource()->getId())->post($builder->build()); });
        $builder->with($resource);
        if ($resource instanceof MapperAware) {
            $builder->setMapper($resource->getMapper());
        }
        return $builder;
    }
}
