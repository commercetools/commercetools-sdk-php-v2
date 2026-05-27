<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ExtensionAdditionalContextDraftModel extends JsonObjectModel implements ExtensionAdditionalContextDraft
{
    /**
     *
     * @var ?bool
     */
    protected $includeOldResource;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?bool $includeOldResource = null
    ) {
        $this->includeOldResource = $includeOldResource;
    }

    /**
     * <p>Set to <code>true</code>, if the payload sent to the API Extension should include an <a href="ctp:api:type:ExtensionInput"><code>oldResource</code></a> field with the state of the resource before the update.
     * This only applies to <code>Update</code> actions. For <code>Create</code> actions, <code>oldResource</code> is not included.</p>
     *
     *
     * @return null|bool
     */
    public function getIncludeOldResource()
    {
        if (is_null($this->includeOldResource)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_INCLUDE_OLD_RESOURCE);
            if (is_null($data)) {
                return null;
            }
            $this->includeOldResource = (bool) $data;
        }

        return $this->includeOldResource;
    }


    /**
     * @param ?bool $includeOldResource
     */
    public function setIncludeOldResource(?bool $includeOldResource): void
    {
        $this->includeOldResource = $includeOldResource;
    }
}
