<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\State\StateUpdate;



class Resource65 extends Resource
{
    /**
     * @return ByProjectKeyStatesByIDGet
     */
    public function get(): ByProjectKeyStatesByIDGet {
        $args = $this->getArgs();
        return new ByProjectKeyStatesByIDGet($args['projectKey'], $args['ID']);
    }
    /**
     * @param StateUpdate $body
     * @return ByProjectKeyStatesByIDPost
     */
    public function post(StateUpdate $body): ByProjectKeyStatesByIDPost {
        $args = $this->getArgs();
        return new ByProjectKeyStatesByIDPost($args['projectKey'], $args['ID'], $body);
    }
    /**
     * @return ByProjectKeyStatesByIDDelete
     */
    public function delete(): ByProjectKeyStatesByIDDelete {
        $args = $this->getArgs();
        return new ByProjectKeyStatesByIDDelete($args['projectKey'], $args['ID']);
    }

}
