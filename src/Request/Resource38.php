<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Update;



class Resource38 extends Resource
{
    /**
     * @return ByProjectKeyPaymentsKeyByKeyGet
     */
    public function get(): ByProjectKeyPaymentsKeyByKeyGet {
        $args = $this->getArgs();
        return new ByProjectKeyPaymentsKeyByKeyGet($args['projectKey'], $args['key']);
    }
    /**
     * @param Update $body
     * @return ByProjectKeyPaymentsKeyByKeyPost
     */
    public function post(Update $body): ByProjectKeyPaymentsKeyByKeyPost {
        $args = $this->getArgs();
        return new ByProjectKeyPaymentsKeyByKeyPost($args['projectKey'], $args['key'], $body);
    }
    /**
     * @return ByProjectKeyPaymentsKeyByKeyDelete
     */
    public function delete(): ByProjectKeyPaymentsKeyByKeyDelete {
        $args = $this->getArgs();
        return new ByProjectKeyPaymentsKeyByKeyDelete($args['projectKey'], $args['key']);
    }

}
