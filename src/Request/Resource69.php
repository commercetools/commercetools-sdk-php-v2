<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Base\MapperAware;
use Commercetools\Types\TaxCategory\TaxCategory;
use Commercetools\Builder\TaxCategoryUpdateBuilder;

use Commercetools\Types\TaxCategory\TaxCategoryDraft;


class Resource69 extends Resource
{
    /**
     * @return Resource70
     */
    public function withIDValue($ID = null): Resource70 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource70($this->getUri() . '/{ID}', $args);
    }


    /**
     * @return ByProjectKeyTaxCategoriesGet
     */
    public function get(): ByProjectKeyTaxCategoriesGet {
        $args = $this->getArgs();
        return new ByProjectKeyTaxCategoriesGet($args['projectKey']);
    }
    /**
     * @param TaxCategoryDraft $body
     * @return ByProjectKeyTaxCategoriesPost
     */
    public function post(TaxCategoryDraft $body): ByProjectKeyTaxCategoriesPost {
        $args = $this->getArgs();
        return new ByProjectKeyTaxCategoriesPost($args['projectKey'], $body);
    }


    public function update(TaxCategory $resource)
    {
        $builder = new TaxCategoryUpdateBuilder(function (TaxCategoryUpdateBuilder $builder) { return $this->withIDValue($builder->getResource()->getId())->post($builder->build()); });
        $builder->with($resource);
        if ($resource instanceof MapperAware) {
            $builder->setMapper($resource->getMapper());
        }
        return $builder;
    }
}
