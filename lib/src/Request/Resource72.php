<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Type\TypeUpdate;



class Resource72 extends Resource
{
    /**
     * @return ByProjectKeyTypesKeyByKeyGet
     */
    public function get(): ByProjectKeyTypesKeyByKeyGet {
        $args = $this->getArgs();
        return new ByProjectKeyTypesKeyByKeyGet($args['projectKey'], $args['key']);
    }
    /**
     * @param TypeUpdate $body
     * @return ByProjectKeyTypesKeyByKeyPost
     */
    public function post(TypeUpdate $body): ByProjectKeyTypesKeyByKeyPost {
        $args = $this->getArgs();
        return new ByProjectKeyTypesKeyByKeyPost($args['projectKey'], $args['key'], $body);
    }
    /**
     * @return ByProjectKeyTypesKeyByKeyDelete
     */
    public function delete(): ByProjectKeyTypesKeyByKeyDelete {
        $args = $this->getArgs();
        return new ByProjectKeyTypesKeyByKeyDelete($args['projectKey'], $args['key']);
    }

}
