<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Commercetools\Types\Customer\CustomerUpdateAction;

use Commercetools\Types\Customer\CustomerRemoveAddressAction;
use Commercetools\Types\Customer\CustomerSetSalutationAction;
use Commercetools\Types\Customer\CustomerChangeEmailAction;
use Commercetools\Types\Customer\CustomerAddShippingAddressIdAction;
use Commercetools\Types\Customer\CustomerSetFirstNameAction;
use Commercetools\Types\Customer\CustomerSetDefaultShippingAddressAction;
use Commercetools\Types\Customer\CustomerSetVatIdAction;
use Commercetools\Types\Customer\CustomerRemoveBillingAddressIdAction;
use Commercetools\Types\Customer\CustomerSetTitleAction;
use Commercetools\Types\Customer\CustomerAddBillingAddressIdAction;
use Commercetools\Types\Customer\CustomerRemoveShippingAddressIdAction;
use Commercetools\Types\Customer\CustomerSetCustomerGroupAction;
use Commercetools\Types\Customer\CustomerSetCustomTypeAction;
use Commercetools\Types\Customer\CustomerSetCustomerNumberAction;
use Commercetools\Types\Customer\CustomerSetDefaultBillingAddressAction;
use Commercetools\Types\Customer\CustomerSetLastNameAction;
use Commercetools\Types\Customer\CustomerSetExternalIdAction;
use Commercetools\Types\Customer\CustomerSetLocaleAction;
use Commercetools\Types\Customer\CustomerAddAddressAction;
use Commercetools\Types\Customer\CustomerSetCustomFieldAction;
use Commercetools\Types\Customer\CustomerChangeAddressAction;
use Commercetools\Types\Customer\CustomerSetKeyAction;
use Commercetools\Types\Customer\CustomerSetMiddleNameAction;
use Commercetools\Types\Customer\CustomerSetDateOfBirthAction;
use Commercetools\Types\Customer\CustomerSetCompanyNameAction;
use Commercetools\Types\Customer\Customer;
use Commercetools\Types\Customer\CustomerUpdate;


class CustomerUpdateBuilder extends BaseBuilder {
    /**
     * @var Customer
     */
    private $resource = null;

    /**
     * @var array
     */
    private $actions = [];

    /**
     * @param callable $callback builder function <code>
     *   function (CustomerRemoveAddressAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeAddress(callable $callback = null)
    {
        $action = $this->mapData(CustomerRemoveAddressAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CustomerSetSalutationAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setSalutation(callable $callback = null)
    {
        $action = $this->mapData(CustomerSetSalutationAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CustomerChangeEmailAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeEmail(callable $callback = null)
    {
        $action = $this->mapData(CustomerChangeEmailAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CustomerAddShippingAddressIdAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addShippingAddressId(callable $callback = null)
    {
        $action = $this->mapData(CustomerAddShippingAddressIdAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CustomerSetFirstNameAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setFirstName(callable $callback = null)
    {
        $action = $this->mapData(CustomerSetFirstNameAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CustomerSetDefaultShippingAddressAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setDefaultShippingAddress(callable $callback = null)
    {
        $action = $this->mapData(CustomerSetDefaultShippingAddressAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CustomerSetVatIdAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setVatId(callable $callback = null)
    {
        $action = $this->mapData(CustomerSetVatIdAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CustomerRemoveBillingAddressIdAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeBillingAddressId(callable $callback = null)
    {
        $action = $this->mapData(CustomerRemoveBillingAddressIdAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CustomerSetTitleAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setTitle(callable $callback = null)
    {
        $action = $this->mapData(CustomerSetTitleAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CustomerAddBillingAddressIdAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addBillingAddressId(callable $callback = null)
    {
        $action = $this->mapData(CustomerAddBillingAddressIdAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CustomerRemoveShippingAddressIdAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeShippingAddressId(callable $callback = null)
    {
        $action = $this->mapData(CustomerRemoveShippingAddressIdAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CustomerSetCustomerGroupAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomerGroup(callable $callback = null)
    {
        $action = $this->mapData(CustomerSetCustomerGroupAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CustomerSetCustomTypeAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomType(callable $callback = null)
    {
        $action = $this->mapData(CustomerSetCustomTypeAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CustomerSetCustomerNumberAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomerNumber(callable $callback = null)
    {
        $action = $this->mapData(CustomerSetCustomerNumberAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CustomerSetDefaultBillingAddressAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setDefaultBillingAddress(callable $callback = null)
    {
        $action = $this->mapData(CustomerSetDefaultBillingAddressAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CustomerSetLastNameAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setLastName(callable $callback = null)
    {
        $action = $this->mapData(CustomerSetLastNameAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CustomerSetExternalIdAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setExternalId(callable $callback = null)
    {
        $action = $this->mapData(CustomerSetExternalIdAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CustomerSetLocaleAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setLocale(callable $callback = null)
    {
        $action = $this->mapData(CustomerSetLocaleAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CustomerAddAddressAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addAddress(callable $callback = null)
    {
        $action = $this->mapData(CustomerAddAddressAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CustomerSetCustomFieldAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomField(callable $callback = null)
    {
        $action = $this->mapData(CustomerSetCustomFieldAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CustomerChangeAddressAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeAddress(callable $callback = null)
    {
        $action = $this->mapData(CustomerChangeAddressAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CustomerSetKeyAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setKey(callable $callback = null)
    {
        $action = $this->mapData(CustomerSetKeyAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CustomerSetMiddleNameAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setMiddleName(callable $callback = null)
    {
        $action = $this->mapData(CustomerSetMiddleNameAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CustomerSetDateOfBirthAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setDateOfBirth(callable $callback = null)
    {
        $action = $this->mapData(CustomerSetDateOfBirthAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CustomerSetCompanyNameAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCompanyName(callable $callback = null)
    {
        $action = $this->mapData(CustomerSetCompanyNameAction::class, null);
        $this->callback($action, $callback);
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
        $this->actions[] = $action;
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

    /**
     * Build CustomerUpdate and delete internal state
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
}
