<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Base\MapperAware;
use Commercetools\Types\Review\Review;
use Commercetools\Builder\ReviewUpdateBuilder;

use Commercetools\Types\Review\ReviewDraft;


class Resource55 extends Resource
{
    /**
     * @return Resource56
     */
    public function keyWithKeyValue($key = null): Resource56 {
        $args = array_merge($this->getArgs(), array_filter(['key' => $key], function($value) { return !is_null($value); }));
        return new Resource56($this->getUri() . '/key={key}', $args);
    }
    /**
     * @return Resource57
     */
    public function withIDValue($ID = null): Resource57 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource57($this->getUri() . '/{ID}', $args);
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


    public function update(Review $resource)
    {
        $builder = new ReviewUpdateBuilder(function (ReviewUpdateBuilder $builder) { return $this->withIDValue($builder->getResource()->getId())->post($builder->build()); });
        $builder->with($resource);
        if ($resource instanceof MapperAware) {
            $builder->setMapper($resource->getMapper());
        }
        return $builder;
    }
}
