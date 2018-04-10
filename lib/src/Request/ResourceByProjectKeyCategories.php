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
use Commercetools\Types\Category\Category;
use Commercetools\Builder\CategoryUpdateBuilder;

use Commercetools\Types\Category\CategoryDraft;


class ResourceByProjectKeyCategories extends Resource
{
    /**
     * @return ResourceByProjectKeyCategoriesKeyByKey
     */
    public function withKey($key = null): ResourceByProjectKeyCategoriesKeyByKey {
        $args = array_merge($this->getArgs(), array_filter(['key' => $key], function($value) { return !is_null($value); }));
        return new ResourceByProjectKeyCategoriesKeyByKey($this->getUri() . '/key={key}', $args, $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyCategoriesByID
     */
    public function withId($ID = null): ResourceByProjectKeyCategoriesByID {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new ResourceByProjectKeyCategoriesByID($this->getUri() . '/{ID}', $args, $this->getMapper());
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
    public function post(CategoryDraft $body = null): ByProjectKeyCategoriesPost {
        $args = $this->getArgs();
        return new ByProjectKeyCategoriesPost($args['projectKey'], $body);
    }


    /**
     * @param Category $category
     * @return CategoryUpdateBuilder
     */
    public function update(Category $category): CategoryUpdateBuilder
    {
        $builder = new CategoryUpdateBuilder(function(CategoryUpdateBuilder $builder) { return $this->withId($builder->getResource()->getId())->post($builder->build()); });
        $builder->with($category);
        if ($category instanceof MapperAware) {
            $builder->setMapper($category->getMapper());
        }
        return $builder;
    }

    /**
     * @param Category $category
     * @return ByProjectKeyCategoriesByIDDelete
     */
    public function delete(Category $category): ByProjectKeyCategoriesByIDDelete
    {
        return $this->withId($category->getId())->delete()->withVersion($category->getVersion());
    }

    /**
     * @param CategoryDraft|callable $categoryDraft builder function <code>
     *   function(CategoryDraft $categoryDraft): CategoryDraft {
     *     // modify $draft as needed
     *     return $categoryDraft;
     *   }
     *   </code>
     * @throws InvalidArgumentException
     * @return ByProjectKeyCategoriesPost
     */
    public function create($categoryDraft): ByProjectKeyCategoriesPost
    {
        if (is_callable($categoryDraft)) {
            $callback = $categoryDraft;
            $emptyDraft = $this->mapData(CategoryDraft::class, null);
            $categoryDraft = $callback($emptyDraft);
        }
        if (!$categoryDraft instanceof CategoryDraft) {
            throw new InvalidArgumentException();
        }
        return $this->post($categoryDraft);
    }
}
