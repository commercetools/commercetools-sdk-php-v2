<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StandalonePrice;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StandalonePriceUpdateActionModel extends JsonObjectModel implements StandalonePriceUpdateAction
{
    public const DISCRIMINATOR_VALUE = '';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     * @psalm-var array<string, class-string<StandalonePriceUpdateAction> >
     *
     */
    private static $discriminatorClasses = [
       'applyStagedChanges' => StandalonePriceApplyStagedChangesActionModel::class,
       'changeActive' => StandalonePriceChangeActiveActionModel::class,
       'changeValue' => StandalonePriceChangeValueActionModel::class,
       'setCustomField' => StandalonePriceSetCustomFieldActionModel::class,
       'setCustomType' => StandalonePriceSetCustomTypeActionModel::class,
       'setDiscountedPrice' => StandalonePriceSetDiscountedPriceActionModel::class,
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
     * @psalm-return class-string<StandalonePriceUpdateAction>
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = StandalonePriceUpdateAction::DISCRIMINATOR_FIELD;
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

        /** @psalm-var class-string<StandalonePriceUpdateAction> */
        $type = StandalonePriceUpdateActionModel::class;
        return $type;
    }
}
