<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Type\TypeReference;

interface CartSetLineItemCustomTypeAction extends CartUpdateAction {
    const FIELD_FIELDS = 'fields';
    const FIELD_LINE_ITEM_ID = 'lineItemId';
    const FIELD_TYPE = 'type';

    /**
     * @return string
     */
    public function getFields();

    /**
     * @return string
     */
    public function getLineItemId();

    /**
     * @return TypeReference
     */
    public function getType();

    /**
     * @param string $fields
     * @return $this
     */
    public function setFields(string $fields);

    /**
     * @param string $lineItemId
     * @return $this
     */
    public function setLineItemId(string $lineItemId);

    /**
     * @param TypeReference $type
     * @return $this
     */
    public function setType(TypeReference $type);

}
