<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Base\JsonObject;

interface CustomFields extends JsonObject
{
    const FIELD_TYPE = 'type';
    const FIELD_FIELDS = 'fields';

    /**
     * @return TypeReference
     */
    public function getType();

    /**
     * @return FieldContainer
     */
    public function getFields();

    /**
     * @param TypeReference $type
     * @return $this
     */
    public function setType(TypeReference $type);

    /**
     * @param FieldContainer $fields
     * @return $this
     */
    public function setFields(FieldContainer $fields);

}
