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
use Commercetools\Types\Product\Product;
use Commercetools\Builder\ProductUpdateBuilder;

use Commercetools\Types\Product\ProductDraft;


class ResourceByProjectKeyProducts extends Resource
{
    /**
     * @return ResourceByProjectKeyProductsKeyByKey
     */
    public function withKey($key = null): ResourceByProjectKeyProductsKeyByKey {
        $args = array_merge($this->getArgs(), array_filter(['key' => $key], function($value) { return !is_null($value); }));
        return new ResourceByProjectKeyProductsKeyByKey($this->getUri() . '/key={key}', $args, $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyProductsByID
     */
    public function withId($ID = null): ResourceByProjectKeyProductsByID {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new ResourceByProjectKeyProductsByID($this->getUri() . '/{ID}', $args, $this->getMapper());
    }


    /**
     * @return ByProjectKeyProductsGet
     */
    public function get(): ByProjectKeyProductsGet {
        $args = $this->getArgs();
        return new ByProjectKeyProductsGet($args['projectKey']);
    }
    /**
     * @param ProductDraft $body
     * @return ByProjectKeyProductsPost
     */
    public function post(ProductDraft $body = null): ByProjectKeyProductsPost {
        $args = $this->getArgs();
        return new ByProjectKeyProductsPost($args['projectKey'], $body);
    }


    /**
     * @param Product $product
     * @return ProductUpdateBuilder
     */
    public function update(Product $product): ProductUpdateBuilder
    {
        $builder = new ProductUpdateBuilder(function(ProductUpdateBuilder $builder) { return $this->withId($builder->getResource()->getId())->post($builder->build()); });
        $builder->with($product);
        if ($product instanceof MapperAware) {
            $builder->setMapper($product->getMapper());
        }
        return $builder;
    }

    /**
     * @param Product $product
     * @return ByProjectKeyProductsByIDDelete
     */
    public function delete(Product $product): ByProjectKeyProductsByIDDelete
    {
        return $this->withId($product->getId())->delete()->withVersion($product->getVersion());
    }

    /**
     * @param ProductDraft|callable $productDraft builder function <code>
     *   function(ProductDraft $productDraft): ProductDraft {
     *     // modify $draft as needed
     *     return $productDraft;
     *   }
     *   </code>
     * @throws InvalidArgumentException
     * @return ByProjectKeyProductsPost
     */
    public function create($productDraft): ByProjectKeyProductsPost
    {
        if (is_callable($productDraft)) {
            $callback = $productDraft;
            $emptyDraft = $this->mapData(ProductDraft::class, null);
            $productDraft = $callback($emptyDraft);
        }
        if (!$productDraft instanceof ProductDraft) {
            throw new InvalidArgumentException();
        }
        return $this->post($productDraft);
    }
}
