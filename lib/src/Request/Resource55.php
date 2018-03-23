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
        return new Resource56($this->getUri() . '/key={key}', $args, $this->getMapper());
    }
    /**
     * @return Resource57
     */
    public function withIDValue($ID = null): Resource57 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource57($this->getUri() . '/{ID}', $args, $this->getMapper());
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


    public function update(Review $review)
    {
        $builder = new ReviewUpdateBuilder(function (ReviewUpdateBuilder $builder) { return $this->withIDValue($builder->getResource()->getId())->post($builder->build()); });
        $builder->with($review);
        if ($review instanceof MapperAware) {
            $builder->setMapper($review->getMapper());
        }
        return $builder;
    }

    public function delete(Review $review)
    {
        return $this->withIDValue($review->getId())->delete()->withVersion($review->getVersion());
    }

    /**
     * @param ReviewDraft|callable $reviewDraftDraft builder function <code>
     *   function (ReviewDraft $reviewDraft): ReviewDraft {
     *     // modify $draft as needed
     *     return $reviewDraft;
     *   }
     *   </code>
     */
    public function create($reviewDraft)
    {
        if (is_callable($reviewDraft)) {
            $callback = $reviewDraft;
            $emptyDraft = $this->mapData(ReviewDraft::class, null);
            $reviewDraft = $callback($emptyDraft);
        }
        if (!$reviewDraft instanceof ReviewDraft) {
            throw new \InvalidArgumentException();
        }
        return $this->post($reviewDraft);
    }
}
