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
use Commercetools\Types\State\State;
use Commercetools\Builder\StateUpdateBuilder;

use Commercetools\Types\State\StateDraft;


class ResourceByProjectKeyStates extends Resource
{
    /**
     * @return ResourceByProjectKeyStatesByID
     */
    public function withId($ID = null): ResourceByProjectKeyStatesByID {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new ResourceByProjectKeyStatesByID($this->getUri() . '/{ID}', $args, $this->getMapper());
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
    public function post(StateDraft $body = null): ByProjectKeyStatesPost {
        $args = $this->getArgs();
        return new ByProjectKeyStatesPost($args['projectKey'], $body);
    }


    /**
     * @param State $state
     * @return StateUpdateBuilder
     */
    public function update(State $state): StateUpdateBuilder
    {
        $builder = new StateUpdateBuilder(function(StateUpdateBuilder $builder) { return $this->withId($builder->getResource()->getId())->post($builder->build()); });
        $builder->with($state);
        if ($state instanceof MapperAware) {
            $builder->setMapper($state->getMapper());
        }
        return $builder;
    }

    /**
     * @param State $state
     * @return ByProjectKeyStatesByIDDelete
     */
    public function delete(State $state): ByProjectKeyStatesByIDDelete
    {
        return $this->withId($state->getId())->delete()->withVersion($state->getVersion());
    }

    /**
     * @param StateDraft|callable $stateDraft builder function <code>
     *   function(StateDraft $stateDraft): StateDraft {
     *     // modify $draft as needed
     *     return $stateDraft;
     *   }
     *   </code>
     * @throws InvalidArgumentException
     * @return ByProjectKeyStatesPost
     */
    public function create($stateDraft): ByProjectKeyStatesPost
    {
        if (is_callable($stateDraft)) {
            $callback = $stateDraft;
            $emptyDraft = $this->mapData(StateDraft::class, null);
            $stateDraft = $callback($emptyDraft);
        }
        if (!$stateDraft instanceof StateDraft) {
            throw new InvalidArgumentException();
        }
        return $this->post($stateDraft);
    }
}
