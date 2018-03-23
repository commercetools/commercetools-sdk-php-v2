<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Cart\CartUpdate;



class Resource5 extends Resource
{
    /**
     * @return ByProjectKeyCartsByIDGet
     */
    public function get(): ByProjectKeyCartsByIDGet {
        $args = $this->getArgs();
        return new ByProjectKeyCartsByIDGet($args['projectKey'], $args['ID']);
    }
    /**
     * @param CartUpdate $body
     * @return ByProjectKeyCartsByIDPost
     */
    public function post(CartUpdate $body): ByProjectKeyCartsByIDPost {
        $args = $this->getArgs();
        return new ByProjectKeyCartsByIDPost($args['projectKey'], $args['ID'], $body);
    }
    /**
     * @return ByProjectKeyCartsByIDDelete
     */
    public function delete(): ByProjectKeyCartsByIDDelete {
        $args = $this->getArgs();
        return new ByProjectKeyCartsByIDDelete($args['projectKey'], $args['ID']);
    }

}
