<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Psr\Http\Message\RequestInterface;
use Commercetools\Types\CustomerGroup\CustomerGroupUpdateAction;

use Commercetools\Types\CustomerGroup\CustomerGroupChangeNameAction;
use Commercetools\Types\CustomerGroup\CustomerGroupSetKeyAction;
use Commercetools\Types\CustomerGroup\CustomerGroup;
use Commercetools\Types\CustomerGroup\CustomerGroupUpdate;
use Commercetools\Request\ByProjectKeyCustomerGroupsByIDPost;


class CustomerGroupUpdateBuilder extends BaseBuilder {
    /**
     * @var CustomerGroup
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
     * @param CustomerGroupChangeNameAction|callable $action builder function <code>
     *   function (CustomerGroupChangeNameAction $action): CustomerGroupChangeNameAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeName($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CustomerGroupChangeNameAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CustomerGroupChangeNameAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CustomerGroupSetKeyAction|callable $action builder function <code>
     *   function (CustomerGroupSetKeyAction $action): CustomerGroupSetKeyAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setKey($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CustomerGroupSetKeyAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CustomerGroupSetKeyAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }

    /**
     * @param CustomerGroupUpdateAction $action
     * @return $this;
     */
    public function addAction(CustomerGroupUpdateAction $action)
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
        return $action;
    }

    /**
     * @param CustomerGroup $customerGroup
     * @return $this
     */
    public function with(CustomerGroup $customerGroup)
    {
        $this->resource = $customerGroup;
        return $this;
    }

    public function reset()
    {
        $this->actions = [];
        $this->resource = null;
    }

    public function getResource(): ?CustomerGroup
    {
        return $this->resource;
    }

    /**
     * Build CustomerGroupUpdate
     * @return CustomerGroupUpdate
     */
    public function build(): CustomerGroupUpdate
    {
        $data = [
            'actions' => $this->actions,
        ];
        $update = $this->mapData(CustomerGroupUpdate::class, $data);
        if ($update instanceof CustomerGroupUpdate &&
            $this->resource instanceof CustomerGroup
        ) {
            $update->setVersion($this->resource->getVersion());
        }

        return $update;
    }

    public function buildRequest(): ?ByProjectKeyCustomerGroupsByIDPost
    {
        if (!is_null($this->requestBuilderCallback)) {
            $callback = $this->requestBuilderCallback;
            return $callback($this);
        }

        return null;
    }
}
