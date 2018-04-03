<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Base\MapperAware;
use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Review\Review;
use Commercetools\Builder\ReviewUpdateBuilder;

use Commercetools\Types\Review\ReviewDraft;


class Resource55 extends Resource
{
    /**
     * @return Resource56
     */
    public function withKey($key = null): Resource56 {
        $args = array_merge($this->getArgs(), array_filter(['key' => $key], function($value) { return !is_null($value); }));
        return new Resource56($this->getUri() . '/key={key}', $args, $this->getMapper());
    }
    /**
     * @return Resource57
     */
    public function withId($ID = null): Resource57 {
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
    public function post(ReviewDraft $body = null): ByProjectKeyReviewsPost {
        $args = $this->getArgs();
        return new ByProjectKeyReviewsPost($args['projectKey'], $body);
    }


    /**
     * @param Review $review
     * @return ReviewUpdateBuilder
     */
    public function update(Review $review): ReviewUpdateBuilder
    {
        $builder = new ReviewUpdateBuilder(function(ReviewUpdateBuilder $builder) { return $this->withId($builder->getResource()->getId())->post($builder->build()); });
        $builder->with($review);
        if ($review instanceof MapperAware) {
            $builder->setMapper($review->getMapper());
        }
        return $builder;
    }

    /**
     * @param Review $review
     * @return ByProjectKeyReviewsByIDDelete
     */
    public function delete(Review $review): ByProjectKeyReviewsByIDDelete
    {
        return $this->withId($review->getId())->delete()->withVersion($review->getVersion());
    }

    /**
     * @param ReviewDraft|callable $reviewDraft builder function <code>
     *   function(ReviewDraft $reviewDraft): ReviewDraft {
     *     // modify $draft as needed
     *     return $reviewDraft;
     *   }
     *   </code>
     * @throws InvalidArgumentException
     * @return ByProjectKeyReviewsPost
     */
    public function create($reviewDraft): ByProjectKeyReviewsPost
    {
        if (is_callable($reviewDraft)) {
            $callback = $reviewDraft;
            $emptyDraft = $this->mapData(ReviewDraft::class, null);
            $reviewDraft = $callback($emptyDraft);
        }
        if (!$reviewDraft instanceof ReviewDraft) {
            throw new InvalidArgumentException();
        }
        return $this->post($reviewDraft);
    }
}
