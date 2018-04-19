<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

class ResourceIdentifierModel extends JsonObjectModel implements ResourceIdentifier
{
    /**
     * @var string
     */
    protected $typeId;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $key;

    /**
     * @return string
     */
    public function getTypeId()
    {
        if (is_null($this->typeId)) {
            $value = $this->raw(ResourceIdentifier::FIELD_TYPE_ID);
            $value = (string)$value;
            $this->typeId = $value;
        }
        return $this->typeId;
    }
    /**
     * @return string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            $value = $this->raw(ResourceIdentifier::FIELD_ID);
            $value = (string)$value;
            $this->id = $value;
        }
        return $this->id;
    }
    /**
     * @return string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            $value = $this->raw(ResourceIdentifier::FIELD_KEY);
            $value = (string)$value;
            $this->key = $value;
        }
        return $this->key;
    }

    /**
     * @param string $typeId
     * @return $this
     */
    public function setTypeId(string $typeId)
    {
        $this->typeId = (string)$typeId;

        return $this;
    }
    /**
     * @param string $id
     * @return $this
     */
    public function setId(string $id)
    {
        $this->id = (string)$id;

        return $this;
    }
    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key)
    {
        $this->key = (string)$key;

        return $this;
    }

}
