<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProjectChangeCartsConfigurationAction extends ProjectUpdateAction
{
    public const FIELD_CARTS_CONFIGURATION = 'cartsConfiguration';

    /**
     * <p>Configuration for the <a href="/../api/projects/carts">Carts</a> feature.</p>
     *
     * @return null|CartsConfiguration
     */
    public function getCartsConfiguration();

    /**
     * @param ?CartsConfiguration $cartsConfiguration
     */
    public function setCartsConfiguration(?CartsConfiguration $cartsConfiguration): void;
}
