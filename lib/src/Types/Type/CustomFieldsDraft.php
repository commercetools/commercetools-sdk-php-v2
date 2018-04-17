<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Base\JsonObject;

use Commercetools\Types\Common\ResourceIdentifier;

interface CustomFieldsDraft extends JsonObject {
    const FIELD_TYPE = 'type';
    const FIELD_FIELDS = 'fields';

    /**
     * @return mixed
     */
    public function getType();

    /**
     * @return FieldContainer
     */
    public function getFields();

    /**
     * @param mixed $type
     * @return $this
     */
    public function setType($type);

    /**
     * @param FieldContainer $fields
     * @return $this
     */
    public function setFields(FieldContainer $fields);

    /**
     * @return ResourceIdentifier
     */
    public function getTypeAsResourceIdentifier();

    /**
     * @return TypeReference
     */
    public function getTypeAsTypeReference();

}
