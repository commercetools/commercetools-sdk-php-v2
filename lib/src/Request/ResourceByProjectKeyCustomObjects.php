<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\CustomObject\CustomObjectDraft;


class ResourceByProjectKeyCustomObjects extends Resource
{
    /**
     * @return ResourceByProjectKeyCustomObjectsByContainerByKey
     */
    public function withContainerAndKey($container = null, $key = null): ResourceByProjectKeyCustomObjectsByContainerByKey {
        $args = array_merge($this->getArgs(), array_filter(['container' => $container, 'key' => $key], function($value) { return !is_null($value); }));
        return new ResourceByProjectKeyCustomObjectsByContainerByKey($this->getUri() . '/{container}/{key}', $args, $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyCustomObjectsByID
     */
    public function withId($ID = null): ResourceByProjectKeyCustomObjectsByID {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new ResourceByProjectKeyCustomObjectsByID($this->getUri() . '/{ID}', $args, $this->getMapper());
    }


    /**
     * @return ByProjectKeyCustomObjectsGet
     */
    public function get(): ByProjectKeyCustomObjectsGet {
        $args = $this->getArgs();
        return new ByProjectKeyCustomObjectsGet($args['projectKey']);
    }
    /**
     * @param CustomObjectDraft $body
     * @return ByProjectKeyCustomObjectsPost
     */
    public function post(CustomObjectDraft $body = null): ByProjectKeyCustomObjectsPost {
        $args = $this->getArgs();
        return new ByProjectKeyCustomObjectsPost($args['projectKey'], $body);
    }

}
