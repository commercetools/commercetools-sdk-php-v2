<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Base\MapperAware;
use Commercetools\Types\ProductType\ProductType;
use Commercetools\Builder\ProductTypeUpdateBuilder;

use Commercetools\Types\ProductType\ProductTypeDraft;


class Resource52 extends Resource
{
    /**
     * @return Resource53
     */
    public function keyWithKeyValue($key = null): Resource53 {
        $args = array_merge($this->getArgs(), array_filter(['key' => $key], function($value) { return !is_null($value); }));
        return new Resource53($this->getUri() . '/key={key}', $args);
    }
    /**
     * @return Resource54
     */
    public function withIDValue($ID = null): Resource54 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource54($this->getUri() . '/{ID}', $args);
    }


    /**
     * @return ByProjectKeyProductTypesGet
     */
    public function get(): ByProjectKeyProductTypesGet {
        $args = $this->getArgs();
        return new ByProjectKeyProductTypesGet($args['projectKey']);
    }
    /**
     * @param ProductTypeDraft $body
     * @return ByProjectKeyProductTypesPost
     */
    public function post(ProductTypeDraft $body): ByProjectKeyProductTypesPost {
        $args = $this->getArgs();
        return new ByProjectKeyProductTypesPost($args['projectKey'], $body);
    }


    public function update(ProductType $resource)
    {
        $builder = new ProductTypeUpdateBuilder(function (ProductTypeUpdateBuilder $builder) { return $this->withIDValue($builder->getResource()->getId())->post($builder->build()); });
        $builder->with($resource);
        if ($resource instanceof MapperAware) {
            $builder->setMapper($resource->getMapper());
        }
        return $builder;
    }
}
