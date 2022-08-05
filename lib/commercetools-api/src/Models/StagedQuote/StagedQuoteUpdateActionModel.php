<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StagedQuote;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StagedQuoteUpdateActionModel extends JsonObjectModel implements StagedQuoteUpdateAction
{
    public const DISCRIMINATOR_VALUE = '';
    /**

     * @var ?string
     */
    protected $action;

    /**
     * @psalm-var array<string, class-string<StagedQuoteUpdateAction> >
     *
     */
    private static $discriminatorClasses = [
       'changeStagedQuoteState' => StagedQuoteChangeStagedQuoteStateActionModel::class,
       'setCustomField' => StagedQuoteSetCustomFieldActionModel::class,
       'setCustomType' => StagedQuoteSetCustomTypeActionModel::class,
       'setSellerComment' => StagedQuoteSetSellerCommentActionModel::class,
       'setValidTo' => StagedQuoteSetValidToActionModel::class,
       'transitionState' => StagedQuoteTransitionStateActionModel::class,
    ];

    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
    ) {
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**

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
     * @psalm-return class-string<StagedQuoteUpdateAction>
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = StagedQuoteUpdateAction::DISCRIMINATOR_FIELD;
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

        /** @psalm-var class-string<StagedQuoteUpdateAction> */
        $type = StagedQuoteUpdateActionModel::class;
        return $type;
    }
}
