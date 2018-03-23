<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;

class Resource24 extends Resource
{
    /**
     * @return Resource25
     */
    public function withKeyValue($key = null): Resource25 {
        $args = array_merge($this->getArgs(), array_filter(['key' => $key], function($value) { return !is_null($value); }));
        return new Resource25($this->getUri() . '/{key}', $args, $this->getMapper());
    }


    /**
     * @return ByProjectKeyCustomObjectsByContainerGet
     */
    public function get(): ByProjectKeyCustomObjectsByContainerGet {
        $args = $this->getArgs();
        return new ByProjectKeyCustomObjectsByContainerGet($args['container'], $args['projectKey']);
    }
    /**
     * @return ByProjectKeyCustomObjectsByContainerDelete
     */
    public function delete(): ByProjectKeyCustomObjectsByContainerDelete {
        $args = $this->getArgs();
        return new ByProjectKeyCustomObjectsByContainerDelete($args['container'], $args['projectKey']);
    }

}
