<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ExtensionSetAdditionalContextAction extends ExtensionUpdateAction
{
    public const FIELD_ADDITIONAL_CONTEXT = 'additionalContext';

    /**
     * <p>New value to set.</p>
     *

     * @return null|ExtensionAdditionalContextDraft
     */
    public function getAdditionalContext();

    /**
     * @param ?ExtensionAdditionalContextDraft $additionalContext
     */
    public function setAdditionalContext(?ExtensionAdditionalContextDraft $additionalContext): void;
}
