<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Builder\ShoppingListUpdateBuilder;
use Commercetools\Types\Common\LocalizedString;
use Commercetools\Types\Type\CustomFields;
use Commercetools\Types\Customer\CustomerReference;
use Commercetools\Types\Common\Resource;

interface ShoppingList extends Resource
{
    const FIELD_CUSTOM = 'custom';
    const FIELD_CUSTOMER = 'customer';
    const FIELD_DELETE_DAYS_AFTER_LAST_MODIFICATION = 'deleteDaysAfterLastModification';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_KEY = 'key';
    const FIELD_LINE_ITEMS = 'lineItems';
    const FIELD_NAME = 'name';
    const FIELD_SLUG = 'slug';
    const FIELD_TEXT_LINE_ITEMS = 'textLineItems';

    /**
     * @return CustomFields
     */
    public function getCustom();

    /**
     * @return CustomerReference
     */
    public function getCustomer();

    /**
     * @return int
     */
    public function getDeleteDaysAfterLastModification();

    /**
     * @return LocalizedString
     */
    public function getDescription();

    /**
     * @return string
     */
    public function getKey();

    /**
     * @return ShoppingListLineItemCollection
     */
    public function getLineItems();

    /**
     * @return LocalizedString
     */
    public function getName();

    /**
     * @return LocalizedString
     */
    public function getSlug();

    /**
     * @return TextLineItemCollection
     */
    public function getTextLineItems();

    /**
     * @param CustomFields $custom
     * @return $this
     */
    public function setCustom(CustomFields $custom);

    /**
     * @param CustomerReference $customer
     * @return $this
     */
    public function setCustomer(CustomerReference $customer);

    /**
     * @param int $deleteDaysAfterLastModification
     * @return $this
     */
    public function setDeleteDaysAfterLastModification(int $deleteDaysAfterLastModification);

    /**
     * @param LocalizedString $description
     * @return $this
     */
    public function setDescription(LocalizedString $description);

    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key);

    /**
     * @param ShoppingListLineItemCollection $lineItems
     * @return $this
     */
    public function setLineItems(ShoppingListLineItemCollection $lineItems);

    /**
     * @param LocalizedString $name
     * @return $this
     */
    public function setName(LocalizedString $name);

    /**
     * @param LocalizedString $slug
     * @return $this
     */
    public function setSlug(LocalizedString $slug);

    /**
     * @param TextLineItemCollection $textLineItems
     * @return $this
     */
    public function setTextLineItems(TextLineItemCollection $textLineItems);

    /**
     * @return ShoppingListUpdateBuilder
     */
    public function update();
}
