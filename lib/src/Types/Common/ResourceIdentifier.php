<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\JsonObject;

interface ResourceIdentifier extends JsonObject {
    const FIELD_TYPE_ID = 'typeId';
    const FIELD_ID = 'id';
    const FIELD_KEY = 'key';

    /**
     * @return string
     */
    public function getTypeId();

    /**
     * @return string
     */
    public function getId();

    /**
     * @return string
     */
    public function getKey();

    /**
     * @param string $typeId
     * @return $this
     */
    public function setTypeId(string $typeId);

    /**
     * @param string $id
     * @return $this
     */
    public function setId(string $id);

    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key);

}
