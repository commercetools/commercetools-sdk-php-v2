<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\TaxCategory\TaxCategoryUpdate;



class Resource70 extends Resource
{
    /**
     * @return ByProjectKeyTaxCategoriesByIDGet
     */
    public function get(): ByProjectKeyTaxCategoriesByIDGet {
        $args = $this->getArgs();
        return new ByProjectKeyTaxCategoriesByIDGet($args['projectKey'], $args['ID']);
    }
    /**
     * @param TaxCategoryUpdate $body
     * @return ByProjectKeyTaxCategoriesByIDPost
     */
    public function post(TaxCategoryUpdate $body = null): ByProjectKeyTaxCategoriesByIDPost {
        $args = $this->getArgs();
        return new ByProjectKeyTaxCategoriesByIDPost($args['projectKey'], $args['ID'], $body);
    }
    /**
     * @return ByProjectKeyTaxCategoriesByIDDelete
     */
    public function delete(): ByProjectKeyTaxCategoriesByIDDelete {
        $args = $this->getArgs();
        return new ByProjectKeyTaxCategoriesByIDDelete($args['projectKey'], $args['ID']);
    }

}
