<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Update;



class Resource75 extends Resource
{
    /**
     * @return Resource76
     */
    public function email(): Resource76 {
        return new Resource76($this->getUri() . '/email', $this->getArgs());
    }
    /**
     * @return Resource78
     */
    public function password(): Resource78 {
        return new Resource78($this->getUri() . '/password', $this->getArgs());
    }
    /**
     * @return Resource80
     */
    public function signup(): Resource80 {
        return new Resource80($this->getUri() . '/signup', $this->getArgs());
    }
    /**
     * @return Resource81
     */
    public function login(): Resource81 {
        return new Resource81($this->getUri() . '/login', $this->getArgs());
    }
    /**
     * @return Resource82
     */
    public function activeCart(): Resource82 {
        return new Resource82($this->getUri() . '/active-cart', $this->getArgs());
    }
    /**
     * @return Resource83
     */
    public function carts(): Resource83 {
        return new Resource83($this->getUri() . '/carts', $this->getArgs());
    }
    /**
     * @return Resource85
     */
    public function orders(): Resource85 {
        return new Resource85($this->getUri() . '/orders', $this->getArgs());
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
    public function post(Update $body): ByProjectKeyMePost {
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
