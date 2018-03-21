<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\Common\LocalizedString;
use Commercetools\Types\Type\CustomFieldsDraft;

interface ShoppingListAddTextLineItemAction extends ShoppingListUpdateAction {
    const FIELD_CUSTOM = 'custom';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_NAME = 'name';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_ADDED_AT = 'addedAt';

    /**
     * @return CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @return LocalizedString
     */
    public function getDescription();

    /**
     * @return LocalizedString
     */
    public function getName();

    /**
     * @return int
     */
    public function getQuantity();

    /**
     * @return \DateTimeImmutable
     */
    public function getAddedAt();

    /**
     * @param CustomFieldsDraft $custom
     * @return $this
     */
    public function setCustom(CustomFieldsDraft $custom);

    /**
     * @param LocalizedString $description
     * @return $this
     */
    public function setDescription(LocalizedString $description);

    /**
     * @param LocalizedString $name
     * @return $this
     */
    public function setName(LocalizedString $name);

    /**
     * @param int $quantity
     * @return $this
     */
    public function setQuantity(int $quantity);

    /**
     * @param \DateTimeImmutable $addedAt
     * @return $this
     */
    public function setAddedAt($addedAt);

}
