<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Review\ReviewUpdate;



class Resource57 extends Resource
{
    /**
     * @return ByProjectKeyReviewsByIDGet
     */
    public function get(): ByProjectKeyReviewsByIDGet {
        $args = $this->getArgs();
        return new ByProjectKeyReviewsByIDGet($args['projectKey'], $args['ID']);
    }
    /**
     * @param ReviewUpdate $body
     * @return ByProjectKeyReviewsByIDPost
     */
    public function post(ReviewUpdate $body = null): ByProjectKeyReviewsByIDPost {
        $args = $this->getArgs();
        return new ByProjectKeyReviewsByIDPost($args['projectKey'], $args['ID'], $body);
    }
    /**
     * @return ByProjectKeyReviewsByIDDelete
     */
    public function delete(): ByProjectKeyReviewsByIDDelete {
        $args = $this->getArgs();
        return new ByProjectKeyReviewsByIDDelete($args['projectKey'], $args['ID']);
    }

}
