<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Psr\Http\Message\RequestInterface;
use Commercetools\Types\DiscountCode\DiscountCodeUpdateAction;

use Commercetools\Types\DiscountCode\DiscountCodeChangeCartDiscountsAction;
use Commercetools\Types\DiscountCode\DiscountCodeChangeGroupsAction;
use Commercetools\Types\DiscountCode\DiscountCodeChangeIsActiveAction;
use Commercetools\Types\DiscountCode\DiscountCodeSetCartPredicateAction;
use Commercetools\Types\DiscountCode\DiscountCodeSetDescriptionAction;
use Commercetools\Types\DiscountCode\DiscountCodeSetMaxApplicationsAction;
use Commercetools\Types\DiscountCode\DiscountCodeSetMaxApplicationsPerCustomerAction;
use Commercetools\Types\DiscountCode\DiscountCodeSetNameAction;
use Commercetools\Types\DiscountCode\DiscountCodeSetValidFromAction;
use Commercetools\Types\DiscountCode\DiscountCodeSetValidUntilAction;
use Commercetools\Types\DiscountCode\DiscountCode;
use Commercetools\Types\DiscountCode\DiscountCodeUpdate;
use Commercetools\Request\ByProjectKeyDiscountCodesByIDPost;


class DiscountCodeUpdateBuilder extends BaseBuilder {
    /**
     * @var DiscountCode
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
     * @param callable $callback builder function <code>
     *   function (DiscountCodeChangeCartDiscountsAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeCartDiscounts(callable $callback = null)
    {
        $action = $this->mapData(DiscountCodeChangeCartDiscountsAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (DiscountCodeChangeGroupsAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeGroups(callable $callback = null)
    {
        $action = $this->mapData(DiscountCodeChangeGroupsAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (DiscountCodeChangeIsActiveAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeIsActive(callable $callback = null)
    {
        $action = $this->mapData(DiscountCodeChangeIsActiveAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (DiscountCodeSetCartPredicateAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCartPredicate(callable $callback = null)
    {
        $action = $this->mapData(DiscountCodeSetCartPredicateAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (DiscountCodeSetDescriptionAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setDescription(callable $callback = null)
    {
        $action = $this->mapData(DiscountCodeSetDescriptionAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (DiscountCodeSetMaxApplicationsAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setMaxApplications(callable $callback = null)
    {
        $action = $this->mapData(DiscountCodeSetMaxApplicationsAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (DiscountCodeSetMaxApplicationsPerCustomerAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setMaxApplicationsPerCustomer(callable $callback = null)
    {
        $action = $this->mapData(DiscountCodeSetMaxApplicationsPerCustomerAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (DiscountCodeSetNameAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setName(callable $callback = null)
    {
        $action = $this->mapData(DiscountCodeSetNameAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (DiscountCodeSetValidFromAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setValidFrom(callable $callback = null)
    {
        $action = $this->mapData(DiscountCodeSetValidFromAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (DiscountCodeSetValidUntilAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setValidUntil(callable $callback = null)
    {
        $action = $this->mapData(DiscountCodeSetValidUntilAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }

    /**
     * @param DiscountCodeUpdateAction $action
     * @return $this;
     */
    public function addAction(DiscountCodeUpdateAction $action)
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
     * @param DiscountCode $discountCode
     * @return $this
     */
    public function with(DiscountCode $discountCode)
    {
        $this->resource = $discountCode;
        return $this;
    }

    public function reset()
    {
        $this->actions = [];
        $this->resource = null;
    }

    public function getResource(): ?DiscountCode
    {
        return $this->resource;
    }

    /**
     * Build DiscountCodeUpdate
     * @return DiscountCodeUpdate
     */
    public function build(): DiscountCodeUpdate
    {
        $data = [
            'actions' => $this->actions,
        ];
        $update = $this->mapData(DiscountCodeUpdate::class, $data);
        if ($update instanceof DiscountCodeUpdate &&
            $this->resource instanceof DiscountCode
        ) {
            $update->setVersion($this->resource->getVersion());
        }

        return $update;
    }

    public function buildRequest(): ?ByProjectKeyDiscountCodesByIDPost
    {
        if (!is_null($this->requestBuilderCallback)) {
            $callback = $this->requestBuilderCallback;
            return $callback($this);
        }

        return null;
    }
}
