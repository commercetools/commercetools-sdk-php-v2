<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Category\CategoryUpdate;



class Resource3 extends Resource
{
    /**
     * @return ByProjectKeyCategoriesByIDGet
     */
    public function get(): ByProjectKeyCategoriesByIDGet {
        $args = $this->getArgs();
        return new ByProjectKeyCategoriesByIDGet($args['projectKey'], $args['ID']);
    }
    /**
     * @param CategoryUpdate $body
     * @return ByProjectKeyCategoriesByIDPost
     */
    public function post(CategoryUpdate $body): ByProjectKeyCategoriesByIDPost {
        $args = $this->getArgs();
        return new ByProjectKeyCategoriesByIDPost($args['projectKey'], $args['ID'], $body);
    }
    /**
     * @return ByProjectKeyCategoriesByIDDelete
     */
    public function delete(): ByProjectKeyCategoriesByIDDelete {
        $args = $this->getArgs();
        return new ByProjectKeyCategoriesByIDDelete($args['projectKey'], $args['ID']);
    }

}
