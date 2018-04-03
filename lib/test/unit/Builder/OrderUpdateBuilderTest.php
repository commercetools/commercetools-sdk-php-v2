<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Builder\OrderUpdateBuilder;
use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Order\OrderAddDeliveryAction;
use Commercetools\Types\Order\OrderAddParcelToDeliveryAction;
use Commercetools\Types\Order\OrderAddPaymentAction;
use Commercetools\Types\Order\OrderAddReturnInfoAction;
use Commercetools\Types\Order\OrderChangeOrderStateAction;
use Commercetools\Types\Order\OrderChangePaymentStateAction;
use Commercetools\Types\Order\OrderChangeShipmentStateAction;
use Commercetools\Types\Order\OrderImportCustomLineItemStateAction;
use Commercetools\Types\Order\OrderImportLineItemStateAction;
use Commercetools\Types\Order\OrderRemoveDeliveryAction;
use Commercetools\Types\Order\OrderRemoveParcelFromDeliveryAction;
use Commercetools\Types\Order\OrderRemovePaymentAction;
use Commercetools\Types\Order\OrderSetBillingAddressAction;
use Commercetools\Types\Order\OrderSetCustomFieldAction;
use Commercetools\Types\Order\OrderSetCustomLineItemCustomFieldAction;
use Commercetools\Types\Order\OrderSetCustomLineItemCustomTypeAction;
use Commercetools\Types\Order\OrderSetCustomTypeAction;
use Commercetools\Types\Order\OrderSetCustomerEmailAction;
use Commercetools\Types\Order\OrderSetDeliveryAddressAction;
use Commercetools\Types\Order\OrderSetDeliveryItemsAction;
use Commercetools\Types\Order\OrderSetLineItemCustomFieldAction;
use Commercetools\Types\Order\OrderSetLineItemCustomTypeAction;
use Commercetools\Types\Order\OrderSetLocaleAction;
use Commercetools\Types\Order\OrderSetOrderNumberAction;
use Commercetools\Types\Order\OrderSetParcelItemsAction;
use Commercetools\Types\Order\OrderSetParcelMeasurementsAction;
use Commercetools\Types\Order\OrderSetParcelTrackingDataAction;
use Commercetools\Types\Order\OrderSetReturnPaymentStateAction;
use Commercetools\Types\Order\OrderSetReturnShipmentStateAction;
use Commercetools\Types\Order\OrderSetShippingAddressAction;
use Commercetools\Types\Order\OrderTransitionCustomLineItemStateAction;
use Commercetools\Types\Order\OrderTransitionLineItemStateAction;
use Commercetools\Types\Order\OrderTransitionStateAction;
use Commercetools\Types\Order\OrderUpdateSyncInfoAction;
use Commercetools\Types\Order\Order;
use Commercetools\Types\Order\OrderUpdate;
use Commercetools\Request\ByProjectKeyOrdersByIDPost;

