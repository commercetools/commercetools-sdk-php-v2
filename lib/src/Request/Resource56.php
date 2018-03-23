<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Review\ReviewUpdate;



class Resource56 extends Resource
{
    /**
     * @return ByProjectKeyReviewsKeyByKeyGet
     */
    public function get(): ByProjectKeyReviewsKeyByKeyGet {
        $args = $this->getArgs();
        return new ByProjectKeyReviewsKeyByKeyGet($args['projectKey'], $args['key']);
    }
    /**
     * @param ReviewUpdate $body
     * @return ByProjectKeyReviewsKeyByKeyPost
     */
    public function post(ReviewUpdate $body): ByProjectKeyReviewsKeyByKeyPost {
        $args = $this->getArgs();
        return new ByProjectKeyReviewsKeyByKeyPost($args['projectKey'], $args['key'], $body);
    }
    /**
     * @return ByProjectKeyReviewsKeyByKeyDelete
     */
    public function delete(): ByProjectKeyReviewsKeyByKeyDelete {
        $args = $this->getArgs();
        return new ByProjectKeyReviewsKeyByKeyDelete($args['projectKey'], $args['key']);
    }

}
