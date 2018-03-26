<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Base\MapperAware;
use Commercetools\Types\Product\Product;
use Commercetools\Builder\ProductUpdateBuilder;

use Commercetools\Types\Product\ProductDraft;


class Resource41 extends Resource
{
    /**
     * @return Resource42
     */
    public function keyWithKeyValue($key = null): Resource42 {
        $args = array_merge($this->getArgs(), array_filter(['key' => $key], function($value) { return !is_null($value); }));
        return new Resource42($this->getUri() . '/key={key}', $args, $this->getMapper());
    }
    /**
     * @return Resource43
     */
    public function withIDValue($ID = null): Resource43 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource43($this->getUri() . '/{ID}', $args, $this->getMapper());
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


    public function update(Product $product)
    {
        $builder = new ProductUpdateBuilder(function (ProductUpdateBuilder $builder) { return $this->withIDValue($builder->getResource()->getId())->post($builder->build()); });
        $builder->with($product);
        if ($product instanceof MapperAware) {
            $builder->setMapper($product->getMapper());
        }
        return $builder;
    }

    public function delete(Product $product)
    {
        return $this->withIDValue($product->getId())->delete()->withVersion($product->getVersion());
    }

    /**
     * @param ProductDraft|callable $productDraftDraft builder function <code>
     *   function (ProductDraft $productDraft): ProductDraft {
     *     // modify $draft as needed
     *     return $productDraft;
     *   }
     *   </code>
     */
    public function create($productDraft)
    {
        if (is_callable($productDraft)) {
            $callback = $productDraft;
            $emptyDraft = $this->mapData(ProductDraft::class, null);
            $productDraft = $callback($emptyDraft);
        }
        if (!$productDraft instanceof ProductDraft) {
            throw new \InvalidArgumentException();
        }
        return $this->post($productDraft);
    }
}
