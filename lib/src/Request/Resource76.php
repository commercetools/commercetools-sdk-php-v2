<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Update;



class Resource76 extends Resource
{
    /**
     * @return Resource77
     */
    public function email(): Resource77 {
        return new Resource77($this->getUri() . '/email', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return Resource79
     */
    public function password(): Resource79 {
        return new Resource79($this->getUri() . '/password', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return Resource81
     */
    public function signup(): Resource81 {
        return new Resource81($this->getUri() . '/signup', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return Resource82
     */
    public function login(): Resource82 {
        return new Resource82($this->getUri() . '/login', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return Resource83
     */
    public function activeCart(): Resource83 {
        return new Resource83($this->getUri() . '/active-cart', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return Resource84
     */
    public function carts(): Resource84 {
        return new Resource84($this->getUri() . '/carts', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return Resource86
     */
    public function orders(): Resource86 {
        return new Resource86($this->getUri() . '/orders', $this->getArgs(), $this->getMapper());
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
