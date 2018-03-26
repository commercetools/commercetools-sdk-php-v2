<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Psr\Http\Message\RequestInterface;
use Commercetools\Types\Review\ReviewUpdateAction;

use Commercetools\Types\Review\ReviewSetAuthorNameAction;
use Commercetools\Types\Review\ReviewSetCustomFieldAction;
use Commercetools\Types\Review\ReviewSetCustomTypeAction;
use Commercetools\Types\Review\ReviewSetCustomerAction;
use Commercetools\Types\Review\ReviewSetKeyAction;
use Commercetools\Types\Review\ReviewSetLocaleAction;
use Commercetools\Types\Review\ReviewSetRatingAction;
use Commercetools\Types\Review\ReviewSetTargetAction;
use Commercetools\Types\Review\ReviewSetTextAction;
use Commercetools\Types\Review\ReviewSetTitleAction;
use Commercetools\Types\Review\ReviewTransitionStateAction;
use Commercetools\Types\Review\Review;
use Commercetools\Types\Review\ReviewUpdate;
use Commercetools\Request\ByProjectKeyReviewsByIDPost;


class ReviewUpdateBuilder extends BaseBuilder {
    /**
     * @var Review
     */
    private $resource = null;

    /**
     * @var array
     */
    private $actions = [];

    private $requestBuilderCallback;

    public function __construct(callable $requestBuilderCallback = null)
    {
        $this->requestBuilderCallback = $requestBuilderCallback;
    }

    /**
     * @param ReviewSetAuthorNameAction|callable $action builder function <code>
     *   function(ReviewSetAuthorNameAction $action): ReviewSetAuthorNameAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setAuthorName($action = null)
    {
        $action = $this->resolveAction(ReviewSetAuthorNameAction::class, $action);
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ReviewSetCustomFieldAction|callable $action builder function <code>
     *   function(ReviewSetCustomFieldAction $action): ReviewSetCustomFieldAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomField($action = null)
    {
        $action = $this->resolveAction(ReviewSetCustomFieldAction::class, $action);
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ReviewSetCustomTypeAction|callable $action builder function <code>
     *   function(ReviewSetCustomTypeAction $action): ReviewSetCustomTypeAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomType($action = null)
    {
        $action = $this->resolveAction(ReviewSetCustomTypeAction::class, $action);
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ReviewSetCustomerAction|callable $action builder function <code>
     *   function(ReviewSetCustomerAction $action): ReviewSetCustomerAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomer($action = null)
    {
        $action = $this->resolveAction(ReviewSetCustomerAction::class, $action);
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ReviewSetKeyAction|callable $action builder function <code>
     *   function(ReviewSetKeyAction $action): ReviewSetKeyAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setKey($action = null)
    {
        $action = $this->resolveAction(ReviewSetKeyAction::class, $action);
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ReviewSetLocaleAction|callable $action builder function <code>
     *   function(ReviewSetLocaleAction $action): ReviewSetLocaleAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setLocale($action = null)
    {
        $action = $this->resolveAction(ReviewSetLocaleAction::class, $action);
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ReviewSetRatingAction|callable $action builder function <code>
     *   function(ReviewSetRatingAction $action): ReviewSetRatingAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setRating($action = null)
    {
        $action = $this->resolveAction(ReviewSetRatingAction::class, $action);
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ReviewSetTargetAction|callable $action builder function <code>
     *   function(ReviewSetTargetAction $action): ReviewSetTargetAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setTarget($action = null)
    {
        $action = $this->resolveAction(ReviewSetTargetAction::class, $action);
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ReviewSetTextAction|callable $action builder function <code>
     *   function(ReviewSetTextAction $action): ReviewSetTextAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setText($action = null)
    {
        $action = $this->resolveAction(ReviewSetTextAction::class, $action);
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ReviewSetTitleAction|callable $action builder function <code>
     *   function(ReviewSetTitleAction $action): ReviewSetTitleAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setTitle($action = null)
    {
        $action = $this->resolveAction(ReviewSetTitleAction::class, $action);
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ReviewTransitionStateAction|callable $action builder function <code>
     *   function(ReviewTransitionStateAction $action): ReviewTransitionStateAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function transitionState($action = null)
    {
        $action = $this->resolveAction(ReviewTransitionStateAction::class, $action);
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
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

    private function resolveAction($class, $action = null) {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData($class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof $class) {
            throw new \InvalidArgumentException();
        }

        return $action;
    }

    /*
     * @param $action
     * @param callable $callback
     */
    private function callback($action, callable $callback = null) {
        if (!is_null($callback)) {
            $action = $callback($action);
        }
        return $action;
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

    public function getResource(): ?Review
    {
        return $this->resource;
    }

    /**
     * Build ReviewUpdate
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

    public function buildRequest(): ?ByProjectKeyReviewsByIDPost
    {
        if (!is_null($this->requestBuilderCallback)) {
            $callback = $this->requestBuilderCallback;
            return $callback($this);
        }

        return null;
    }
}
