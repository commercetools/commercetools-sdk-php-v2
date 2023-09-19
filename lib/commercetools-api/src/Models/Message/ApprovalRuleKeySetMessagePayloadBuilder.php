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
 * @implements Builder<ApprovalRuleKeySetMessagePayload>
 */
final class ApprovalRuleKeySetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

    /**

     * @var ?string
     */
    private $oldKey;

    /**
     * <p>Description of the <a href="ctp:api:type:ApprovalRule">ApprovalRule</a> after the <a href="ctp:api:type:ApprovalRuleSetKeyAction">Set Key</a> update action.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Description of the <a href="ctp:api:type:ApprovalRule">ApprovalRule</a> before the <a href="ctp:api:type:ApprovalRuleSetKeyAction">Set Key</a> update action.</p>
     *

     * @return null|string
     */
    public function getOldKey()
    {
        return $this->oldKey;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?string $oldKey
     * @return $this
     */
    public function withOldKey(?string $oldKey)
    {
        $this->oldKey = $oldKey;

        return $this;
    }


    public function build(): ApprovalRuleKeySetMessagePayload
    {
        return new ApprovalRuleKeySetMessagePayloadModel(
            $this->key,
            $this->oldKey
        );
    }

    public static function of(): ApprovalRuleKeySetMessagePayloadBuilder
    {
        return new self();
    }
}
