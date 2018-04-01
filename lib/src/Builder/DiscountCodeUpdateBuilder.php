<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Commercetools\Exception\BuilderInvalidArgumentException;
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
     * @param DiscountCodeChangeCartDiscountsAction|callable $action builder function <code>
     *   function(DiscountCodeChangeCartDiscountsAction $action): DiscountCodeChangeCartDiscountsAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeCartDiscounts($action = null)
    {
        $this->addAction($this->resolveAction(DiscountCodeChangeCartDiscountsAction::class, $action));
        return $this;
    }
    /**
     * @param DiscountCodeChangeGroupsAction|callable $action builder function <code>
     *   function(DiscountCodeChangeGroupsAction $action): DiscountCodeChangeGroupsAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeGroups($action = null)
    {
        $this->addAction($this->resolveAction(DiscountCodeChangeGroupsAction::class, $action));
        return $this;
    }
    /**
     * @param DiscountCodeChangeIsActiveAction|callable $action builder function <code>
     *   function(DiscountCodeChangeIsActiveAction $action): DiscountCodeChangeIsActiveAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeIsActive($action = null)
    {
        $this->addAction($this->resolveAction(DiscountCodeChangeIsActiveAction::class, $action));
        return $this;
    }
    /**
     * @param DiscountCodeSetCartPredicateAction|callable $action builder function <code>
     *   function(DiscountCodeSetCartPredicateAction $action): DiscountCodeSetCartPredicateAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCartPredicate($action = null)
    {
        $this->addAction($this->resolveAction(DiscountCodeSetCartPredicateAction::class, $action));
        return $this;
    }
    /**
     * @param DiscountCodeSetDescriptionAction|callable $action builder function <code>
     *   function(DiscountCodeSetDescriptionAction $action): DiscountCodeSetDescriptionAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setDescription($action = null)
    {
        $this->addAction($this->resolveAction(DiscountCodeSetDescriptionAction::class, $action));
        return $this;
    }
    /**
     * @param DiscountCodeSetMaxApplicationsAction|callable $action builder function <code>
     *   function(DiscountCodeSetMaxApplicationsAction $action): DiscountCodeSetMaxApplicationsAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setMaxApplications($action = null)
    {
        $this->addAction($this->resolveAction(DiscountCodeSetMaxApplicationsAction::class, $action));
        return $this;
    }
    /**
     * @param DiscountCodeSetMaxApplicationsPerCustomerAction|callable $action builder function <code>
     *   function(DiscountCodeSetMaxApplicationsPerCustomerAction $action): DiscountCodeSetMaxApplicationsPerCustomerAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setMaxApplicationsPerCustomer($action = null)
    {
        $this->addAction($this->resolveAction(DiscountCodeSetMaxApplicationsPerCustomerAction::class, $action));
        return $this;
    }
    /**
     * @param DiscountCodeSetNameAction|callable $action builder function <code>
     *   function(DiscountCodeSetNameAction $action): DiscountCodeSetNameAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setName($action = null)
    {
        $this->addAction($this->resolveAction(DiscountCodeSetNameAction::class, $action));
        return $this;
    }
    /**
     * @param DiscountCodeSetValidFromAction|callable $action builder function <code>
     *   function(DiscountCodeSetValidFromAction $action): DiscountCodeSetValidFromAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setValidFrom($action = null)
    {
        $this->addAction($this->resolveAction(DiscountCodeSetValidFromAction::class, $action));
        return $this;
    }
    /**
     * @param DiscountCodeSetValidUntilAction|callable $action builder function <code>
     *   function(DiscountCodeSetValidUntilAction $action): DiscountCodeSetValidUntilAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setValidUntil($action = null)
    {
        $this->addAction($this->resolveAction(DiscountCodeSetValidUntilAction::class, $action));
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

    private function resolveAction($class, $action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData($class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if ($action instanceof $class) {
            return $action;
        }

        throw new BuilderInvalidArgumentException(
            sprintf('Expected method to be called with or callable to return %s', $class)
        );
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
