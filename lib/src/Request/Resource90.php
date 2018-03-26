<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Extension\ExtensionUpdate;



class Resource90 extends Resource
{
    /**
     * @return ByProjectKeyExtensionsByIDGet
     */
    public function get(): ByProjectKeyExtensionsByIDGet {
        $args = $this->getArgs();
        return new ByProjectKeyExtensionsByIDGet($args['projectKey'], $args['ID']);
    }
    /**
     * @param ExtensionUpdate $body
     * @return ByProjectKeyExtensionsByIDPost
     */
    public function post(ExtensionUpdate $body = null): ByProjectKeyExtensionsByIDPost {
        $args = $this->getArgs();
        return new ByProjectKeyExtensionsByIDPost($args['projectKey'], $args['ID'], $body);
    }
    /**
     * @return ByProjectKeyExtensionsByIDDelete
     */
    public function delete(): ByProjectKeyExtensionsByIDDelete {
        $args = $this->getArgs();
        return new ByProjectKeyExtensionsByIDDelete($args['projectKey'], $args['ID']);
    }

}
