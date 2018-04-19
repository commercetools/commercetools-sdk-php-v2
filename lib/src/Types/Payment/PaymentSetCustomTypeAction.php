<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Type\TypeReference;

interface PaymentSetCustomTypeAction extends PaymentUpdateAction
{
    const FIELD_FIELDS = 'fields';
    const FIELD_TYPE = 'type';

    /**
     * @return string
     */
    public function getFields();

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
     * @param TypeReference $type
     * @return $this
     */
    public function setType(TypeReference $type);

}
