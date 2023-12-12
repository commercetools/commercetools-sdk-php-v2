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
final class ApprovalRuleNameSetMessagePayloadModel extends JsonObjectModel implements ApprovalRuleNameSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'ApprovalRuleNameSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $name;

    /**
     *
     * @var ?string
     */
    protected $oldName;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $name = null,
        ?string $oldName = null,
        ?string $type = null
    ) {
        $this->name = $name;
        $this->oldName = $oldName;
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
     * <p>Name of the <a href="ctp:api:type:ApprovalRule">ApprovalRule</a> after the <a href="ctp:api:type:ApprovalRuleSetNameAction">Set Name</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * <p>Name of the <a href="ctp:api:type:ApprovalRule">ApprovalRule</a> before the <a href="ctp:api:type:ApprovalRuleSetNameAction">Set Name</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getOldName()
    {
        if (is_null($this->oldName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_OLD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->oldName = (string) $data;
        }

        return $this->oldName;
    }


    /**
     * @param ?string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?string $oldName
     */
    public function setOldName(?string $oldName): void
    {
        $this->oldName = $oldName;
    }
}
