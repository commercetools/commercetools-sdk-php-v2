<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ExtensionChangeDestinationAction extends ExtensionUpdateAction
{

    public const FIELD_DESTINATION = 'destination';

    /**
     * @return null|ExtensionDestination
     */
    public function getDestination();

    public function setDestination(?ExtensionDestination $destination): void;
}
