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
final class ApprovalRulePredicateSetMessagePayloadModel extends JsonObjectModel implements ApprovalRulePredicateSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'ApprovalRulePredicateSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $predicate;

    /**
     *
     * @var ?string
     */
    protected $oldPredicate;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $predicate = null,
        ?string $oldPredicate = null,
        ?string $type = null
    ) {
        $this->predicate = $predicate;
        $this->oldPredicate = $oldPredicate;
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
     * <p>Name of the <a href="ctp:api:type:ApprovalRule">ApprovalRule</a> after the <a href="ctp:api:type:ApprovalRuleSetPredicateAction">Set Predicate</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getPredicate()
    {
        if (is_null($this->predicate)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PREDICATE);
            if (is_null($data)) {
                return null;
            }
            $this->predicate = (string) $data;
        }

        return $this->predicate;
    }

    /**
     * <p>Name of the <a href="ctp:api:type:ApprovalRule">ApprovalRule</a> before the <a href="ctp:api:type:ApprovalRuleSetPredicateAction">Set Predicate</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getOldPredicate()
    {
        if (is_null($this->oldPredicate)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_OLD_PREDICATE);
            if (is_null($data)) {
                return null;
            }
            $this->oldPredicate = (string) $data;
        }

        return $this->oldPredicate;
    }


    /**
     * @param ?string $predicate
     */
    public function setPredicate(?string $predicate): void
    {
        $this->predicate = $predicate;
    }

    /**
     * @param ?string $oldPredicate
     */
    public function setOldPredicate(?string $oldPredicate): void
    {
        $this->oldPredicate = $oldPredicate;
    }
}
