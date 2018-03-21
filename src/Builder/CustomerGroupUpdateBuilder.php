<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Commercetools\Types\CustomerGroup\CustomerGroupUpdateAction;

use Commercetools\Types\CustomerGroup\CustomerGroupSetKeyAction;
use Commercetools\Types\CustomerGroup\CustomerGroupChangeNameAction;
use Commercetools\Types\CustomerGroup\CustomerGroup;
use Commercetools\Types\CustomerGroup\CustomerGroupUpdate;


class CustomerGroupUpdateBuilder extends BaseBuilder {
    /**
     * @var CustomerGroup
     */
    private $resource = null;

    /**
     * @var array
     */
    private $actions = [];

    /**
     * @param callable $callback builder function <code>
     *   function (CustomerGroupSetKeyAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setKey(callable $callback = null)
    {
        $action = $this->mapData(CustomerGroupSetKeyAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CustomerGroupChangeNameAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeName(callable $callback = null)
    {
        $action = $this->mapData(CustomerGroupChangeNameAction::class, null);
        $this->callback($action, $callback);
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
        $this->actions[] = $action;
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

    /**
     * Build CustomerGroupUpdate and delete internal state
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
}
