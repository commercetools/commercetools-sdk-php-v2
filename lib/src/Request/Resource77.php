<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Update;



class Resource77 extends Resource
{
    /**
     * @return Resource78
     */
    public function email(): Resource78 {
        return new Resource78($this->getUri() . '/email', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return Resource80
     */
    public function password(): Resource80 {
        return new Resource80($this->getUri() . '/password', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return Resource82
     */
    public function signup(): Resource82 {
        return new Resource82($this->getUri() . '/signup', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return Resource83
     */
    public function login(): Resource83 {
        return new Resource83($this->getUri() . '/login', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return Resource84
     */
    public function activeCart(): Resource84 {
        return new Resource84($this->getUri() . '/active-cart', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return Resource85
     */
    public function carts(): Resource85 {
        return new Resource85($this->getUri() . '/carts', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return Resource87
     */
    public function orders(): Resource87 {
        return new Resource87($this->getUri() . '/orders', $this->getArgs(), $this->getMapper());
    }


    /**
     * @return ByProjectKeyMeGet
     */
    public function get(): ByProjectKeyMeGet {
        $args = $this->getArgs();
        return new ByProjectKeyMeGet($args['projectKey']);
    }
    /**
     * @param Update $body
     * @return ByProjectKeyMePost
     */
    public function post(Update $body = null): ByProjectKeyMePost {
        $args = $this->getArgs();
        return new ByProjectKeyMePost($args['projectKey'], $body);
    }
    /**
     * @return ByProjectKeyMeDelete
     */
    public function delete(): ByProjectKeyMeDelete {
        $args = $this->getArgs();
        return new ByProjectKeyMeDelete($args['projectKey']);
    }

}
