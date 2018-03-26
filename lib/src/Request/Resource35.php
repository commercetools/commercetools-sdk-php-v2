<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Order\OrderImportDraft;


class Resource35 extends Resource
{
    /**
     * @param OrderImportDraft $body
     * @return ByProjectKeyOrdersImportPost
     */
    public function post(OrderImportDraft $body = null): ByProjectKeyOrdersImportPost {
        $args = $this->getArgs();
        return new ByProjectKeyOrdersImportPost($args['projectKey'], $body);
    }

}