use Commercetools\Types\Order\OrderAddDeliveryActionModel;
use Commercetools\Types\Order\OrderAddParcelToDeliveryActionModel;
use Commercetools\Types\Order\OrderAddPaymentActionModel;
use Commercetools\Types\Order\OrderAddReturnInfoActionModel;
use Commercetools\Types\Order\OrderChangeOrderStateActionModel;
use Commercetools\Types\Order\OrderChangePaymentStateActionModel;
use Commercetools\Types\Order\OrderChangeShipmentStateActionModel;
use Commercetools\Types\Order\OrderImportCustomLineItemStateActionModel;
use Commercetools\Types\Order\OrderImportLineItemStateActionModel;
use Commercetools\Types\Order\OrderRemoveDeliveryActionModel;
use Commercetools\Types\Order\OrderRemoveParcelFromDeliveryActionModel;
use Commercetools\Types\Order\OrderRemovePaymentActionModel;
use Commercetools\Types\Order\OrderSetBillingAddressActionModel;
use Commercetools\Types\Order\OrderSetCustomFieldActionModel;
use Commercetools\Types\Order\OrderSetCustomLineItemCustomFieldActionModel;
use Commercetools\Types\Order\OrderSetCustomLineItemCustomTypeActionModel;
use Commercetools\Types\Order\OrderSetCustomTypeActionModel;
use Commercetools\Types\Order\OrderSetCustomerEmailActionModel;
use Commercetools\Types\Order\OrderSetDeliveryAddressActionModel;
use Commercetools\Types\Order\OrderSetDeliveryItemsActionModel;
use Commercetools\Types\Order\OrderSetLineItemCustomFieldActionModel;
use Commercetools\Types\Order\OrderSetLineItemCustomTypeActionModel;
use Commercetools\Types\Order\OrderSetLocaleActionModel;
use Commercetools\Types\Order\OrderSetOrderNumberActionModel;
use Commercetools\Types\Order\OrderSetParcelItemsActionModel;
use Commercetools\Types\Order\OrderSetParcelMeasurementsActionModel;
use Commercetools\Types\Order\OrderSetParcelTrackingDataActionModel;
use Commercetools\Types\Order\OrderSetReturnPaymentStateActionModel;
use Commercetools\Types\Order\OrderSetReturnShipmentStateActionModel;
use Commercetools\Types\Order\OrderSetShippingAddressActionModel;
use Commercetools\Types\Order\OrderTransitionCustomLineItemStateActionModel;
use Commercetools\Types\Order\OrderTransitionLineItemStateActionModel;
use Commercetools\Types\Order\OrderTransitionStateActionModel;
use Commercetools\Types\Order\OrderUpdateSyncInfoActionModel;

use PHPUnit\Framework\TestCase;
use Commercetools\Types\Order\OrderModel;


class OrderBuilderTest extends TestCase {
    public function testAddDeliveryCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->addDelivery(function($action) { static::assertInstanceOf(OrderAddDeliveryAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderAddDeliveryAction::class, $update->getActions()->current());
    }

    public function testAddDeliveryInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->addDelivery(function($action) { static::assertInstanceOf(OrderAddDeliveryAction::class, $action); return []; });
    }

