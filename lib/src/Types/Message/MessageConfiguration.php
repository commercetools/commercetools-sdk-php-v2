<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Base\JsonObject;

interface MessageConfiguration extends JsonObject {
    const FIELD_ENABLED = 'enabled';

    /**
     * @return mixed
     */
    public function getEnabled();

    /**
     * @param mixed $enabled
     * @return $this
     */
    public function setEnabled($enabled);

}
