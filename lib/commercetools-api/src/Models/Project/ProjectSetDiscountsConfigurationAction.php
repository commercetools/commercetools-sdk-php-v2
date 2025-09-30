<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProjectSetDiscountsConfigurationAction extends ProjectUpdateAction
{
    public const FIELD_DISCOUNTS_CONFIGURATION = 'discountsConfiguration';

    /**
     * <p>Configuration for the behavior of Cart and Product Discounts in the Project.</p>
     *

     * @return null|DiscountsConfiguration
     */
    public function getDiscountsConfiguration();

    /**
     * @param ?DiscountsConfiguration $discountsConfiguration
     */
    public function setDiscountsConfiguration(?DiscountsConfiguration $discountsConfiguration): void;
}
