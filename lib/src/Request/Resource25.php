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
     * @return ByProjectKeyCustomObjectsByContainerByKeyGet
     */
    public function get(): ByProjectKeyCustomObjectsByContainerByKeyGet {
        $args = $this->getArgs();
        return new ByProjectKeyCustomObjectsByContainerByKeyGet($args['projectKey'], $args['container'], $args['key']);
    }
    /**
     * @return ByProjectKeyCustomObjectsByContainerByKeyDelete
     */
    public function delete(): ByProjectKeyCustomObjectsByContainerByKeyDelete {
        $args = $this->getArgs();
        return new ByProjectKeyCustomObjectsByContainerByKeyDelete($args['projectKey'], $args['container'], $args['key']);
    }

}
