<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\TaxCategory\TaxCategoryDraft;


class Resource68 extends Resource
{
    /**
     * @return Resource69
     */
    public function withIDValue($ID = null): Resource69 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource69($this->getUri() . '/{ID}', $args);
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

}
