<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

class UpdateModel extends JsonObjectModel implements Update
{
    /**
     * @var int
     */
    protected $version;
    /**
     * @var UpdateActionCollection
     */
    protected $actions;

    /**
     * @return int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            $value = $this->raw(Update::FIELD_VERSION);
            $value = (int)$value;
            $this->version = $value;
        }
        return $this->version;
    }
    /**
     * @return UpdateActionCollection
     */
    public function getActions()
    {
        if (is_null($this->actions)) {
            $value = $this->raw(Update::FIELD_ACTIONS);
            if (is_null($value)) {
                return $this->mapData(UpdateActionCollection::class, null);
            }
            $value = $this->mapData(UpdateActionCollection::class, $value);
            $this->actions = $value;
        }
        return $this->actions;
    }

    /**
     * @param int $version
     * @return $this
     */
    public function setVersion(int $version)
    {
        $this->version = (int)$version;

        return $this;
    }
    /**
     * @param UpdateActionCollection $actions
     * @return $this
     */
    public function setActions(UpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }

}
