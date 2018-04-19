<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Type\TypeReference;

interface OrderSetCustomLineItemCustomTypeAction extends OrderUpdateAction
{
    const FIELD_CUSTOM_LINE_ITEM_ID = 'customLineItemId';
    const FIELD_FIELDS = 'fields';
    const FIELD_TYPE = 'type';

    /**
     * @return string
     */
    public function getCustomLineItemId();

    /**
     * @return string
     */
    public function getFields();

    /**
     * @return TypeReference
     */
    public function getType();

    /**
     * @param string $customLineItemId
     * @return $this
     */
    public function setCustomLineItemId(string $customLineItemId);

    /**
     * @param string $fields
     * @return $this
     */
    public function setFields(string $fields);

    /**
     * @param TypeReference $type
     * @return $this
     */
    public function setType(TypeReference $type);

}
