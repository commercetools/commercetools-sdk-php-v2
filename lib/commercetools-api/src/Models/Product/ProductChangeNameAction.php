<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Common\LocalizedString;

interface ProductChangeNameAction extends ProductUpdateAction
{
    const FIELD_NAME = 'name';
    const FIELD_STAGED = 'staged';

    /**
     * @return null|LocalizedString
     */
    public function getName();

    /**
     * @return null|bool
     */
    public function getStaged();

    public function setName(?LocalizedString $name): void;

    public function setStaged(?bool $staged): void;
}
