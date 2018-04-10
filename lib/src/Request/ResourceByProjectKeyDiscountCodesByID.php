<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\DiscountCode\DiscountCodeUpdate;



class ResourceByProjectKeyDiscountCodesByID extends Resource
{
    /**
     * @return ByProjectKeyDiscountCodesByIDGet
     */
    public function get(): ByProjectKeyDiscountCodesByIDGet {
        $args = $this->getArgs();
        return new ByProjectKeyDiscountCodesByIDGet($args['projectKey'], $args['ID']);
    }
    /**
     * @param DiscountCodeUpdate $body
     * @return ByProjectKeyDiscountCodesByIDPost
     */
    public function post(DiscountCodeUpdate $body = null): ByProjectKeyDiscountCodesByIDPost {
        $args = $this->getArgs();
        return new ByProjectKeyDiscountCodesByIDPost($args['projectKey'], $args['ID'], $body);
    }
    /**
     * @return ByProjectKeyDiscountCodesByIDDelete
     */
    public function delete(): ByProjectKeyDiscountCodesByIDDelete {
        $args = $this->getArgs();
        return new ByProjectKeyDiscountCodesByIDDelete($args['projectKey'], $args['ID']);
    }

}
