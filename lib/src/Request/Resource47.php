<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;

class Resource47 extends Resource
{
    /**
     * @return Resource48
     */
    public function search(): Resource48 {
        return new Resource48($this->getUri() . '/search', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return Resource49
     */
    public function suggest(): Resource49 {
        return new Resource49($this->getUri() . '/suggest', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return Resource50
     */
    public function withKey($key = null): Resource50 {
        $args = array_merge($this->getArgs(), array_filter(['key' => $key], function($value) { return !is_null($value); }));
        return new Resource50($this->getUri() . '/key={key}', $args, $this->getMapper());
    }
    /**
     * @return Resource51
     */
    public function withId($ID = null): Resource51 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource51($this->getUri() . '/{ID}', $args, $this->getMapper());
    }


    /**
     * @return ByProjectKeyProductProjectionsGet
     */
    public function get(): ByProjectKeyProductProjectionsGet {
        $args = $this->getArgs();
        return new ByProjectKeyProductProjectionsGet($args['projectKey']);
    }

}
