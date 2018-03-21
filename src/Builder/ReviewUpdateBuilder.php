<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Commercetools\Types\Review\ReviewUpdateAction;

use Commercetools\Types\Review\ReviewSetLocaleAction;
use Commercetools\Types\Review\ReviewSetAuthorNameAction;
use Commercetools\Types\Review\ReviewSetTargetAction;
use Commercetools\Types\Review\ReviewSetTextAction;
use Commercetools\Types\Review\ReviewSetKeyAction;
use Commercetools\Types\Review\ReviewSetCustomTypeAction;
use Commercetools\Types\Review\ReviewSetCustomerAction;
use Commercetools\Types\Review\ReviewTransitionStateAction;
use Commercetools\Types\Review\ReviewSetTitleAction;
use Commercetools\Types\Review\ReviewSetRatingAction;
use Commercetools\Types\Review\ReviewSetCustomFieldAction;
use Commercetools\Types\Review\Review;
use Commercetools\Types\Review\ReviewUpdate;


class ReviewUpdateBuilder extends BaseBuilder {
    /**
     * @var Review
     */
    private $resource = null;

    /**
     * @var array
     */
    private $actions = [];

    /**
     * @param callable $callback builder function <code>
     *   function (ReviewSetLocaleAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setLocale(callable $callback = null)
    {
        $action = $this->mapData(ReviewSetLocaleAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ReviewSetAuthorNameAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setAuthorName(callable $callback = null)
    {
        $action = $this->mapData(ReviewSetAuthorNameAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ReviewSetTargetAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setTarget(callable $callback = null)
    {
        $action = $this->mapData(ReviewSetTargetAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ReviewSetTextAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setText(callable $callback = null)
    {
        $action = $this->mapData(ReviewSetTextAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ReviewSetKeyAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setKey(callable $callback = null)
    {
        $action = $this->mapData(ReviewSetKeyAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ReviewSetCustomTypeAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomType(callable $callback = null)
    {
        $action = $this->mapData(ReviewSetCustomTypeAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ReviewSetCustomerAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomer(callable $callback = null)
    {
        $action = $this->mapData(ReviewSetCustomerAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ReviewTransitionStateAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function transitionState(callable $callback = null)
    {
        $action = $this->mapData(ReviewTransitionStateAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ReviewSetTitleAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setTitle(callable $callback = null)
    {
        $action = $this->mapData(ReviewSetTitleAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ReviewSetRatingAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setRating(callable $callback = null)
    {
        $action = $this->mapData(ReviewSetRatingAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ReviewSetCustomFieldAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomField(callable $callback = null)
    {
        $action = $this->mapData(ReviewSetCustomFieldAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }

    /**
     * @param ReviewUpdateAction $action
     * @return $this;
     */
    public function addAction(ReviewUpdateAction $action)
    {
        $this->actions[] = $action;
        return $this;
    }

    /*
     * @param $action
     * @param callable $callback
     */
    private function callback($action, callable $callback = null) {
        if (!is_null($callback)) {
            $action = $callback($action);
        }
        $this->actions[] = $action;
    }

    /**
     * @param Review $review
     * @return $this
     */
    public function with(Review $review)
    {
        $this->resource = $review;
        return $this;
    }

    public function reset()
    {
        $this->actions = [];
        $this->resource = null;
    }

    /**
     * Build ReviewUpdate and delete internal state
     * @return ReviewUpdate
     */
    public function build(): ReviewUpdate
    {
        $data = [
            'actions' => $this->actions,
        ];
        $update = $this->mapData(ReviewUpdate::class, $data);
        if ($update instanceof ReviewUpdate &&
            $this->resource instanceof Review
        ) {
            $update->setVersion($this->resource->getVersion());
        }

        return $update;
    }
}
