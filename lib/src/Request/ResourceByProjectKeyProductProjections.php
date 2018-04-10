<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;

class ResourceByProjectKeyProductProjections extends Resource
{
    /**
     * @return ResourceByProjectKeyProductProjectionsSearch
     */
    public function search(): ResourceByProjectKeyProductProjectionsSearch {
        return new ResourceByProjectKeyProductProjectionsSearch($this->getUri() . '/search', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyProductProjectionsSuggest
     */
    public function suggest(): ResourceByProjectKeyProductProjectionsSuggest {
        return new ResourceByProjectKeyProductProjectionsSuggest($this->getUri() . '/suggest', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyProductProjectionsKeyByKey
     */
    public function withKey($key = null): ResourceByProjectKeyProductProjectionsKeyByKey {
        $args = array_merge($this->getArgs(), array_filter(['key' => $key], function($value) { return !is_null($value); }));
        return new ResourceByProjectKeyProductProjectionsKeyByKey($this->getUri() . '/key={key}', $args, $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyProductProjectionsByID
     */
    public function withId($ID = null): ResourceByProjectKeyProductProjectionsByID {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new ResourceByProjectKeyProductProjectionsByID($this->getUri() . '/{ID}', $args, $this->getMapper());
    }


    /**
     * @return ByProjectKeyProductProjectionsGet
     */
    public function get(): ByProjectKeyProductProjectionsGet {
        $args = $this->getArgs();
        return new ByProjectKeyProductProjectionsGet($args['projectKey']);
    }

}
