<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Api\Models\Common\LocalizedString;

interface StoreSetNameAction extends StoreUpdateAction
{
    const FIELD_NAME = 'name';

    /**
     * <p>The updated name of the store</p>.
     *
     * @return null|LocalizedString
     */
    public function getName();

    public function setName(?LocalizedString $name): void;
}
