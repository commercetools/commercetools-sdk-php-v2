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
final class ApprovalRuleSetPredicateActionModel extends JsonObjectModel implements ApprovalRuleSetPredicateAction
{
    public const DISCRIMINATOR_VALUE = 'setPredicate';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $predicate;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $predicate = null,
        ?string $action = null
    ) {
        $this->predicate = $predicate;
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
     * <p>A valid <a href="/../api/projects/predicates#order-predicates">Order Predicate</a> to set for the Approval Rule.</p>
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
     * @param ?string $predicate
     */
    public function setPredicate(?string $predicate): void
    {
        $this->predicate = $predicate;
    }
}
