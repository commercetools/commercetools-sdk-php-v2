<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Extension;

interface ExtensionChangeDestinationAction extends ExtensionUpdateAction {
    const FIELD_DESTINATION = 'destination';

    /**
     * @return ExtensionDestination
     */
    public function getDestination();

    /**
     * @param ExtensionDestination $destination
     * @return $this
     */
    public function setDestination(ExtensionDestination $destination);

}
