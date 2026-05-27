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
 * @implements Builder<ExtensionAdditionalContextDraft>
 */
final class ExtensionAdditionalContextDraftBuilder implements Builder
{
    /**

     * @var ?bool
     */
    private $includeOldResource;

    /**
     * <p>Set to <code>true</code>, if the payload sent to the API Extension should include an <a href="ctp:api:type:ExtensionInput"><code>oldResource</code></a> field with the state of the resource before the update.
     * This only applies to <code>Update</code> actions. For <code>Create</code> actions, <code>oldResource</code> is not included.</p>
     *

     * @return null|bool
     */
    public function getIncludeOldResource()
    {
        return $this->includeOldResource;
    }

    /**
     * @param ?bool $includeOldResource
     * @return $this
     */
    public function withIncludeOldResource(?bool $includeOldResource)
    {
        $this->includeOldResource = $includeOldResource;

        return $this;
    }


    public function build(): ExtensionAdditionalContextDraft
    {
        return new ExtensionAdditionalContextDraftModel(
            $this->includeOldResource
        );
    }

    public static function of(): ExtensionAdditionalContextDraftBuilder
    {
        return new self();
    }
}