    public function testAddDeliveryInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->addDelivery(new OrderAddDeliveryActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderAddDeliveryAction::class, $update->getActions()->current());
    }

    public function testAddDeliveryInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->addDelivery([]);
    }

    public function testAddParcelToDeliveryCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->addParcelToDelivery(function($action) { static::assertInstanceOf(OrderAddParcelToDeliveryAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderAddParcelToDeliveryAction::class, $update->getActions()->current());
    }

    public function testAddParcelToDeliveryInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->addParcelToDelivery(function($action) { static::assertInstanceOf(OrderAddParcelToDeliveryAction::class, $action); return []; });
    }

    public function testAddParcelToDeliveryInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->addParcelToDelivery(new OrderAddParcelToDeliveryActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderAddParcelToDeliveryAction::class, $update->getActions()->current());
    }

    public function testAddParcelToDeliveryInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->addParcelToDelivery([]);
    }

    public function testAddPaymentCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->addPayment(function($action) { static::assertInstanceOf(OrderAddPaymentAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderAddPaymentAction::class, $update->getActions()->current());
    }

    public function testAddPaymentInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->addPayment(function($action) { static::assertInstanceOf(OrderAddPaymentAction::class, $action); return []; });
    }

    public function testAddPaymentInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->addPayment(new OrderAddPaymentActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderAddPaymentAction::class, $update->getActions()->current());
    }

    public function testAddPaymentInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->addPayment([]);
    }

    public function testAddReturnInfoCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->addReturnInfo(function($action) { static::assertInstanceOf(OrderAddReturnInfoAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderAddReturnInfoAction::class, $update->getActions()->current());
    }

    public function testAddReturnInfoInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->addReturnInfo(function($action) { static::assertInstanceOf(OrderAddReturnInfoAction::class, $action); return []; });
    }

    public function testAddReturnInfoInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->addReturnInfo(new OrderAddReturnInfoActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderAddReturnInfoAction::class, $update->getActions()->current());
    }

    public function testAddReturnInfoInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->addReturnInfo([]);
    }

    public function testChangeOrderStateCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->changeOrderState(function($action) { static::assertInstanceOf(OrderChangeOrderStateAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderChangeOrderStateAction::class, $update->getActions()->current());
    }

    public function testChangeOrderStateInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->changeOrderState(function($action) { static::assertInstanceOf(OrderChangeOrderStateAction::class, $action); return []; });
    }

    public function testChangeOrderStateInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->changeOrderState(new OrderChangeOrderStateActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderChangeOrderStateAction::class, $update->getActions()->current());
    }

    public function testChangeOrderStateInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->changeOrderState([]);
    }

    public function testChangePaymentStateCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->changePaymentState(function($action) { static::assertInstanceOf(OrderChangePaymentStateAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderChangePaymentStateAction::class, $update->getActions()->current());
    }

    public function testChangePaymentStateInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->changePaymentState(function($action) { static::assertInstanceOf(OrderChangePaymentStateAction::class, $action); return []; });
    }

    public function testChangePaymentStateInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->changePaymentState(new OrderChangePaymentStateActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderChangePaymentStateAction::class, $update->getActions()->current());
    }

    public function testChangePaymentStateInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->changePaymentState([]);
    }

    public function testChangeShipmentStateCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->changeShipmentState(function($action) { static::assertInstanceOf(OrderChangeShipmentStateAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderChangeShipmentStateAction::class, $update->getActions()->current());
    }

    public function testChangeShipmentStateInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->changeShipmentState(function($action) { static::assertInstanceOf(OrderChangeShipmentStateAction::class, $action); return []; });
    }

    public function testChangeShipmentStateInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->changeShipmentState(new OrderChangeShipmentStateActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderChangeShipmentStateAction::class, $update->getActions()->current());
    }

    public function testChangeShipmentStateInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->changeShipmentState([]);
    }

    public function testImportCustomLineItemStateCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->importCustomLineItemState(function($action) { static::assertInstanceOf(OrderImportCustomLineItemStateAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderImportCustomLineItemStateAction::class, $update->getActions()->current());
    }

    public function testImportCustomLineItemStateInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->importCustomLineItemState(function($action) { static::assertInstanceOf(OrderImportCustomLineItemStateAction::class, $action); return []; });
    }

    public function testImportCustomLineItemStateInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->importCustomLineItemState(new OrderImportCustomLineItemStateActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderImportCustomLineItemStateAction::class, $update->getActions()->current());
    }

    public function testImportCustomLineItemStateInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->importCustomLineItemState([]);
    }

    public function testImportLineItemStateCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->importLineItemState(function($action) { static::assertInstanceOf(OrderImportLineItemStateAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderImportLineItemStateAction::class, $update->getActions()->current());
    }

    public function testImportLineItemStateInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->importLineItemState(function($action) { static::assertInstanceOf(OrderImportLineItemStateAction::class, $action); return []; });
    }

    public function testImportLineItemStateInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->importLineItemState(new OrderImportLineItemStateActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderImportLineItemStateAction::class, $update->getActions()->current());
    }

    public function testImportLineItemStateInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->importLineItemState([]);
    }

    public function testRemoveDeliveryCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->removeDelivery(function($action) { static::assertInstanceOf(OrderRemoveDeliveryAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderRemoveDeliveryAction::class, $update->getActions()->current());
    }

    public function testRemoveDeliveryInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->removeDelivery(function($action) { static::assertInstanceOf(OrderRemoveDeliveryAction::class, $action); return []; });
    }

    public function testRemoveDeliveryInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->removeDelivery(new OrderRemoveDeliveryActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderRemoveDeliveryAction::class, $update->getActions()->current());
    }

    public function testRemoveDeliveryInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->removeDelivery([]);
    }

    public function testRemoveParcelFromDeliveryCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->removeParcelFromDelivery(function($action) { static::assertInstanceOf(OrderRemoveParcelFromDeliveryAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderRemoveParcelFromDeliveryAction::class, $update->getActions()->current());
    }

    public function testRemoveParcelFromDeliveryInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->removeParcelFromDelivery(function($action) { static::assertInstanceOf(OrderRemoveParcelFromDeliveryAction::class, $action); return []; });
    }

    public function testRemoveParcelFromDeliveryInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->removeParcelFromDelivery(new OrderRemoveParcelFromDeliveryActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderRemoveParcelFromDeliveryAction::class, $update->getActions()->current());
    }

    public function testRemoveParcelFromDeliveryInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->removeParcelFromDelivery([]);
    }

    public function testRemovePaymentCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->removePayment(function($action) { static::assertInstanceOf(OrderRemovePaymentAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderRemovePaymentAction::class, $update->getActions()->current());
    }

    public function testRemovePaymentInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->removePayment(function($action) { static::assertInstanceOf(OrderRemovePaymentAction::class, $action); return []; });
    }

    public function testRemovePaymentInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->removePayment(new OrderRemovePaymentActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderRemovePaymentAction::class, $update->getActions()->current());
    }

    public function testRemovePaymentInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->removePayment([]);
    }

    public function testSetBillingAddressCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->setBillingAddress(function($action) { static::assertInstanceOf(OrderSetBillingAddressAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetBillingAddressAction::class, $update->getActions()->current());
    }

    public function testSetBillingAddressInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->setBillingAddress(function($action) { static::assertInstanceOf(OrderSetBillingAddressAction::class, $action); return []; });
    }

    public function testSetBillingAddressInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->setBillingAddress(new OrderSetBillingAddressActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetBillingAddressAction::class, $update->getActions()->current());
    }

    public function testSetBillingAddressInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->setBillingAddress([]);
    }

    public function testSetCustomFieldCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->setCustomField(function($action) { static::assertInstanceOf(OrderSetCustomFieldAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetCustomFieldInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->setCustomField(function($action) { static::assertInstanceOf(OrderSetCustomFieldAction::class, $action); return []; });
    }

    public function testSetCustomFieldInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->setCustomField(new OrderSetCustomFieldActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetCustomFieldInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->setCustomField([]);
    }

    public function testSetCustomLineItemCustomFieldCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->setCustomLineItemCustomField(function($action) { static::assertInstanceOf(OrderSetCustomLineItemCustomFieldAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetCustomLineItemCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetCustomLineItemCustomFieldInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->setCustomLineItemCustomField(function($action) { static::assertInstanceOf(OrderSetCustomLineItemCustomFieldAction::class, $action); return []; });
    }

    public function testSetCustomLineItemCustomFieldInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->setCustomLineItemCustomField(new OrderSetCustomLineItemCustomFieldActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetCustomLineItemCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetCustomLineItemCustomFieldInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->setCustomLineItemCustomField([]);
    }

    public function testSetCustomLineItemCustomTypeCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->setCustomLineItemCustomType(function($action) { static::assertInstanceOf(OrderSetCustomLineItemCustomTypeAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetCustomLineItemCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetCustomLineItemCustomTypeInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->setCustomLineItemCustomType(function($action) { static::assertInstanceOf(OrderSetCustomLineItemCustomTypeAction::class, $action); return []; });
    }

    public function testSetCustomLineItemCustomTypeInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->setCustomLineItemCustomType(new OrderSetCustomLineItemCustomTypeActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetCustomLineItemCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetCustomLineItemCustomTypeInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->setCustomLineItemCustomType([]);
    }

    public function testSetCustomTypeCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->setCustomType(function($action) { static::assertInstanceOf(OrderSetCustomTypeAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetCustomTypeInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->setCustomType(function($action) { static::assertInstanceOf(OrderSetCustomTypeAction::class, $action); return []; });
    }

    public function testSetCustomTypeInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->setCustomType(new OrderSetCustomTypeActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetCustomTypeInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->setCustomType([]);
    }

    public function testSetCustomerEmailCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->setCustomerEmail(function($action) { static::assertInstanceOf(OrderSetCustomerEmailAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetCustomerEmailAction::class, $update->getActions()->current());
    }

    public function testSetCustomerEmailInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->setCustomerEmail(function($action) { static::assertInstanceOf(OrderSetCustomerEmailAction::class, $action); return []; });
    }

    public function testSetCustomerEmailInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->setCustomerEmail(new OrderSetCustomerEmailActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetCustomerEmailAction::class, $update->getActions()->current());
    }

    public function testSetCustomerEmailInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->setCustomerEmail([]);
    }

    public function testSetDeliveryAddressCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->setDeliveryAddress(function($action) { static::assertInstanceOf(OrderSetDeliveryAddressAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetDeliveryAddressAction::class, $update->getActions()->current());
    }

    public function testSetDeliveryAddressInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->setDeliveryAddress(function($action) { static::assertInstanceOf(OrderSetDeliveryAddressAction::class, $action); return []; });
    }

    public function testSetDeliveryAddressInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->setDeliveryAddress(new OrderSetDeliveryAddressActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetDeliveryAddressAction::class, $update->getActions()->current());
    }

    public function testSetDeliveryAddressInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->setDeliveryAddress([]);
    }

    public function testSetDeliveryItemsCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->setDeliveryItems(function($action) { static::assertInstanceOf(OrderSetDeliveryItemsAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetDeliveryItemsAction::class, $update->getActions()->current());
    }

    public function testSetDeliveryItemsInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->setDeliveryItems(function($action) { static::assertInstanceOf(OrderSetDeliveryItemsAction::class, $action); return []; });
    }

    public function testSetDeliveryItemsInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->setDeliveryItems(new OrderSetDeliveryItemsActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetDeliveryItemsAction::class, $update->getActions()->current());
    }

    public function testSetDeliveryItemsInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->setDeliveryItems([]);
    }

    public function testSetLineItemCustomFieldCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->setLineItemCustomField(function($action) { static::assertInstanceOf(OrderSetLineItemCustomFieldAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetLineItemCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetLineItemCustomFieldInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->setLineItemCustomField(function($action) { static::assertInstanceOf(OrderSetLineItemCustomFieldAction::class, $action); return []; });
    }

    public function testSetLineItemCustomFieldInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->setLineItemCustomField(new OrderSetLineItemCustomFieldActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetLineItemCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetLineItemCustomFieldInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->setLineItemCustomField([]);
    }

    public function testSetLineItemCustomTypeCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->setLineItemCustomType(function($action) { static::assertInstanceOf(OrderSetLineItemCustomTypeAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetLineItemCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetLineItemCustomTypeInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->setLineItemCustomType(function($action) { static::assertInstanceOf(OrderSetLineItemCustomTypeAction::class, $action); return []; });
    }

    public function testSetLineItemCustomTypeInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->setLineItemCustomType(new OrderSetLineItemCustomTypeActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetLineItemCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetLineItemCustomTypeInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->setLineItemCustomType([]);
    }

    public function testSetLocaleCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->setLocale(function($action) { static::assertInstanceOf(OrderSetLocaleAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetLocaleAction::class, $update->getActions()->current());
    }

    public function testSetLocaleInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->setLocale(function($action) { static::assertInstanceOf(OrderSetLocaleAction::class, $action); return []; });
    }

    public function testSetLocaleInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->setLocale(new OrderSetLocaleActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetLocaleAction::class, $update->getActions()->current());
    }

    public function testSetLocaleInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->setLocale([]);
    }

    public function testSetOrderNumberCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->setOrderNumber(function($action) { static::assertInstanceOf(OrderSetOrderNumberAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetOrderNumberAction::class, $update->getActions()->current());
    }

    public function testSetOrderNumberInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->setOrderNumber(function($action) { static::assertInstanceOf(OrderSetOrderNumberAction::class, $action); return []; });
    }

    public function testSetOrderNumberInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->setOrderNumber(new OrderSetOrderNumberActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetOrderNumberAction::class, $update->getActions()->current());
    }

    public function testSetOrderNumberInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->setOrderNumber([]);
    }

    public function testSetParcelItemsCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->setParcelItems(function($action) { static::assertInstanceOf(OrderSetParcelItemsAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetParcelItemsAction::class, $update->getActions()->current());
    }

    public function testSetParcelItemsInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->setParcelItems(function($action) { static::assertInstanceOf(OrderSetParcelItemsAction::class, $action); return []; });
    }

    public function testSetParcelItemsInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->setParcelItems(new OrderSetParcelItemsActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetParcelItemsAction::class, $update->getActions()->current());
    }

    public function testSetParcelItemsInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->setParcelItems([]);
    }

    public function testSetParcelMeasurementsCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->setParcelMeasurements(function($action) { static::assertInstanceOf(OrderSetParcelMeasurementsAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetParcelMeasurementsAction::class, $update->getActions()->current());
    }

    public function testSetParcelMeasurementsInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->setParcelMeasurements(function($action) { static::assertInstanceOf(OrderSetParcelMeasurementsAction::class, $action); return []; });
    }

    public function testSetParcelMeasurementsInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->setParcelMeasurements(new OrderSetParcelMeasurementsActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetParcelMeasurementsAction::class, $update->getActions()->current());
    }

    public function testSetParcelMeasurementsInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->setParcelMeasurements([]);
    }

    public function testSetParcelTrackingDataCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->setParcelTrackingData(function($action) { static::assertInstanceOf(OrderSetParcelTrackingDataAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetParcelTrackingDataAction::class, $update->getActions()->current());
    }

    public function testSetParcelTrackingDataInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->setParcelTrackingData(function($action) { static::assertInstanceOf(OrderSetParcelTrackingDataAction::class, $action); return []; });
    }

    public function testSetParcelTrackingDataInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->setParcelTrackingData(new OrderSetParcelTrackingDataActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetParcelTrackingDataAction::class, $update->getActions()->current());
    }

    public function testSetParcelTrackingDataInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->setParcelTrackingData([]);
    }

    public function testSetReturnPaymentStateCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->setReturnPaymentState(function($action) { static::assertInstanceOf(OrderSetReturnPaymentStateAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetReturnPaymentStateAction::class, $update->getActions()->current());
    }

    public function testSetReturnPaymentStateInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->setReturnPaymentState(function($action) { static::assertInstanceOf(OrderSetReturnPaymentStateAction::class, $action); return []; });
    }

    public function testSetReturnPaymentStateInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->setReturnPaymentState(new OrderSetReturnPaymentStateActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetReturnPaymentStateAction::class, $update->getActions()->current());
    }

    public function testSetReturnPaymentStateInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->setReturnPaymentState([]);
    }

    public function testSetReturnShipmentStateCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->setReturnShipmentState(function($action) { static::assertInstanceOf(OrderSetReturnShipmentStateAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetReturnShipmentStateAction::class, $update->getActions()->current());
    }

    public function testSetReturnShipmentStateInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->setReturnShipmentState(function($action) { static::assertInstanceOf(OrderSetReturnShipmentStateAction::class, $action); return []; });
    }

    public function testSetReturnShipmentStateInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->setReturnShipmentState(new OrderSetReturnShipmentStateActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetReturnShipmentStateAction::class, $update->getActions()->current());
    }

    public function testSetReturnShipmentStateInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->setReturnShipmentState([]);
    }

    public function testSetShippingAddressCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->setShippingAddress(function($action) { static::assertInstanceOf(OrderSetShippingAddressAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetShippingAddressAction::class, $update->getActions()->current());
    }

    public function testSetShippingAddressInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->setShippingAddress(function($action) { static::assertInstanceOf(OrderSetShippingAddressAction::class, $action); return []; });
    }

    public function testSetShippingAddressInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->setShippingAddress(new OrderSetShippingAddressActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetShippingAddressAction::class, $update->getActions()->current());
    }

    public function testSetShippingAddressInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->setShippingAddress([]);
    }

    public function testTransitionCustomLineItemStateCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->transitionCustomLineItemState(function($action) { static::assertInstanceOf(OrderTransitionCustomLineItemStateAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderTransitionCustomLineItemStateAction::class, $update->getActions()->current());
    }

    public function testTransitionCustomLineItemStateInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->transitionCustomLineItemState(function($action) { static::assertInstanceOf(OrderTransitionCustomLineItemStateAction::class, $action); return []; });
    }

    public function testTransitionCustomLineItemStateInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->transitionCustomLineItemState(new OrderTransitionCustomLineItemStateActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderTransitionCustomLineItemStateAction::class, $update->getActions()->current());
    }

    public function testTransitionCustomLineItemStateInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->transitionCustomLineItemState([]);
    }

    public function testTransitionLineItemStateCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->transitionLineItemState(function($action) { static::assertInstanceOf(OrderTransitionLineItemStateAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderTransitionLineItemStateAction::class, $update->getActions()->current());
    }

    public function testTransitionLineItemStateInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->transitionLineItemState(function($action) { static::assertInstanceOf(OrderTransitionLineItemStateAction::class, $action); return []; });
    }

    public function testTransitionLineItemStateInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->transitionLineItemState(new OrderTransitionLineItemStateActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderTransitionLineItemStateAction::class, $update->getActions()->current());
    }

    public function testTransitionLineItemStateInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->transitionLineItemState([]);
    }

    public function testTransitionStateCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->transitionState(function($action) { static::assertInstanceOf(OrderTransitionStateAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderTransitionStateAction::class, $update->getActions()->current());
    }

    public function testTransitionStateInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->transitionState(function($action) { static::assertInstanceOf(OrderTransitionStateAction::class, $action); return []; });
    }

    public function testTransitionStateInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->transitionState(new OrderTransitionStateActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderTransitionStateAction::class, $update->getActions()->current());
    }

    public function testTransitionStateInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->transitionState([]);
    }

    public function testUpdateSyncInfoCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->updateSyncInfo(function($action) { static::assertInstanceOf(OrderUpdateSyncInfoAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderUpdateSyncInfoAction::class, $update->getActions()->current());
    }

    public function testUpdateSyncInfoInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->updateSyncInfo(function($action) { static::assertInstanceOf(OrderUpdateSyncInfoAction::class, $action); return []; });
    }

    public function testUpdateSyncInfoInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->updateSyncInfo(new OrderUpdateSyncInfoActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderUpdateSyncInfoAction::class, $update->getActions()->current());
    }

    public function testUpdateSyncInfoInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new OrderUpdateBuilder();
        $builder->updateSyncInfo([]);
    }


    public function testReset() {
        $builder = new OrderUpdateBuilder();
        $builder->addDelivery(new OrderAddDeliveryActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderAddDeliveryAction::class, $update->getActions()->current());

        $builder->reset();
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertCount(0, $update->getActions());
    }

    public function testWithResource() {
        $builder = new OrderUpdateBuilder();
        static::assertNull($builder->getResource());

        $builder->with(new OrderModel());
        static::assertInstanceOf(Order::class, $builder->getResource());
    }

    public function testBuild() {
        $builder = new OrderUpdateBuilder();
        $builder->with(new OrderModel(['version' => 3]));

        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertSame(3, $update->getVersion());
    }
}
