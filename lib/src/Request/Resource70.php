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
use Commercetools\Types\TaxCategory\TaxCategory;
use Commercetools\Builder\TaxCategoryUpdateBuilder;

use Commercetools\Types\TaxCategory\TaxCategoryDraft;


class Resource70 extends Resource
{
    /**
     * @return Resource71
     */
    public function withId($ID = null): Resource71 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource71($this->getUri() . '/{ID}', $args, $this->getMapper());
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
    public function post(TaxCategoryDraft $body = null): ByProjectKeyTaxCategoriesPost {
        $args = $this->getArgs();
        return new ByProjectKeyTaxCategoriesPost($args['projectKey'], $body);
    }


    /**
     * @param TaxCategory $taxCategory
     * @return TaxCategoryUpdateBuilder
     */
    public function update(TaxCategory $taxCategory): TaxCategoryUpdateBuilder
    {
        $builder = new TaxCategoryUpdateBuilder(function(TaxCategoryUpdateBuilder $builder) { return $this->withId($builder->getResource()->getId())->post($builder->build()); });
        $builder->with($taxCategory);
        if ($taxCategory instanceof MapperAware) {
            $builder->setMapper($taxCategory->getMapper());
        }
        return $builder;
    }

    /**
     * @param TaxCategory $taxCategory
     * @return ByProjectKeyTaxCategoriesByIDDelete
     */
    public function delete(TaxCategory $taxCategory): ByProjectKeyTaxCategoriesByIDDelete
    {
        return $this->withId($taxCategory->getId())->delete()->withVersion($taxCategory->getVersion());
    }

    /**
     * @param TaxCategoryDraft|callable $taxCategoryDraft builder function <code>
     *   function(TaxCategoryDraft $taxCategoryDraft): TaxCategoryDraft {
     *     // modify $draft as needed
     *     return $taxCategoryDraft;
     *   }
     *   </code>
     * @throws InvalidArgumentException
     * @return ByProjectKeyTaxCategoriesPost
     */
    public function create($taxCategoryDraft): ByProjectKeyTaxCategoriesPost
    {
        if (is_callable($taxCategoryDraft)) {
            $callback = $taxCategoryDraft;
            $emptyDraft = $this->mapData(TaxCategoryDraft::class, null);
            $taxCategoryDraft = $callback($emptyDraft);
        }
        if (!$taxCategoryDraft instanceof TaxCategoryDraft) {
            throw new InvalidArgumentException();
        }
        return $this->post($taxCategoryDraft);
    }
}
