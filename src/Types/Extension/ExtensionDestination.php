<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Extension;

use Commercetools\Base\JsonObject;

use Commercetools\Types;

interface ExtensionDestination extends JsonObject {
    const DISCRIMINATOR = 'type';
    const SUB_TYPES = [
        'HTTP' => Types\Extension\ExtensionHttpDestination::class,

    ];

    const FIELD_TYPE = 'type';

    /**
     * @return string
     */
    public function getType();

    /**
     * @param string $type
     * @return $this
     */
    public function setType(string $type);

}
