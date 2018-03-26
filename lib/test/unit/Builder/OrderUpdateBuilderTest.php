<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use  Commercetools\Builder\OrderUpdateBuilder;
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

class OrderBuilderTest extends TestCase {
    public function testAddDeliveryCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->addDelivery(function ($action) { static::assertInstanceOf(OrderAddDeliveryAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderAddDeliveryAction::class, $update->getActions()->current());
    }

    public function testAddDeliveryInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->addDelivery(new OrderAddDeliveryActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderAddDeliveryAction::class, $update->getActions()->current());
    }

    public function testAddParcelToDeliveryCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->addParcelToDelivery(function ($action) { static::assertInstanceOf(OrderAddParcelToDeliveryAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderAddParcelToDeliveryAction::class, $update->getActions()->current());
    }

    public function testAddParcelToDeliveryInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->addParcelToDelivery(new OrderAddParcelToDeliveryActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderAddParcelToDeliveryAction::class, $update->getActions()->current());
    }

    public function testAddPaymentCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->addPayment(function ($action) { static::assertInstanceOf(OrderAddPaymentAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderAddPaymentAction::class, $update->getActions()->current());
    }

    public function testAddPaymentInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->addPayment(new OrderAddPaymentActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderAddPaymentAction::class, $update->getActions()->current());
    }

    public function testAddReturnInfoCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->addReturnInfo(function ($action) { static::assertInstanceOf(OrderAddReturnInfoAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderAddReturnInfoAction::class, $update->getActions()->current());
    }

    public function testAddReturnInfoInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->addReturnInfo(new OrderAddReturnInfoActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderAddReturnInfoAction::class, $update->getActions()->current());
    }

    public function testChangeOrderStateCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->changeOrderState(function ($action) { static::assertInstanceOf(OrderChangeOrderStateAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderChangeOrderStateAction::class, $update->getActions()->current());
    }

    public function testChangeOrderStateInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->changeOrderState(new OrderChangeOrderStateActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderChangeOrderStateAction::class, $update->getActions()->current());
    }

    public function testChangePaymentStateCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->changePaymentState(function ($action) { static::assertInstanceOf(OrderChangePaymentStateAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderChangePaymentStateAction::class, $update->getActions()->current());
    }

    public function testChangePaymentStateInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->changePaymentState(new OrderChangePaymentStateActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderChangePaymentStateAction::class, $update->getActions()->current());
    }

    public function testChangeShipmentStateCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->changeShipmentState(function ($action) { static::assertInstanceOf(OrderChangeShipmentStateAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderChangeShipmentStateAction::class, $update->getActions()->current());
    }

    public function testChangeShipmentStateInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->changeShipmentState(new OrderChangeShipmentStateActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderChangeShipmentStateAction::class, $update->getActions()->current());
    }

    public function testImportCustomLineItemStateCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->importCustomLineItemState(function ($action) { static::assertInstanceOf(OrderImportCustomLineItemStateAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderImportCustomLineItemStateAction::class, $update->getActions()->current());
    }

    public function testImportCustomLineItemStateInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->importCustomLineItemState(new OrderImportCustomLineItemStateActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderImportCustomLineItemStateAction::class, $update->getActions()->current());
    }

    public function testImportLineItemStateCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->importLineItemState(function ($action) { static::assertInstanceOf(OrderImportLineItemStateAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderImportLineItemStateAction::class, $update->getActions()->current());
    }

    public function testImportLineItemStateInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->importLineItemState(new OrderImportLineItemStateActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderImportLineItemStateAction::class, $update->getActions()->current());
    }

    public function testRemoveDeliveryCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->removeDelivery(function ($action) { static::assertInstanceOf(OrderRemoveDeliveryAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderRemoveDeliveryAction::class, $update->getActions()->current());
    }

    public function testRemoveDeliveryInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->removeDelivery(new OrderRemoveDeliveryActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderRemoveDeliveryAction::class, $update->getActions()->current());
    }

    public function testRemoveParcelFromDeliveryCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->removeParcelFromDelivery(function ($action) { static::assertInstanceOf(OrderRemoveParcelFromDeliveryAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderRemoveParcelFromDeliveryAction::class, $update->getActions()->current());
    }

    public function testRemoveParcelFromDeliveryInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->removeParcelFromDelivery(new OrderRemoveParcelFromDeliveryActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderRemoveParcelFromDeliveryAction::class, $update->getActions()->current());
    }

