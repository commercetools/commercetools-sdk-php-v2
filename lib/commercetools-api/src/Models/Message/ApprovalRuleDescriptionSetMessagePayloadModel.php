<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ApprovalRuleDescriptionSetMessagePayloadModel extends JsonObjectModel implements ApprovalRuleDescriptionSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'ApprovalRuleDescriptionSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $description;

    /**
     *
     * @var ?string
     */
    protected $oldDescription;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $description = null,
        ?string $oldDescription = null,
        ?string $type = null
    ) {
        $this->description = $description;
        $this->oldDescription = $oldDescription;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>Description of the <a href="ctp:api:type:ApprovalRule">ApprovalRule</a> after the <a href="ctp:api:type:ApprovalRuleSetDescriptionAction">Set Description</a> update action.</p>
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
     * <p>Description of the <a href="ctp:api:type:ApprovalRule">ApprovalRule</a> before the <a href="ctp:api:type:ApprovalRuleSetDescriptionAction">Set Description</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getOldDescription()
    {
        if (is_null($this->oldDescription)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_OLD_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }
            $this->oldDescription = (string) $data;
        }

        return $this->oldDescription;
    }


    /**
     * @param ?string $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * @param ?string $oldDescription
     */
    public function setOldDescription(?string $oldDescription): void
    {
        $this->oldDescription = $oldDescription;
    }
}
