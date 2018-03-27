<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;

class Resource25 extends Resource
{
    /**
     * @return ByProjectKeyCustomObjectsByIDGet
     */
    public function get(): ByProjectKeyCustomObjectsByIDGet {
        $args = $this->getArgs();
        return new ByProjectKeyCustomObjectsByIDGet($args['projectKey'], $args['ID']);
    }
    /**
     * @return ByProjectKeyCustomObjectsByIDDelete
     */
    public function delete(): ByProjectKeyCustomObjectsByIDDelete {
        $args = $this->getArgs();
        return new ByProjectKeyCustomObjectsByIDDelete($args['projectKey'], $args['ID']);
    }

}
