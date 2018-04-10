<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Payment\PaymentUpdate;



class ResourceByProjectKeyPaymentsByID extends Resource
{
    /**
     * @return ByProjectKeyPaymentsByIDGet
     */
    public function get(): ByProjectKeyPaymentsByIDGet {
        $args = $this->getArgs();
        return new ByProjectKeyPaymentsByIDGet($args['projectKey'], $args['ID']);
    }
    /**
     * @param PaymentUpdate $body
     * @return ByProjectKeyPaymentsByIDPost
     */
    public function post(PaymentUpdate $body = null): ByProjectKeyPaymentsByIDPost {
        $args = $this->getArgs();
        return new ByProjectKeyPaymentsByIDPost($args['projectKey'], $args['ID'], $body);
    }
    /**
     * @return ByProjectKeyPaymentsByIDDelete
     */
    public function delete(): ByProjectKeyPaymentsByIDDelete {
        $args = $this->getArgs();
        return new ByProjectKeyPaymentsByIDDelete($args['projectKey'], $args['ID']);
    }

}
