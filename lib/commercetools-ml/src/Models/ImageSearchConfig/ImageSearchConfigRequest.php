<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\ImageSearchConfig;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ImageSearchConfigRequest extends JsonObject
{
    public const FIELD_ACTIONS = 'actions';

    /**
     * <p>The list of update actions to be performed on the project.</p>
     *
     * @return null|ImageSearchConfigUpdateActionCollection
     */
    public function getActions();

    /**
     * @param ?ImageSearchConfigUpdateActionCollection $actions
     */
    public function setActions(?ImageSearchConfigUpdateActionCollection $actions): void;
}
