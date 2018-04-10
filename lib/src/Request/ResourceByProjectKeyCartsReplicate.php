<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Cart\ReplicaCartDraft;


class ResourceByProjectKeyCartsReplicate extends Resource
{
    /**
     * @param ReplicaCartDraft $body
     * @return ByProjectKeyCartsReplicatePost
     */
    public function post(ReplicaCartDraft $body = null): ByProjectKeyCartsReplicatePost {
        $args = $this->getArgs();
        return new ByProjectKeyCartsReplicatePost($args['projectKey'], $body);
    }

}
