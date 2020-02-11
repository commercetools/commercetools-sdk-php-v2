<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Common\LocalizedString;

interface ProductSetMetaTitleAction extends ProductUpdateAction
{

    public const FIELD_META_TITLE = 'metaTitle';
    public const FIELD_STAGED = 'staged';

    /**
     * @return null|LocalizedString
     */
    public function getMetaTitle();

    /**
     * @return null|bool
     */
    public function getStaged();

    public function setMetaTitle(?LocalizedString $metaTitle): void;

    public function setStaged(?bool $staged): void;
}
