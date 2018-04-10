<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Update;



class ResourceByProjectKeyMe extends Resource
{
    /**
     * @return ResourceByProjectKeyMeEmail
     */
    public function email(): ResourceByProjectKeyMeEmail {
        return new ResourceByProjectKeyMeEmail($this->getUri() . '/email', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyMePassword
     */
    public function password(): ResourceByProjectKeyMePassword {
        return new ResourceByProjectKeyMePassword($this->getUri() . '/password', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyMeSignup
     */
    public function signup(): ResourceByProjectKeyMeSignup {
        return new ResourceByProjectKeyMeSignup($this->getUri() . '/signup', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyMeLogin
     */
    public function login(): ResourceByProjectKeyMeLogin {
        return new ResourceByProjectKeyMeLogin($this->getUri() . '/login', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyMeActiveCart
     */
    public function activeCart(): ResourceByProjectKeyMeActiveCart {
        return new ResourceByProjectKeyMeActiveCart($this->getUri() . '/active-cart', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyMeCarts
     */
    public function carts(): ResourceByProjectKeyMeCarts {
        return new ResourceByProjectKeyMeCarts($this->getUri() . '/carts', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyMeOrders
     */
    public function orders(): ResourceByProjectKeyMeOrders {
        return new ResourceByProjectKeyMeOrders($this->getUri() . '/orders', $this->getArgs(), $this->getMapper());
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
