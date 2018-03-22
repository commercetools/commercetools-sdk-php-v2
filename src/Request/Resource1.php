<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Base\MapperAware;
use Commercetools\Types\Category\Category;
use Commercetools\Builder\CategoryUpdateBuilder;

use Commercetools\Types\Category\CategoryDraft;


class Resource1 extends Resource
{
    /**
     * @return Resource2
     */
    public function keyWithKeyValue($key = null): Resource2 {
        $args = array_merge($this->getArgs(), array_filter(['key' => $key], function($value) { return !is_null($value); }));
        return new Resource2($this->getUri() . '/key={key}', $args);
    }
    /**
     * @return Resource3
     */
    public function withIDValue($ID = null): Resource3 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource3($this->getUri() . '/{ID}', $args);
    }


    /**
     * @return ByProjectKeyCategoriesGet
     */
    public function get(): ByProjectKeyCategoriesGet {
        $args = $this->getArgs();
        return new ByProjectKeyCategoriesGet($args['projectKey']);
    }
    /**
     * @param CategoryDraft $body
     * @return ByProjectKeyCategoriesPost
     */
    public function post(CategoryDraft $body): ByProjectKeyCategoriesPost {
        $args = $this->getArgs();
        return new ByProjectKeyCategoriesPost($args['projectKey'], $body);
    }


    public function update(Category $resource)
    {
        $builder = new CategoryUpdateBuilder(function (CategoryUpdateBuilder $builder) { return $this->withIDValue($builder->getResource()->getId())->post($builder->build()); });
        $builder->with($resource);
        if ($resource instanceof MapperAware) {
            $builder->setMapper($resource->getMapper());
        }
        return $builder;
    }
}
