<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Common\ResourceIdentifierModel;

use Commercetools\Types;

class ReferenceModel extends ResourceIdentifierModel implements Reference
{
    const DISCRIMINATOR_VALUE = '';

    /**
     * @param array $data
     */
    public function __construct(array $data = []) {
        parent::__construct($data);
        $this->setTypeId(static::DISCRIMINATOR_VALUE);
    }

    /**
     * @var string
     */
    protected $typeId;

    /**
     * @return string
     */
    public function getTypeId()
    {
        if (is_null($this->typeId)) {
            $value = $this->raw(Reference::FIELD_TYPE_ID);
            $value = (string)$value;
            $this->typeId = $value;
        }
        return $this->typeId;
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

}
