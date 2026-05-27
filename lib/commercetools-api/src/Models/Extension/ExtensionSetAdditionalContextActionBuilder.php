<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ExtensionSetAdditionalContextAction>
 */
final class ExtensionSetAdditionalContextActionBuilder implements Builder
{
    /**

     * @var null|ExtensionAdditionalContextDraft|ExtensionAdditionalContextDraftBuilder
     */
    private $additionalContext;

    /**
     * <p>New value to set.</p>
     *

     * @return null|ExtensionAdditionalContextDraft
     */
    public function getAdditionalContext()
    {
        return $this->additionalContext instanceof ExtensionAdditionalContextDraftBuilder ? $this->additionalContext->build() : $this->additionalContext;
    }

    /**
     * @param ?ExtensionAdditionalContextDraft $additionalContext
     * @return $this
     */
    public function withAdditionalContext(?ExtensionAdditionalContextDraft $additionalContext)
    {
        $this->additionalContext = $additionalContext;

        return $this;
    }

    /**
     * @deprecated use withAdditionalContext() instead
     * @return $this
     */
    public function withAdditionalContextBuilder(?ExtensionAdditionalContextDraftBuilder $additionalContext)
    {
        $this->additionalContext = $additionalContext;

        return $this;
    }

    public function build(): ExtensionSetAdditionalContextAction
    {
        return new ExtensionSetAdditionalContextActionModel(
            $this->additionalContext instanceof ExtensionAdditionalContextDraftBuilder ? $this->additionalContext->build() : $this->additionalContext
        );
    }

    public static function of(): ExtensionSetAdditionalContextActionBuilder
    {
        return new self();
    }
}
