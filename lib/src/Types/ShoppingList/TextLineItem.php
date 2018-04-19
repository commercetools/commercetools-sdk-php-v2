<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Base\JsonObject;

use Commercetools\Types\Common\LocalizedString;
use Commercetools\Types\Type\CustomFields;

interface TextLineItem extends JsonObject
{
    const FIELD_ADDED_AT = 'addedAt';
    const FIELD_CUSTOM = 'custom';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_ID = 'id';
    const FIELD_NAME = 'name';
    const FIELD_QUANTITY = 'quantity';

    /**
     * @return \DateTimeImmutable
     */
    public function getAddedAt();

    /**
     * @return CustomFields
     */
    public function getCustom();

    /**
     * @return LocalizedString
     */
    public function getDescription();

    /**
     * @return string
     */
    public function getId();

    /**
     * @return LocalizedString
     */
    public function getName();

    /**
     * @return int
     */
    public function getQuantity();

    /**
     * @param \DateTimeImmutable $addedAt
     * @return $this
     */
    public function setAddedAt($addedAt);

    /**
     * @param CustomFields $custom
     * @return $this
     */
    public function setCustom(CustomFields $custom);

    /**
     * @param LocalizedString $description
     * @return $this
     */
    public function setDescription(LocalizedString $description);

    /**
     * @param string $id
     * @return $this
     */
    public function setId(string $id);

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

}
