<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

interface OrderSetLineItemCustomFieldAction extends OrderUpdateAction
{
    const FIELD_LINE_ITEM_ID = 'lineItemId';
    const FIELD_NAME = 'name';
    const FIELD_VALUE = 'value';

    /**
     * @return string
     */
    public function getLineItemId();

    /**
     * @return string
     */
    public function getName();

    /**
     * @return mixed
     */
    public function getValue();

    /**
     * @param string $lineItemId
     * @return $this
     */
    public function setLineItemId(string $lineItemId);

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name);

    /**
     * @param mixed $value
     * @return $this
     */
    public function setValue($value);

}
