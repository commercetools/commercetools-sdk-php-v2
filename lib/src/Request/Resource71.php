<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Base\MapperAware;
use Commercetools\Types\Type\Type;
use Commercetools\Builder\TypeUpdateBuilder;

use Commercetools\Types\Type\TypeDraft;


class Resource71 extends Resource
{
    /**
     * @return Resource72
     */
    public function withKey($key = null): Resource72 {
        $args = array_merge($this->getArgs(), array_filter(['key' => $key], function($value) { return !is_null($value); }));
        return new Resource72($this->getUri() . '/key={key}', $args, $this->getMapper());
    }
    /**
     * @return Resource73
     */
    public function withId($ID = null): Resource73 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource73($this->getUri() . '/{ID}', $args, $this->getMapper());
    }


    /**
     * @return ByProjectKeyTypesGet
     */
    public function get(): ByProjectKeyTypesGet {
        $args = $this->getArgs();
        return new ByProjectKeyTypesGet($args['projectKey']);
    }
    /**
     * @param TypeDraft $body
     * @return ByProjectKeyTypesPost
     */
    public function post(TypeDraft $body = null): ByProjectKeyTypesPost {
        $args = $this->getArgs();
        return new ByProjectKeyTypesPost($args['projectKey'], $body);
    }


    public function update(Type $type)
    {
        $builder = new TypeUpdateBuilder(function(TypeUpdateBuilder $builder) { return $this->withIDValue($builder->getResource()->getId())->post($builder->build()); });
        $builder->with($type);
        if ($type instanceof MapperAware) {
            $builder->setMapper($type->getMapper());
        }
        return $builder;
    }

    public function delete(Type $type)
    {
        return $this->withIDValue($type->getId())->delete()->withVersion($type->getVersion());
    }

    /**
     * @param TypeDraft|callable $typeDraftDraft builder function <code>
     *   function(TypeDraft $typeDraft): TypeDraft {
     *     // modify $draft as needed
     *     return $typeDraft;
     *   }
     *   </code>
     */
    public function create($typeDraft)
    {
        if (is_callable($typeDraft)) {
            $callback = $typeDraft;
            $emptyDraft = $this->mapData(TypeDraft::class, null);
            $typeDraft = $callback($emptyDraft);
        }
        if (!$typeDraft instanceof TypeDraft) {
            throw new \InvalidArgumentException();
        }
        return $this->post($typeDraft);
    }
}
