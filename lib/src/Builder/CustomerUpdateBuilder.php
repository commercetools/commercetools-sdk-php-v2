<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Psr\Http\Message\RequestInterface;
use Commercetools\Types\Customer\CustomerUpdateAction;

use Commercetools\Types\Customer\CustomerAddAddressAction;
use Commercetools\Types\Customer\CustomerAddBillingAddressIdAction;
use Commercetools\Types\Customer\CustomerAddShippingAddressIdAction;
use Commercetools\Types\Customer\CustomerChangeAddressAction;
use Commercetools\Types\Customer\CustomerChangeEmailAction;
use Commercetools\Types\Customer\CustomerRemoveAddressAction;
use Commercetools\Types\Customer\CustomerRemoveBillingAddressIdAction;
use Commercetools\Types\Customer\CustomerRemoveShippingAddressIdAction;
use Commercetools\Types\Customer\CustomerSetCompanyNameAction;
use Commercetools\Types\Customer\CustomerSetCustomFieldAction;
use Commercetools\Types\Customer\CustomerSetCustomTypeAction;
use Commercetools\Types\Customer\CustomerSetCustomerGroupAction;
use Commercetools\Types\Customer\CustomerSetCustomerNumberAction;
use Commercetools\Types\Customer\CustomerSetDateOfBirthAction;
use Commercetools\Types\Customer\CustomerSetDefaultBillingAddressAction;
use Commercetools\Types\Customer\CustomerSetDefaultShippingAddressAction;
use Commercetools\Types\Customer\CustomerSetExternalIdAction;
use Commercetools\Types\Customer\CustomerSetFirstNameAction;
use Commercetools\Types\Customer\CustomerSetKeyAction;
use Commercetools\Types\Customer\CustomerSetLastNameAction;
use Commercetools\Types\Customer\CustomerSetLocaleAction;
use Commercetools\Types\Customer\CustomerSetMiddleNameAction;
use Commercetools\Types\Customer\CustomerSetSalutationAction;
use Commercetools\Types\Customer\CustomerSetTitleAction;
use Commercetools\Types\Customer\CustomerSetVatIdAction;
use Commercetools\Types\Customer\Customer;
use Commercetools\Types\Customer\CustomerUpdate;
use Commercetools\Request\ByProjectKeyCustomersByIDPost;


