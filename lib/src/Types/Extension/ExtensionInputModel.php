<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Extension;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\Common\Reference;

class ExtensionInputModel extends JsonObjectModel implements ExtensionInput
{
    /**
     * @var string
     */
    protected $action;
    /**
     * @var Reference
     */
    protected $resource;

    /**
     * @return string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            $value = $this->raw(ExtensionInput::FIELD_ACTION);
            $value = (string)$value;
            $this->action = $value;
        }
        return $this->action;
    }
    /**
     * @return Reference
     */
    public function getResource()
    {
        if (is_null($this->resource)) {
            $value = $this->raw(ExtensionInput::FIELD_RESOURCE);
            $resolvedClass = $this->resolveDiscriminator(Reference::class, $value);
            if (is_null($value)) {
                return $this->mapData($resolvedClass, null);
            }
            $value = $this->mapData($resolvedClass, $value);

            $this->resource = $value;
        }
        return $this->resource;
    }

    /**
     * @param string $action
     * @return $this
     */
    public function setAction(string $action)
    {
        $this->action = (string)$action;

        return $this;
    }
    /**
     * @param Reference $resource
     * @return $this
     */
    public function setResource(Reference $resource)
    {
        $this->resource = $resource;

        return $this;
    }

}
