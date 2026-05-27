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
final class ExtensionSetAdditionalContextActionModel extends JsonObjectModel implements ExtensionSetAdditionalContextAction
{
    public const DISCRIMINATOR_VALUE = 'setAdditionalContext';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?ExtensionAdditionalContextDraft
     */
    protected $additionalContext;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ExtensionAdditionalContextDraft $additionalContext = null,
        ?string $action = null
    ) {
        $this->additionalContext = $additionalContext;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>New value to set.</p>
     *
     *
     * @return null|ExtensionAdditionalContextDraft
     */
    public function getAdditionalContext()
    {
        if (is_null($this->additionalContext)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ADDITIONAL_CONTEXT);
            if (is_null($data)) {
                return null;
            }

            $this->additionalContext = ExtensionAdditionalContextDraftModel::of($data);
        }

        return $this->additionalContext;
    }


    /**
     * @param ?ExtensionAdditionalContextDraft $additionalContext
     */
    public function setAdditionalContext(?ExtensionAdditionalContextDraft $additionalContext): void
    {
        $this->additionalContext = $additionalContext;
    }
}