class CustomerUpdateBuilder extends BaseBuilder {
    /**
     * @var Customer
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
     * @param CustomerAddAddressAction|callable $action builder function <code>
     *   function (CustomerAddAddressAction $action): CustomerAddAddressAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addAddress($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CustomerAddAddressAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CustomerAddAddressAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CustomerAddBillingAddressIdAction|callable $action builder function <code>
     *   function (CustomerAddBillingAddressIdAction $action): CustomerAddBillingAddressIdAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addBillingAddressId($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CustomerAddBillingAddressIdAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CustomerAddBillingAddressIdAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CustomerAddShippingAddressIdAction|callable $action builder function <code>
     *   function (CustomerAddShippingAddressIdAction $action): CustomerAddShippingAddressIdAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addShippingAddressId($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CustomerAddShippingAddressIdAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CustomerAddShippingAddressIdAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CustomerChangeAddressAction|callable $action builder function <code>
     *   function (CustomerChangeAddressAction $action): CustomerChangeAddressAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeAddress($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CustomerChangeAddressAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CustomerChangeAddressAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CustomerChangeEmailAction|callable $action builder function <code>
     *   function (CustomerChangeEmailAction $action): CustomerChangeEmailAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeEmail($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CustomerChangeEmailAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CustomerChangeEmailAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CustomerRemoveAddressAction|callable $action builder function <code>
     *   function (CustomerRemoveAddressAction $action): CustomerRemoveAddressAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeAddress($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CustomerRemoveAddressAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CustomerRemoveAddressAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CustomerRemoveBillingAddressIdAction|callable $action builder function <code>
     *   function (CustomerRemoveBillingAddressIdAction $action): CustomerRemoveBillingAddressIdAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeBillingAddressId($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CustomerRemoveBillingAddressIdAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CustomerRemoveBillingAddressIdAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CustomerRemoveShippingAddressIdAction|callable $action builder function <code>
     *   function (CustomerRemoveShippingAddressIdAction $action): CustomerRemoveShippingAddressIdAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeShippingAddressId($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CustomerRemoveShippingAddressIdAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CustomerRemoveShippingAddressIdAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CustomerSetCompanyNameAction|callable $action builder function <code>
     *   function (CustomerSetCompanyNameAction $action): CustomerSetCompanyNameAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCompanyName($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CustomerSetCompanyNameAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CustomerSetCompanyNameAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CustomerSetCustomFieldAction|callable $action builder function <code>
     *   function (CustomerSetCustomFieldAction $action): CustomerSetCustomFieldAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomField($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CustomerSetCustomFieldAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CustomerSetCustomFieldAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CustomerSetCustomTypeAction|callable $action builder function <code>
     *   function (CustomerSetCustomTypeAction $action): CustomerSetCustomTypeAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomType($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CustomerSetCustomTypeAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CustomerSetCustomTypeAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CustomerSetCustomerGroupAction|callable $action builder function <code>
     *   function (CustomerSetCustomerGroupAction $action): CustomerSetCustomerGroupAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomerGroup($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CustomerSetCustomerGroupAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CustomerSetCustomerGroupAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CustomerSetCustomerNumberAction|callable $action builder function <code>
     *   function (CustomerSetCustomerNumberAction $action): CustomerSetCustomerNumberAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomerNumber($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CustomerSetCustomerNumberAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CustomerSetCustomerNumberAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CustomerSetDateOfBirthAction|callable $action builder function <code>
     *   function (CustomerSetDateOfBirthAction $action): CustomerSetDateOfBirthAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setDateOfBirth($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CustomerSetDateOfBirthAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CustomerSetDateOfBirthAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CustomerSetDefaultBillingAddressAction|callable $action builder function <code>
     *   function (CustomerSetDefaultBillingAddressAction $action): CustomerSetDefaultBillingAddressAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setDefaultBillingAddress($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CustomerSetDefaultBillingAddressAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CustomerSetDefaultBillingAddressAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CustomerSetDefaultShippingAddressAction|callable $action builder function <code>
     *   function (CustomerSetDefaultShippingAddressAction $action): CustomerSetDefaultShippingAddressAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setDefaultShippingAddress($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CustomerSetDefaultShippingAddressAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CustomerSetDefaultShippingAddressAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CustomerSetExternalIdAction|callable $action builder function <code>
     *   function (CustomerSetExternalIdAction $action): CustomerSetExternalIdAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setExternalId($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CustomerSetExternalIdAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CustomerSetExternalIdAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CustomerSetFirstNameAction|callable $action builder function <code>
     *   function (CustomerSetFirstNameAction $action): CustomerSetFirstNameAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setFirstName($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CustomerSetFirstNameAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CustomerSetFirstNameAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CustomerSetKeyAction|callable $action builder function <code>
     *   function (CustomerSetKeyAction $action): CustomerSetKeyAction {
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
            $emptyAction = $this->mapData(CustomerSetKeyAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CustomerSetKeyAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CustomerSetLastNameAction|callable $action builder function <code>
     *   function (CustomerSetLastNameAction $action): CustomerSetLastNameAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setLastName($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CustomerSetLastNameAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CustomerSetLastNameAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CustomerSetLocaleAction|callable $action builder function <code>
     *   function (CustomerSetLocaleAction $action): CustomerSetLocaleAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setLocale($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CustomerSetLocaleAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CustomerSetLocaleAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CustomerSetMiddleNameAction|callable $action builder function <code>
     *   function (CustomerSetMiddleNameAction $action): CustomerSetMiddleNameAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setMiddleName($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CustomerSetMiddleNameAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CustomerSetMiddleNameAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CustomerSetSalutationAction|callable $action builder function <code>
     *   function (CustomerSetSalutationAction $action): CustomerSetSalutationAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setSalutation($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CustomerSetSalutationAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CustomerSetSalutationAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CustomerSetTitleAction|callable $action builder function <code>
     *   function (CustomerSetTitleAction $action): CustomerSetTitleAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setTitle($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CustomerSetTitleAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CustomerSetTitleAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CustomerSetVatIdAction|callable $action builder function <code>
     *   function (CustomerSetVatIdAction $action): CustomerSetVatIdAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setVatId($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CustomerSetVatIdAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CustomerSetVatIdAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }

    /**
     * @param CustomerUpdateAction $action
     * @return $this;
     */
    public function addAction(CustomerUpdateAction $action)
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
     * @param Customer $customer
     * @return $this
     */
    public function with(Customer $customer)
    {
        $this->resource = $customer;
        return $this;
    }

    public function reset()
    {
        $this->actions = [];
        $this->resource = null;
    }

    public function getResource(): ?Customer
    {
        return $this->resource;
    }

    /**
     * Build CustomerUpdate
     * @return CustomerUpdate
     */
    public function build(): CustomerUpdate
    {
        $data = [
            'actions' => $this->actions,
        ];
        $update = $this->mapData(CustomerUpdate::class, $data);
        if ($update instanceof CustomerUpdate &&
            $this->resource instanceof Customer
        ) {
            $update->setVersion($this->resource->getVersion());
        }

        return $update;
    }

    public function buildRequest(): ?ByProjectKeyCustomersByIDPost
    {
        if (!is_null($this->requestBuilderCallback)) {
            $callback = $this->requestBuilderCallback;
            return $callback($this);
        }

        return null;
    }
}
