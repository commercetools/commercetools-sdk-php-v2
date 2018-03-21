<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Review\ReviewDraft;


class Resource54 extends Resource
{
    /**
     * @return Resource55
     */
    public function keyWithKeyValue($key = null): Resource55 {
        $args = array_merge($this->getArgs(), array_filter(['key' => $key], function($value) { return !is_null($value); }));
        return new Resource55($this->getUri() . '/key={key}', $args);
    }
    /**
     * @return Resource56
     */
    public function withIDValue($ID = null): Resource56 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource56($this->getUri() . '/{ID}', $args);
    }


    /**
     * @return ByProjectKeyReviewsGet
     */
    public function get(): ByProjectKeyReviewsGet {
        $args = $this->getArgs();
        return new ByProjectKeyReviewsGet($args['projectKey']);
    }
    /**
     * @param ReviewDraft $body
     * @return ByProjectKeyReviewsPost
     */
    public function post(ReviewDraft $body): ByProjectKeyReviewsPost {
        $args = $this->getArgs();
        return new ByProjectKeyReviewsPost($args['projectKey'], $body);
    }

}
