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
final class ApprovalRuleUpdateActionModel extends JsonObjectModel implements ApprovalRuleUpdateAction
{
    public const DISCRIMINATOR_VALUE = '';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     * @psalm-var array<string, class-string<ApprovalRuleUpdateAction> >
     *
     */
    private static $discriminatorClasses = [
       'setApprovers' => ApprovalRuleSetApproversActionModel::class,
       'setCustomField' => ApprovalRuleSetCustomFieldActionModel::class,
       'setCustomType' => ApprovalRuleSetCustomTypeActionModel::class,
       'setDescription' => ApprovalRuleSetDescriptionActionModel::class,
       'setKey' => ApprovalRuleSetKeyActionModel::class,
       'setName' => ApprovalRuleSetNameActionModel::class,
       'setPredicate' => ApprovalRuleSetPredicateActionModel::class,
       'setRequesters' => ApprovalRuleSetRequestersActionModel::class,
       'setStatus' => ApprovalRuleSetStatusActionModel::class,
    ];

    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $action = null
    ) {
        $this->action = $action;
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
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<ApprovalRuleUpdateAction>
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = ApprovalRuleUpdateAction::DISCRIMINATOR_FIELD;
        if (is_object($value) && isset($value->$fieldName)) {
            /** @psalm-var string $discriminatorValue */
            $discriminatorValue = $value->$fieldName;
            if (isset(self::$discriminatorClasses[$discriminatorValue])) {
                return self::$discriminatorClasses[$discriminatorValue];
            }
        }
        if (is_array($value) && isset($value[$fieldName])) {
            /** @psalm-var string $discriminatorValue */
            $discriminatorValue = $value[$fieldName];
            if (isset(self::$discriminatorClasses[$discriminatorValue])) {
                return self::$discriminatorClasses[$discriminatorValue];
            }
        }

        /** @psalm-var class-string<ApprovalRuleUpdateAction> */
        $type = ApprovalRuleUpdateActionModel::class;
        return $type;
    }
}
