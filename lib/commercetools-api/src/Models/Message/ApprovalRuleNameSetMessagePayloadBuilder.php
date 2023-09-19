<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ApprovalRuleNameSetMessagePayload>
 */
final class ApprovalRuleNameSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $name;

    /**

     * @var ?string
     */
    private $oldName;

    /**
     * <p>Name of the <a href="ctp:api:type:ApprovalRule">ApprovalRule</a> after the <a href="ctp:api:type:ApprovalRuleSetNameAction">Set Name</a> update action.</p>
     *

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p>Name of the <a href="ctp:api:type:ApprovalRule">ApprovalRule</a> before the <a href="ctp:api:type:ApprovalRuleSetNameAction">Set Name</a> update action.</p>
     *

     * @return null|string
     */
    public function getOldName()
    {
        return $this->oldName;
    }

    /**
     * @param ?string $name
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param ?string $oldName
     * @return $this
     */
    public function withOldName(?string $oldName)
    {
        $this->oldName = $oldName;

        return $this;
    }


    public function build(): ApprovalRuleNameSetMessagePayload
    {
        return new ApprovalRuleNameSetMessagePayloadModel(
            $this->name,
            $this->oldName
        );
    }

    public static function of(): ApprovalRuleNameSetMessagePayloadBuilder
    {
        return new self();
    }
}
