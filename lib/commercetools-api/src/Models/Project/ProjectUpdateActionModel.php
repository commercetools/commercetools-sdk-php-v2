<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProjectUpdateActionModel extends JsonObjectModel implements ProjectUpdateAction
{
    public const DISCRIMINATOR_VALUE = '';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     * @psalm-var array<string, class-string<ProjectUpdateAction> >
     *
     */
    private static $discriminatorClasses = [
       'changeCartsConfiguration' => ProjectChangeCartsConfigurationActionModel::class,
       'changeCountries' => ProjectChangeCountriesActionModel::class,
       'changeCountryTaxRateFallbackEnabled' => ProjectChangeCountryTaxRateFallbackEnabledActionModel::class,
       'changeCurrencies' => ProjectChangeCurrenciesActionModel::class,
       'changeCustomerSearchStatus' => ProjectChangeCustomerSearchStatusActionModel::class,
       'changeLanguages' => ProjectChangeLanguagesActionModel::class,
       'changeMessagesConfiguration' => ProjectChangeMessagesConfigurationActionModel::class,
       'changeMyBusinessUnitStatusOnCreation' => ProjectChangeBusinessUnitStatusOnCreationActionModel::class,
       'changeName' => ProjectChangeNameActionModel::class,
       'changeOrderSearchStatus' => ProjectChangeOrderSearchStatusActionModel::class,
       'changeProductSearchIndexingEnabled' => ProjectChangeProductSearchIndexingEnabledActionModel::class,
       'changeShoppingListsConfiguration' => ProjectChangeShoppingListsConfigurationActionModel::class,
       'setExternalOAuth' => ProjectSetExternalOAuthActionModel::class,
       'setMyBusinessUnitAssociateRoleOnCreation' => ProjectSetBusinessUnitAssociateRoleOnCreationActionModel::class,
       'setShippingRateInputType' => ProjectSetShippingRateInputTypeActionModel::class,
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
     * @psalm-return class-string<ProjectUpdateAction>
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = ProjectUpdateAction::DISCRIMINATOR_FIELD;
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

        /** @psalm-var class-string<ProjectUpdateAction> */
        $type = ProjectUpdateActionModel::class;
        return $type;
    }
}
