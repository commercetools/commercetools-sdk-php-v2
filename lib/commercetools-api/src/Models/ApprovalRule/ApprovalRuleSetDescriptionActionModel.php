<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApprovalRule;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ApprovalRuleSetDescriptionActionModel extends JsonObjectModel implements ApprovalRuleSetDescriptionAction
{
    public const DISCRIMINATOR_VALUE = 'setDescription';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $description;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $description = null,
        ?string $action = null
    ) {
        $this->description = $description;
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
     * <p>New description to set for the Approval Rule.</p>
     *
     *
     * @return null|string
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }
            $this->description = (string) $data;
        }

        return $this->description;
    }


    /**
     * @param ?string $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }
}
