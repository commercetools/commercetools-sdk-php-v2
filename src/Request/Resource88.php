<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Update;



class Resource88 extends Resource
{
    /**
     * @return ByProjectKeyExtensionsKeyByKeyGet
     */
    public function get(): ByProjectKeyExtensionsKeyByKeyGet {
        $args = $this->getArgs();
        return new ByProjectKeyExtensionsKeyByKeyGet($args['projectKey'], $args['key']);
    }
    /**
     * @param Update $body
     * @return ByProjectKeyExtensionsKeyByKeyPost
     */
    public function post(Update $body): ByProjectKeyExtensionsKeyByKeyPost {
        $args = $this->getArgs();
        return new ByProjectKeyExtensionsKeyByKeyPost($args['projectKey'], $args['key'], $body);
    }
    /**
     * @return ByProjectKeyExtensionsKeyByKeyDelete
     */
    public function delete(): ByProjectKeyExtensionsKeyByKeyDelete {
        $args = $this->getArgs();
        return new ByProjectKeyExtensionsKeyByKeyDelete($args['projectKey'], $args['key']);
    }

}
