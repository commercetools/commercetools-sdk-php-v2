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
        return new Resource48($this->getUri() . '/search', $this->getArgs());
    }
    /**
     * @return Resource49
     */
    public function suggest(): Resource49 {
        return new Resource49($this->getUri() . '/suggest', $this->getArgs());
    }
    /**
     * @return Resource50
     */
    public function keyWithKeyValue($key = null): Resource50 {
        $args = array_merge($this->getArgs(), array_filter(['key' => $key], function($value) { return !is_null($value); }));
        return new Resource50($this->getUri() . '/key={key}', $args);
    }
    /**
     * @return Resource51
     */
    public function withIDValue($ID = null): Resource51 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource51($this->getUri() . '/{ID}', $args);
    }


    /**
     * @return ByProjectKeyProductProjectionsGet
     */
    public function get(): ByProjectKeyProductProjectionsGet {
        $args = $this->getArgs();
        return new ByProjectKeyProductProjectionsGet($args['projectKey']);
    }

}
