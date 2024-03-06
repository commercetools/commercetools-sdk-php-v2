<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductTailoring;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductTailoringSetMetaTitleAction extends ProductTailoringUpdateAction
{
    public const FIELD_META_TITLE = 'metaTitle';
    public const FIELD_STAGED = 'staged';

    /**
     * <p>Value to set. If empty, any existing value will be removed.</p>
     *

     * @return null|LocalizedString
     */
    public function getMetaTitle();

    /**
     * <p>If <code>true</code>, only the staged <code>metaTitle</code> is updated. If <code>false</code>, both the current and staged <code>metaTitle</code> are updated.</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * @param ?LocalizedString $metaTitle
     */
    public function setMetaTitle(?LocalizedString $metaTitle): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;
}
