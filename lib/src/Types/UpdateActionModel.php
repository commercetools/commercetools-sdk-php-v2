<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types;

use Commercetools\Base\JsonObjectModel;

class UpdateActionModel extends JsonObjectModel implements UpdateAction {
    /**
     * @var string
     */
    protected $action;

    /**
     * @return string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            $value = $this->raw(UpdateAction::FIELD_ACTION);
            $value = (string)$value;
            $this->action = $value;
        }
        return $this->action;
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

}