    public function testRemovePaymentCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->removePayment(function ($action) { static::assertInstanceOf(OrderRemovePaymentAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderRemovePaymentAction::class, $update->getActions()->current());
    }

    public function testRemovePaymentInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->removePayment(new OrderRemovePaymentActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderRemovePaymentAction::class, $update->getActions()->current());
    }

    public function testSetBillingAddressCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->setBillingAddress(function ($action) { static::assertInstanceOf(OrderSetBillingAddressAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetBillingAddressAction::class, $update->getActions()->current());
    }

    public function testSetBillingAddressInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->setBillingAddress(new OrderSetBillingAddressActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetBillingAddressAction::class, $update->getActions()->current());
    }

    public function testSetCustomFieldCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->setCustomField(function ($action) { static::assertInstanceOf(OrderSetCustomFieldAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetCustomFieldInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->setCustomField(new OrderSetCustomFieldActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetCustomLineItemCustomFieldCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->setCustomLineItemCustomField(function ($action) { static::assertInstanceOf(OrderSetCustomLineItemCustomFieldAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetCustomLineItemCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetCustomLineItemCustomFieldInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->setCustomLineItemCustomField(new OrderSetCustomLineItemCustomFieldActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetCustomLineItemCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetCustomLineItemCustomTypeCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->setCustomLineItemCustomType(function ($action) { static::assertInstanceOf(OrderSetCustomLineItemCustomTypeAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetCustomLineItemCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetCustomLineItemCustomTypeInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->setCustomLineItemCustomType(new OrderSetCustomLineItemCustomTypeActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetCustomLineItemCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetCustomTypeCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->setCustomType(function ($action) { static::assertInstanceOf(OrderSetCustomTypeAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetCustomTypeInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->setCustomType(new OrderSetCustomTypeActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetCustomerEmailCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->setCustomerEmail(function ($action) { static::assertInstanceOf(OrderSetCustomerEmailAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetCustomerEmailAction::class, $update->getActions()->current());
    }

    public function testSetCustomerEmailInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->setCustomerEmail(new OrderSetCustomerEmailActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetCustomerEmailAction::class, $update->getActions()->current());
    }

    public function testSetDeliveryAddressCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->setDeliveryAddress(function ($action) { static::assertInstanceOf(OrderSetDeliveryAddressAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetDeliveryAddressAction::class, $update->getActions()->current());
    }

    public function testSetDeliveryAddressInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->setDeliveryAddress(new OrderSetDeliveryAddressActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetDeliveryAddressAction::class, $update->getActions()->current());
    }

    public function testSetDeliveryItemsCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->setDeliveryItems(function ($action) { static::assertInstanceOf(OrderSetDeliveryItemsAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetDeliveryItemsAction::class, $update->getActions()->current());
    }

    public function testSetDeliveryItemsInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->setDeliveryItems(new OrderSetDeliveryItemsActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetDeliveryItemsAction::class, $update->getActions()->current());
    }

    public function testSetLineItemCustomFieldCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->setLineItemCustomField(function ($action) { static::assertInstanceOf(OrderSetLineItemCustomFieldAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetLineItemCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetLineItemCustomFieldInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->setLineItemCustomField(new OrderSetLineItemCustomFieldActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetLineItemCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetLineItemCustomTypeCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->setLineItemCustomType(function ($action) { static::assertInstanceOf(OrderSetLineItemCustomTypeAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetLineItemCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetLineItemCustomTypeInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->setLineItemCustomType(new OrderSetLineItemCustomTypeActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetLineItemCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetLocaleCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->setLocale(function ($action) { static::assertInstanceOf(OrderSetLocaleAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetLocaleAction::class, $update->getActions()->current());
    }

    public function testSetLocaleInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->setLocale(new OrderSetLocaleActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetLocaleAction::class, $update->getActions()->current());
    }

    public function testSetOrderNumberCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->setOrderNumber(function ($action) { static::assertInstanceOf(OrderSetOrderNumberAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetOrderNumberAction::class, $update->getActions()->current());
    }

    public function testSetOrderNumberInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->setOrderNumber(new OrderSetOrderNumberActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetOrderNumberAction::class, $update->getActions()->current());
    }

    public function testSetParcelItemsCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->setParcelItems(function ($action) { static::assertInstanceOf(OrderSetParcelItemsAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetParcelItemsAction::class, $update->getActions()->current());
    }

    public function testSetParcelItemsInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->setParcelItems(new OrderSetParcelItemsActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetParcelItemsAction::class, $update->getActions()->current());
    }

    public function testSetParcelMeasurementsCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->setParcelMeasurements(function ($action) { static::assertInstanceOf(OrderSetParcelMeasurementsAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetParcelMeasurementsAction::class, $update->getActions()->current());
    }

    public function testSetParcelMeasurementsInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->setParcelMeasurements(new OrderSetParcelMeasurementsActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetParcelMeasurementsAction::class, $update->getActions()->current());
    }

    public function testSetParcelTrackingDataCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->setParcelTrackingData(function ($action) { static::assertInstanceOf(OrderSetParcelTrackingDataAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetParcelTrackingDataAction::class, $update->getActions()->current());
    }

    public function testSetParcelTrackingDataInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->setParcelTrackingData(new OrderSetParcelTrackingDataActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetParcelTrackingDataAction::class, $update->getActions()->current());
    }

    public function testSetReturnPaymentStateCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->setReturnPaymentState(function ($action) { static::assertInstanceOf(OrderSetReturnPaymentStateAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetReturnPaymentStateAction::class, $update->getActions()->current());
    }

    public function testSetReturnPaymentStateInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->setReturnPaymentState(new OrderSetReturnPaymentStateActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetReturnPaymentStateAction::class, $update->getActions()->current());
    }

    public function testSetReturnShipmentStateCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->setReturnShipmentState(function ($action) { static::assertInstanceOf(OrderSetReturnShipmentStateAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetReturnShipmentStateAction::class, $update->getActions()->current());
    }

    public function testSetReturnShipmentStateInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->setReturnShipmentState(new OrderSetReturnShipmentStateActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetReturnShipmentStateAction::class, $update->getActions()->current());
    }

    public function testSetShippingAddressCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->setShippingAddress(function ($action) { static::assertInstanceOf(OrderSetShippingAddressAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetShippingAddressAction::class, $update->getActions()->current());
    }

    public function testSetShippingAddressInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->setShippingAddress(new OrderSetShippingAddressActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderSetShippingAddressAction::class, $update->getActions()->current());
    }

    public function testTransitionCustomLineItemStateCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->transitionCustomLineItemState(function ($action) { static::assertInstanceOf(OrderTransitionCustomLineItemStateAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderTransitionCustomLineItemStateAction::class, $update->getActions()->current());
    }

    public function testTransitionCustomLineItemStateInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->transitionCustomLineItemState(new OrderTransitionCustomLineItemStateActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderTransitionCustomLineItemStateAction::class, $update->getActions()->current());
    }

    public function testTransitionLineItemStateCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->transitionLineItemState(function ($action) { static::assertInstanceOf(OrderTransitionLineItemStateAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderTransitionLineItemStateAction::class, $update->getActions()->current());
    }

    public function testTransitionLineItemStateInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->transitionLineItemState(new OrderTransitionLineItemStateActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderTransitionLineItemStateAction::class, $update->getActions()->current());
    }

    public function testTransitionStateCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->transitionState(function ($action) { static::assertInstanceOf(OrderTransitionStateAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderTransitionStateAction::class, $update->getActions()->current());
    }

    public function testTransitionStateInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->transitionState(new OrderTransitionStateActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderTransitionStateAction::class, $update->getActions()->current());
    }

    public function testUpdateSyncInfoCallback() {
        $builder = new OrderUpdateBuilder();
        $builder->updateSyncInfo(function ($action) { static::assertInstanceOf(OrderUpdateSyncInfoAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderUpdateSyncInfoAction::class, $update->getActions()->current());
    }

    public function testUpdateSyncInfoInstance() {
        $builder = new OrderUpdateBuilder();
        $builder->updateSyncInfo(new OrderUpdateSyncInfoActionModel());
        $update = $builder->build();
        static::assertInstanceOf(OrderUpdate::class, $update);
        static::assertInstanceOf(OrderUpdateSyncInfoAction::class, $update->getActions()->current());
    }

}
