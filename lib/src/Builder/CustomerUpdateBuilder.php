<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Commercetools\Exception\InvalidArgumentException;
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


class CustomerUpdateBuilder extends BaseBuilder
{
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
     *   function(CustomerAddAddressAction $action): CustomerAddAddressAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function addAddress($action = null)
    {
        $this->addAction($this->resolveAction(CustomerAddAddressAction::class, $action));
        return $this;
    }
    /**
     * @param CustomerAddBillingAddressIdAction|callable $action builder function <code>
     *   function(CustomerAddBillingAddressIdAction $action): CustomerAddBillingAddressIdAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function addBillingAddressId($action = null)
    {
        $this->addAction($this->resolveAction(CustomerAddBillingAddressIdAction::class, $action));
        return $this;
    }
    /**
     * @param CustomerAddShippingAddressIdAction|callable $action builder function <code>
     *   function(CustomerAddShippingAddressIdAction $action): CustomerAddShippingAddressIdAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function addShippingAddressId($action = null)
    {
        $this->addAction($this->resolveAction(CustomerAddShippingAddressIdAction::class, $action));
        return $this;
    }
    /**
     * @param CustomerChangeAddressAction|callable $action builder function <code>
     *   function(CustomerChangeAddressAction $action): CustomerChangeAddressAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function changeAddress($action = null)
    {
        $this->addAction($this->resolveAction(CustomerChangeAddressAction::class, $action));
        return $this;
    }
    /**
     * @param CustomerChangeEmailAction|callable $action builder function <code>
     *   function(CustomerChangeEmailAction $action): CustomerChangeEmailAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function changeEmail($action = null)
    {
        $this->addAction($this->resolveAction(CustomerChangeEmailAction::class, $action));
        return $this;
    }
    /**
     * @param CustomerRemoveAddressAction|callable $action builder function <code>
     *   function(CustomerRemoveAddressAction $action): CustomerRemoveAddressAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function removeAddress($action = null)
    {
        $this->addAction($this->resolveAction(CustomerRemoveAddressAction::class, $action));
        return $this;
    }
    /**
     * @param CustomerRemoveBillingAddressIdAction|callable $action builder function <code>
     *   function(CustomerRemoveBillingAddressIdAction $action): CustomerRemoveBillingAddressIdAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function removeBillingAddressId($action = null)
    {
        $this->addAction($this->resolveAction(CustomerRemoveBillingAddressIdAction::class, $action));
        return $this;
    }
    /**
     * @param CustomerRemoveShippingAddressIdAction|callable $action builder function <code>
     *   function(CustomerRemoveShippingAddressIdAction $action): CustomerRemoveShippingAddressIdAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function removeShippingAddressId($action = null)
    {
        $this->addAction($this->resolveAction(CustomerRemoveShippingAddressIdAction::class, $action));
        return $this;
    }
    /**
     * @param CustomerSetCompanyNameAction|callable $action builder function <code>
     *   function(CustomerSetCompanyNameAction $action): CustomerSetCompanyNameAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setCompanyName($action = null)
    {
        $this->addAction($this->resolveAction(CustomerSetCompanyNameAction::class, $action));
        return $this;
    }
    /**
     * @param CustomerSetCustomFieldAction|callable $action builder function <code>
     *   function(CustomerSetCustomFieldAction $action): CustomerSetCustomFieldAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setCustomField($action = null)
    {
        $this->addAction($this->resolveAction(CustomerSetCustomFieldAction::class, $action));
        return $this;
    }
    /**
     * @param CustomerSetCustomTypeAction|callable $action builder function <code>
     *   function(CustomerSetCustomTypeAction $action): CustomerSetCustomTypeAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setCustomType($action = null)
    {
        $this->addAction($this->resolveAction(CustomerSetCustomTypeAction::class, $action));
        return $this;
    }
    /**
     * @param CustomerSetCustomerGroupAction|callable $action builder function <code>
     *   function(CustomerSetCustomerGroupAction $action): CustomerSetCustomerGroupAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setCustomerGroup($action = null)
    {
        $this->addAction($this->resolveAction(CustomerSetCustomerGroupAction::class, $action));
        return $this;
    }
    /**
     * @param CustomerSetCustomerNumberAction|callable $action builder function <code>
     *   function(CustomerSetCustomerNumberAction $action): CustomerSetCustomerNumberAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setCustomerNumber($action = null)
    {
        $this->addAction($this->resolveAction(CustomerSetCustomerNumberAction::class, $action));
        return $this;
    }
    /**
     * @param CustomerSetDateOfBirthAction|callable $action builder function <code>
     *   function(CustomerSetDateOfBirthAction $action): CustomerSetDateOfBirthAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setDateOfBirth($action = null)
    {
        $this->addAction($this->resolveAction(CustomerSetDateOfBirthAction::class, $action));
        return $this;
    }
    /**
     * @param CustomerSetDefaultBillingAddressAction|callable $action builder function <code>
     *   function(CustomerSetDefaultBillingAddressAction $action): CustomerSetDefaultBillingAddressAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setDefaultBillingAddress($action = null)
    {
        $this->addAction($this->resolveAction(CustomerSetDefaultBillingAddressAction::class, $action));
        return $this;
    }
    /**
     * @param CustomerSetDefaultShippingAddressAction|callable $action builder function <code>
     *   function(CustomerSetDefaultShippingAddressAction $action): CustomerSetDefaultShippingAddressAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setDefaultShippingAddress($action = null)
    {
        $this->addAction($this->resolveAction(CustomerSetDefaultShippingAddressAction::class, $action));
        return $this;
    }
    /**
     * @param CustomerSetExternalIdAction|callable $action builder function <code>
     *   function(CustomerSetExternalIdAction $action): CustomerSetExternalIdAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setExternalId($action = null)
    {
        $this->addAction($this->resolveAction(CustomerSetExternalIdAction::class, $action));
        return $this;
    }
    /**
     * @param CustomerSetFirstNameAction|callable $action builder function <code>
     *   function(CustomerSetFirstNameAction $action): CustomerSetFirstNameAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setFirstName($action = null)
    {
        $this->addAction($this->resolveAction(CustomerSetFirstNameAction::class, $action));
        return $this;
    }
    /**
     * @param CustomerSetKeyAction|callable $action builder function <code>
     *   function(CustomerSetKeyAction $action): CustomerSetKeyAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setKey($action = null)
    {
        $this->addAction($this->resolveAction(CustomerSetKeyAction::class, $action));
        return $this;
    }
    /**
     * @param CustomerSetLastNameAction|callable $action builder function <code>
     *   function(CustomerSetLastNameAction $action): CustomerSetLastNameAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setLastName($action = null)
    {
        $this->addAction($this->resolveAction(CustomerSetLastNameAction::class, $action));
        return $this;
    }
    /**
     * @param CustomerSetLocaleAction|callable $action builder function <code>
     *   function(CustomerSetLocaleAction $action): CustomerSetLocaleAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setLocale($action = null)
    {
        $this->addAction($this->resolveAction(CustomerSetLocaleAction::class, $action));
        return $this;
    }
    /**
     * @param CustomerSetMiddleNameAction|callable $action builder function <code>
     *   function(CustomerSetMiddleNameAction $action): CustomerSetMiddleNameAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setMiddleName($action = null)
    {
        $this->addAction($this->resolveAction(CustomerSetMiddleNameAction::class, $action));
        return $this;
    }
    /**
     * @param CustomerSetSalutationAction|callable $action builder function <code>
     *   function(CustomerSetSalutationAction $action): CustomerSetSalutationAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setSalutation($action = null)
    {
        $this->addAction($this->resolveAction(CustomerSetSalutationAction::class, $action));
        return $this;
    }
    /**
     * @param CustomerSetTitleAction|callable $action builder function <code>
     *   function(CustomerSetTitleAction $action): CustomerSetTitleAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setTitle($action = null)
    {
        $this->addAction($this->resolveAction(CustomerSetTitleAction::class, $action));
        return $this;
    }
    /**
     * @param CustomerSetVatIdAction|callable $action builder function <code>
     *   function(CustomerSetVatIdAction $action): CustomerSetVatIdAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setVatId($action = null)
    {
        $this->addAction($this->resolveAction(CustomerSetVatIdAction::class, $action));
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

    /**
     * @param $class
     * @param $action
     * @return CustomerUpdateAction
     * @throws InvalidArgumentException
     */
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

        throw new InvalidArgumentException(
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
