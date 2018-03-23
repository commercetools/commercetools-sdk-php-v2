<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Base\JsonObjectModel;

class MessageConfigurationModel extends JsonObjectModel implements MessageConfiguration {
    /**
     * @var mixed
     */
    protected $enabled;

    /**
     * @return mixed
     */
    public function getEnabled()
    {
        if (is_null($this->enabled)) {
            $value = $this->raw(MessageConfiguration::FIELD_ENABLED);
            $this->enabled = $value;
        }
        return $this->enabled;
    }

    /**
     * @param $enabled
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

}
