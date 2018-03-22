<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\ShippingMethod\ShippingMethodUpdate;



class Resource60 extends Resource
{
    /**
     * @return ByProjectKeyShippingMethodsByIDGet
     */
    public function get(): ByProjectKeyShippingMethodsByIDGet {
        $args = $this->getArgs();
        return new ByProjectKeyShippingMethodsByIDGet($args['projectKey'], $args['ID']);
    }
    /**
     * @param ShippingMethodUpdate $body
     * @return ByProjectKeyShippingMethodsByIDPost
     */
    public function post(ShippingMethodUpdate $body): ByProjectKeyShippingMethodsByIDPost {
        $args = $this->getArgs();
        return new ByProjectKeyShippingMethodsByIDPost($args['projectKey'], $args['ID'], $body);
    }
    /**
     * @return ByProjectKeyShippingMethodsByIDDelete
     */
    public function delete(): ByProjectKeyShippingMethodsByIDDelete {
        $args = $this->getArgs();
        return new ByProjectKeyShippingMethodsByIDDelete($args['projectKey'], $args['ID']);
    }

}
