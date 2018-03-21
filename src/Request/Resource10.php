<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Customer\CustomerDraft;


class Resource10 extends Resource
{
    /**
     * @return Resource11
     */
    public function passwordTokenWithPasswordTokenValue($passwordToken = null): Resource11 {
        $args = array_merge($this->getArgs(), array_filter(['passwordToken' => $passwordToken], function($value) { return !is_null($value); }));
        return new Resource11($this->getUri() . '/password-token={passwordToken}', $args);
    }
    /**
     * @return Resource12
     */
    public function emailTokenWithEmailTokenValue($emailToken = null): Resource12 {
        $args = array_merge($this->getArgs(), array_filter(['emailToken' => $emailToken], function($value) { return !is_null($value); }));
        return new Resource12($this->getUri() . '/email-token={emailToken}', $args);
    }
    /**
     * @return Resource13
     */
    public function emailToken(): Resource13 {
        return new Resource13($this->getUri() . '/email-token', $this->getArgs());
    }
    /**
     * @return Resource14
     */
    public function email(): Resource14 {
        return new Resource14($this->getUri() . '/email', $this->getArgs());
    }
    /**
     * @return Resource16
     */
    public function password(): Resource16 {
        return new Resource16($this->getUri() . '/password', $this->getArgs());
    }
    /**
     * @return Resource18
     */
    public function passwordToken(): Resource18 {
        return new Resource18($this->getUri() . '/password-token', $this->getArgs());
    }
    /**
     * @return Resource19
     */
    public function withIDValue($ID = null): Resource19 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource19($this->getUri() . '/{ID}', $args);
    }


    /**
     * @return ByProjectKeyCustomersGet
     */
    public function get(): ByProjectKeyCustomersGet {
        $args = $this->getArgs();
        return new ByProjectKeyCustomersGet($args['projectKey']);
    }
    /**
     * @param CustomerDraft $body
     * @return ByProjectKeyCustomersPost
     */
    public function post(CustomerDraft $body): ByProjectKeyCustomersPost {
        $args = $this->getArgs();
        return new ByProjectKeyCustomersPost($args['projectKey'], $body);
    }

}
