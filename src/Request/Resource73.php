<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Type\TypeUpdate;



class Resource73 extends Resource
{
    /**
     * @return ByProjectKeyTypesByIDGet
     */
    public function get(): ByProjectKeyTypesByIDGet {
        $args = $this->getArgs();
        return new ByProjectKeyTypesByIDGet($args['projectKey'], $args['ID']);
    }
    /**
     * @param TypeUpdate $body
     * @return ByProjectKeyTypesByIDPost
     */
    public function post(TypeUpdate $body): ByProjectKeyTypesByIDPost {
        $args = $this->getArgs();
        return new ByProjectKeyTypesByIDPost($args['projectKey'], $args['ID'], $body);
    }
    /**
     * @return ByProjectKeyTypesByIDDelete
     */
    public function delete(): ByProjectKeyTypesByIDDelete {
        $args = $this->getArgs();
        return new ByProjectKeyTypesByIDDelete($args['projectKey'], $args['ID']);
    }

}
